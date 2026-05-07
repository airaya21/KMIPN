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
    body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f7f9fc; }
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
    .card { background:#fff; border-radius:20px; box-shadow:0 4px 20px rgba(0,0,0,0.05); border:1px solid #f0f0f5; }
    .sidebar-link { display:flex; align-items:center; gap:12px; padding:12px 16px; border-radius:14px; font-size:14px; font-weight:600; color:#64748b; transition:all 0.2s; margin:2px 12px; }
    .sidebar-link:hover { background:#f1f5f9; color:#1e293b; }
    .sidebar-link.active { background:#fef3c7; color:#92400e; }
  </style>
  @yield('styles')
</head>
<body class="min-h-screen">

{{-- SIDEBAR --}}
<aside class="fixed left-0 top-0 h-full w-60 bg-white border-r border-slate-100 flex flex-col py-6 z-50">
  <div class="px-6 mb-8 flex items-center gap-3">
    <div class="w-9 h-9 bg-amber-100 rounded-xl flex items-center justify-center">
      <span class="material-symbols-outlined text-amber-700">family_restroom</span>
    </div>
    <div>
      <h1 class="font-extrabold text-lg text-slate-800">CERIA</h1>
      <p class="text-[10px] uppercase tracking-widest text-amber-600 font-bold">Orang Tua</p>
    </div>
  </div>
  <nav class="flex-1">
    @php
        $parentMenus = [
            ['route' => 'parent.dashboard', 'icon' => 'dashboard',      'label' => 'Dashboard'],
            ['route' => 'parent.children',  'icon' => 'child_care',     'label' => 'Data Anak'],
            ['route' => 'parent.activity',  'icon' => 'calendar_month', 'label' => 'Aktivitas'],
            ['route' => 'parent.reports',   'icon' => 'assessment',     'label' => 'Laporan'],
            ['route' => 'parent.messages',  'icon' => 'chat',           'label' => 'Pesan'],
        ];
    @endphp
    @foreach($parentMenus as $menu)
        <a href="{{ route($menu['route']) }}" class="sidebar-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
          <span class="material-symbols-outlined text-[20px]">{{ $menu['icon'] }}</span> {{ $menu['label'] }}
        </a>
    @endforeach
  </nav>
  <div class="px-4 mt-auto">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="w-full flex items-center gap-2 px-4 py-3 rounded-xl text-sm font-semibold text-red-600 hover:bg-red-50 transition-colors">
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
      <h2 class="font-bold text-slate-800 text-lg">@yield('header_title', 'Selamat datang!')</h2>
      <p class="text-slate-400 text-xs">@yield('header_subtitle', 'Pantau tumbuh kembang anak Anda')</p>
    </div>
    <div class="flex items-center gap-3">
      <button class="w-10 h-10 flex items-center justify-center text-slate-400 hover:bg-slate-50 rounded-full relative">
        <span class="material-symbols-outlined">notifications</span>
        <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
      </button>
      <div class="w-9 h-9 bg-amber-100 rounded-full flex items-center justify-center font-bold text-amber-700 text-sm">
        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
      </div>
    </div>
  </header>

  <div class="p-8 max-w-6xl mx-auto">
    @yield('content')
  </div>
</main>

@yield('scripts')
</body>
</html>
