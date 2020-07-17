<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Socialite;

class AuthController extends Controller
{

    public function redirectToProvider(){
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(){
        // ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))->user();
        // $user = Socialite::driver('google')->user();
        // dd($user);
        
        try {
            $user = Socialite::driver('google')->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error'. 'Social media Sync Error');
        }
        
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
            return redirect()->to('/');
        } else {
            // create a new user
            
            $newUser                    = new User;
            $newUser->name              = $user->name;
            $newUser->email             = $user->email;
            $newUser->password          = bcrypt($user->id);
            $newUser->role              = 1;
            $newUser->save();

            DB::table('members')->insert(
                [
                    'user_id' => $newUser->id,
                    'member_role' => 1,
                    'member_image' => $user->avatar_original,
                    'first_name' => $user->name,
                ]
            );

            auth()->login($newUser, true);
            // return view('auth.register', ['user_social' => $newUser]);
            
            return redirect()->to('/');
        }

        // $user->token;
    }

    public function login(){
        
        if( Auth::check() ){
            if(Auth::user()->role == 1){

                return redirect('/signal');

            } else if(Auth::user()->role == 2) {

                return redirect('/dashboard_admin');

            } else {
                
                return redirect('/logout');
            }
        }
        return view('front.auth.login');
    
    }

    public function register(){

        if( Auth::check() ){
            return redirect('/call');
        }
        return view('front.auth.register');
        
    }

    public function login_post(Request $request){
        // dd($request->all());

        if (Auth::attempt($request->only('email', 'password'))) {
            # code...

            if(Auth::user()->role == 2){

                return redirect('/dashboard_admin');

            } else if(Auth::user()->role == 1){

                return redirect('/signal');

            } else {
                
                return redirect('/logout');
            }
        }

        return redirect('/login')->with('warning', 'Email and Password is wrong');
    }

    public function registerpost(Request $request){

        $usercheck = User::where('email', $request->email)->count();

        if($usercheck > 0 ){
            return redirect('login')->with('warning', 'Your account is already registered, Please login ');
        }
        
        $user = new User();
        $user->name  = $request->username;
        $user->email  = $request->email;

        $user->password  = bcrypt($request->password);
        $user->role  = 1;

        $user->save();
        
        DB::table('members')->insert(
            [
                'user_id' => $user->id,
                'member_role' => 1,
                'member_image' => 'default.png',
                'first_name' => $user->name,
            ]
        );

        // \Mail::raw('Register Account Signals '.$user->name, function ($message) use ($user) {

        //     $message->to($user->email, $user->name);

        //     $message->subject('Register Account Signals Account');

        // });
        return redirect('login')->with('success', 'Register Success, Please log in to enter an account');
        // dd($request->all());

        // return redirect('login');
    }


    public function logout(){
        Auth::logout();
        return redirect('/login')->with('success', 'Good login again, your data and security are out');
    }
    

}