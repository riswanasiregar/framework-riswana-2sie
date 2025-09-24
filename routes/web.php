<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
Route::get('/nama/{riswana}', function ($riswana) {
    return 'Nama saya: '.$riswana;
});
Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});
Route::get('/nama/{param1?}/{nim?}', function ($param1 = '', $nim ='') {
    return 'Nama saya: '.$param1.'<br> NIM saya: '.$nim;
});
Route::get('/mahasiswa/{param1}', [MahasiswaController::class,'show'] )->name('mahasiswa.show');
Route::get('/nama/{param1?}/{nim?}', function ($param1='',$nim='') {
    return 'Nama saya : '.$param1.'<br>Nim : '.$nim;
});
Route::get('/about', function () {
    return view('halaman-about');
});
Route::get('/home', [HomeController::class,'index'] );



