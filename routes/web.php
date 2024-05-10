<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\ChatSessionController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ConnectUController;


use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

Route::get('/', function () {
    return view('home.main');
});

// Auth Controller
Route::get('/login', [AuthController::class,'index']);
Route::post('/login/validate', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class,'logout']);
Route::get('/register', [AuthController::class,'register']);
Route::post('/register/store', [AuthController::class,'store']);

Route::post('/connectu/post',[PostController::class,'store'])->middleware('user');;


// Journals
Route::get('/journal',[JournalController::class,'index'])->middleware('user');
Route::get('/journal/add',[JournalController::class,'create'])->middleware('user');
Route::post('/journal/add/post',[JournalController::class,'store'])->middleware('user');
Route::get('/journal/view/{journal:id}',[JournalController::class,'show'])->middleware('user');
Route::put('/journal/view/put/{journal:id}',[JournalController::class,'update'])->middleware('user');
Route::delete('/journal/delete/{journal:id}',[JournalController::class,'destroy'])->middleware('user');


Route::get('/connectu',[ConnectUController::class,'index'])->middleware('user');
Route::get('/info/{user:username}',[ConnectUController::class,'userinfo'])->middleware('user');


Route::get('/chat', [ChatSessionController::class,'index'])->middleware('user');

Route::get('/profile',[AuthController::class,'profile'])->middleware('user');
Route::post('/profile/username',[AuthController::class,'handleUsername'])->middleware('user');

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('user');
Route::get('/mood-history',[DashboardController::class,'moodhistory'])->middleware('user');
Route::get('/meditation',[DashboardController::class,'meditation'])->middleware('user');
Route::get('/meditation/track',[DashboardController::class,'meditationtrack'])->middleware('user');
Route::get('/questionnare',[DashboardController::class,'questionnare'])->middleware('user');

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

Route::get('/error', function () {
    return view('user.error');
});