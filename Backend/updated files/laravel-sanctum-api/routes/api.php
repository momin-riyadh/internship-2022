<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/search/{name}', [ProductController::class, 'search']);


//protected routes
Route::group(['middleware'=>['auth:sanctum']], function() {
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::get('/transactions/{id}', [TransactionController::class, 'show']);
    Route::post('/transactions', [TransactionController::class, 'store']); 
    // Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/transactions/{id}', [TransactionController::class, 'delete']);
    Route::post('/logout', [AuthController::class, 'logout']);    
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
