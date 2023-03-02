<?php

use Illuminate\Support\Facades\Route;
//use app\Http\Controllers\studentController;
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
Route::get('/about','siteController@about');
Route::get('/contact','siteController@contact');


Route::get('/add','studentController@add')->name('student.add');
Route::post('/add','studentController@store')->name('student.store')  ;
Route::get('/show','studentController@index')->name('student.show')  ;

Route::get('/edit/{id?}','studentController@edit')->name('student.edit')  ;
Route::post('/add/{id?}','studentController@update')->name('student.update')  ;
Route::get('/delete/{id?}','studentController@delete')->name('student.delete')  ;

Route::get('/teacher','teacherController@addTeacher')->name('teacher.add');
Route::post('/teacher','teacherController@store')->name('teacher.store');
Route::get('/teacher-list','teacherController@index')->name('teacher.show')  ;

Route::get('/tedit/{id?}','teacherController@edit')->name('teacher.tedit')  ;
Route::post('/teacher/{id?}','teacherController@update')->name('teacher.update')  ;

//Route::get('/add',[studentController::class, 'add'])->name('student.add');
//-------------custom login

Route::get('/login2','CustomAuthController@login');
Route::get('/profile','profile@index')->name('profile.list')->middleware('customRouteAuth');
Route::get('/form','profile@form');

Route::post('submit','profile@save');
Route::get('/medit/{id?}','profile@edit');
Route::post('/form/{id?}','profile@update')->name('form.update');
//Route::get('/update/{$id}','profile@save');
Route::get('/mdelete/{id?}','profile@delete')->name('profile.delete');

Route::get('/', function () {
    return view('welcome');
});

Route::view('noaccess','noaccess');

//------------login------------
Route::view('nlogin','login');
Route::post('nlogin', 'newLoginController@index');


// Route::get('nprofile', function(){
  
//   return view('userprofile');
// });

Route::group(['middleware' =>['customAuth']], function(){
    Route::view('userprofile','newProfile');
});

Route::get('/nlogout', function () {
    session()->forget('data');
    return redirect('nlogin');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

