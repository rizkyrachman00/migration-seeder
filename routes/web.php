<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [AuthController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/input', [InputController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


// Rute untuk menampilkan halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Rute untuk menangani login
Route::post('/login', [LoginController::class, 'login']);

// Define a route for displaying the form (GET request)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Define a route for storing the form data (POST request)
Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard.store');
Route::post('/input', [DashboardController::class, 'store'])->name('input');



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
    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('input');
});
