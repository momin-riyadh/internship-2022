<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\phone;
use App\user;

class phoneController extends Controller
{
   

    public function store(Request $req)
    {
       
       $phone = new phone;
       $email = session('data')['email'];

       $user = user::all()->where('email', $email);
       return view('settings',compact('user'));
    }

    public function insert(Request $req){
        $phone = new phone;
        $phone = array(
               
            'user_id'=>$req->user_id,
        
            'phone'=>$req->phone,
         );

        $result = phone::create($phone);
    }
}
