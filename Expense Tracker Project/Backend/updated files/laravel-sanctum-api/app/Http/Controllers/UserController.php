<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show signup form
    public function signup()
    {
        return view('users.signup');
    }

    //create new user
//    public function store(Request $request)
//    {
//        $formFields = $request->validate()
//    }

    //Show login form
    public function login()
    {
        return view('users.login');
    }
}
