<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthorityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/Homepage', [PostController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/homepage',[PostController::class, 'index'])->name('homepage');
    Route::get('/Profile',[HomeController::class, 'profile'])->name('profile');
    Route::get('/Post',[HomeController::class, 'post'])->name('post');
    Route::post('/Post', [PostController::class, 'create_post'])->name('create_post');
    Route::post('/homepage_search',[PostController::class, 'search'])->name('Search');  
    Route::post('/homepage',[PostController::class, 'delete'])->name('Delete'); 
});



Route::middleware(['auth','verified','admin'])->group(function () {
    Route::get('/AuthorizeAdmin', [AuthorityController::class, 'index_admin'])->name('index_admin');
    Route::post('/AuthorizeAdmin', [AuthorityController::class, 'changeUserType'])->name('changeUserType');
    Route::get('/ListPost', [PostController::class, 'index_censor'])-> name('index_censor');
    Route::post('/ListPost', [PostController::class, 'detail'])->name('detail');
    Route::post('/Censor', [PostController::class, 'censor'])->name('censor');
    Route::post('/CensorDel', [PostController::class, 'delete_censor'])->name('delete_censor');
    Route::get('/Region',[PostController::class,'select_region'])->name('select_region');

});   


Route::get('/censorpost', function () {
    return view('CensorPost');
})->name('censorpost');


require __DIR__.'/auth.php';
