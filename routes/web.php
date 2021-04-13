<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswa\HomeController;
use App\Http\Controllers\Mahasiswa\ConsultationController;
use App\Http\Controllers\Mahasiswa\ProfileController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mhs', [HomeController::class, 'index']);

//Konsultasi
Route::get('/mhs/consultation', [ConsultationController::class, 'index']);
Route::get('/mhs/consultation/show', [ConsultationController::class, 'show']);
Route::get('/mhs/consultation/create', [ConsultationController::class, 'create']);

Route::get('/mhs/profile', [ProfileController::class, 'profile']);
Route::get('/mhs/password', [ProfileController::class, 'password']);

