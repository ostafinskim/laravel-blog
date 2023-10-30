<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);


// register middleware
// Route::get('/register', [RegistrationController::class, 'create'])->middleware('guest');
// Route::post('/register', [RegistrationController::class, 'store'])->middleware('guest');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegistrationController::class, 'create']);
    Route::post('/register', [RegistrationController::class, 'store']);
});

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
