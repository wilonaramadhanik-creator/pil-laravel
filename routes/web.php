<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('Mahasiswa', function () {
    return view('Mahasiswa');
});

Route::get('profile', function () {
    $nama = 'wilona';
    //return view('profile', compact('nama'));
    return view('profile')->with('nama', $nama);
});
