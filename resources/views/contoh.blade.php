<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Notifikasi Sistem Akademik ITS</title>
    <style>
        body {
            background-color: #004937;
            color: white;
        }

        .container {
            margin-top: 100px;
            background-color: white;
            color: black;
            padding: 30px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Notifikasi Sistem Akademik</h2>
        <div class="alert alert-success">
            <strong>Berhasil!</strong> Data KRS kamu sudah tersimpan.
        </div>
        <div class="alert alert-info">
            <strong>Info:</strong> Jadwal kuliah semester ini sudah tersedia.
        </div>

        <div class="alert alert-warning">
            <strong>Peringatan!</strong> Batas pembayaran UKT tinggal 2 hari lagi.
        </div>

        <div class="alert alert-danger">
            <strong>Error!</strong> Login gagal, silakan cek kembali akun.
        </div>

        <div class="alert alert-primary">
            <strong>Pengumuman:</strong> Akan ada maintenance sistem malam ini.
        </div>

        <div class="alert alert-secondary">
            <strong>Catatan:</strong> Jangan lupa isi evaluasi dosen.
        </div>

        <div class="alert alert-dark">
            <strong>Mode Gelap:</strong> Tampilan malam aktif.
        </div>

        <div class="alert alert-light">
            <strong>Reminder:</strong> Cek email kampus secara berkala.
        </div>


        <div class="alert alert-success">
            <strong>Berhasil!</strong> Silakan
            <a href="#" class="alert-link">lihat detail KRS</a>.
        </div>


        <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Peringatan!</strong> Sesi login kamu hampir habis.
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
