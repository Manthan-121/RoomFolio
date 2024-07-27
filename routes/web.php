<?php

use Illuminate\Support\Facades\Route;

// Login rout
Route::get('login', function () {
    return view('login');
})->name('login');

// forgot password rout
Route::get('forgot-password', function () {
    return view('forgotpwd');
})->name('forgot-pwd');

//reset password rout
Route::get('reset-password', function () {
    return view('resetpwd');
})->name('reset-pwd');

// profile rout
Route::get('profile', function () {
    return view('profile');
})->name('profile');

// home rout
Route::get('/', function () {
    return view('home');
})->name('home');

// apartment rout
Route::get('apartment', function () {
    return view('apartment');
})->name('apartment');

// apartment add rout
Route::get('apartment-add', function () {
    return view('apartadd');
})->name('apartmentadd');
