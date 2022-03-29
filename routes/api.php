<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('getProduct',[ApiController::class,'getProduct']);
// Route::post('createProduct',[ApiController::class,'createProduct']);

//public Route
//Route::apiResource('product',ProductController::class);       //this route is perform all operation(crud).

//Route::get('/product/search/{name}',[ProductController::class,'search']);


//Protected Route

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/product',[ProductController::class,'index']);
    Route::get('/product/{id}',[ProductController::class,'show']);
   Route::post('/product',[ProductController::class,'store']);
   Route::put('/product/{id}',[ProductController::class,'update']);
   Route::delete('/product/{id}',[ProductController::class,'destroy']);
   Route::post('/logout',[AuthController::class,'logout']);

});

//public route

Route::get('/product/search/{name}',[ProductController::class,'search']);

//register
Route::post('/register',[AuthController::class,'register']);

//login
Route::post('/login',[AuthController::class,'login']);

//1|mpWdRWK2mnIH7yc3RZcxsDUJwmFWEm1Qbo3MMCMD

//5|MCX4ykWk5MLorPr4ymuSm4kEWqAzzGOHnWBAFXtG

//7|B7Wp3v3IFIHoyOWUx6gFFWubugm169wIxgeuYKb4
//8|mbaEAGWMLIJjcDiE9RpkyLOZj4rjFZNHgqr528iA