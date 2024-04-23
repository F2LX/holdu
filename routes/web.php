<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.main');
});

Route::get('/login', function () {
    return view('ui.login');
});

Route::get('/register', function () {
    return view('ui.register');
});

Route::get('/beranda',function(){
    return view('home.beranda');
});