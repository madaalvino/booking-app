<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('bookings', BookingController::class);
Route::resource('rooms', RoomController::class);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/app', function () {
    return view('layout.app');
});

Route::get('/index', function () {
    return view('index');
});
