<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASController extends Controller
{
    public function index()
    {
        $mypegawai = DB::table('mypegawai')->paginate(10);

        return view('eas.index', ['mypegawai' => $mypegawai]); //buka file index di latihan1, data dari phpmyadmin dipindah ke $ terus dipindah ke index.blade
    }

    public function tambah()
    {
        return view('eas.tambah');
    }

public function store(Request $request)
{
    $request->validate([
        'kodepegawai' => 'required|alpha_num',
        'namalengkap' => 'required|regex:/^[a-zA-Z\s]+$/'
    ],[
        'kodepegawai.required' => 'Kode Pegawai harus diisi',
        'kodepegawai.alpha_num' => 'Kode Pegawai hanya boleh huruf dan angka',

        'namalengkap.required' => 'Nama Lengkap harus diisi',
        'namalengkap.regex' => 'Nama Lengkap hanya boleh huruf'
    ]);

    DB::table('mypegawai')->insert([
        'kodepegawai' => $request->kodepegawai,
        'namalengkap' => $request->namalengkap,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
    ]);

    return redirect('/eas');
}

    public function edit($kodepegawai)
    {
        $mypegawai  = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->get(); //Cari data yang ID-nya sama dengan $id

        return view('eas.edit', ['mypegawai' => $mypegawai]);
    }


    public function update(Request $request)
    {
            $request->validate([
        'kodepegawai' => 'required|alpha_num',
        'namalengkap' => 'required|regex:/^[a-zA-Z\s]+$/'
    ],[
        'kodepegawai.required' => 'Kode Pegawai harus diisi',
        'kodepegawai.alpha_num' => 'Kode Pegawai hanya boleh huruf dan angka',

        'namalengkap.required' => 'Nama Lengkap harus diisi',
        'namalengkap.regex' => 'Nama Lengkap hanya boleh huruf'
    ]);

        DB::table('mypegawai')->where('kodepegawai', $request->kodepegawai )->update([
            'kodepegawai' => $request->kodepegawai, //Kolom NRP isi dari input NRP
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/eas');
    }

public function view($kodepegawai)
{
    $mypegawai = DB::table('mypegawai')
                    ->where('kodepegawai', $kodepegawai)
                    ->get();

    return view('eas.view', ['mypegawai' => $mypegawai]);
}


    }
