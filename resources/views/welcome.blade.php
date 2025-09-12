@include('layouts.header')

<head>
    <link rel="stylesheet" href="{{ asset('assets/css/ly/wel.css') }}" />
    <script src="{{ asset('assets/js/ly/wel.js') }}" defer></script>
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/fix/logodis.png') }}" alt="Logo" width="200" class="me-2">
        </a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#info" class="nav-link">Informasi</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Daftar</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#kontak" class="nav-link">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="container hero-content">
        <h1>Portal Penerimaan Magang</h1>
        <p>Dinas Komunikasi dan Informatika Kabupaten/Kota</p>
        <a href="{{ route('register') }}" class="btn btn-utama me-2">Daftar Sekarang</a>
        <a href="{{ route('login') }}" class="btn btn-utama2">Login</a>
    </div>
</section>

<!-- Informasi Section -->
<section class="info-section" id="info">
    <div class="container text-center">
        <h2>Tentang Program Magang</h2>
        <p class="text-muted mb-4">
            Program magang ini dibuka untuk mahasiswa dan pelajar yang ingin belajar serta berkontribusi 
            di bidang teknologi informasi dan komunikasi, bersama Dinas Kominfo.
        </p>
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5>Syarat Pendaftaran</h5>
                <p class="text-muted">Fotokopi KTM, CV, surat pengantar kampus/sekolah.</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5>Bidang Magang</h5>
                <p class="text-muted">Pengembangan Website, Jaringan, Multimedia, dan Administrasi.</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5>Kontak</h5>
                <p class="text-muted">Email: kominfo@kabkota.go.id<br>Telp: (021) 123456</p>
            </div>
        </div>
    </div>
</section>
</body>


