@extends('template2')
@section('judul halaman', 'Kode Soal mypegawai')
@section('konten')
    <div class="container mt-5">
        <a href="/eas" class="btn btn-secondary mb-4">Kembali ke Index</a>

        @foreach ($mypegawai as $n)
            <div class="card">  {{-- bikkin kartu --}}
                <div class="card-header">Form Edit Data Pegawai</div>
                <div class="card-body">
                    <form action="/eas/update" method="post"> {{--biar bisa ngambil data, dan narah ke halaman update --}}
                        {{ csrf_field() }}

                        <input type="text" name="kodepegawai" value="{{ $n->kodepegawai }}">  {{--klo data yg diedi punya id = 5, value=5 --}}

                        <div class="row mb-3"> {{-- bikin ga bisa diedit --}}
                            <label class="col-sm-2 col-form-label">Kode Pegawai</label>
                            <div class="col-sm-10">
                                <input type="char" class="form-control" value="{{ $n->kodepegawai }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="namalengkap" id="namalengkap" class="form-control"
                                       required="required" maxlength="50" value="{{ $n->namalengkap }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                            <div class="col-sm-10">
                                <input type="char" name="divisi" id="divisi" class="form-control"
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                                <input type="char" name="departemen" id="departemen" class="form-control"
                            </div>
                        </div>

                        <div class="row">
                            <div class="offset-sm-2 col-sm-10">
                                <input type="submit" value="Update Data" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
