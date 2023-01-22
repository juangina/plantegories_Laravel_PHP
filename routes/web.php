<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Posts\PostsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Recipes\RecipesController;
use App\Http\Controllers\Dashboard\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/capture', [DashboardController::class, 'capture'])->name('capture');
Route::post('/dashboard', [DashboardController::class, 'store']);
Route::get('/list', [DashboardController::class, 'list'])->name('list');
Route::get('/dashboard/{id}', [DashboardController::class, 'show'])->name('show');
Route::get('/calculator', [DashboardController::class, 'calculator'])->name('calculator');
