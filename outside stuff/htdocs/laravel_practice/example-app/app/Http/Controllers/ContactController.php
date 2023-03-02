<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('resources/views/contact');
    }
}
