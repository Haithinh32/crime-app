<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthorityCOntroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/Homepage', [PostController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/homepage',[HomeController::class, 'homepage'])->name('homepage');
    Route::get('/Profile',[HomeController::class, 'profile'])->name('profile');
    Route::get('/Post',[HomeController::class, 'post'])->name('post');
    Route::post('/Post', [PostController::class, 'create_post'])->name('create_post');
    
});

Route::get('/AuthorizeAdmin', [AuthorityCOntroller::class, 'index_admin'])->name('index_admin');


Route::post('/AuthorizeAdmin', [AuthorityCOntroller::class, 'changeUserType'])->name('changeUserType');
    
Route::middleware(['auth','verified','admin'])->group(function () {

});   

require __DIR__.'/auth.php';
