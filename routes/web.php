<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // merujuk ke file welcome.blade.php
});

Route::get('/welcome', function () {
    return view('welcome'); // merujuk ke file welcome.blade.php
});

Route::get('/login', function () {
    return view('login'); // merujuk ke file welcome.blade.php
});

Route::get('/about', function () {
    return view('about'); // merujuk ke file welcome.blade.php
});