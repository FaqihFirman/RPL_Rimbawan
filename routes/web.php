<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaunaController;
use App\Http\Controllers\FloraController;
use App\Http\Controllers\Auth\AdminAuthController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('test');
});



