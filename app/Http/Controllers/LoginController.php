<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }

    public function checkLogin(Request $request)
    {
        Sentinel::authenticate($request->all());
        return redirect('/');
    }

    public function logout()
    {
        Sentinel::logout();
        return redirect('/login');
    }
}
