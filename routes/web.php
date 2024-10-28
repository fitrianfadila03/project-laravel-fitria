<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome'); //ini merujuk ke halaman welcome.blade.php di folder resouces/view
});

// Route::get('/', function () {
//     return view('index'); //ini merujuk ke halaman index.blade.php resouces/view
// });

// Route::get('/login', function () {
//     return view('login'); //ini merujuk ke halaman login.blade.php resouces/view
// });

// Route::get('/about', function () {
//     return view('about'); //ini merujuk ke halaman about.blade.php resouces/view
// });


Route::get('/', [HomeController::class, 'index'])-> name('index');
Route::get('login', [HomeController::class, 'login'])-> name('login');
Route::get('about', [HomeController::class, 'about'])-> name('about');