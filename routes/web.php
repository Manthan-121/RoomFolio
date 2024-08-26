<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FloorDetailsController;
use App\Http\Controllers\VisitorController;

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
        Route::get('Apartment', 'showApartment')->name('apartment');

        Route::get('Apartment/add', 'addApartment')->name('apartmentadd');
        Route::post('Apartment/add', 'storeApartment')->name('post-apartmentadd');

        Route::get('Apartments/edit/{id?}',  'editApartment')->name('apartmentedit');
        Route::put('Apartments/edit/{id}', 'updateApartment')->name('put-apartmentedit');

        Route::delete('Apartment-delete/{id}', 'deleteApartment')->name('apatmentdelete');

    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('Categorie', 'showCategorie')->name('Categorie');

        Route::post('Categorie/add', 'storeCategorie')->name('postCategorie');

        Route::get('Categorie/edit/{id?}',  'editCategorie')->name('Categorieedit');
        Route::put('Categorie/edit/{id}', 'updateCategorie')->name('put-Categorieedit');

        Route::delete('category-delete/{id}', 'deleteCategorie')->name('Categoriedelete');

    });

    Route::controller(FloorDetailsController::class)->group(function () {
        Route::get('FloorDetails', 'showFloorDetails')->name('FloorDetails');

        Route::get('FloorDetails/add', 'addFloorDetails')->name('FloorDetailsadd');
        Route::post('Floordtl/add', 'storeFloorDetails')->name('postFloorDetails');

        Route::get('FloorDetails/edit/{id?}',  'editFloorDetails')->name('FloorDetailsedit');
        Route::put('FloorDetails/edit/{id}', 'updateFloorDetails')->name('put-FloorDetailsedit');

        Route::delete('FloorDetails-delete/{id}', 'deleteFloorDetails')->name('FloorDetailsdelete');

    });

    Route::resource('visitors', VisitorController::class);

    
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

