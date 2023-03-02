<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacher;

class newLoginController extends Controller
{
    //
    function index(Request $req){
      
      $req->session()->put('data',$req->input());
      return redirect('userprofile');
    }
}
