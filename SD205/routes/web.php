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

/* -> changes the variable into another variable like for example a = b therefore b is equal to a now.*/
/* post is to store or save in the database and get is to retrieve the data. */

Route::get('/', function () {
    return view('final_board');
})->name('home');

// login
Route::get('/login'/* function name */, [LoginController::class, 'loginForm'/*Login Blade*/])->name('get.login');
Route::post('/login', [LoginController::class, 'login'])->name('post.login');

//register
Route::get('/register', [AccountController::class, 'create'/* function name */])->name('get.register');
Route::post('/register', [AccountController::class, 'store'])->name('post.register'); // save
