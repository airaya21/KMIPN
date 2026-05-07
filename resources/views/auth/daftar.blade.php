<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>CERIA · Daftar Akun Baru | Tumbuh Kembang Cerdas</title>
  <!-- Tailwind + Google Fonts + Material Icons -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,400,0,0" />
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            'sans': ['Plus Jakarta Sans', 'system-ui', 'sans-serif'],
          },
          colors: {
            primary: '#004275',
            'primary-dark': '#00315c',
            'primary-light': '#eef5ff',
            secondary: '#705d00',
            accent: '#f5b042',
            'surface': '#f9f9fc',
            'surface-card': '#ffffff',
            'surface-muted': '#f2f2f6',
            'error': '#ba1a1a',
            'error-light': '#ffdede',
            'text-main': '#1A1C1E',
            'text-secondary': '#5D636B',
            'text-hint': '#8E939C',
            border: '#E2E4E8',
          },
          borderRadius: {
            'xl': '1rem',
            '2xl': '1.5rem',
            '3xl': '2rem',
          },
          boxShadow: {
            'elevation-sm': '0 4px 12px rgba(0, 0, 0, 0.03), 0 1px 2px rgba(0, 0, 0, 0.05)',
            'elevation-md': '0 12px 28px -8px rgba(0, 66, 117, 0.12), 0 4px 12px rgba(0, 0, 0, 0.02)',
            'elevation-lg': '0 20px 32px -12px rgba(0, 66, 117, 0.2)',
          },
          keyframes: {
            'fade-in-up': {
              '0%': { opacity: '0', transform: 'translateY(12px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            }
          },
          animation: {
            'fade-in-up': 'fade-in-up 0.35s ease-out',
          }
        }
      }
    }
  </script>
  <style>
    body {
      background: linear-gradient(145deg, #f5f7fc 0%, #f0f2f8 100%);
    }

    .role-card {
      transition: all 0.2s cubic-bezier(0.2, 0.9, 0.4, 1.1);
      cursor: pointer;
      background: #f8f8fc;
      border: 1.5px solid transparent;
    }

    .role-card:hover {
      transform: translateY(-2px);
      background: #ffffff;
      border-color: #cbd5e1;
      box-shadow: 0 6px 12px -6px rgba(0,0,0,0.05);
    }

    .role-card.active {
      background: #eef5ff;
      border-color: #004275;
      color: #004275;
      box-shadow: 0 4px 12px rgba(0,66,117,0.08);
    }

    .role-card.active .material-symbols-outlined {
      font-variation-settings: 'FILL' 1;
    }

    .input-field {
      background-color: #ffffff;
      border: 1px solid #e2e4e8;
      transition: all 0.2s ease;
    }

    .input-field:focus {
      border-color: #004275;
      box-shadow: 0 0 0 4px rgba(0,66,117,0.1);
      outline: none;
    }

    .input-field:hover:not(:focus) {
      border-color: #b9c1cc;
      background-color: #fefefe;
    }

    button:active {
      transform: scale(0.98);
    }

    button:focus-visible, .role-card:focus-visible, a:focus-visible, input:focus-visible {
      outline: 3px solid #004275;
      outline-offset: 2px;
    }

    .helper-text {
      font-size: 0.75rem;
      color: #5D636B;
      margin-top: 0.25rem;
    }
  </style>
</head>
<body class="font-sans text-text-main antialiased min-h-screen flex items-center justify-center px-4 py-8 md:py-12">
  <main class="w-full max-w-[1120px] mx-auto">
    <div class="flex flex-col lg:flex-row gap-8 items-center lg:items-stretch">
      
      <!-- Kiri: Brand & Value Proposition -->
      <div class="flex-1 flex flex-col justify-center lg:pr-4 space-y-6 animate-fade-in-up">
        <div class="inline-flex items-center gap-3 bg-white/70 backdrop-blur-sm rounded-full px-4 py-2 w-fit shadow-sm border border-white/40">
          <span class="w-2.5 h-2.5 bg-primary rounded-full animate-pulse"></span>
          <span class="text-xs font-bold tracking-wide text-primary uppercase">#TumbuhCERIA</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-[1.2] tracking-tight text-primary-dark max-w-[700px]">
          Kelola tumbuh kembang
          <span class="bg-gradient-to-r from-primary to-[#2c7ab1] bg-clip-text text-transparent">
            dengan kecerdasan & sentuhan hangat
          </span>
        </h1>

        <p class="text-text-secondary text-lg max-w-md">
          Bergabunglah dengan ribuan orang tua, pengasuh, dan mitra PAUD dalam ekosistem terintegrasi CERIA.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2 max-w-[700px]">
          <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-primary-light flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-primary text-[18px]">verified</span>
            </div>
            <span class="text-sm font-medium">Data terenkripsi</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-primary-light flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-primary text-[18px]">diversity_3</span>
            </div>
            <span class="text-sm font-medium">Kolaborasi real-time</span>
          </div>
        </div>

        <div class="pt-3 flex items-center gap-4 text-text-hint text-sm">
          <span class="flex items-center gap-1">
            <span class="material-symbols-outlined text-[18px]">star_rate</span>
            4.9 / 5
          </span>
          <span class="w-1 h-1 rounded-full bg-border"></span>
          <span>10.000+ pengguna aktif</span>
        </div>
      </div>
      
      <!-- Kanan: Form Pendaftaran -->
      <div class="flex-1 max-w-[480px] w-full mx-auto lg:mx-0">
        <div class="bg-surface-card rounded-3xl shadow-elevation-lg border border-white/50 p-6 md:p-8">
          
          <div class="mb-6 text-center md:text-left">
            <div class="flex items-center justify-center md:justify-start gap-2 mb-1">
              <div class="w-9 h-9 rounded-xl bg-primary-light flex items-center justify-center">
                <span class="material-symbols-outlined text-primary text-2xl">diversity_3</span>
              </div>
              <span class="font-extrabold text-2xl tracking-tight text-primary-dark">CERIA</span>
            </div>
            <h2 class="text-xl md:text-2xl font-bold mt-2">Daftar akun baru</h2>
            <p class="text-text-secondary text-sm mt-1">Lengkapi data diri untuk menikmati fitur lengkap CERIA.</p>
          </div>

          <form id="registerForm" class="space-y-5" novalidate>
            <!-- Nama Lengkap -->
            <div>
              <label class="block text-xs font-bold uppercase tracking-wide text-text-secondary mb-1.5">Nama lengkap</label>
              <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-text-hint text-xl">badge</span>
                <input type="text" id="fullName" name="fullName" placeholder="Contoh: Budi Santoso" 
                       class="input-field w-full pl-11 pr-4 py-3 rounded-xl text-base bg-white placeholder:text-text-hint/70">
              </div>
              <div id="fullNameError" class="helper-text hidden text-error"></div>
            </div>

            <!-- Email -->
            <div>
              <label class="block text-xs font-bold uppercase tracking-wide text-text-secondary mb-1.5">Alamat email</label>
              <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-text-hint text-xl">mail</span>
                <input type="email" id="email" name="email" placeholder="contoh@ceria.id" 
                       class="input-field w-full pl-11 pr-4 py-3 rounded-xl text-base bg-white">
              </div>
              <div id="emailError" class="helper-text hidden text-error"></div>
            </div>

            <!-- Kata Sandi -->
            <div>
              <label class="block text-xs font-bold uppercase tracking-wide text-text-secondary mb-1.5">Kata sandi</label>
              <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-text-hint text-xl">lock</span>
                <input type="password" id="password" name="password" placeholder="Buat sandi yang kuat" 
                       class="input-field w-full pl-11 pr-12 py-3 rounded-xl bg-white">
                <button type="button" id="togglePassword" class="absolute right-3 top-1/2 -translate-y-1/2 text-text-hint hover:text-primary transition-colors p-1 rounded-full">
                  <span class="material-symbols-outlined text-xl">visibility_off</span>
                </button>
              </div>
              <div id="passwordError" class="helper-text hidden text-error"></div>
              <p class="text-xs text-text-hint mt-1">Minimal 8 karakter, kombinasi huruf dan angka</p>
            </div>

            <!-- Role -->
            <div>
              <label class="block text-xs font-bold uppercase tracking-wide text-text-secondary mb-2">Pilih peran Anda</label>
              <div class="grid grid-cols-3 gap-2.5">
                <div data-role="admin" class="role-card flex flex-col items-center gap-1 p-3 rounded-xl">
                  <span class="material-symbols-outlined text-2xl">admin_panel_settings</span>
                  <span class="text-sm font-semibold">Admin</span>
                </div>
                <div data-role="parent" class="role-card flex flex-col items-center gap-1 p-3 rounded-xl active">
                  <span class="material-symbols-outlined text-2xl">family_restroom</span>
                  <span class="text-sm font-semibold">Orang Tua</span>
                </div>
                <div data-role="caregiver" class="role-card flex flex-col items-center gap-1 p-3 rounded-xl">
                  <span class="material-symbols-outlined text-2xl">handshake</span>
                  <span class="text-sm font-semibold">Pengasuh</span>
                </div>
              </div>
              <input type="hidden" id="selectedRole" value="parent">
            </div>

            <!-- Kode Daycare -->
            <div>
              <label class="block text-xs font-bold uppercase tracking-wide text-text-secondary mb-1.5">Kode daycare <span class="font-normal lowercase text-text-hint">(opsional)</span></label>
              <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-text-hint text-xl">apartment</span>
                <input type="text" id="daycareCode" maxlength="8" placeholder="Contoh: CDC-1234" 
                       class="input-field w-full pl-11 pr-4 py-3 rounded-xl bg-white">
              </div>
              <p class="helper-text">Masukkan kode daycare jika Anda sudah memiliki undangan dari lembaga</p>
            </div>

            <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-white font-bold py-3.5 rounded-xl shadow-md shadow-primary/20 transition-all transform active:scale-[0.98] flex items-center justify-center gap-2 mt-2 text-base">
              <span class="material-symbols-outlined text-xl">how_to_reg</span>
              Daftar Sekarang
            </button>

            <div id="formGlobalMsg" class="text-center text-sm mt-2"></div>

            <!-- Pemisah -->
            <div class="relative my-5">
              <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-border"></div>
              </div>
              <div class="relative flex justify-center text-xs">
                <span class="bg-surface-card px-3 text-text-hint">Sudah punya akun?</span>
              </div>
            </div>

            <!-- Login Link -->
            <div class="text-center">
              <a href="#" id="loginLink" class="text-primary font-semibold hover:underline transition inline-flex items-center gap-1 text-base">
                Masuk ke akun Anda
                <span class="material-symbols-outlined text-base">login</span>
              </a>
              <p class="text-text-hint text-xs mt-1">Klik di sini jika Anda sudah terdaftar</p>
            </div>
          </form>
        </div>
        
        <!-- Footer kepercayaan -->
        <div class="text-center mt-5 flex justify-center gap-6 text-[11px] font-medium text-text-hint">
          <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">shield_lock</span> Perlindungan data</span>
          <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">support_agent</span> Bantuan 24/7</span>
        </div>
      </div>
    </div>

    <!-- Footer bawah: benefit utama -->
    <div class="mt-16 border-t border-border/60 pt-8 flex flex-wrap justify-center gap-x-12 gap-y-4 text-text-secondary text-sm">
      <div class="flex items-center gap-2"><span class="material-symbols-outlined text-primary">check_circle</span> Pantau tumbuh kembang anak</div>
      <div class="flex items-center gap-2"><span class="material-symbols-outlined text-primary">auto_awesome</span> Rekomendasi aktivitas berbasis AI</div>
      <div class="flex items-center gap-2"><span class="material-symbols-outlined text-primary">calendar_month</span> Laporan harian & bulanan</div>
    </div>
  </main>

  <script>
    (function() {
      const roleCards = document.querySelectorAll('[data-role]');
      const roleHidden = document.getElementById('selectedRole');
      const togglePasswordBtn = document.getElementById('togglePassword');
      const passwordInput = document.getElementById('password');
      const form = document.getElementById('registerForm');
      
      const fullNameError = document.getElementById('fullNameError');
      const emailError = document.getElementById('emailError');
      const passwordError = document.getElementById('passwordError');
      const globalMsg = document.getElementById('formGlobalMsg');

      const fullNameInput = document.getElementById('fullName');
      const emailInput = document.getElementById('email');
      const pwInput = document.getElementById('password');

      function setError(element, errorDiv, message) {
        if (message) {
          errorDiv.innerText = message;
          errorDiv.classList.remove('hidden');
          element.classList.add('border-error', 'bg-error-light/10');
        } else {
          errorDiv.classList.add('hidden');
          element.classList.remove('border-error', 'bg-error-light/10');
        }
      }

      function validateFullName() {
        const val = fullNameInput.value.trim();
        if (val === '') {
          setError(fullNameInput, fullNameError, 'Nama lengkap tidak boleh kosong');
          return false;
        }
        if (val.length < 3) {
          setError(fullNameInput, fullNameError, 'Minimal 3 karakter');
          return false;
        }
        setError(fullNameInput, fullNameError, null);
        return true;
      }

      function validateEmail() {
        const email = emailInput.value.trim();
        const emailPattern = /^[^\s@]+@([^\s@]+\.)+[^\s@]+$/;
        if (!email) {
          setError(emailInput, emailError, 'Email wajib diisi');
          return false;
        }
        if (!emailPattern.test(email)) {
          setError(emailInput, emailError, 'Masukkan email yang valid (contoh: nama@domain.com)');
          return false;
        }
        setError(emailInput, emailError, null);
        return true;
      }

      function validatePassword() {
        const pwd = pwInput.value;
        if (pwd.length === 0) {
          setError(pwInput, passwordError, 'Kata sandi diperlukan');
          return false;
        }
        if (pwd.length < 8) {
          setError(pwInput, passwordError, 'Kata sandi minimal 8 karakter');
          return false;
        }
        const hasLetter = /[a-zA-Z]/.test(pwd);
        const hasNumber = /[0-9]/.test(pwd);
        if (!hasLetter || !hasNumber) {
          setError(pwInput, passwordError, 'Gunakan kombinasi huruf dan angka agar lebih aman');
          return false;
        }
        setError(pwInput, passwordError, null);
        return true;
      }

      fullNameInput.addEventListener('blur', validateFullName);
      emailInput.addEventListener('blur', validateEmail);
      pwInput.addEventListener('blur', validatePassword);
      
      function setActiveRole(roleValue) {
        roleCards.forEach(card => {
          const cardRole = card.getAttribute('data-role');
          if (cardRole === roleValue) {
            card.classList.add('active');
          } else {
            card.classList.remove('active');
          }
        });
        roleHidden.value = roleValue;
      }
      
      roleCards.forEach(card => {
        card.addEventListener('click', () => {
          const roleVal = card.getAttribute('data-role');
          setActiveRole(roleVal);
        });
        card.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            const roleVal = card.getAttribute('data-role');
            setActiveRole(roleVal);
          }
        });
        card.setAttribute('tabindex', '0');
        card.setAttribute('role', 'button');
        const roleName = card.querySelector('span:last-child')?.innerText || '';
        card.setAttribute('aria-label', `Pilih peran ${roleName}`);
      });
      
      if (togglePasswordBtn && passwordInput) {
        let isPasswordVisible = false;
        togglePasswordBtn.addEventListener('click', () => {
          isPasswordVisible = !isPasswordVisible;
          passwordInput.type = isPasswordVisible ? 'text' : 'password';
          const iconSpan = togglePasswordBtn.querySelector('.material-symbols-outlined');
          if (iconSpan) iconSpan.innerText = isPasswordVisible ? 'visibility' : 'visibility_off';
        });
      }
      
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const isNameValid = validateFullName();
        const isEmailValid = validateEmail();
        const isPasswordValid = validatePassword();
        
        if (!isNameValid || !isEmailValid || !isPasswordValid) {
          globalMsg.innerHTML = '<span class="text-error flex items-center justify-center gap-1"><span class="material-symbols-outlined text-sm">error</span> Mohon periksa kembali data Anda</span>';
          globalMsg.classList.remove('hidden');
          const firstError = document.querySelector('.border-error');
          if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
          return;
        }
        
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="material-symbols-outlined animate-spin text-xl">progress_activity</span> Mendaftarkan...';
        
        setTimeout(() => {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
          globalMsg.innerHTML = '<span class="text-green-700 bg-green-50 py-2 px-3 rounded-full text-sm flex items-center justify-center gap-2"><span class="material-symbols-outlined text-base">check_circle</span> Pendaftaran berhasil! Selamat datang di CERIA.</span>';
          globalMsg.classList.remove('hidden');
          
          setTimeout(() => {
            alert('✨ Akun berhasil dibuat! (Demo: halaman selanjutnya akan mengarahkan Anda ke dashboard/login.)');
          }, 1500);
        }, 1000);
      });
      
      setActiveRole('parent');
      
      document.querySelectorAll('.input-field').forEach(input => {
        input.setAttribute('aria-invalid', 'false');
        input.addEventListener('invalid', (e) => e.preventDefault());
      });

      const loginLink = document.getElementById('loginLink');
      if (loginLink) {
        loginLink.addEventListener('click', (e) => {
          e.preventDefault();
          alert('🔐 Halaman login akan tersedia segera. (Integrasi dengan sistem autentikasi)');
        });
      }
    })();
  </script>
</body>
</html>