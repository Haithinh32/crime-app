<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/homepage',[HomeController::class, 'homepage'])->name('homepage');

Route::get('/Post',[HomeController::class, 'post'])->name('post');
Route::get('/Profile',[HomeController::class, 'profile'])->name('profile');

Route::post('/Post', [PostController::class, 'create_post'])->name('create_post');

Route::get('/authorize', function () {
    return view('AuthorizeAdmin');
})->name('authorize');

require __DIR__.'/auth.php';
