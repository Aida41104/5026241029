<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('pert5', function () {
    ##klo bisa beda
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index2']);

Route::get('biodata', [DosenController::class, 'biodata']);
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index2']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route crud
Route::get('/pegawai', [PegawaiDBController::class, 'index2']);
Route::get('/', function () {
    return view('aksesTugas');
});


Route::get('/pertemuan1', function () { return view('intro'); });
Route::get('/news', function () {
    return view('news');
});
Route::get('/pertemuan3', function () {
    return view('responsive');
});
Route::get('/contoh', function () { return view('contoh'); });
Route::get('/pertemuan4', function () { return view('pertemuan4'); });
Route::get('/pertemuan5', function () { return view('pertemuan5'); });
Route::get('/pertemuan6', function () { return view('linktree'); });
