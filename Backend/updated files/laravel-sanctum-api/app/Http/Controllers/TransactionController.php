<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

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
               // 'user_id' => Auth::user()->id,
               'voucher_no' => 'required',
               'voucher_id' => 'required',
               'narration' => 'required',
               'debit' => 'required',
               'credit' => 'required', 
          ]);

          // $user_id = Auth::user()->id;

          return Transaction::create($request->all());

     // Transaction::create([
     //      'user_id' => auth()->id(),
     //      'voucher_no' => request('voucher_no'),
     //      'voucher_id' => request('voucher_id'),
     //      'narration' => request('narration'),
     //      'debit' => request('debit'),
     //      'credit' => request('credit')
     // ]);
   }

   //display specific transaction

   public function show($id)
   {
        return Transaction::find($id);
   }


   //update
   public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        $transaction->update($request->all());
        return $transaction;
    }


    //delete
    public function destroy($id)
    {
        Transaction::destroy($id);
    }

   

}






