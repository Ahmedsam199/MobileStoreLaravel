<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\Product;


Route::post('/AddUser',[userController::class,'store']);
Route::post('/getUser',[userController::class,'login']);
Route::get('/Allproduct',[Product::class,'Allproduct']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
