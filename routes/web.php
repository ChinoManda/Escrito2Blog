<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/register', 'register')->name('register');
#Route::get('/register', [AuthorController::class, 'Register'])->name('register');
Route::post('/register', [AuthorController::class, 'Register'])->name('register.create');

Route::view('/login', 'login')->name('login');
Route::post('/login', [AuthorController::class, 'Login'])->name('Login');
Route::get('/', function () {
    return view('welcome');
});
