<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;


Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.index');

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'login')->name('admin.login');
    Route::post('/login/check', 'loginCheck')->name('admin.login.check');
    Route::get('/registration', 'registration')->name('admin.registration');
    Route::post('/registration/store', 'registrationStore')->name('admin.registration.store');
    Route::get('/logout', 'logout')->name('admin.logout');
});
