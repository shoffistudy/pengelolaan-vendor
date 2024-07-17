<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\BerandaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/beranda', function () {
    return view('beranda');
});
