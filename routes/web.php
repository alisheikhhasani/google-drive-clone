<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::livewire('/register', 'pages::register')->name('register');
    Route::livewire('/login', 'pages::login')->name('login');
});

Route::middleware('auth')->group(function () {
    Route::livewire('/{folder?}', 'pages::index')->name('index');
});
