<?php

use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\MahasiswaController as ControllersMahasiswaController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

//Route::get('/about', function (){
//return view('about');
//});

//Route::get('/beranda', function(){
//return view('beranda');
//});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
