<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LawyersController;
use App\Http\Controllers\DashboardController;

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
Route::get('/attoneys/{lawyer}', [LawyersController::class, 'index'])->name('lawyer.profile');

// create profile form
Route::get('/account/create_profile',[LawyersController::class,'profileForm'])->name('create.view');
// store data
Route::post('/account/create_profile',[LawyersController::class,'store'])->name('create.profile');

// Lawyers dashboard
Route::resources([
    '/account/dashboard'=>DashboardController::class,
]);
