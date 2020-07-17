<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Signal ;
use App\User ;
use App\MemberRequest ;
use Carbon\Carbon ;

class MemberController extends Controller
{
    public function memberpageadmin(){

        return view('front.member.member');

    }
    public function allmember(){
        
        $data = DB::table('members')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->select('members.*', 'users.email', 'users.name')
            ->orderBy('id', 'desc')
            ->get();

        return array('data' => $data);

    }

    public function postreqpremiummember(Request $request){
        
        $response = array();
        $currency_request= DB::table('users')->where('id',  $request->id )->first();
        $member_request = DB::table('member_request')->where('user_id',  $request->id )->where('currency_request',  $request->currency_name )->first();

        if( empty($currency_request) ){

            $response = array("messages"=> "User not registered", "status" => 0, "currency" => $request->currency_name);
    

        } else {

            if( empty($member_request) ){

                $insert_request = DB::table('member_request')->insert(
                    [
                        'user_id' => $request->id,
                        'currency_request' => $request->currency_name,
                        'create_at' => Carbon::now()->timestamp,
                        'update_at' => Carbon::now()->timestamp,

                    ]
                );
                
                $response = array("messages"=> "Request premium currency Successfully", "status" => $insert_request, "currency" => $request->currency_name);
    
            } else {
                $response = array("messages" => "You have already requested this currency ", "status" => 0, "currency" => $request->currency_name);
                
            }
        }

        return $response;

    }

    public function updateprofile(Request $request){


        if($request->hasFile('profileimage')){

            $request->file('profileimage')->move('images/upload', $request->file('profileimage')->getClientOriginalName() );
            
            DB::table('members')
            ->where('user_id', auth()->user()->id)
            ->update([

                'member_image' =>  asset('images/upload').'/'.$request->file('profileimage')->getClientOriginalName(),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'telephone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'country' => $request->country,
                'postal_code' => $request->postal_code,
                'about_me' => $request->about,
                
            ]);
            return redirect('/myprofile')->with('success', 'Update signal berhasil');

        } else {
            
            DB::table('members')
            ->where('user_id', auth()->user()->id)
            ->update([

                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'telephone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'country' => $request->country,
                'postal_code' => $request->postal_code,
                'about_me' => $request->about,
                
            ]);
            return redirect('/myprofile')->with('warning', 'Update signal berhasil');
        }

        // return $request->all();
        
        // unset($request['_token']);
       
        
        return redirect('/myprofile')->with('error', 'Update signal terganggu');
    }

    public function editmember($id){
        $data  = User::find($id);
        $users = DB::table('members')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->select('users.*', 'members.*')
            ->where('user_id', $id) 
            ->first();
        // $users = array();

        // return $users->member_image ;
        return view('front.member.member_edit', ['data' => $users]);
    }

    public function updateprofilemember(Request $request, $id){
        
        if($request->hasFile('profileimage')){

            $request->file('profileimage')->move('images/upload', $request->file('profileimage')->getClientOriginalName() );
            
            DB::table('members')
            ->where('user_id', $id)
            ->update([

                'member_image' =>  asset('images/upload').'/'.$request->file('profileimage')->getClientOriginalName(),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'telephone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'country' => $request->country,
                'postal_code' => $request->postal_code,
                'about_me' => $request->about,
                
            ]);
            return redirect('/member/update/data'.'/'.$id)->with('success', 'Update signal berhasil');

        } else {
            
            DB::table('members')
            ->where('user_id',$id)
            ->update([

                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'telephone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'country' => $request->country,
                'postal_code' => $request->postal_code,
                'about_me' => $request->about,
                
            ]);
            return redirect('/member/update/data'.'/'.$id)->with('warning', 'Update signal berhasil');
        }

        // return $request->all();
        
        // unset($request['_token']);
    
        
        return redirect('/member/update/data'.'/'.$id)->with('error', 'Update signal terganggu');
    
    }

    public function deletemember($id){

        DB::table('users')->where('id', $id)->delete();
        DB::table('members')->where('user_id', $id)->delete();

        return redirect()->back()->with('success', 'Hapus Member berhasil');
    }
}