@include('layouts.header')

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Navbar */
    .navbar {
        background: linear-gradient(135deg, #889becff 100%, #764ba2 0%);
    }
    .navbar-brand {
        font-weight: bold;
        color: #fff !important;
        text-transform: uppercase;
    }
    .nav-link {
        color: #1e2124ff !important;
        margin-right: 15px;
        font-size: 15px;
        font-weight: 500;
    }
    .nav-link:hover {
        color: #ffca28 !important;
    }

    /* Hero Section */
    .hero {
        background: url('{{ asset("assets/images/fix/bg2.jpg") }}') center no-repeat;
        background-size: 103%;
        top: 50px;
        min-height: 100vh;
        color: white;
        display: flex;
        align-items: center;
        text-align: center;
        position: relative;
    }
    .hero::after {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0, 0, 0, 0.6);
    }
    .hero-content {
        position: relative;
        z-index: 1;
        width: 100%;
    }
    .hero h1 {
        font-size: 3rem;
        font-weight: 700;
        text-transform: uppercase;
    }
    .hero p {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .btn-utama {
        background: #ffca28;
        border: none;
        padding: 12px 30px;
        font-weight: bold;
        border-radius: 30px;
        transition: 0.3s;
    }
    .btn-utama:hover {
        background: #ffc107;
        color: #000;
    }

    /* Section Info */
    .info-section {
        padding: 60px 20px;
    }
    .info-section h2 {
        font-weight: bold;
        margin-bottom: 20px;
        color: #0d47a1;
    }
</style>

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
        <a href="{{ route('login') }}" class="btn btn-light rounded-pill px-4">Login</a>
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
