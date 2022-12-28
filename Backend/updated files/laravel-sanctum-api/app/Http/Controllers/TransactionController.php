<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class TransactionController extends Controller
{
   //Display transaction list

   public function index()
   {
        return Transaction::all();
   }

   //create and store tansaction

   public function store(Request $request)
   {
        $request->validate([
            'voucher_no' => 'required',
            'voucher_id' => 'required',
            'narration' => 'required',
            'debit' => 'required',
            'credit' => 'required'
        ]);

        return Transaction::create($request->all());
   }

   //display specific transaction

   public function show($id)
   {
        return Transaction::find($id);
   }

   

}






