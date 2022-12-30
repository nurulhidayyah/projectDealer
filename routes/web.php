<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardMobilController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MobilController::class, 'index']);

Route::get('/galery', [GaleryController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function (){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/user', DashboardUserController::class)->middleware('auth');

Route::get('/dashboard/cars/checkSlug', [DashboardMobilController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/cars', DashboardMobilController::class)->middleware('auth');