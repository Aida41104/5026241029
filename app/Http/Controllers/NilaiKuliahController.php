<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->paginate(10);

        return view('latihan1.index', ['nilaikuliah' => $nilaikuliah]); //buka file index di latihan1, data dari phpmyadmin dipindah ke $ terus dipindah ke index.blade
    }

    public function tambah()
    {
        return view('latihan1.tambahNilai');
    }

    public function store(Request $request) //simpan data, data masuk ke $request
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP, //Kolom NRP isi dari input NRP
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        return redirect('/nilaikuliah'); //pindah halaman ke /nilaikuliah
    }

    public function edit($id)
    {
        $nilaikuliah  = DB::table('nilaikuliah')->where('ID', $id)->get(); //Cari data yang ID-nya sama dengan $id

        return view('latihan1.editNilai', ['nilaikuliah' => $nilaikuliah]);
    }


    public function update(Request $request)
    {

        DB::table('nilaikuliah')->where('ID', $request->id)->update([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        return redirect('/nilaikuliah');
    }

    public function hapus($id)
    {
        DB::table('nilaikuliah')->where('ID', $id)->delete();

        return redirect('/nilaikuliah');
    }

    public function cari(Request $request) //Menampung data yang dikirim dari form pencarian.
    {
        $cari = $request->cari;

        $nilaikuliah  = DB::table('nilaikuliah')
            ->where('NRP', 'like', "%" . $cari . "%") //boleh ada karakter apa saja sebelum atau sesudah nrp
            ->paginate(); //brp data di dalam kurung buat lanjut ke halaman selanjutnya

        return view('latihan1.index', ['nilaikuliah' => $nilaikuliah]); //Kirim hasil pencarian ke halaman index.blade.php
    }
}
