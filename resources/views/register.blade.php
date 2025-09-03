@include('layouts.header')

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 100%, #764ba2 0%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Background decoration */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(120, 119, 198, 0.2) 0%, transparent 50%);
            pointer-events: none;
        }

        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            position: relative;
            z-index: 1;
        }

        .register-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.1),
                0 10px 20px rgba(0, 0, 0, 0.05),
                inset 0 1px 0 rgba(255, 255, 255, 0.6);
            width: 100%;
            max-width: 520px;
            position: relative;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo-container {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.3);
        }

        .logo i {
            font-size: 2rem;
            color: white;
        }

        .brand-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 0.5rem;
        }

        .brand-subtitle {
            font-size: 0.9rem;
            color: #718096;
            font-weight: 400;
            margin-bottom: 0.25rem;
        }

        .register-subtitle {
            font-size: 0.85rem;
            color: #4a5568;
            font-weight: 500;
        }

        /* Form Row untuk 2 kolom */
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        /* Input Group Styling */
        .input-group-custom {
            margin-bottom: 1.25rem;
        }

        .input-group-custom.full-width {
            grid-column: 1 / -1;
        }

        .input-group-custom label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: #4a5568;
        }

        .input-wrapper {
            position: relative;
        }

        .form-control-custom {
            height: 56px;
            border: 2px solid #e2e8f0;
            border-radius: 14px;
            padding: 0 3rem 0 3rem;
            font-size: 0.95rem;
            background: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
            width: 100%;
            line-height: 1.5;
        }

        .form-control-custom:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            background: white;
            outline: none;
        }

        .form-control-custom.is-valid {
            border-color: #38a169;
            box-shadow: 0 0 0 3px rgba(56, 161, 105, 0.1);
        }

        .form-control-custom.is-invalid {
            border-color: #e53e3e;
            box-shadow: 0 0 0 3px rgba(229, 62, 62, 0.1);
        }

        /* Select Styling */
        .form-select-custom {
            height: 56px;
            border: 2px solid #e2e8f0;
            border-radius: 14px;
            padding: 0 3rem 0 3rem;
            font-size: 0.95rem;
            background: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
            width: 100%;
            appearance: none;
            cursor: pointer;
        }

        .form-select-custom:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            background: white;
            outline: none;
        }

        .select-arrow {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #718096;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #718096;
            z-index: 2;
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: none;
            color: #718096;
            cursor: pointer;
            z-index: 3;
            padding: 0.5rem;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .password-toggle:hover {
            color: #667eea;
            background: rgba(102, 126, 234, 0.1);
        }

        /* Dynamic field styling */
        .dynamic-field {
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .dynamic-field.show {
            opacity: 1;
            max-height: 100px;
        }

        .btn-register {
            height: 56px;
            border-radius: 14px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-register::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-register:hover::before {
            left: 100%;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(102, 126, 234, 0.3);
        }

        .btn-register:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        .divider {
            position: relative;
            text-align: center;
            margin: 1.5rem 0;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
        }

        .divider span {
            background: rgba(255, 255, 255, 0.95);
            padding: 0 1rem;
            color: #718096;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
        }

        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #5a67d8;
        }

        .floating-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) { left: 10%; animation-delay: 0s; width: 8px; height: 8px; }
        .particle:nth-child(2) { left: 20%; animation-delay: 1s; width: 6px; height: 6px; }
        .particle:nth-child(3) { left: 70%; animation-delay: 2s; width: 10px; height: 10px; }
        .particle:nth-child(4) { left: 80%; animation-delay: 3s; width: 4px; height: 4px; }
        .particle:nth-child(5) { left: 50%; animation-delay: 4s; width: 12px; height: 12px; }
        .particle:nth-child(6) { left: 30%; animation-delay: 5s; width: 7px; height: 7px; }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.4; }
            50% { transform: translateY(-25px) rotate(180deg); opacity: 0.8; }
        }

        /* Progress indicator */
        .progress-indicator {
            display: flex;
            justify-content: center;
            margin-bottom: 1.5rem;
            gap: 0.5rem;
        }

        .progress-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #e2e8f0;
            transition: all 0.3s ease;
        }

        .progress-dot.active {
            background: #667eea;
            transform: scale(1.2);
        }

        /* Validation messages */
        .validation-message {
            font-size: 0.75rem;
            margin-top: 0.25rem;
            padding-left: 0.5rem;
        }

        .validation-message.valid {
            color: #38a169;
        }

        .validation-message.invalid {
            color: #e53e3e;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .register-card {
                margin: 1rem;
                padding: 2rem 1.5rem;
            }
            
            .brand-title {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 576px) {
            .register-container {
                padding: 20px 10px;
            }
        }
    </style>

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
                    <a href="#">Masuk Disini</a>
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