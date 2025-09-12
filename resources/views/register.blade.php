@include('layouts.header')

<head>
	<link rel="stylesheet" href="{{ asset('assets/css/ly/regis.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" defer></script>
    <script src="{{ asset('assets/js/ly/reg.js') }}" defer></script>
</head>

    <body>
    <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="register-container">
        <div class="register-card">
            <div class="logo-container">
                <div class="logo">
                    <i class="bi bi-person-plus"></i>
                </div>
                <h2 class="brand-title">KOMINFO</h2>
                <p class="brand-subtitle">Dinas Komunikasi dan Informatika</p>
                <p class="register-subtitle">Pendaftaran Akun Magang</p>
            </div>

            <div class="progress-indicator">
                <div class="progress-dot active"></div>
                <div class="progress-dot"></div>
                <div class="progress-dot"></div>
            </div>

            <form id="registerForm">
                <div class="form">
                    <div class="input-group-custom">
                        <label for="fullName">Nama Lengkap</label>
                        <div class="input-wrapper">
                            <i class="bi bi-person input-icon"></i>
                            <input type="text" class="form-control-custom" id="fullName" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="validation-message" id="fullNameValidation"></div>
                    </div>

                    <div class="input-group-custom">
                        <label for="userType">Jenis Pengguna</label>
                        <div class="input-wrapper">
                            <i class="bi bi-mortarboard input-icon"></i>
                            <select class="form-select-custom" id="userType" required>
                                <option value="">Pilih jenis pengguna</option>
                                <option value="siswa">Siswa</option>
                                <option value="mahasiswa">Mahasiswa</option>
                                <option value="guru">Guru Pendamping</option>
                                <option value="dosen">Dosen</option>
                            </select>
                            <i class="bi bi-chevron-down select-arrow"></i>
                        </div>
                    </div>
                </div>

                <div class="form">
                    <div class="input-group-custom" id="numberFieldGroup">
                        <label for="identityNumber" id="numberLabel">NIM/NIDN/NIS/NIP</label>
                        <div class="input-wrapper">
                            <i class="bi bi-card-text input-icon"></i>
                            <input type="text" class="form-control-custom" id="identityNumber" placeholder="Masukkan nomor identitas" required>
                        </div>
                        <div class="validation-message" id="numberValidation"></div>
                    </div>

                    <div class="input-group-custom">
                        <label for="department" id="departmentLabel">Jurusan/Prodi</label>
                        <div class="input-wrapper">
                            <i class="bi bi-building input-icon"></i>
                            <input type="text" class="form-control-custom" id="department" placeholder="Masukkan jurusan/prodi" required>
                        </div>
                    </div>
                </div>

                <div class="input-group-custom full-width">
                    <label for="email">Alamat Email</label>
                    <div class="input-wrapper">
                        <i class="bi bi-envelope input-icon"></i>
                        <input type="email" class="form-control-custom" id="email" placeholder="nama@example.com" required>
                    </div>
                    <div class="validation-message" id="emailValidation"></div>
                </div>

                <div class="form">
                    <div class="input-group-custom">
                        <label for="password">Kata Sandi</label>
                        <div class="input-wrapper">
                            <i class="bi bi-lock input-icon"></i>
                            <input type="password" class="form-control-custom" id="password" placeholder="Minimal 8 karakter" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('password', 'toggleIcon1')">
                                <i class="bi bi-eye" id="toggleIcon1"></i>
                            </button>
                        </div>
                        <div class="validation-message" id="passwordValidation"></div>
                    </div>

                    <div class="input-group-custom">
                        <label for="confirmPassword">Konfirmasi Kata Sandi</label>
                        <div class="input-wrapper">
                            <i class="bi bi-lock input-icon"></i>
                            <input type="password" class="form-control-custom" id="confirmPassword" placeholder="Ulangi kata sandi" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword', 'toggleIcon2')">
                                <i class="bi bi-eye" id="toggleIcon2"></i>
                            </button>
                        </div>
                        <div class="validation-message" id="confirmPasswordValidation"></div>
                    </div>
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-register" id="registerBtn">
                        <i class="bi bi-person-plus me-2"></i>
                        Daftar Sekarang
                    </button>
                </div>

                <div class="login-link">
                    <span class="text-muted">Sudah memiliki akun? </span>
                    <a href="{{ route('login') }}">Masuk Disini</a>
                </div>
            </form>
        </div>
    </div>
</body>