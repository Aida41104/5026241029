@extends('template2')
@section('judul halaman', 'Kode Soal mypegawai')
@section('konten')
    <a href="/eas/tambah" class="btn btn-primary"> Tambah Data</a>
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

                <td class="text-center">
                    <a href="/eas/edit/{{ $l->kodepegawai }}" class="btn btn-warning btn-sm">Edit</a>
                    |
                    <a href="/eas/view/{{ $l->kodepegawai }}" class="btn btn-danger btn-sm">View</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="mt-3">  {{-- halaman--}}
        {{ $mypegawai->links() }}
    </div>
    </div>
@endsection
