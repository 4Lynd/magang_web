@include('layouts.header')

<head>
	<link rel="stylesheet" href="{{ asset('assets/css/ly/log.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/ly/log.js') }}" defer></script>
</head>

<body>
<!-- Container start -->
		<div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="login-container">
        <div class="login-card">
            <div class="logo-container">
                <div class="logo">
                    <i class="bi bi-globe"></i>
                </div>
                <h2 class="brand-title">KOMINFO</h2>
                <p class="brand-subtitle">Dinas Komunikasi dan Informatika</p>
                <p class="brand-subtitle">Silakan masuk untuk mengakses dashboard</p>
            </div>

            <form>
                <div class="input-group-custom">
                    <label for="email">Alamat Email</label>
                    <div class="input-wrapper">
                        <i class="bi bi-envelope input-icon"></i>
                        <input type="email" class="form-control-custom" id="email" placeholder="name@example.com" required>
                    </div>
                </div>

                <div class="input-group-custom">
                    <label for="password">Kata Sandi</label>
                    <div class="input-wrapper">
                        <i class="bi bi-lock input-icon"></i>
                        <input type="password" class="form-control-custom" id="password" placeholder="Masukkan kata sandi" required>
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <i class="bi bi-eye" id="toggleIcon"></i>
                        </button>
                    </div>
                </div>

                <div class="form-check-custom">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="remember">
                        <label class="form-check-label" for="remember">
                            Ingat Saya
                        </label>
                    </div>
                    <a href="#" class="forgot-link">Lupa Password?</a>
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-login">
                        <i class="bi bi-box-arrow-in-right me-2"></i>
                        Masuk
                    </button>
                </div>

                <div class="divider">
                    <span>atau masuk dengan</span>
                </div>

                <div class="d-grid">
                    <button type="button" class="btn btn-google">
                        <i class="bi bi-google me-2"></i>
                        Masuk dengan Google
                    </button>
                </div>

                <div class="signup-link">
                    <span class="text-muted">Belum memiliki akun? </span>
                    <a href="{{ route('register') }}">Daftar Sekarang</a>
                </div>
            </form>
        </div>
    </div>
    <script>
        
    </script>
		<!-- Container end -->

</body>