<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LawyersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('pages.Home');
// });
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Authentications
// ?register @ get
Route::get('account/register', [AuthController::class, 'index'])->name('user.index');
// login @get form
Route::get('account/login', [AuthController::class, 'login'])->name('user.login');

// lawyers info
Route::get('/attoneys/{id}{name}/', [LawyersController::class, 'index'])->name('lawyer');
