@extends('template2')
@section('judul halaman', 'Kode Soal mypegawai')
@section('konten')

    <div class="container mt-5">
        <a href="/eas" class="btn btn-secondary mb-4">Kembali ke Index</a>

        <div class="card">
            <div class="card-header">Form Tambah Data Pegawai</div>
            <div class="card-body">
                <form action="/eas/store" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                        <div class="col-sm-10">
                            <input type="char" name="kodepegawai" id="kodepegawai" class="form-control"
                                required="required" maxlength="9">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="namalengkap" id="namalengkap" class="form-control"
                                required="required">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                        <div class="col-sm-10">
                            <input type="text" name="divisi" id="divisi" class="form-control" </div>

                        </div>
                        <div class="row mb-3">
                            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                            <div class="col-sm-10">
                                <input type="text" name="departemen" id="departemen" class="form-control" </div>
                            </div>

                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $nama = $_POST['nama'];

                                // Coba validasi jika input kosong
                                if (empty($nama)) {
                                    $pesan_error = 'Nama wajib diisi!';
                                    echo "<script>alert('$pesan_error');</script>";
                                } else {
                                    echo "<script>alert('Data berhasil diproses!');</script>";
                                }
                            }
                            ?>
                            </form>

                            <div class="row">
                                <div class="offset-sm-2 col-sm-10">
                                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>

@endsection
