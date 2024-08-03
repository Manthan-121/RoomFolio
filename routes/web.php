<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ApartmentController;

// Login rout
Route::controller(AdminAuthController::class)->group(function () {
    Route::get('login', 'showLoginForm')->name('login');
    Route::post('login', 'login')->name('post-login');

    Route::post('logout', 'logout')->name('logout');
});


Route::middleware(['admin'])->group(function () {
    // home rout
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::controller(ApartmentController::class)->group(function () {
        Route::get('apartment', 'showApartment')->name('apartment');

        Route::get('apartment/add', 'addApartment')->name('apartmentadd');
        Route::post('apartment/add', 'storeApartment')->name('post-apartmentadd');

        Route::get('apartments/edit/{id?}',  'editApartment')->name('apartmentedit');
        Route::put('apartments/edit/{id}', 'updateApartment')->name('put-apartmentedit');

        Route::delete('apartment-delete/{id}', 'deleteApartment')->name('apatmentdelete');

    });

    // profile rout
    Route::get('profile', function () {
        return view('profile');
    })->name('profile');
});

// forgot password rout
Route::get('forgot-password', function () {
    return view('forgotpwd');
})->name('forgot-pwd');

//reset password rout
Route::get('reset-password', function () {
    return view('resetpwd');
})->name('reset-pwd');

