<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
 
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Products Table
Route::apiResource("products",ProductController::class);
Route::get('/products/{Product_ID}' ,[ProductController::class,'show']);
Route::put('/products/{Product_ID}' ,[ProductController::class,'update']);
Route::delete('/products/{Product_ID}',[ProductController::class,'destroy']);

//Orders Table
Route::apiResource("orders",OrderController::class);
Route::get('/orders/{Order_Number}',[OrderController::class],'show');
Route::put('/orders/{Order_Number}',[OrderController::class],'update');
Route::delete('/orders/{Order_Number}',[OrderController::class],'destroy');