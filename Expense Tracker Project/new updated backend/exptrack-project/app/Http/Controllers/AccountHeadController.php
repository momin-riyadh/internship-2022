<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountHeadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showList()
    {
        $account_heads = DB::select('select * from account_heads');
        return view('account_heads', ['account_heads'=>$account_heads]);
    }

    public function create(array $data)
    {
         return AccountHead::create([
             'title' => $data['title'],
             'head_code' => $data['head_code']
         ]);
    }

    public function createacchead()
    {
        return view('create_account_head');
    }

}
