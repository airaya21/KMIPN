<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>CERIA · @yield('title', 'Admin Portal')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#00658d",
                        secondary: "#5D636B",
                        surface: "#F2F5F9",
                        "surface-card": "#FFFFFF",
                        error: "#ba1a1a",
                        "on-surface": "#1A1C1E",
                        "brand-blue": "#0A77B1",
                    },
                    borderRadius: {
                        '3xl': '1.5rem',
                        '4xl': '2rem',
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F2F5F9; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
        .sidebar-link { transition: all 0.2s ease; }
        .sidebar-link.active { color: #0A77B1; position: relative; }
        .sidebar-link.active::after { content: ''; position: absolute; left: -24px; top: 50%; transform: translateY(-50%); width: 4px; height: 24px; background: #0A77B1; border-radius: 0 4px 4px 0; }
    </style>
    @yield('styles')
</head>
<body class="text-on-surface min-h-screen flex overflow-hidden">

<!-- SideNavBar -->
<aside class="w-64 bg-white border-r border-slate-200 flex flex-col py-8 px-6 z-50 shrink-0 h-screen">
    <div class="mb-10">
        <h1 class="text-xl font-black text-slate-800 tracking-tight">CERIA</h1>
        <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest mt-0.5">Smart Monitoring</p>
    </div>

    <nav class="flex-1 space-y-6">
        @php
            $menus = [
                ['route' => 'admin.dashboard',  'icon' => 'grid_view',     'label' => 'Dashboard'],
                ['route' => 'admin.caregivers', 'icon' => 'videocam',      'label' => 'Monitoring'],
                ['route' => 'admin.children',   'icon' => 'history',       'label' => 'History'],
                ['route' => 'admin.reports',    'icon' => 'face',          'label' => 'Children'],
                ['route' => 'admin.settings',   'icon' => 'bar_chart',     'label' => 'Reports'],
            ];
        @endphp

        @foreach($menus as $menu)
            <a class="sidebar-link flex items-center gap-4 text-slate-400 font-bold text-sm hover:text-brand-blue {{ request()->routeIs($menu['route']) ? 'active' : '' }}" href="{{ route($menu['route']) }}">
                <span class="material-symbols-outlined text-xl">{{ $menu['icon'] }}</span>
                <span>{{ $menu['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <div class="mt-auto">
        <button class="w-full bg-[#B12222] text-white py-4 px-4 rounded-2xl flex items-center justify-center gap-3 font-bold text-sm shadow-lg shadow-red-200 active:scale-95 transition-all">
            <span class="material-symbols-outlined text-xl">emergency_home</span>
            <span>Emergency Alert</span>
        </button>
    </div>
</aside>

<!-- Main Area -->
<div class="flex-1 flex flex-col h-screen overflow-hidden">
    <!-- Header -->
    <header class="h-20 flex items-center justify-between px-10 shrink-0">
        <h2 class="text-slate-500 font-medium text-base">Welcome back, {{ auth()->user()->name }}</h2>
        
        <div class="flex items-center gap-8">
            <div class="relative w-64">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-300 text-xl">search</span>
                <input type="text" placeholder="Search insights..." class="w-full bg-white border-none rounded-full py-2.5 pl-12 pr-4 text-sm focus:ring-2 focus:ring-brand-blue/20 placeholder:text-slate-300 shadow-sm">
            </div>
            
            <div class="flex items-center gap-5">
                <button class="text-slate-400 hover:text-brand-blue relative">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full border-2 border-surface"></span>
                </button>
                <button class="text-slate-400 hover:text-brand-blue">
                    <span class="material-symbols-outlined">settings</span>
                </button>
                <img src="https://i.pravatar.cc/150?u={{ auth()->user()->id }}" alt="Profile" class="w-10 h-10 rounded-full border-2 border-white shadow-sm">
            </div>
        </div>
    </header>

    <!-- Content -->
    <main class="flex-1 overflow-y-auto px-10 pb-10">
        @yield('content')
    </main>
</div>

@yield('scripts')
</body>
</html>
