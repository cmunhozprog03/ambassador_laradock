<?php

use App\Http\Controllers\ambassadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;


// Admin
Route::prefix('admin')->group(function(){
  Route::post('register', [AuthController::class, 'register']);
  Route::post('login', [AuthController::class, 'login']);

  Route::middleware(['auth:sanctum', 'scope.admin'])->group(function () {
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::put('users/info', [AuthController::class, 'updateInfo']);
    Route::put('users/password', [AuthController::class, 'updatePassword']);


    //Ambassadors
    Route::get('ambassadors', [ambassadorController::class, 'index']);
  });

});




// Ambassador


//Checkot

