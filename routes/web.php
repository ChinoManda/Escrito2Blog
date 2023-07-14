<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;

use App\Http\Middleware\AuthBlog;


Route::view('/register', 'register')->name('register');
#Route::get('/register', [AuthorController::class, 'Register'])->name('register');
Route::post('/register', [AuthorController::class, 'Register'])->name('register.create');

Route::view('/login', 'login')->name('login');
Route::post('/login', [AuthorController::class, 'Login'])->name('Login');

Route::get('/post', function () {return view('post');}); #->middleware(AuthBlog::class);
Route::get('/list',[PostController::class,"List"]);

Route::get('/', function () {
    return view('welcome');
});
