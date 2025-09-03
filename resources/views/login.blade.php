@include('layouts.header')

<head>
	<link rel="stylesheet" href="{{ asset('assets/css/log.css') }}" />
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.className = 'bi bi-eye-slash';
            } else {
                passwordInput.type = 'password';
                toggleIcon.className = 'bi bi-eye';
            }
        }

        // Form validation and smooth interactions
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const inputs = form.querySelectorAll('.form-control-custom');

            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });

                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });

                input.addEventListener('input', function() {
                    if (this.value) {
                        this.parentElement.classList.add('has-value');
                    } else {
                        this.parentElement.classList.remove('has-value');
                    }
                });
            });

            // Smooth form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const submitBtn = form.querySelector('.btn-login');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Memproses...';
                submitBtn.disabled = true;

                // Simulate loading
                setTimeout(() => {
                    submitBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Berhasil!';
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }, 1000);
                }, 2000);
            });
        });
    </script>
		<!-- Container end -->

</body>