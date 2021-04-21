<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dosen\HomeController;
use App\Http\Controllers\Dosen\ConsultationController;
use App\Http\Controllers\Dosen\ProfileController;

/*
|--------------------------------------------------------------------------
| Dosen Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

//Konsultasi
Route::get('/consultation', [ConsultationController::class, 'index']);
Route::get('/consultation/show/{id}', [ConsultationController::class, 'show']);
Route::get('/consultation/create', [ConsultationController::class, 'create']);
Route::post('/consultation/dsn/store', [ConsultationController::class, 'storeDsn']);
Route::get('/consultation/complete/{id}', [ConsultationController::class, 'complete']);
Route::get('/consultation/not-complete/{id}', [ConsultationController::class, 'notComplete']);
Route::get('/consultation/delete-message/{id}', [ConsultationController::class, 'deleteMessage']);

Route::get('/profile', [ProfileController::class, 'profile']);
Route::post('/profile/update', [ProfileController::class, 'profileUpdate']);
Route::get('/password', [ProfileController::class, 'password']);
Route::post('/password/update', [ProfileController::class, 'passwordUpdate']);
