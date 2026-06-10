<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->paginate(10);

        return view('latihan1.index', ['nilaikuliah' => $nilaikuliah]);
    }

    public function tambah()
    {
        return view('latihan1.tambahNilai');
    }

    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        return redirect('/nilaikuliah');
    }

    public function edit($id)
    {
        $nilaikuliah  = DB::table('nilaikuliah')->where('ID', $id)->get();

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

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $nilaikuliah  = DB::table('nilaikuliah')
            ->where('NRP', 'like', "%" . $cari . "%")
            ->paginate();

        return view('latihan1.index', ['nilaikuliah' => $nilaikuliah]);
    }
}
