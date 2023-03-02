<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{
    public function index()
    {
        /*if(isset(Auth))
            return view('index');
        else
            dd("you need to login first");*/
    }


    public function createacchead()
    {
        return view('createacchead');
    }
}
