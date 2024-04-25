<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\JournalController;

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

Route::get('/', function () {
    return view('home.main');
});

// Auth Controller

Route::get('/login', [AuthController::class,'index']);
Route::post('/login/validate', [AuthController::class,'login']);

Route::get('/register', [AuthController::class,'register']);
Route::post('/register/store', [AuthController::class,'store']);

Route::post('/connectu/post',[PostController::class,'store']);


// Journals
Route::get('/journal',[JournalController::class,'index']);
Route::get('/journal/add',[JournalController::class,'create']);
Route::post('/journal/add/post',[JournalController::class,'store']);


// Dashboard
Route::get('/dashboard', function() {
    return view('user.dashboard');
});

Route::get('/connectu', function() {
    return view('user.connectu.home');
});

Route::get('/chat-page', function() {
    return view('user.chat');
});


// ConnectU User Handler