<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>CERIA · Masuk</title>
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
  
  <div class="w-full max-w-md text-center mb-4 scale-90">
    <div class="inline-block p-2 rounded-xl bg-white shadow-sm border border-slate-100 mb-2">
        <img src="/images/logo-CERIA.png" alt="CERIA" class="w-8 h-8 object-contain" onerror="this.src='https://ui-avatars.com/api/?name=C&background=005DA7&color=fff&rounded=true'">
    </div>
    <h1 class="text-xl font-extrabold text-slate-900 tracking-tight">Selamat Datang di <span class="text-primary-500">CERIA!</span></h1>
    <p class="text-slate-400 font-medium text-[10px] uppercase tracking-widest mt-1">Smart Daycare Monitoring</p>
  </div>

  <div class="w-full max-w-[380px] bg-white/90 glass rounded-[2rem] shadow-xl border border-white p-1 mb-4">
    <!-- Tabs -->
    <div class="flex p-0.5 gap-0.5 border-b border-slate-50">
      <button class="flex-1 py-3 text-xs font-bold tab-trigger active text-primary-500 relative" onclick="window.location.href='{{ route('login') }}'">Masuk</button>
      <button class="flex-1 py-3 text-xs font-bold text-slate-400 hover:text-slate-600 transition-colors" onclick="window.location.href='{{ route('daftar') }}'">Daftar</button>
    </div>

    <div class="p-6">
      <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
        @csrf
        <div class="space-y-1">
          <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 ml-1">Email</label>
          <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-300 text-lg">mail</span>
            <input type="email" name="email" value="{{ old('email') }}" required placeholder="nama@email.com" 
                   class="w-full pl-10 pr-4 py-2.5 rounded-xl text-xs bg-slate-50/50 border-transparent focus:border-primary-500/20 focus:bg-white focus:ring-0 transition-all font-medium">
          </div>
        </div>

        <div class="space-y-1">
          <div class="flex justify-between items-center ml-1">
            <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400">Password</label>
            <a href="#" class="text-[10px] font-bold text-primary-500 hover:underline">Lupa?</a>
          </div>
          <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-300 text-lg">lock</span>
            <input type="password" id="password" name="password" required placeholder="••••••••" 
                   class="w-full pl-10 pr-10 py-2.5 rounded-xl text-xs bg-slate-50/50 border-transparent focus:border-primary-500/20 focus:bg-white focus:ring-0 transition-all font-medium">
            <button type="button" onclick="togglePassword()" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-300 hover:text-primary-500">
              <span class="material-symbols-outlined text-lg" id="pw-icon">visibility_off</span>
            </button>
          </div>
        </div>

        <button type="submit" class="btn-gradient w-full text-white font-extrabold py-3 rounded-xl flex items-center justify-center gap-2 text-xs tracking-wide">
            Masuk Sekarang
            <span class="material-symbols-outlined text-lg">login</span>
        </button>

        <div class="relative py-1 flex items-center justify-center">
          <div class="w-full border-t border-slate-50"></div>
          <span class="absolute bg-white px-3 text-[9px] font-black uppercase tracking-widest text-slate-300">Social Login</span>
        </div>

        <div class="grid grid-cols-2 gap-3">
          <button type="button" class="flex items-center justify-center gap-2 py-2 px-3 border border-slate-100 rounded-xl hover:bg-slate-50 transition-all">
            <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-4 h-4">
            <span class="text-[10px] font-bold text-slate-600">Google</span>
          </button>
          <button type="button" class="flex items-center justify-center gap-2 py-2 px-3 border border-slate-100 rounded-xl hover:bg-slate-50 transition-all">
            <img src="https://www.svgrepo.com/show/511330/apple-fill.svg" class="w-4 h-4">
            <span class="text-[10px] font-bold text-slate-600">Apple</span>
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Compact Registration Shortcuts -->
  <div class="w-full max-w-lg flex flex-col items-center">
    <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] mb-3">Daftar Akun Baru</p>
    
    <div class="grid grid-cols-2 gap-3 w-full max-w-[440px]">
      <a href="{{ route('daftar', ['role' => 'parent']) }}" class="flex items-center gap-3 bg-white p-3 rounded-2xl border border-slate-100 shadow-sm hover:border-primary-500/20 transition-all group">
        <div class="w-9 h-9 rounded-lg bg-amber-50 text-amber-500 flex items-center justify-center shrink-0">
          <span class="material-symbols-outlined text-lg font-light">family_restroom</span>
        </div>
        <div class="overflow-hidden">
          <h4 class="text-[11px] font-bold text-slate-800 truncate">Orang Tua</h4>
          <p class="text-[9px] text-slate-400 truncate">Monitoring Real-time</p>
        </div>
      </a>

      <a href="{{ route('daftar', ['role' => 'admin']) }}" class="flex items-center gap-3 bg-white p-3 rounded-2xl border border-slate-100 shadow-sm hover:border-primary-500/20 transition-all group">
        <div class="w-9 h-9 rounded-lg bg-primary-50 text-primary-500 flex items-center justify-center shrink-0">
          <span class="material-symbols-outlined text-lg font-light">apartment</span>
        </div>
        <div class="overflow-hidden">
          <h4 class="text-[11px] font-bold text-slate-800 truncate">Admin</h4>
          <p class="text-[9px] text-slate-400 truncate">Kelola Daycare</p>
        </div>
      </a>
    </div>
  </div>

  <footer class="mt-8 flex gap-6 text-[9px] font-bold text-slate-400 uppercase tracking-widest">
      <a href="#" class="hover:text-primary-500">Privasi</a>
      <a href="#" class="hover:text-primary-500">Syarat</a>
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
