<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;


// Admin
Route::prefix('admin')->group(function(){
  Route::post('register', [AuthController::class, 'register']);
});




// Ambassador


//Checkot

