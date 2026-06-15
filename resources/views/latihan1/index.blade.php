@extends('template2')
@section('judul halaman', 'Data Nilai')
@section('konten')
    <a href="/nilaikuliah/tambah" class="btn btn-primary"> Tambah Data</a>
    <br /><br />

    <p>Cari Data Nilai :</p> {{-- buat kotak pencarian --}}
    <form action="/nilaikuliah/cari" method="GET" class="mb-3">
        <input type="text" name="cari" placeholder="Cari Data Nilai .." value="{{ old('cari') }}" {{-- name = cari, di controller --}}
            class="form-control d-inline-block w-25">
        <input type="submit" value="CARI" class="btn btn-primary"> {{-- teks di tombol = value = cari --}}
    </form>

    <table class="table table-bordered table-striped table-hover"> {{-- bikin tabel --}}
        <tr class="table-primary text-center"> {{-- isi row --}}
            <th>ID</th> {{-- th = judul kolom --}}
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
            <th>Aksi</th>
        </tr>
        @foreach ($nilaikuliah as $l)
            {{-- ulangi data satu persatu dari nama kolom --}}
            <tr>
                <td class="text-center">{{ $l->ID }}</td>
                <td class="text-center">{{ $l->NRP }}</td>
                <td class="text-center">{{ $l->NilaiAngka }}</td>
                <td class="text-center">{{ $l->SKS }}</td>

                 {{-- urut berdasarkan kolom yang dibuat pas bikin tabel tadi --}}

                <td class="text-center">
                    @if ($l->NilaiAngka <= 40)
                        D
                    @elseif($l->NilaiAngka >= 41 && $l->NilaiAngka <= 60)
                        {{-- || or --}}
                        C
                    @elseif($l->NilaiAngka >= 61 && $l->NilaiAngka <= 80)
                        B
                    @elseif($l->NilaiAngka >= 81)
                        A
                    @endif
                </td>

                <td class="text-center">
                    {{ $l->NilaiAngka * $l->SKS }}
                </td>

                <td class="text-center">
                    <a href="/nilaikuliah/edit/{{ $l->ID }}" class="btn btn-warning btn-sm">Edit</a>
                    |
                    <a href="/nilaikuliah/hapus/{{ $l->ID }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="mt-3">  {{-- halaman--}}
        {{ $nilaikuliah->links() }}
    </div>
    </div>
@endsection
