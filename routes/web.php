<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return redirect('login');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout');
// Route::get('/register', 'AuthController@register');
Route::get('/data_signal', 'SignalController@datasignal');
// Route::get('/sig', 'SignalController@register');

Route::post('/register_post', 'AuthController@registerpost');
Route::get('/register_post', function(){
    \Mail::raw('Register account signals', function ($message) {
        // $message->from('john@johndoe.com', 'John Doe');
        // $message->sender('john@johndoe.com', 'John Doe');
        $message->to('ahedroo@gmail.com', 'John Doe');
        // $message->cc('john@johndoe.com', 'John Doe');
        // $message->bcc('john@johndoe.com', 'John Doe');
        // $message->replyTo('john@johndoe.com', 'John Doe');
        $message->subject('Daftar nih ');
        // $message->priority(3);
        // $message->attach('pathToFile');
    });
});
Route::post('/login_account', 'AuthController@login_post');
Route::post('/signalcreate', 'SignalController@createsignal');


Route::group(['middleware' => ['auth', 'CheckRole:1']], function(){

    Route::get('/findonesignal/{id}', 'SignalController@findonesignal');
    Route::get('/signalcurrency/{currency}', 'SignalController@signalcurrency');
    Route::get('/req-currency-open/{currency}', 'SignalController@requestsignalmember');

    Route::post('/postreqpremiummember', 'MemberController@postreqpremiummember');
    Route::post('/signaldaterange', 'SignalController@postsignaldaterange');
    Route::post('/member/updateprofile',  'MemberController@updateprofile');
    
    Route::get('/portofolio', function(){
        return view('front.portofolio');
    });
    
    Route::post('/getfilterportfoliobycurrency', 'SignalController@filterportfoliobycurrency');
    // JSON MEMBER
    
    Route::get('/myprofile', function(){
        return view('front.member.profile');
    });
    Route::get('/dashboard_member', 'DashboardController@dashboard_member');
    Route::get('/signal', 'SignalController@signalmember');
    Route::get('/request-premium-member', 'MemberController@requestpremiummember');
});

Route::group(['middleware' => ['auth', 'CheckRole:2']], function(){

    Route::get('/findrequest/{id}', 'SignalController@findrequest');
    Route::get('/findsignal/{id}', 'SignalController@findonesignal');
    Route::get('/request-data-signals', 'SignalController@signalrequest');
    Route::get('/allmember', 'MemberController@allmember');

    
    Route::get('/member/delete/data/{id}', 'MemberController@deletemember');

    Route::get('/member/update/data/{id}', 'MemberController@editmember');
    Route::post('/member/update/data/{id}',  'MemberController@updateprofilemember');

    Route::post('/updatecurrencyopen', 'SignalController@updatecurrencyopen');
    
    // JSON ADMIN
    
    Route::get('/dashboard_admin', 'DashboardController@dashboard_admin');
    Route::get('/content', 'IndexController@content');
    Route::get('/member', 'MemberController@memberpageadmin');
    Route::get('/editsignal/{id}', 'SignalController@editsignal');
    Route::get('/deletesignal/{id}', 'SignalController@deletesignal');


    Route::post('/updatesignal/{id}', 'SignalController@updatesignal');
    

});


Route::get('login/google', 'AuthController@redirectToProvider');
Route::get('login/google/callback', 'AuthController@handleProviderCallback');


Route::post('post/image', 'SignalController@uploadimagessignal')->name('post.image');

// // LOG FOLDER CONTROLLER 
// Route::get('/log', 'log\LogController@index');