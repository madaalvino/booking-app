<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;

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

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
