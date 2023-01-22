<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
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
Route::get('/pages', [PagesController::class, 'index'])->name('/pages');

Route::get('/login', [PagesController::class, 'login'])->name('/login');

Route::get('/signup', [PagesController::class, 'signup'])->name('/signup');
