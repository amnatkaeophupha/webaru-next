<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('2026')->name('2026.')->group(function () {
    Route::view('/', 'webaru_2026.home')->name('home');
});
