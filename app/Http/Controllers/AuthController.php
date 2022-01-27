<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    ////login
    public function login(){
        return view('logins.login');
    }

    //berhasil login
    public function submitLogin(Request $r){
        $credentials = ['email' => $r->email, 'password' => $r->pass];
        // return $credentials;

        if(Auth::attempt($credentials)){
            if(Auth::user()->level=="penulis"){
                return [
                    'level'=> Auth::user()->level,
                    'page'=> '/semua-artikel'
                ];
            }

            if(Auth::user()->level=="pembaca"){
                return [
                    'level'=> Auth::user()->level,
                    'page'=> '/'
                ];
            }
        }

        return "Masuk controller login, tapi gagal login";
    }

    //berhasil register
    public function submitRegister(Request $r){

        User::create([
            'name' => $r->name,
            'email' => $r->email,
            'password' => Hash::make($r->pass),
            'level' => $r->level
        ]);

        return "Berhasil";
    }

    public function forgotPassword(){
        return view('logins.forgot-password');
    }

    //berhasil Forgot
    public function submitForgot(Request $r){
        return "Berhasil";
    }

    public function recoverPassword(){
        return view('logins.recover-password');
    }

    //berhasil Recover
    public function submitRecover(Request $r){
        return "Berhasil";
    }

    //logout
    public function logout(){
        Auth::logout();

        return redirect('/login');
    }

    //google untuk login
    public function redirectToGoogle(){
        return Socialite::driver('google')->stateless()->redirect();
    }

    //google
    public function handleGoogleCallback(){
        $userg = Socialite::driver('google')->stateless()->user();

        $user = User::where('google_id', $userg->id)->first();

        if(!empty($user)) {
            $credentials = [
                'email' => $user->email,
                'password' => '12345678'
            ];

            if(Auth::attempt($credentials)) {
                return redirect('/semua-artikel');
            }
        } else {
            $newUser = User::create([
                "name" => $userg->name,
                "email" => $userg->email,
                "google_id" => $userg->id,
                "level" => 'penulis',
                "password" => Hash::make('12345678'),
            ]);

            $credentials = [
                'email' => $newUser->email,
                'password' => Hash::make('12345678'),
            ];

            if(Auth::attempt($credentials)) {
                return redirect('/semua-artikel');
            }
        }
    }
}
