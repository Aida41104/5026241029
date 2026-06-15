@extends('template2')
@section('judul halaman', 'Data pegawai')
@section('konten')
    <a href="/eas" class="btn btn-primary"> Kembali LIhat Index</a>
    <br /><br />

    <table class="table table-bordered table-striped table-hover"> {{-- bikin tabel --}}
        <tr class="table-primary text-center"> {{-- isi row --}}
            <th>kodepegawai</th> {{-- th = judul kolom --}}
            <th>namalengkap</th>
            <th>divisi</th>
            <th>departemen</th>
        </tr>
        @foreach ($mypegawai as $l)
            {{-- ulangi data satu persatu dari nama kolom --}}
            <tr>
                <td class="text-center">{{ $l->kodepegawai}}</td>
                <td class="text-center">{{ $l->namalengkap}}</td>
                <td class="text-center">{{ $l->divisi}}</td>
                <td class="text-center">{{ $l->departemen}}</td>

                 {{-- urut berdasarkan kolom yang dibuat pas bikin tabel tadi --}}
            </tr>
        @endforeach
    </table>
    </div>
@endsection
