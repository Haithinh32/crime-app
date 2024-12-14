<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/welcome', [PostController::class, 'create_post'])->name('create_post');
require __DIR__.'/auth.php';
