@extends('template2')
@section('judul halaman', 'Tambah Data Laptop')
@section('konten')
    <a href="/laptop" class="btn btn-secondary mb-4">Kembali</a>
    <div class="card">
        <div class="card-header">Form Tambah Data Laptop</div>
        <div class="card-body">
            <form action="/laptop/store" method="post">
                {{ csrf_field() }}
                <div class="row mb-3">
                    <label for="merklaptop" class="col-sm-2 col-form-label">Merk Laptop</label>
                    <div class="col-sm-10">
                        <input type="text" name="merklaptop" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="stocklaptop" class="col-sm-2 col-form-label">Stock Laptop</label>
                    <div class="col-sm-10">
                        <input type="number" name="stocklaptop" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10 d-flex align-items-center">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="tersedia" id="y" value="1"
                                required>
                            <label class="form-check-label" for="y">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tersedia" id="t" value="0">
                            <label class="form-check-label" for="t">Tidak</label>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
        </form>
    </div>
    </div>
@endsection
