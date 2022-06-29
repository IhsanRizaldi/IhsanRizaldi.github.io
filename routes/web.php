<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SuratKController;
use App\Http\Controllers\SuratMController;
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

Route::middleware('guest')->group(function(){
    Route::get('/', [LoginController::class,'index'])->name('login');
    Route::post('/', [LoginController::class,'store'])->name('login');
});
Route::middleware('auth')->group(function(){
    Route::get('home', [HomeController::class,'__invoke'])->name('home');
    Route::post('logout', [LogoutController::class,'__invoke'])->name('logout');
    Route::resource('surat_masuk', SuratMController::class);
    Route::resource('surat_keluar', SuratKController::class);
    Route::get('/printsk', [SuratKController::class,'printsk'])->name('printsk');
    Route::get('/printsm', [SuratMController::class,'printsm'])->name('printsm');
    
});