<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//transactions
Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'showList'])->name('transactions');

//account heads
Route::get('/account-heads', [App\Http\Controllers\AccountHeadController::class, 'showList'])->name('account_heads');

