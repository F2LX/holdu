<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

Route::get('/my-journal',function(){
    return view('user.journal');
});

Route::get('/my-journal/add',function(){
    return view('user.addjournal');
});

Route::get('/profile',function(){
    return view('user.profile');
});

// ConnectU User Handler