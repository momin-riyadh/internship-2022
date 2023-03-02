<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
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
        $transactions = DB::select('select * from transactions order by `transaction_at` desc');
        return view('transactions', ['transactions'=>$transactions]);
    }

    public function addTransaction(){
        $transactions =
    }
}
