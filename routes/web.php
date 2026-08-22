<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::livewire('/register', 'pages::register')->name('register');
    Route::livewire('/login', 'pages::login')->name('login');
});

