<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.main');
});

Route::get('/login', function () {
    return view('ui.login');
});