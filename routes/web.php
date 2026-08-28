<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home.index');

Route::middleware('guest')->prefix('/auth')->group(function () {
    Route::livewire('/register', 'pages::auth.register')->name('register');
    Route::livewire('/login', 'pages::auth.login')->name('login');
});
