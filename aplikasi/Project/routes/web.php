<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionLogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('actionlogout', [LoginController::class, 'actionLogout'])->name('actionlogout')->middleware('auth');

Route::resource('pesanans', PesananController::class)->only(['index', 'store', 'destroy']);
Route::get('/pesanans/nota', [PesananController::class, 'nota'])->name('pesanans.nota')->middleware('auth');
Route::post('/pesanans/cetak-nota', [PesananController::class, 'cetakNota'])->name('pesanans.cetakNota')->middleware('auth');




Route::resource('menus', MenuController::class)->middleware('auth');

