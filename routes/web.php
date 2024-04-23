<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.main');
});

// Auth Controller

Route::get('/login', [AuthController::class,'index']);
Route::post('/login/validate', [AuthController::class,'login']);

Route::get('/register', [AuthController::class,'register']);
Route::post('/register/store', [AuthController::class,'store']);


// Dashboard
Route::get('/dashboard', function() {
    return view('user.dashboard');
});