<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    function register()
    {
        return view('regist');
    }
    function registerProses(Request $request)
    {
        return 123;
    }
}
