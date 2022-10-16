<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('modal_small');
})->name('home');

// login
Route::get('/login', [LoginController::class, 'loginForm'])->name('get.login');
Route::post('/login', [LoginController::class, 'login'])->name('post.login');

Route::get('/register', [AccountController::class, 'create'])->name('get.register');
Route::post('/register', [AccountController::class, 'store'])->name('post.register'); // save
