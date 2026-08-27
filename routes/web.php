<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home.index');

Route::livewire('/register', 'pages::auth.register')->name('auth.register');
Route::livewire('/login', 'pages::auth.login')->name('auth.login');
