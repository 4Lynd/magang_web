@include('layouts.header')

<head>
	<link rel="stylesheet" href="{{ asset('assets/css/regis.css') }}" />
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = document.getElementById(iconId);
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.className = 'bi bi-eye-slash';
            } else {
                passwordInput.type = 'password';
                toggleIcon.className = 'bi bi-eye';
            }
        }

        // Update label dan placeholder berdasarkan jenis pengguna
        function updateFieldLabels(userType) {
            const numberLabel = document.getElementById('numberLabel');
            const numberInput = document.getElementById('identityNumber');
            const departmentLabel = document.getElementById('departmentLabel');
            const departmentInput = document.getElementById('department');

            switch(userType) {
                case 'siswa':
                    numberLabel.textContent = 'NIS';
                    numberInput.placeholder = 'Masukkan NIS';
                    departmentLabel.textContent = 'Jurusan';
                    departmentInput.placeholder = 'Masukkan jurusan';
                    break;
                case 'mahasiswa':
                    numberLabel.textContent = 'NIM';
                    numberInput.placeholder = 'Masukkan NIM';
                    departmentLabel.textContent = 'Program Studi';
                    departmentInput.placeholder = 'Masukkan program studi';
                    break;
                case 'guru':
                    numberLabel.textContent = 'NIP';
                    numberInput.placeholder = 'Masukkan NIP';
                    departmentLabel.textContent = 'Mata Pelajaran';
                    departmentInput.placeholder = 'Masukkan mata pelajaran';
                    break;
                case 'dosen':
                    numberLabel.textContent = 'NIDN';
                    numberInput.placeholder = 'Masukkan NIDN';
                    departmentLabel.textContent = 'Program Studi';
                    departmentInput.placeholder = 'Masukkan program studi';
                    break;
                default:
                    numberLabel.textContent = 'NIM/NIDN/NIS/NIP';
                    numberInput.placeholder = 'Masukkan nomor identitas';
                    departmentLabel.textContent = 'Jurusan/Prodi';
                    departmentInput.placeholder = 'Masukkan jurusan/prodi';
            }
        }

        // Validasi real-time
        function validateField(input, validationType) {
            const value = input.value.trim();
            let isValid = false;
            let message = '';

            switch(validationType) {
                case 'fullName':
                    isValid = value.length >= 2 && /^[a-zA-Z\s]+$/.test(value);
                    message = isValid ? '✓ Nama valid' : 'Nama harus minimal 2 karakter dan hanya huruf';
                    break;
                
                case 'identityNumber':
                    const userType = document.getElementById('userType').value;
                    if (userType) {
                        isValid = value.length >= 6 && /^\d+$/.test(value);
                        message = isValid ? '✓ Nomor identitas valid' : 'Nomor identitas harus berupa angka minimal 6 digit';
                    }
                    break;
                
                case 'email':
                    isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
                    message = isValid ? '✓ Email valid' : 'Format email tidak valid';
                    break;
                
                case 'password':
                    isValid = value.length >= 8 && /(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/.test(value);
                    message = isValid ? '✓ Password kuat' : 'Password harus minimal 8 karakter dengan huruf besar, kecil, dan angka';
                    break;
                
                case 'confirmPassword':
                    const password = document.getElementById('password').value;
                    isValid = value === password && value.length > 0;
                    message = isValid ? '✓ Password cocok' : 'Password tidak cocok';
                    break;
            }

            // Update UI
            input.classList.toggle('is-valid', isValid);
            input.classList.toggle('is-invalid', !isValid && value.length > 0);
            
            const validationElement = document.getElementById(validationType + 'Validation');
            if (validationElement) {
                validationElement.textContent = value.length > 0 ? message : '';
                validationElement.className = `validation-message ${isValid && value.length > 0 ? 'valid' : 'invalid'}`;
            }

            return isValid;
        }

        // Update progress indicator
        function updateProgress() {
            const form = document.getElementById('registerForm');
            const inputs = form.querySelectorAll('input[required], select[required]');
            const dots = document.querySelectorAll('.progress-dot');
            let filledFields = 0;

            inputs.forEach(input => {
                if (input.value.trim()) filledFields++;
            });

            const progress = Math.ceil((filledFields / inputs.length) * 3);
            
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index < progress);
            });
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registerForm');
            const inputs = form.querySelectorAll('.form-control-custom, .form-select-custom');

            // User type change listener
            document.getElementById('userType').addEventListener('change', function() {
                updateFieldLabels(this.value);
                updateProgress();
            });

            // Validation listeners
            document.getElementById('fullName').addEventListener('input', function() {
                validateField(this, 'fullName');
                updateProgress();
            });

            document.getElementById('identityNumber').addEventListener('input', function() {
                validateField(this, 'identityNumber');
                updateProgress();
            });

            document.getElementById('email').addEventListener('input', function() {
                validateField(this, 'email');
                updateProgress();
            });

            document.getElementById('password').addEventListener('input', function() {
                validateField(this, 'password');
                validateField(document.getElementById('confirmPassword'), 'confirmPassword');
                updateProgress();
            });

            document.getElementById('confirmPassword').addEventListener('input', function() {
                validateField(this, 'confirmPassword');
                updateProgress();
            });

            // Other field progress tracking
            document.getElementById('department').addEventListener('input', updateProgress);

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validate all fields
                const isFullNameValid = validateField(document.getElementById('fullName'), 'fullName');
                const isNumberValid = validateField(document.getElementById('identityNumber'), 'identityNumber');
                const isEmailValid = validateField(document.getElementById('email'), 'email');
                const isPasswordValid = validateField(document.getElementById('password'), 'password');
                const isConfirmPasswordValid = validateField(document.getElementById('confirmPassword'), 'confirmPassword');
                const isUserTypeSelected = document.getElementById('userType').value !== '';
                const isDepartmentFilled = document.getElementById('department').value.trim() !== '';

                if (isFullNameValid && isNumberValid && isEmailValid && isPasswordValid && 
                    isConfirmPasswordValid && isUserTypeSelected && isDepartmentFilled) {
                    
                    const submitBtn = document.getElementById('registerBtn');
                    const originalText = submitBtn.innerHTML;
                    
                    submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Memproses...';
                    submitBtn.disabled = true;

                    // Simulate registration process
                    setTimeout(() => {
                        submitBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Berhasil Terdaftar!';
                        setTimeout(() => {
                            submitBtn.innerHTML = originalText;
                            submitBtn.disabled = false;
                            // Here you would typically redirect to login or dashboard
                        }, 1500);
                    }, 2500);
                } else {
                    // Show validation errors
                    inputs.forEach(input => {
                        if (input.hasAttribute('required') && !input.value.trim()) {
                            input.classList.add('is-invalid');
                        }
                    });
                }
            });

            // Focus and blur effects
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });

                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });
            });
        });
    </script>
</body>