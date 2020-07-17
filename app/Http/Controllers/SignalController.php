<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Signal ;

class SignalController extends Controller
{

    public function createsignal(Request $request){

        DB::table('signal')->insert(
            [
                'buy_sell' => $request->buy_sell,
                'buy_sell_number'  => $request->buy_sell_number,
        
                'currency_name'  => $request->currency_name,
                'take_profile'  => $request->take_profile,
                'stop_lost'  => $request->stop_lost,
                'date_time'  => $request->date_time,
                'status'  => $request->status,
                'description'  => $request->desc_open,
                'view_premium'  => 0,
                'result'  => $request->result,
                'description_close'  => $request->desc_close,
            ]
        );

        // $signal  = \App\Signal::create($request->all());
        // return redirect('/content')->with('success', 'Success add new data');

        return $this->push_notif($request);

    }

    public function push_notif($signal){

        // dd($signal->buy_sell);

        $content      = array(
            "en" => $signal->buy_sell.' - '.$signal->buy_sell_number
        );
        $headings      = array(
            "en" => $signal->currency_name
        );
        $hashes_array = array();
        array_push($hashes_array, array(
            "id" => "view-button",
            "text" => "View Signal",
            "icon" => "https://reactnative.dev/img/header_logo.svg",
            "url" => url()->previous(),
        ));
        $fields = array(
            'app_id' => "458c3dda-701a-4ec2-9905-ceb1de883209",
            'included_segments' => array(
                'All'
            ),
            'data' => array(
                "foo" => "bar"
            ),
            'contents' => $content,
            'headings' => $headings,
            'web_buttons' => $hashes_array
        );
        
        $fields = json_encode($fields);
     
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic ZDdkOTI5MGQtN2RmOC00YjA4LWIwNTUtY2E5MzE3NTg3YzIz'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        
        $response = curl_exec($ch);
        curl_close($ch);
        

        return redirect('/content')->with('success', 'Success add new data');
    }

    public function datasignal(){

        $data = array('data' => DB::table('signal')->orderBy('date_time', 'desc')->get());
        return $data ;

    }

    public function signalmember(){

        $currency_member =  DB::table('signal')->orderBy('id', 'desc')->groupBy('currency_name')->get();

        $data = DB::table('signal')->orderBy('id')
        ->take(10)
        ->get();
        
        return view('front.signal', ['signal_member' => $data, 'currency_member' => $currency_member ]);
    }

    public function signalcurrency($currency){

        if ($currency !== 'all') {
            return DB::table('signal')->where('currency_name', $currency)->orderBy('id', 'desc')->take(10)->get();
            # code...
        } else {
            return DB::table('signal')->orderBy('id', 'desc')->take(10)->get();

        }
        
    }

    public function findonesignal($id){
        
        // $data = array('data' => \App\Signal::all());
        if(memberRole() === '1'){
            return abort(404);
        } else {
            if(auth()->user()->role == 1 ){
                
                if(memberRole() == 2){

                    DB::table('signal')
                    ->where('id', $id)
                    ->update(['view_premium' => DB::raw('view_premium + 1')]);
    
                } 
                $datasignal = DB::table('signal')->where('id', $id)->get();
                // dd($datasignal[0]->currency_name);
                
                $data = DB::table('member_request')
                ->where('user_id', auth()->user()->id)
                ->where('currency_request', $datasignal[0]->currency_name )
                ->first();
                // dd($data);

                if(empty($data)){
                    return 0 ;
                } else {

                    if($data->currency_open == 0){
                        
                        return $data->currency_open ;
                    } else {
                        
                        return DB::table('signal')->where('id', $id)->get();
                    }
                    
                }

                    // return $data->currency_open ;
                    // return DB::table('signal')->where('id', $id)->get();
                
                
            } else {
                
                return DB::table('signal')->where('id', $id)->get();
            }
        }
    }

    public function findrequest($id){
        
        return DB::table('member_request')->where('id', $id)->get();
    }
    
    public function signalrequest(){
        
        $data = DB::table('member_request')
            ->join('users', 'users.id', '=', 'member_request.user_id')
            ->select('member_request.*', 'users.email')
            ->get();

        return array('data' => $data);
    }

    public function requestsignalmember($currency){
        
        $data = DB::table('member_request')
        ->where('user_id', auth()->user()->id)
        ->where('currency_request', $currency )
        ->get();

        return $data ;
    }

    public function updatecurrencyopen(Request $request){

        $data = DB::table('member_request')
        ->where('id', $request->id)
        ->update(['currency_open' => $request->currency_open]);

        return $data;
    }

    public function deletesignal($id){
        $delete = DB::table('signal')->where('id', $id)->delete();

        if($delete) {
            // returns true
            return redirect('/content')->with('success', ' Delete data');
        } else {
            // returns false
            return redirect('/content')->with('error', 'Failed add new data');
        }

        return redirect('/content')->with('warning', 'Response not found');
    }

    public function editsignal($id){

        $signal = DB::table('signal')->where('id', $id)->get();
        
        return view('front.signal_edit', ['signal_edit' => $signal]);
    }

    public function updatesignal(Request $request, $id){
    
        // return ;
        unset($request['_token']);
        $signal = DB::table('signal')->where('id', $id)->update($request->all());

        return redirect('/editsignal'.'/'.$id)->with('success', 'Update signal ');
    }

    public function postsignaldaterange(Request $request){

        // $signal = DB::table('signal')->where('id', $id)->get(); 
        // $signal->update($request->all());
        $data = DB::table('signal')
                    ->whereBetween('date_time', [$request->dateStart, $request->dateEnd])->where('status', 2)->orderBy('date_time', 'desc')->get();

        return $data ;
    }

    public function filterportfoliobycurrency(Request $request){

        $data = DB::table('signal')
        ->whereBetween('date_time', [$request->datestart, $request->dateend])
        ->where('status', 2)
        ->whereIn('currency_name', $request->currency)
        ->orderBy('date_time', 'desc')
        ->get();

        // for ($i=0; $i < count($request->curency); $i++) { 
        //     # code...
            
        //     $data = DB::table('signal')->whereBetween('date_time', [$request->datestart, $request->dateend])
        //     ->where('currency_name', $request->curency[$i])
        //     ->where('status', 2)
        //     ->orderBy('date_time', 'desc')->get();
        // }

        return $data;
    }


    public function uploadimagessignal(Request $request){
        
        if ($request->hasFile('upload')) {
            $file = $request->file('upload'); 
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            
            $fileName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('images/editor/'), $fileName); 


            $ckeditor = $request->input('CKEditorFuncNum');
            $url = asset('images/editor/' . $fileName); 
            $msg = 'Image uploaded successfully'; 

            $response = "<script>window.parent.CKEDITOR.tools.callFunction($ckeditor, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8'); 
            return $response;
        }
    }




}