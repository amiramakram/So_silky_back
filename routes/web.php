<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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



Auth::routes();


// Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
// Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');



Route::get('/client', [ClientController::class, 'index'])->name('client.index')->middleware('auth');

Route::get('/client/{client}', [ClientController::class, 'show'])->name('client.show')->middleware('auth');

Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');

Route::post('/client', [ClientController::class, 'store'])->name('client.store');

Route::get('/client/{client}/edit', [ClientController::class, 'edit'])->name('client.edit')->middleware('auth');

Route::post('/client/{client}', [ClientController::class, 'update'])->name('client.update')->middleware('auth');

Route::post('/client/{client}/delete', [ClientController::class, 'destroy'])->name('client.destroy')->middleware('auth');
