<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('hello', [Coba::class, 'helloworld']);

Route::get('pertama', function() {
    return view('pertama');
});

Route::get('linktree', function() {
    return view('linktree');
});

Route::get('layouting', function() {
    return view('layouting');
});

Route::get('js1', function() {
    return view('js1');
});

Route::get('bootstrap1', function() {
    return view('bootstrap1');
});

Route::get('dosen', [Coba::class, 'index']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
