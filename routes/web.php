<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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



Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Route::get('/', [DashboardController::class, 'index'])->name('dashboardindex')->middleware('auth');
Route::get('/create', [DashboardController::class, 'create'])->name('dashboardcreate')->middleware('auth');
Route::delete('/destroy/{id}', [DashboardController::class, 'destroy'])->name('dashboardestroy')->middleware('auth');
Route::get('/edit/{id}', [DashboardController::class, 'edit'])->name('dashboardedit')->middleware('auth');
Route::put('/update/{id}', [DashboardController::class, 'update'])->name('dashboardupdate')->middleware('auth');
Route::post('/create', [DashboardController::class, 'store'])->name('dashboardstore')->middleware('auth');
