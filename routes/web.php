<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LkeGabunganController;
use App\Http\Controllers\LkeInstansiController;
use App\Http\Controllers\LkeUnitController;
use App\Models\LkeUnit;
use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get ('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post ('/login', [LoginController::class, 'authenticate']);
Route::post ('/logout', [LoginController::class, 'logout']);

Route::get ('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

Route::get('/lke_unit', [LkeUnitController::class, 'lke_unit'])->middleware('auth');
Route::get('/form_penilaian', [LkeUnitController::class, 'penilaian_unit'])->middleware('auth');

Route::get('/lke_instansi', [LkeInstansiController::class, 'lke_instansi'])->middleware('auth');
Route::get('/penilaian_instansi', [LkeInstansiController::class, 'penilaian_instansi'])->middleware('auth');

Route::get('/lke_gabungan', [LkeGabunganController::class, 'lke_gabungan'])->middleware('auth');
Route::get('/penilaian_gabungan', [LkeGabunganController::class, 'penilaian_gabungan'])->middleware('auth');