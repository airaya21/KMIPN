<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>CERIA · Daftar Akun</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,400,0,0" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { 'sans': ['Plus Jakarta Sans', 'system-ui', 'sans-serif'] },
          colors: {
            primary: { 500: '#005DA7', 600: '#004A85' },
          }
        }
      }
    }
  </script>
  <style>
    body { background: radial-gradient(circle at top right, #f8faff, #f0f4f8); color: #1e293b; height: 100vh; overflow: hidden; }
    .glass { background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.5); }
    .btn-gradient { background: linear-gradient(135deg, #005DA7 0%, #0077D6 100%); transition: all 0.2s ease; }
    .btn-gradient:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0, 93, 167, 0.2); }
    .tab-trigger.active::after { content: ''; position: absolute; bottom: 0; left: 50%; width: 30%; height: 2px; background: #005DA7; transform: translateX(-50%); }
  </style>
</head>
<body class="font-sans antialiased flex flex-col items-center justify-center p-4">
  
  @php
      $role = request()->get('role', 'parent');
  @endphp

  <div class="w-full max-w-md text-center mb-4 scale-90">
    <h1 class="text-xl font-extrabold text-slate-900 tracking-tight">Daftar Akun <span class="text-primary-500">CERIA!</span></h1>
    <p class="text-slate-400 font-medium text-[10px] uppercase tracking-widest mt-1">Lengkapi data Anda sebagai {{ $role === 'admin' ? 'Admin' : 'Orang Tua' }}</p>
  </div>

  <div class="w-full max-w-[380px] bg-white/90 glass rounded-[2rem] shadow-xl border border-white p-1 mb-4">
    <!-- Tabs -->
    <div class="flex p-0.5 gap-0.5 border-b border-slate-50">
      <button class="flex-1 py-3 text-xs font-bold text-slate-400 hover:text-slate-600 transition-colors" onclick="window.location.href='{{ route('login') }}'">Masuk</button>
      <button class="flex-1 py-3 text-xs font-bold tab-trigger active text-primary-500 relative" onclick="window.location.href='{{ route('daftar') }}'">Daftar</button>
    </div>

    <div class="p-6 pt-4">
      @if ($errors->any())
        <div class="mb-4 p-2.5 bg-red-50 border border-red-100 rounded-xl">
          @foreach ($errors->all() as $error)
            <p class="text-red-600 text-[9px] font-bold leading-tight">{{ $error }}</p>
          @endforeach
        </div>
      @endif

      <form action="{{ route('daftar.process') }}" method="POST" class="space-y-3">
        @csrf
        <input type="hidden" name="role" value="{{ $role }}">

        <div class="flex items-center gap-3 p-2.5 bg-primary-50/50 rounded-xl border border-primary-100/50 mb-2">
            <div class="w-8 h-8 rounded-lg bg-white flex items-center justify-center text-primary-500 shadow-sm shrink-0">
                <span class="material-symbols-outlined text-lg">{{ $role === 'admin' ? 'apartment' : 'family_restroom' }}</span>
            </div>
            <div class="flex-1 overflow-hidden">
                <p class="text-[9px] font-black uppercase tracking-widest text-slate-400">Daftar Sebagai</p>
                <p class="text-[11px] font-bold text-slate-800 truncate">{{ $role === 'admin' ? 'Admin Daycare' : 'Orang Tua' }}</p>
            </div>
            <a href="{{ route('login') }}#daftar-section" class="px-2 py-1 bg-white/60 rounded-md text-[8px] font-black text-primary-500 uppercase">Ubah</a>
        </div>

        <div class="space-y-0.5">
          <label class="block text-[9px] font-black uppercase tracking-widest text-slate-400 ml-1">Nama</label>
          <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-300 text-lg">person</span>
            <input type="text" name="name" value="{{ old('name') }}" required placeholder="Nama Lengkap" 
                   class="w-full pl-10 pr-4 py-2 rounded-xl text-xs bg-slate-50/50 border-transparent focus:border-primary-500/20 focus:bg-white focus:ring-0 transition-all font-medium">
          </div>
        </div>

        <div class="space-y-0.5">
          <label class="block text-[9px] font-black uppercase tracking-widest text-slate-400 ml-1">Email</label>
          <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-300 text-lg">mail</span>
            <input type="email" name="email" value="{{ old('email') }}" required placeholder="nama@email.com" 
                   class="w-full pl-10 pr-4 py-2 rounded-xl text-xs bg-slate-50/50 border-transparent focus:border-primary-500/20 focus:bg-white focus:ring-0 transition-all font-medium">
          </div>
        </div>

        <div class="space-y-0.5">
          <label class="block text-[9px] font-black uppercase tracking-widest text-slate-400 ml-1">Password</label>
          <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-300 text-lg">lock</span>
            <input type="password" id="password" name="password" required placeholder="Min. 8 Karakter" 
                   class="w-full pl-10 pr-10 py-2 rounded-xl text-xs bg-slate-50/50 border-transparent focus:border-primary-500/20 focus:bg-white focus:ring-0 transition-all font-medium">
            <button type="button" onclick="togglePassword()" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-300 hover:text-primary-500">
              <span class="material-symbols-outlined text-lg" id="pw-icon">visibility_off</span>
            </button>
          </div>
        </div>

        @if($role === 'parent')
        <div class="space-y-0.5">
          <label class="block text-[9px] font-black uppercase tracking-widest text-slate-400 ml-1">Kode Daycare</label>
          <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-300 text-lg">key</span>
            <input type="text" name="daycare_code" value="{{ old('daycare_code') }}" required placeholder="Contoh: CDC-1234" 
                   class="w-full pl-10 pr-4 py-2 rounded-xl text-xs bg-slate-50/50 border-transparent focus:border-primary-500/20 focus:bg-white focus:ring-0 transition-all font-medium">
          </div>
        </div>
        @endif

        <div class="pt-2">
            <button type="submit" class="btn-gradient w-full text-white font-extrabold py-2.5 rounded-xl flex items-center justify-center gap-2 text-xs tracking-wide">
                Daftar Akun
                <span class="material-symbols-outlined text-lg">how_to_reg</span>
            </button>
        </div>
      </form>
    </div>
  </div>

  <footer class="mt-8 flex gap-6 text-[9px] font-bold text-slate-400 uppercase tracking-widest">
      <a href="{{ route('login') }}" class="text-primary-500">Batal</a>
      <a href="#" class="hover:text-primary-500">Privasi</a>
      <span>© 2026 CERIA</span>
  </footer>

  <script>
    function togglePassword() {
      const input = document.getElementById('password');
      const icon = document.getElementById('pw-icon');
      if (input.type === 'password') {
        input.type = 'text';
        icon.innerText = 'visibility';
      } else {
        input.type = 'password';
        icon.innerText = 'visibility_off';
      }
    }
  </script>
</body>
</html>