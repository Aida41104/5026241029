<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas Web Programming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #111827; color: #f3f4f6; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .card-custom { background: #1f2937; border: 1px solid #374151; transition: all 0.3s ease; }
        .card-custom:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.3); border-color: #6366f1; }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="badge bg-primary px-3 py-2 mb-2 text-uppercase tracking-wider">Tugas Laravel</span>
            <h1 class="fw-bold text-white">Navigasi Route & View</h1>
            <p class="card-text text-white-50 small">Ary Ratna Aida Safa | Pertemuan 1 - 6</p>
            <hr class="w-25 mx-auto border-secondary">
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 card-custom text-white">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title text-info fw-bold">Pertemuan 1</h5>
                            <p class="card-text text-white-50 small">Pengenalan elemen dasar HTML meliputi pengaturan judul halaman (title), pemformatan teks, perataan tengah (centering), serta teknik penyisipan gambar institusi ITS.</p>
                        </div>
                        <a href="{{ url('/pertemuan1') }}" class="btn btn-outline-info w-100 mt-3">Buka Tugas 1</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 card-custom text-white">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title text-info fw-bold">Pertemuan 2</h5>
                            <p class="card-text text-white-50 small">Pembuatan layout portal berita menggunakan selektor CSS, pengaturan gaya tautan, dan efek visual gambar.</p>
                        </div>
                        <a href="{{ url('/news') }}" class="btn btn-outline-info w-100 mt-3">Buka Tugas 2</a>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 card-custom text-white">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title text-info fw-bold">Pertemuan 3</h5>
                            <p class="card-text text-white-50 small">Eksplorasi kelanjutan Bootstrap 4 meliputi implementasi sistem Grid Layout, komponen Jumbotron, kustomisasi Google Fonts, serta pembuatan berbagai variasi Alert notifikasi akademik.</p>
                        </div>
                        <a href="{{ url('/pertemuan3') }}" class="btn btn-outline-info w-100 mt-3">Buka Tugas 3 (responsive.hyml)</a>
                        <a href="{{ url('/contoh') }}" class="btn btn-outline-info w-100 mt-3">Buka Tugas 3 (contoh.html)</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 card-custom text-white">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title text-warning fw-bold">Pertemuan 4</h5>
                            <p class="card-text text-white-50 small">Implementasi Two-Column Layout menggunakan Grid System Bootstrap, kustomisasi no-gutters, dan penataan tata letak fitur responsif.</p>
                        </div>
                        <a href="{{ url('/pertemuan4') }}" class="btn btn-outline-warning w-100 mt-3">Buka Tugas 4</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 card-custom text-white">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title text-warning fw-bold">Pertemuan 5</h5>
                            <p class="card-text text-white-50 small">Pengembangan landing page produk DELL XPS 14 berbasis komponen vendor template eksternal dengan integrasi fitur animasi AOS (Animate On Scroll) dan plugin GLightbox.</p>
                        </div>
                        <a href="{{ url('/pertemuan5') }}" class="btn btn-outline-warning w-100 mt-3">Buka Tugas 5</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 card-custom text-white">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title text-danger fw-bold">Pertemuan 6</h5>
                            <p class="card-text text-white-50 small">Pembuatan replika halaman Linktree Gama Reptile dengan implementasi JavaScript DOM untuk manipulasi teks dan style dinamis</p>
                        </div>
                        <a href="{{ url('/pertemuan6') }}" class="btn btn-outline-danger w-100 mt-3">Buka Tugas 6</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
