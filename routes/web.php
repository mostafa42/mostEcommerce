<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main.welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('main.login');
})->name('login');

Route::get('register', function () {
    return view('main.register');
})->name('register');

Route::get('admin-dashboard' , function(){
    return view('admin.home');
})->name('admin-dashboard');
