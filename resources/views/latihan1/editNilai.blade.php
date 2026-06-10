@extends('template2')
@section('judul halaman', 'Edit Data Nilai Mahasiswa')
@section('konten')
    <div class="container mt-5">
        <a href="/nilaikuliah" class="btn btn-secondary mb-4">Kembali</a>

        @foreach ($nilaikuliah as $n)
            <div class="card">
                <div class="card-header">Form Edit Data Nilai Mahasiswa</div>
                <div class="card-body">
                    <form action="/nilaikuliah/update" method="post">
                        {{ csrf_field() }}

                        <input type="text" name="id" value="{{ $n->ID }}">

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" value="{{ $n->ID }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
                            <div class="col-sm-10">
                                <input type="text" name="NRP" id="NRP" class="form-control"
                                       required="required" maxlength="6" value="{{ $n->NRP }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
                            <div class="col-sm-10">
                                <input type="number" name="NilaiAngka" id="NilaiAngka" class="form-control"
                                       required="required" value="{{ $n->NilaiAngka }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
                            <div class="col-sm-10">
                                <input type="number" name="SKS" id="SKS" class="form-control"
                                       required="required" value="{{ $n->SKS }}">
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
