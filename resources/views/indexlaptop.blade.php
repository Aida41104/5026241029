@extends('template2')
@section('judul halaman', 'Data Laptop')
@section('konten')
    <a href="/laptop/tambah" class="btn btn-primary"> + Tambah Laptop Baru</a>
    <br/><br/>
    <p>Cari Data Laptop :</p>
    <form action="/laptop/cari" method="GET" class="mb-3">
        <input type="text" name="cari" placeholder="Cari Merk Laptop .." value="{{ old('cari') }}" class="form-control d-inline-block w-25">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <table class="table table-bordered table-striped table-hover">
        <tr class="table-primary text-center">
            <th>Kode Laptop</th>
            <th>Merk Laptop</th>
            <th>Stock Laptop</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach($laptop as $l)
        <tr>
            <td class="text-center">{{ $l->kodelaptop }}</td>
            <td>{{ $l->merklaptop }}</td>
            <td class="text-center">{{ $l->stocklaptop }}</td>
            <td class="text-center">
                @if($l->tersedia == '1')
                    <span class="badge bg-success">Tersedia</span>
                @else
                    <span class="badge bg-danger">Tidak Tersedia</span>
                @endif
            </td>
            <td class="text-center">
                <a href="/laptop/edit/{{ $l->kodelaptop }}" class="btn btn-warning btn-sm">Edit</a>
                |
                <a href="/laptop/hapus/{{ $l->kodelaptop }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $laptop->links() }}
@endsection
