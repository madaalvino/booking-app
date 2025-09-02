<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');

Route::resource('bookings', BookingController::class);

Route::resource('rooms', RoomController::class);

Route::get('/blog', function () {
    return view('blog');
});
