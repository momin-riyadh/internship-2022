<?php

use Illuminate\Support\Facades\Route;
//use app\Http\Controllers\ContactController;

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

Route::get('/users', [ContactController::class, 'index']);


Route::get('/about','ContactController@about');

Route::get('/stores/{category?}/{item?}', function ($category, $item) {

    $category = request('category');
    
    if(isset($category)){
         if(isset($item)){
             return ' item '.$item.' from '.$category;
         }
        return 'store of ' .strip_tags($category);
    }

   return 'you are viewing all instrumrnts' ;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
