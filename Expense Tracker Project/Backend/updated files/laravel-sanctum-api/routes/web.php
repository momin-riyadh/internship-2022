<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
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

Route::get('/login', [UserController::class, 'login'])->name('/login');

Route::get('/signup', [UserController::class, 'signup'])->name('/signup');

Route::get('/createacchead', [PagesController::class, 'creteacchead'])->name('/createacchead');

Route::post('/users', [UserController::class, 'store'])->name('/users');
