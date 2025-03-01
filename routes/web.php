<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/home');
});
Route::get('/shop', function () {
    return view('user/shop');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});
