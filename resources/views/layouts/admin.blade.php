<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CERIA · @yield('title', 'Admin Portal')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,400,0,0"/>
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f7f9fc; }
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
    .card { background:#fff; border-radius:20px; box-shadow:0 4px 20px rgba(0,0,0,0.05); border:1px solid #f0f0f5; }
    .sidebar-link { display:flex; align-items:center; gap:12px; padding:12px 16px; border-radius:14px; font-size:14px; font-weight:600; color:#64748b; transition:all 0.2s; margin:2px 12px; }
    .sidebar-link:hover { background:#f0f7ff; color:#005da7; }
    .sidebar-link.active { background:#e0edff; color:#005da7; }
  </style>
  @yield('styles')
</head>
<body class="min-h-screen">

{{-- SIDEBAR --}}
<aside class="fixed left-0 top-0 h-full w-60 bg-white border-r border-slate-100 flex flex-col py-6 z-50">
  <div class="px-6 mb-8 flex items-center gap-3">
    <div class="w-9 h-9 bg-blue-100 rounded-xl flex items-center justify-center">
      <img src="/images/logo-CERIA.png" alt="CERIA" class="w-6 h-6 object-contain" onerror="this.src='https://ui-avatars.com/api/?name=Ceria&background=005da7&color=fff&rounded=true'">
    </div>
    <div>
      {{-- Ubah warna teks CERIA menjadi #FFD600 --}}
      <h1 class="font-extrabold text-lg text-[#FFD600] drop-shadow-sm">CERIA</h1>
      <p class="text-[10px] uppercase tracking-widest text-blue-600 font-bold">Portal Admin</p>
    </div>
  </div>
  <nav class="flex-1">
    @php
        $menus = [
            ['route' => 'admin.dashboard',  'icon' => 'grid_view',  'label' => 'Dashboard'],
            ['route' => 'admin.monitoring', 'icon' => 'videocam',   'label' => 'Pemantauan'],
            ['route' => 'admin.history',    'icon' => 'history',    'label' => 'Riwayat'],
            ['route' => 'admin.children',   'icon' => 'face',       'label' => 'Data Anak'],
            ['route' => 'admin.reports',    'icon' => 'bar_chart',  'label' => 'Laporan'],
            ['route' => 'admin.users.index','icon' => 'manage_accounts', 'label' => 'Kelola Pengguna'],
        ];
    @endphp
    @foreach($menus as $menu)
        @php
            $isActive = request()->routeIs($menu['route']) || 
                       (str_contains($menu['route'], '.index') && request()->routeIs(str_replace('.index', '.*', $menu['route'])));
        @endphp
        <a href="{{ route($menu['route']) }}" class="sidebar-link {{ $isActive ? 'active' : '' }}">
          <span class="material-symbols-outlined text-[20px]">{{ $menu['icon'] }}</span> {{ $menu['label'] }}
        </a>
    @endforeach
  </nav>
  <div class="px-4 mt-auto space-y-2">
    <button class="w-full flex items-center gap-2 px-4 py-3 rounded-xl text-sm font-semibold text-white bg-red-500 hover:bg-red-600 transition-colors shadow-sm mb-2 justify-center">
      <span class="material-symbols-outlined text-[20px]">emergency_home</span> Darurat
    </button>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="w-full flex items-center gap-2 px-4 py-3 rounded-xl text-sm font-semibold text-slate-600 hover:text-red-600 hover:bg-red-50 transition-colors">
        <span class="material-symbols-outlined text-[20px]">logout</span> Keluar
      </button>
    </form>
  </div>
</aside>

{{-- MAIN --}}
<main class="pl-60 min-h-screen">
  {{-- TOP BAR --}}
  <header class="sticky top-0 z-40 bg-white/90 backdrop-blur border-b border-slate-100 px-8 h-18 flex items-center justify-between py-4">
    <div>
      <h2 class="font-bold text-slate-800 text-lg">@yield('header_title', 'Portal Admin')</h2>
      <p class="text-slate-400 text-xs">@yield('header_subtitle', 'Kelola dan pantau aktivitas daycare')</p>
    </div>
    <div class="flex items-center gap-4">
      <div class="relative hidden md:block">
          <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
          <input type="text" placeholder="Cari data..." class="bg-slate-50 border border-slate-200 rounded-full py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 placeholder:text-slate-400 w-48 transition-all outline-none">
      </div>
      <div class="flex items-center gap-3">
        <button class="w-10 h-10 flex items-center justify-center text-slate-400 hover:bg-slate-50 rounded-full relative">
          <span class="material-symbols-outlined">notifications</span>
          <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
        </button>
        <button class="w-10 h-10 flex items-center justify-center text-slate-400 hover:bg-slate-50 rounded-full relative">
          <span class="material-symbols-outlined">settings</span>
        </button>
        <div class="w-9 h-9 bg-blue-100 rounded-full flex items-center justify-center font-bold text-blue-700 text-sm overflow-hidden border-2 border-white shadow-sm ml-2">
            @if(auth()->check() && auth()->user()->id)
                <img src="https://i.pravatar.cc/150?u={{ auth()->user()->id }}" alt="Profile" class="w-full h-full object-cover">
            @else
                {{ auth()->check() ? strtoupper(substr(auth()->user()->name, 0, 1)) : 'A' }}
            @endif
        </div>
      </div>
    </div>
  </header>

  <div class="p-8 max-w-7xl mx-auto">
    @yield('content')
  </div>
</main>

@yield('scripts')
</body>
</html>
