<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaptopController extends Controller
{
    public function index()
    {
        $laptop = DB::table('laptop')->paginate(10);

        return view('indexlaptop', ['laptop' => $laptop]);
    }

    public function tambah()
    {
        return view('tambahlaptop');
    }

    // Menyimpan data laptop baru ke database
    public function store(Request $request)
    {
        DB::table('laptop')->insert([
            'merklaptop' => $request->merklaptop,
            'stocklaptop' => $request->stocklaptop,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/laptop');
    }

    public function edit($id)
    {
        $laptop = DB::table('laptop')->where('kodelaptop', $id)->get();

        return view('editlaptop', ['laptop' => $laptop]);
    }


    public function update(Request $request)
    {

        DB::table('laptop')->where('kodelaptop', $request->id)->update([
            'merklaptop' => $request->merklaptop,
            'stocklaptop' => $request->stocklaptop,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/laptop');
    }

    public function hapus($id)
    {
        DB::table('laptop')->where('kodelaptop', $id)->delete();

        return redirect('/laptop');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $laptop = DB::table('laptop')
            ->where('merklaptop', 'like', "%" . $cari . "%")
            ->paginate();

        return view('indexlaptop', ['laptop' => $laptop]);
    }
}
