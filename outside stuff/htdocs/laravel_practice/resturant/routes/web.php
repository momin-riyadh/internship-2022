<?php

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

Route::get('/test1', function () {
    return view('test');
})->name('welcome');
Route::get('/welcome','itemController@menu')->name('menu');


Route::view('/login','userLogin')->name('user.login');
Route::view('/registration','userRegistration')->name('user.register');
Route::post('submit', 'userController@store')->name('user.store');
Route::post('/login', 'userController@login')->name('login.user');

Route::view('/adminlogin', 'adminLogin')->name('login.admin');
Route::post('/adminlogin','adminController@login')->name('admin.login');


Route::group(['middleware' => ['userCustomAuth']], function(){
   
    Route::view('/profile','dashboard')->name('user.profile');
    
    Route::get('/logout','userController@logout')->name('user.logout');

    // Route::get('/settings','phoneController@setting')->name('setting');

    Route::get('/phone','phoneController@store')->name('setting.store');
    Route::post('/phone','phoneController@insert')->name('setting.insert');
});



Route::group(['middleware' => ['adminCustomAuth']], function(){
    Route::view('/admin-profile','adminProfile')->name('admin.profile');
    Route::get('/adlogout','adminController@logout')->name('admin.logout');
    Route::view('/category','add-category')->name('category');
    Route::post('/category','categoryController@store')->name('category.store');
    Route::view('/category-list','category-list')->name('category.list');
    Route::get('/category-list','categoryController@print')->name('category.view');
    Route::get('/test','itemController@showSelect')->name('test');
   
   // Route::view('/food','add-food')->name('food');
    Route::post('/store','itemController@store')->name('food.store');
    Route::view('/food-list','foodList')->name('food.list');
    Route::get('/food-list','itemController@print')->name('food.view');
    Route::get('/mdelete/{id?}','itemController@delete')->name('food.delete');

    

});