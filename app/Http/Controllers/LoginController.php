<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(){
        return view('loginPage');
    }
    function forgotpassword(){
        return view('forgot');
    }

    function loginProses(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ],[
            'username.required'=>'Username Wajib Diisi',
            'password.required'=>'Password Wajib Diisi'
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
           if(Auth::user()->role == 'fasilitator'){
            return redirect('/landingFasil');
           }elseif (Auth::user()->role == 'peserta'){
            return redirect('/landingPeserta');
           }elseif (Auth::user()->role == 'superuser'){
            return redirect('/landingSuper');
           }
        }else{
            return redirect('')->withErrors('Username dan Password yang dimasukan tidak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
