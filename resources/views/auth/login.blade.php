<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>CERIA · Masuk | Tumbuh Kembang Cerdas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,400,0,0" />
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: { 'sans': ['Plus Jakarta Sans', 'system-ui', 'sans-serif'] },
          colors: {
            primary: '#004275', 'primary-dark': '#00315c', 'primary-light': '#eef5ff',
            'surface-card': '#ffffff', 'error': '#ba1a1a',
            'text-main': '#1A1C1E', 'text-secondary': '#5D636B', 'text-hint': '#8E939C',
            border: '#E2E4E8',
          },
          boxShadow: {
            'elevation-lg': '0 20px 32px -12px rgba(0, 66, 117, 0.2)',
          },
          keyframes: {
            'fade-up': { '0%': { opacity:'0', transform:'translateY(16px)' }, '100%': { opacity:'1', transform:'translateY(0)' } }
          },
          animation: { 'fade-up': 'fade-up 0.4s ease-out both' }
        }
      }
    }
  </script>
  <style>
    body { background: linear-gradient(145deg,#f5f7fc 0%,#eef1f8 100%); }

    .role-card {
      cursor: pointer; border: 2px solid #e2e4e8;
      background: #f8f8fc; border-radius: 1rem;
      transition: all 0.22s cubic-bezier(0.2,0.9,0.4,1.1);
      position: relative; overflow: hidden;
    }
    .role-card:hover { transform: translateY(-3px); background:#fff; border-color:#a8bdd4; box-shadow:0 8px 20px -6px rgba(0,66,117,0.12); }
    .role-card.active-admin  { background:linear-gradient(135deg,#eef5ff,#dceeff); border-color:#004275; color:#004275; transform:translateY(-2px); box-shadow:0 6px 16px rgba(0,66,117,0.18); }
    .role-card.active-parent { background:linear-gradient(135deg,#fffbeb,#fef3c7); border-color:#92400e; color:#92400e; transform:translateY(-2px); box-shadow:0 6px 16px rgba(146,64,14,0.15); }
    .role-card.active-caregiver { background:linear-gradient(135deg,#f0fdf4,#dcfce7); border-color:#166534; color:#166534; transform:translateY(-2px); box-shadow:0 6px 16px rgba(22,101,52,0.15); }

    .role-badge { opacity:0; transform:scale(0.4); transition: all 0.2s cubic-bezier(0.34,1.56,0.64,1); }
    .role-card[class*="active"] .role-badge { opacity:1; transform:scale(1); }
    .role-card[class*="active"] .role-icon { font-variation-settings:'FILL' 1; }

    .input-field { background:#fff; border:1.5px solid #e2e4e8; transition:all 0.2s ease; }
    .input-field:focus { border-color:#004275; box-shadow:0 0 0 4px rgba(0,66,117,0.1); outline:none; }
    .input-field:hover:not(:focus) { border-color:#b9c1cc; }
    .input-field.is-error { border-color:#ba1a1a; background:#fff8f8; }

    .btn-login { background:linear-gradient(135deg,#004275,#005fa8); transition:all 0.2s ease; }
    .btn-login:hover { background:linear-gradient(135deg,#00315c,#004275); box-shadow:0 10px 24px -6px rgba(0,66,117,0.4); transform:translateY(-1px); }
    .btn-login:active { transform:scale(0.98); }
    .btn-login:disabled { opacity:0.7; cursor:not-allowed; transform:none; }

    .stagger-1 { animation: fade-up 0.4s 0.05s ease-out both; }
    .stagger-2 { animation: fade-up 0.4s 0.12s ease-out both; }
    .stagger-3 { animation: fade-up 0.4s 0.19s ease-out both; }
    .stagger-4 { animation: fade-up 0.4s 0.26s ease-out both; }
    .stagger-5 { animation: fade-up 0.4s 0.33s ease-out both; }
  </style>
</head>
<body class="font-sans text-text-main antialiased min-h-screen flex items-center justify-center px-4 py-10">
<main class="w-full max-w-[1100px] mx-auto">
  <div class="flex flex-col lg:flex-row gap-10 items-center lg:items-stretch">

    {{-- KIRI: Branding --}}
    <div class="flex-1 flex flex-col justify-center space-y-6 animate-fade-up">
      <div class="inline-flex items-center gap-2 bg-white/70 backdrop-blur-sm rounded-full px-4 py-2 w-fit shadow-sm border border-white/50">
        <span class="w-2.5 h-2.5 bg-primary rounded-full animate-pulse"></span>
        <span class="text-xs font-bold tracking-widest text-primary uppercase">#TumbuhCERIA</span>
      </div>

      <h1 class="text-4xl md:text-5xl font-extrabold leading-tight tracking-tight text-primary-dark">
        Selamat datang<br>
        <span class="bg-gradient-to-r from-primary to-[#2c7ab1] bg-clip-text text-transparent">kembali ke CERIA</span>
      </h1>
      <p class="text-text-secondary text-base max-w-sm">Masuk sesuai peran Anda dan akses fitur yang dipersonalisasi.</p>

      <div class="space-y-3 max-w-sm">
        <div class="flex items-center gap-3 bg-white/60 border border-white/60 rounded-2xl p-4 backdrop-blur-sm">
          <div class="w-9 h-9 rounded-xl bg-primary-light flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-primary text-[20px]">admin_panel_settings</span>
          </div>
          <div>
            <p class="font-semibold text-sm">Admin</p>
            <p class="text-text-hint text-xs">Kelola seluruh data & sistem CERIA</p>
          </div>
        </div>
        <div class="flex items-center gap-3 bg-white/60 border border-white/60 rounded-2xl p-4 backdrop-blur-sm">
          <div class="w-9 h-9 rounded-xl bg-amber-50 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-amber-700 text-[20px]">family_restroom</span>
          </div>
          <div>
            <p class="font-semibold text-sm">Orang Tua</p>
            <p class="text-text-hint text-xs">Pantau tumbuh kembang anak Anda</p>
          </div>
        </div>
        <div class="flex items-center gap-3 bg-white/60 border border-white/60 rounded-2xl p-4 backdrop-blur-sm">
          <div class="w-9 h-9 rounded-xl bg-green-50 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-green-700 text-[20px]">handshake</span>
          </div>
          <div>
            <p class="font-semibold text-sm">Pengasuh</p>
            <p class="text-text-hint text-xs">Catat aktivitas & laporan anak</p>
          </div>
        </div>
      </div>
    </div>

    {{-- KANAN: Form Login --}}
    <div class="flex-1 max-w-[460px] w-full mx-auto lg:mx-0">
      <div class="bg-surface-card rounded-3xl shadow-elevation-lg border border-white/60 p-7 md:p-9">

        {{-- Header --}}
        <div class="mb-7 stagger-1">
          <div class="flex items-center gap-2 mb-4">
            <div class="w-9 h-9 rounded-xl bg-primary-light flex items-center justify-center">
              <span class="material-symbols-outlined text-primary text-xl">diversity_3</span>
            </div>
            <span class="font-extrabold text-2xl tracking-tight text-primary-dark">CERIA</span>
          </div>
          <h2 class="text-xl font-bold">Masuk ke akun Anda</h2>
          <p class="text-text-secondary text-sm mt-1">Pilih peran, lalu masukkan email dan kata sandi.</p>
        </div>

        {{-- Error/Success Alert --}}
        @if ($errors->any())
        <div class="mb-5 p-4 bg-red-50 border border-red-200 rounded-2xl flex items-start gap-3 stagger-1">
          <span class="material-symbols-outlined text-error text-lg mt-0.5 shrink-0">error</span>
          <div class="space-y-0.5">
            @foreach ($errors->all() as $error)
              <p class="text-error text-sm font-medium">{{ $error }}</p>
            @endforeach
          </div>
        </div>
        @endif

        @if (session('success'))
        <div class="mb-5 p-4 bg-green-50 border border-green-200 rounded-2xl flex items-center gap-3 stagger-1">
          <span class="material-symbols-outlined text-green-600 text-lg shrink-0">check_circle</span>
          <p class="text-green-700 text-sm font-medium">{{ session('success') }}</p>
        </div>
        @endif

        <form id="loginForm" method="POST" action="{{ route('login.process') }}" novalidate>
          @csrf

          {{-- PILIH PERAN --}}
          <div class="mb-5 stagger-2">
            <label class="block text-xs font-bold uppercase tracking-widest text-text-secondary mb-3">
              <span class="flex items-center gap-1.5">
                <span class="material-symbols-outlined text-[14px]">account_circle</span>
                Pilih peran Anda
              </span>
            </label>
            <div class="grid grid-cols-3 gap-3">
              <div data-role="admin" class="role-card flex flex-col items-center gap-2 py-4 px-2 {{ old('role') === 'admin' ? 'active-admin' : '' }}"
                   tabindex="0" role="button" aria-pressed="{{ old('role') === 'admin' ? 'true' : 'false' }}">
                <span class="material-symbols-outlined role-badge absolute top-2 right-2 text-[14px]">check_circle</span>
                <span class="material-symbols-outlined role-icon text-2xl">admin_panel_settings</span>
                <span class="text-[11px] font-bold text-center leading-tight">Admin</span>
              </div>
              <div data-role="parent" class="role-card flex flex-col items-center gap-2 py-4 px-2 {{ old('role') === 'parent' ? 'active-parent' : '' }}"
                   tabindex="0" role="button" aria-pressed="{{ old('role') === 'parent' ? 'true' : 'false' }}">
                <span class="material-symbols-outlined role-badge absolute top-2 right-2 text-[14px]">check_circle</span>
                <span class="material-symbols-outlined role-icon text-2xl">family_restroom</span>
                <span class="text-[11px] font-bold text-center leading-tight">Orang Tua</span>
              </div>
              <div data-role="caregiver" class="role-card flex flex-col items-center gap-2 py-4 px-2 {{ old('role') === 'caregiver' ? 'active-caregiver' : '' }}"
                   tabindex="0" role="button" aria-pressed="{{ old('role') === 'caregiver' ? 'true' : 'false' }}">
                <span class="material-symbols-outlined role-badge absolute top-2 right-2 text-[14px]">check_circle</span>
                <span class="material-symbols-outlined role-icon text-2xl">handshake</span>
                <span class="text-[11px] font-bold text-center leading-tight">Pengasuh</span>
              </div>
            </div>
            <input type="hidden" name="role" id="selectedRole" value="{{ old('role', '') }}">
            <p id="roleError" class="text-error text-xs mt-2 hidden flex items-center gap-1">
              <span class="material-symbols-outlined text-[13px]">warning</span>
              Silakan pilih peran Anda terlebih dahulu
            </p>
          </div>

          {{-- EMAIL --}}
          <div class="mb-4 stagger-3">
            <label for="email" class="block text-xs font-bold uppercase tracking-widest text-text-secondary mb-1.5">Alamat email</label>
            <div class="relative">
              <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-text-hint text-xl">mail</span>
              <input type="email" id="email" name="email" value="{{ old('email') }}"
                     placeholder="contoh@ceria.id" autocomplete="email"
                     class="input-field w-full pl-11 pr-4 py-3 rounded-xl text-sm {{ $errors->has('email') ? 'is-error' : '' }}">
            </div>
            <p id="emailClientError" class="text-error text-xs mt-1 hidden"></p>
          </div>

          {{-- PASSWORD --}}
          <div class="mb-4 stagger-4">
            <div class="flex items-center justify-between mb-1.5">
              <label for="password" class="text-xs font-bold uppercase tracking-widest text-text-secondary">Kata sandi</label>
              <a href="#" class="text-xs text-primary font-semibold hover:underline">Lupa kata sandi?</a>
            </div>
            <div class="relative">
              <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-text-hint text-xl">lock</span>
              <input type="password" id="password" name="password"
                     placeholder="Masukkan kata sandi" autocomplete="current-password"
                     class="input-field w-full pl-11 pr-12 py-3 rounded-xl text-sm {{ $errors->has('password') ? 'is-error' : '' }}">
              <button type="button" id="togglePw" class="absolute right-3 top-1/2 -translate-y-1/2 text-text-hint hover:text-primary transition-colors p-1 rounded-full">
                <span class="material-symbols-outlined text-xl" id="pwIcon">visibility_off</span>
              </button>
            </div>
            <p id="pwClientError" class="text-error text-xs mt-1 hidden"></p>
          </div>

          {{-- REMEMBER --}}
          <div class="flex items-center gap-2 mb-5 stagger-4">
            <input type="checkbox" id="remember" name="remember" class="w-4 h-4 rounded border-border accent-primary">
            <label for="remember" class="text-sm text-text-secondary cursor-pointer">Ingat saya di perangkat ini</label>
          </div>

          {{-- SUBMIT --}}
          <button type="submit" id="submitBtn" class="btn-login stagger-5 w-full text-white font-bold py-3.5 rounded-xl flex items-center justify-center gap-2 text-sm">
            <span class="material-symbols-outlined text-xl" id="submitIcon">login</span>
            <span id="submitText">Masuk Sekarang</span>
          </button>

          {{-- DIVIDER --}}
          <div class="relative my-5">
            <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-border"></div></div>
            <div class="relative flex justify-center text-xs">
              <span class="bg-surface-card px-3 text-text-hint">Belum punya akun?</span>
            </div>
          </div>

          {{-- REGISTER LINK --}}
          <div class="text-center">
            <a href="{{ route('daftar') }}" class="text-primary font-semibold hover:underline inline-flex items-center gap-1 text-sm">
              Daftar akun baru
              <span class="material-symbols-outlined text-base">how_to_reg</span>
            </a>
          </div>
        </form>
      </div>

      <div class="text-center mt-4 flex justify-center gap-5 text-[11px] font-medium text-text-hint">
        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[13px]">shield_lock</span>Perlindungan data</span>
        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[13px]">support_agent</span>Bantuan 24/7</span>
        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[13px]">lock</span>SSL Terenkripsi</span>
      </div>
    </div>
  </div>
</main>

<script>
(function () {
  const roleCards = document.querySelectorAll('[data-role]');
  const roleHidden = document.getElementById('selectedRole');
  const roleError  = document.getElementById('roleError');
  const togglePw   = document.getElementById('togglePw');
  const pwInput    = document.getElementById('password');
  const pwIcon     = document.getElementById('pwIcon');
  const emailInput = document.getElementById('email');
  const form       = document.getElementById('loginForm');
  const submitBtn  = document.getElementById('submitBtn');
  const submitText = document.getElementById('submitText');
  const submitIcon = document.getElementById('submitIcon');

  const activeClassMap = { admin: 'active-admin', parent: 'active-parent', caregiver: 'active-caregiver' };

  function setRole(role) {
    roleCards.forEach(c => {
      const r = c.dataset.role;
      Object.values(activeClassMap).forEach(cls => c.classList.remove(cls));
      if (r === role) c.classList.add(activeClassMap[r]);
      c.setAttribute('aria-pressed', r === role ? 'true' : 'false');
    });
    roleHidden.value = role;
    roleError.classList.add('hidden');
  }

  roleCards.forEach(card => {
    card.addEventListener('click', () => setRole(card.dataset.role));
    card.addEventListener('keydown', e => {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); setRole(card.dataset.role); }
    });
  });

  // Toggle password
  let pwVisible = false;
  togglePw.addEventListener('click', () => {
    pwVisible = !pwVisible;
    pwInput.type = pwVisible ? 'text' : 'password';
    pwIcon.textContent = pwVisible ? 'visibility' : 'visibility_off';
  });

  // Form submit
  form.addEventListener('submit', function (e) {
    let valid = true;

    if (!roleHidden.value) {
      roleError.classList.remove('hidden');
      valid = false;
    }

    const emailErr = document.getElementById('emailClientError');
    if (!emailInput.value.trim()) {
      emailErr.textContent = 'Email wajib diisi';
      emailErr.classList.remove('hidden');
      emailInput.classList.add('is-error');
      valid = false;
    } else { emailErr.classList.add('hidden'); emailInput.classList.remove('is-error'); }

    const pwErr = document.getElementById('pwClientError');
    if (!pwInput.value) {
      pwErr.textContent = 'Kata sandi wajib diisi';
      pwErr.classList.remove('hidden');
      pwInput.classList.add('is-error');
      valid = false;
    } else { pwErr.classList.add('hidden'); pwInput.classList.remove('is-error'); }

    if (!valid) { e.preventDefault(); return; }

    // Loading state
    submitBtn.disabled = true;
    submitIcon.textContent = 'progress_activity';
    submitIcon.classList.add('animate-spin');
    submitText.textContent = 'Memproses...';
  });
})();
</script>
</body>
</html>
