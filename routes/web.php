<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaunaController;
use App\Http\Controllers\FloraController;
use App\Http\Controllers\Auth\AdminAuthController;

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/fauna', function () {
    return view('fauna');
});

Route::get('/detail-fauna', function () {
    return view('detail-fauna');
});

Route::get('/fauna', function () {
    return view('fauna');
});

