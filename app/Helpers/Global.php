<?php 

use Illuminate\Support\Facades\DB;
use App\Member ;

function allMember(){
    
    $data = DB::table('members')->orderBy('id', 'desc')->get();
    
    return $data;
}

function memberEmail($id){
    
    $data = DB::table('users')->where('user_id', $id)->get();
    foreach ($data as $key => $value) {
        # code...
        $data = $value->email ;
    }
    return $data;
}

function memberRole(){
    $data = DB::table('members')->where('user_id', auth()->user()->id)->get();
    foreach ($data as $value) {
        # code...
        $data = $value->member_role ;
    }
    return $data;
}

function memberData(){
    $data = DB::table('members')->where('user_id', auth()->user()->id)->get();
    foreach ($data as $value) {
        # code...
        $data = $value ;
    }
    return $data;
}
 
function signalAll(){
    $data = DB::table('signal')->orderBy('id', 'desc')->get();
    return $data;
}
 
function signalCurrencyCount(){
    $data = DB::table('signal')
    ->select(DB::raw('count(*) as signal_count, currency_name'))
    // ->where('currency_name', '')
    ->groupBy('currency_name')
    ->orderBy('currency_name', 'asc')
    ->get();

    return $data;
}

function signalViewCount(){
    $data = DB::table('member_request')
    ->select(DB::raw('count(*) as request_count, currency_request'))
    // ->where('currency_name', '')
    ->groupBy('currency_request')
    ->orderBy('currency_request', 'asc')
    ->get();


    return $data;
}

// SELECT COUNT(Id), Country 
//   FROM Customer
//  GROUP BY Country

function signalAllcurrencyName(){
    // $d = array();
    $data = DB::table('signal')->orderBy('currency_name', 'asc')->groupBy('currency_name')->get();
    
    return $data;
}

function allSignalAvailable(){
    $data = DB::table('member_request')->where('currency_open', 1)->get();

    return $data;
}
function memberSignalAvailable(){
    $data = DB::table('member_request')->where('user_id', auth()->user()->id)->where('currency_open', 1)->get();
    return $data;
}
function allSignalRequest(){
    $data = DB::table('member_request')->where('currency_open', 0)->get();
   
    return $data;
}

function memberSignalRequest(){
    $data = DB::table('member_request')->where('user_id', auth()->user()->id)->where('currency_open', 0)->get();
   
    return $data;
}

function signalNewUpdate(){
    
    $data = DB::table('signal')->orderBy('id', 'desc')->take(5)->get();
   
    return $data;

}

function allCurrency(){
    $data = DB::table('signal')->orderBy('id', 'desc')->groupBy('currency_name')->get();
        foreach ($data as $key => $value) {
            # code...
            $data = $value->currency_number ;
        }
    return $data;
}