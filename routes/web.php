<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome'); //ini merujuk ke halaman welcome.blade.php di folder resouces/view
});

Route::get('/', function () {
    return view('index'); //ini merujuk ke halaman welcome.blade.php resouces/view
});

Route::get('/login', function () {
    return view('login'); //ini merujuk ke halaman welcome.blade.php resouces/view
});

Route::get('/about', function () {
    return view('about'); //ini merujuk ke halaman welcome.blade.php resouces/view
});