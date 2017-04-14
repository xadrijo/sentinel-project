<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegistrationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        return view('authentication.register');
    }

    public function store(Request $request)
    {
        $user = Sentinel::registerAndActivate($request->all());
        $role = Sentinel::findRoleBySlug('manager');
        $role->users()->attach($user);
        return redirect('/');
    }
}
