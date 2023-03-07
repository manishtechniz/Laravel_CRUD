<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
 
 
Route::post('reg_form',[users::class,'reg_form']);
Route::post('user_login',[users::class,'user_login']);
Route::get('registration',[users::class,'registration']);
Route::get('login',[users::class,'login']);

Route::middleware('userAuthMiddle')->group(function(){

    Route::get('dashboard',[users::class,'dashboard']);
    Route::view('/','dashboard');
    Route::get('logout',[users::class,'logout']);

});




?>






