<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ConsultationController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [Admin\HomeController::class, 'index'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::get('/consultation', [ConsultationController::class, 'index']);
Route::get('/consultation/show/{id}', [ConsultationController::class, 'show']);

Route::get('/user', [UserController::class, 'index']);
Route::post('/user/add-dosen', [UserController::class, 'storeDosen']);
Route::post('/user/change-password', [UserController::class, 'changePassword']);
Route::get('/user/delete/{id}', [UserController::class, 'delete']);



