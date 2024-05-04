<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\ChatSessionController;

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

Route::get('/', function () {
    return view('home.main',[
        "title" => "home"
    ]);
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
Route::get('/journal/view/{journal:id}',[JournalController::class,'show']);
Route::put('/journal/view/put/{journal:id}',[JournalController::class,'update']);
Route::delete('/journal/delete/{journal:id}',[JournalController::class,'destroy']);


// Dashboard
Route::get('/dashboard', function() {
    return view('user.dashboard');
});

Route::get('/connectu', function() {
    return view('user.connectu.home');
});

Route::get('/chat', [ChatSessionController::class,'index']);

Route::get('/profile',[AuthController::class,'profile']);
Route::get('/reminder',function(){
    return view('user.reminder');
});

Route::get('/reminder',function(){
    return view('user.reminder');
});

Route::get('/mediGuide',function(){
    return view('user.meditationGuide');
});
Route::get('/mediTrack',function(){
    return view('user.meditationTrack');
});

Route::get('/pricing',function(){
    return view('home.priceplan',[
        "title" => "pricing"
    ]);
});

Route::get('/features',function(){
    return view('home.features',[
        "title" => "pricing"
    ]);
});
// ConnectU User Handler