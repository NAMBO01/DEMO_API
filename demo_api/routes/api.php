<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//cách 1 khai báo cho từng method và dẫn đến controller 
Route::get('sp', [ProductController::class, 'index']);
Route::post('sp', [ProductController::class, 'store']);

//cách 2 dùng chung cho các method get,put,post và delete dẫn vào action của controller
Route::resource('products', ProductController::class);
