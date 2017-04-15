<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends CommonController
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
