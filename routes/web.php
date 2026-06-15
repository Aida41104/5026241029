<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\EASController;


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

Route::get('/pegawai', [PegawaiDBController::class, 'index2']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);


// Rute CRUD untuk tabel Laptop
Route::get('laptop', [LaptopController::class, 'index']);
Route::get('laptop/tambah', [LaptopController::class, 'tambah']);
Route::post('laptop/store', [LaptopController::class, 'store']);
Route::get('laptop/edit/{id}', [LaptopController::class, 'edit']);
Route::post('laptop/update', [LaptopController::class, 'update']);
Route::get('laptop/hapus/{id}', [LaptopController::class, 'hapus']);
Route::get('/laptop/cari', [LaptopController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// Rute CRUD untuk tabel nilai
Route::get('nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('nilaikuliah/store', [NilaiKuliahController::class, 'store']);
Route::get('nilaikuliah/edit/{id}', [NilaiKuliahController::class, 'edit']);
Route::post('nilaikuliah/update', [NilaiKuliahController::class, 'update']);
Route::get('nilaikuliah/hapus/{id}', [NilaiKuliahController::class, 'hapus']);
Route::get('/nilaikuliah/cari', [NilaiKuliahController::class, 'cari']);

// Rute CRUD untuk tabel eas
Route::get('eas', [EASController::class, 'index']);
Route::get('eas/tambah', [EASController::class, 'tambah']);
Route::post('eas/store', [EASController::class, 'store']);
Route::get('eas/edit/{kodepegawai}', [EASController::class, 'edit']);
Route::post('eas/update', [EASController::class, 'update']);
Route::get('eas/view/{kodepegawai}', [EASController::class, 'view']);
Route::get('/eas/cari', [EASController::class, 'cari']);
