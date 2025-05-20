<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaunaController;
use App\Http\Controllers\FloraController;
use App\Http\Controllers\Auth\AdminAuthController;


Route::get('/', function () {
    return view('home');
});

Route::get('/fauna', [FaunaController::class, 'index'])->name('fauna.index');

Route::get('/fauna/{id}', [FaunaController::class, 'detail'])->name('fauna.detail');



