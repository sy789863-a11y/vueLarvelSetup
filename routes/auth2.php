<?php

use App\Http\Controllers\Auth2\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('login',[AuthController::class,'index'])->middleware(['guest']);
Route::post('user/login',[AuthController::class,'store']);

Route::get('res',[AuthController::class,'resForm']);
Route::post('storeRes',[AuthController::class,'storeRes']);
Route::post('logout',[AuthController::class,'logout'])->name('logout');