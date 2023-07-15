<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;

use App\Http\Middleware\AuthBlog;

Route::group(['middleware' => 'web'], function () {

    Route::get('/post', function () {return view('post');})->middleware(AuthBlog::class);
    Route::post('/post', [PostController::class, "Create"])->middleware(AuthBlog::class);
    Route::get('/list',[PostController::class,"List"])->middleware(AuthBlog::class)->name('list');;
});
Route::view('/register', 'register')->name('register');

Route::post('/register', [AuthorController::class, 'Register'])->name('register.create');

Route::get('/profile', [AuthorController::Class, 'Profile'])->name('profile');

Route::view('/login', 'login')->name('login');
Route::post('/login', [AuthorController::class, 'Login'])->name('Login');
Route::get('/logout', [AuthorController::class, 'Logout']);

Route::get('/', function () {
    return view('welcome');
});
