<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CERIA · @yield('title', 'Dashboard Orang Tua')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,400,0,0"/>
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f8fafc; }
    .material-symbols-outlined { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
    
    /* Scrollbar */
    ::-webkit-scrollbar { width: 6px; height: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

    .sidebar-link { 
      display:flex; align-items:center; gap:14px; padding:12px 18px; 
      border-radius:12px; font-size:14px; font-weight:600; 
      color:#64748b; transition:all 0.3s cubic-bezier(0.4, 0, 0.2, 1); 
      margin:4px 16px; position: relative; overflow: hidden;
    }
    .sidebar-link:hover { 
      background:#f1f5f9; color:#0f172a; transform: translateX(6px);
    }
    .sidebar-link.active { 
      background: #eff6ff; 
      color: #2563eb;
    }
    .sidebar-link.active::before {
      content: ''; position: absolute; left: 0; top: 0; bottom: 0; width: 4px; 
      background: #FFD600; border-radius: 4px 0 0 4px;
    }
    .sidebar-link .material-symbols-outlined {
      transition: transform 0.3s ease;
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
    .sidebar-link.active .material-symbols-outlined {
      font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' 0, 'opsz' 24;
    }
    .sidebar-link:hover .material-symbols-outlined {
      transform: scale(1.1) rotate(2deg);
    }
    
    .glass-header {
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 1px solid rgba(226, 232, 240, 0.6);
    }
    
    .avatar-ring {
      position: relative;
    }
    .avatar-ring::after {
      content: ''; position: absolute; inset: -3px; 
      border-radius: 50%; border: 2px solid #FFD600;
      opacity: 0; transition: all 0.3s ease;
    }
    .avatar-ring:hover::after {
      opacity: 1; transform: scale(1.05);
    }
  </style>
  @yield('styles')
</head>
<body class="min-h-screen text-slate-800">

{{-- SIDEBAR --}}
<aside class="fixed left-0 top-0 h-full w-64 bg-white border-r border-slate-100 flex flex-col py-8 z-50 shadow-[4px_0_24px_rgba(0,0,0,0.02)] transition-all duration-300">
  <div class="px-8 mb-10 flex items-center gap-4">
    <div class="w-11 h-11 bg-blue-50 rounded-xl flex items-center justify-center ring-1 ring-blue-100">
      <span class="material-symbols-outlined text-blue-600 text-[24px]" style="font-variation-settings: 'FILL' 1;">family_restroom</span>
    </div>
    <div>
      <h1 class="font-extrabold text-xl text-[#FFD600] tracking-tight drop-shadow-sm">CERIA</h1>
      <p class="text-[10px] uppercase tracking-widest text-blue-600 font-bold mt-0.5">Orang Tua</p>
    </div>
  </div>
  
  <nav class="flex-1 flex flex-col gap-1 overflow-y-auto">
    @php
        $parentMenus = [
            ['route' => 'parent.dashboard', 'icon' => 'space_dashboard',  'label' => 'Dashboard'],
            ['route' => 'parent.children',  'icon' => 'child_care',     'label' => 'Data Anak'],
            ['route' => 'parent.activity',  'icon' => 'calendar_month', 'label' => 'Aktivitas'],
            ['route' => 'parent.reports',   'icon' => 'analytics',      'label' => 'Laporan'],
            ['route' => 'parent.pickup',    'icon' => 'directions_car', 'label' => 'Penjemputan'],
            ['route' => 'parent.messages',  'icon' => 'forum',          'label' => 'Pesan'],
        ];
    @endphp
    @foreach($parentMenus as $menu)
        <a href="{{ route($menu['route']) }}" class="sidebar-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
          <span class="material-symbols-outlined text-[22px]">{{ $menu['icon'] }}</span> 
          <span>{{ $menu['label'] }}</span>
        </a>
    @endforeach
  </nav>
  
  <div class="px-6 mt-8">
    <div class="p-4 bg-slate-50 rounded-2xl mb-4 border border-slate-100">
      <div class="flex items-center gap-3 mb-2">
        <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
          <span class="material-symbols-outlined text-[18px]">support_agent</span>
        </div>
        <div>
          <p class="text-xs font-bold text-slate-700">Butuh Bantuan?</p>
          <p class="text-[10px] text-slate-500">Hubungi admin</p>
        </div>
      </div>
      <button class="w-full py-2 bg-white border border-slate-200 rounded-lg text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-blue-600 transition-colors shadow-sm">
        Kontak Admin
      </button>
    </div>

    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-3 rounded-xl text-sm font-bold text-red-500 hover:bg-red-50 hover:text-red-600 transition-all duration-300 group">
        <span class="material-symbols-outlined text-[20px] group-hover:-translate-x-1 transition-transform">logout</span> 
        Keluar
      </button>
    </form>
  </div>
</aside>

{{-- MAIN --}}
<main class="pl-64 min-h-screen flex flex-col">
  {{-- TOP BAR --}}
  <header class="sticky top-0 z-40 glass-header px-8 h-20 flex items-center justify-between transition-all duration-300">
    <div class="animate-fade-in-up">
      <h2 class="font-extrabold text-slate-800 text-xl tracking-tight">@yield('header_title', 'Selamat datang!')</h2>
      <p class="text-slate-500 text-sm font-medium mt-0.5">@yield('header_subtitle', 'Pantau tumbuh kembang anak Anda')</p>
    </div>
    <div class="flex items-center gap-5">
      <a href="/parent/notifications" class="w-10 h-10 flex items-center justify-center text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-full relative transition-all duration-300">
        <span class="material-symbols-outlined">notifications</span>
        <span class="absolute top-2.5 right-2.5 w-2 h-2 bg-[#FFD600] rounded-full border-2 border-white"></span>
      </a>
      
      <div class="h-8 w-px bg-slate-200"></div>

      <div class="flex items-center gap-3 cursor-pointer group">
        <div class="text-right hidden sm:block">
          <p class="text-sm font-bold text-slate-700 group-hover:text-blue-600 transition-colors">{{ auth()->check() ? auth()->user()->name : 'Orang Tua' }}</p>
          <p class="text-[11px] text-slate-400 font-medium">Orang Tua</p>
        </div>
        <div class="w-10 h-10 bg-[#FFD600] rounded-full flex items-center justify-center font-bold text-blue-900 text-sm shadow-sm avatar-ring">
          {{ auth()->check() ? strtoupper(substr(auth()->user()->name, 0, 1)) : 'O' }}
        </div>
      </div>
    </div>
  </header>

  <div class="p-8 max-w-7xl mx-auto w-full flex-1">
    @yield('content')
  </div>
</main>

@yield('scripts')
<style>
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(5px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-fade-in-up {
    animation: fadeInUp 0.4s ease-out forwards;
  }
</style>
</body>
</html>
