<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends CommonController
{
    public function authen()
    {
        return view('authen');
    }

    public function subpiao()
    {
        return view('subpiao');
    }
}
