@extends('template2')
@section('judul halaman', 'Edit Data Laptop')
@section('konten')
    <a href="/laptop" class="btn btn-secondary mb-4">Kembali</a>
    @foreach ($laptop as $l)
        <div class="card">
            <div class="card-header">Form Edit Data Laptop</div>
            <div class="card-body">
                <form action="/laptop/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $l->kodelaptop }}">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kode Laptop</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $l->kodelaptop }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="merklaptop" class="col-sm-2 col-form-label">Merk Laptop</label>
                        <div class="col-sm-10">
                            <input type="text" name="merklaptop" class="form-control" required
                                value="{{ $l->merklaptop }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="stocklaptop" class="col-sm-2 col-form-label">Stock Laptop</label>
                        <div class="col-sm-10">
                            <input type="number" name="stocklaptop" class="form-control" required
                                value="{{ $l->stocklaptop }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="tersedia" value="1" id="editY"
                                    {{ $l->tersedia == '1' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="editY">Ya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tersedia" value="0" id="editT"
                                    {{ $l->tersedia == '0' ? 'checked' : '' }}>
                                <label class="form-check-label" for="editT">Tidak</label>
                            </div>
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
@endsection
