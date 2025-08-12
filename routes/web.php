<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/app', function () {
    return view('layout.app');
});


route::get('/index', function () {
    return view('index');
});
