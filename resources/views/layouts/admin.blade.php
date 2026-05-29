<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>CERIA · @yield('title', 'Admin Portal')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50:  '#f0f7ff',
                            100: '#e0edff',
                            200: '#cce1ff',
                            300: '#a8cdff',
                            400: '#7cb2ff',
                            500: '#5291ff',
                            600: '#3370ff',
                            700: '#1f55f0',
                            800: '#1d45c3',
                            900: '#005da7',
                            950: '#142c65',
                        },
                        accent: {
                            DEFAULT: '#FFD600',
                            hover:   '#e6c100',
                        },
                        surface: '#f8fafc',
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
        body {
            font-family: '"Plus Jakarta Sans"', sans-serif;
            background-color: #f8fafc;
            background-image: radial-gradient(#e2e8f0 1px, transparent 1px);
            background-size: 28px 28px;
        }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            font-size: 0.875rem;
            color: #64748b;
            padding: 10px 14px;
            border-radius: 12px;
            transition: all 0.2s ease;
            text-decoration: none;
        }
        .sidebar-link:hover:not(.active) {
            background-color: #f0f7ff;
            color: #005da7;
        }
        .sidebar-link.active {
            background-color: #005da7;
            color: #ffffff;
        }
        .glass-header {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }
    </style>
    @yield('styles')
</head>
<body class="text-slate-800 min-h-screen flex overflow-hidden">

<!-- SideNavBar -->
<aside class="w-64 bg-white border-r border-slate-200/80 flex flex-col py-8 px-5 z-50 shrink-0 h-screen shadow-sm">
    <!-- Logo -->
    <div class="mb-10 px-2">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-white shadow-sm border border-slate-100 flex items-center justify-center overflow-hidden">
                <img src="/images/logo-CERIA.png" alt="CERIA" class="w-8 h-8 object-contain" onerror="this.src='https://ui-avatars.com/api/?name=Ceria&background=005da7&color=fff&rounded=true'">
            </div>
            <div>
                <h1 class="text-lg font-black text-slate-900 tracking-tight leading-tight">CERIA</h1>
                <p class="text-[9px] text-accent font-black uppercase tracking-widest leading-none">Smart Monitoring</p>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 space-y-1">
        @php
            $menus = [
                ['route' => 'admin.dashboard',  'icon' => 'grid_view',  'label' => 'Dashboard'],
                ['route' => 'admin.monitoring', 'icon' => 'videocam',   'label' => 'Monitoring'],
                ['route' => 'admin.history',    'icon' => 'history',    'label' => 'History'],
                ['route' => 'admin.children',   'icon' => 'face',       'label' => 'Children'],
                ['route' => 'admin.reports',    'icon' => 'bar_chart',  'label' => 'Reports'],
            ];
        @endphp

        @foreach($menus as $menu)
            <a class="sidebar-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}" href="{{ route($menu['route']) }}">
                <span class="material-symbols-outlined text-xl">{{ $menu['icon'] }}</span>
                <span>{{ $menu['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <!-- Bottom Actions -->
    <div class="mt-auto space-y-2">
        <button class="w-full bg-red-500 hover:bg-red-600 text-white py-3.5 px-4 rounded-2xl flex items-center justify-center gap-3 font-bold text-sm shadow-lg shadow-red-500/25 active:scale-95 transition-all">
            <span class="material-symbols-outlined text-xl">emergency_home</span>
            <span>Emergency Alert</span>
        </button>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full bg-slate-50 border border-slate-200 text-slate-500 py-3.5 px-4 rounded-2xl flex items-center justify-center gap-3 font-bold text-sm hover:text-red-500 hover:bg-red-50 hover:border-red-200 transition-all">
                <span class="material-symbols-outlined text-xl">logout</span>
                <span>Keluar Sistem</span>
            </button>
        </form>

        <!-- Profile -->
        <div class="flex items-center gap-3 px-2 pt-3 mt-3 border-t border-slate-100">
            <img src="https://i.pravatar.cc/150?u={{ auth()->user()->id }}" alt="Profile" class="w-9 h-9 rounded-full border-2 border-primary-100 shadow-sm">
            <div class="flex-1 min-w-0">
                <p class="text-sm font-bold text-slate-800 truncate">{{ auth()->user()->name }}</p>
                <p class="text-[10px] text-primary-700 font-bold uppercase tracking-wider">{{ ucfirst(auth()->user()->role) }}</p>
            </div>
        </div>
    </div>
</aside>

<!-- Main Area -->
<div class="flex-1 flex flex-col h-screen overflow-hidden">
    <!-- Header -->
    <header class="glass-header h-16 flex items-center justify-between px-8 shrink-0">
        <div class="flex items-center gap-2">
            <span class="text-slate-400 text-sm">Admin Portal</span>
            <span class="text-slate-300">/</span>
            <span class="text-slate-700 font-bold text-sm">@yield('title', 'Dashboard')</span>
        </div>

        <div class="flex items-center gap-4">
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-300 text-[18px]">search</span>
                <input type="text" placeholder="Cari data..." class="bg-white border border-slate-200 rounded-full py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500 placeholder:text-slate-300 w-52 transition-all">
            </div>

            <div class="flex items-center gap-3">
                <button class="text-slate-400 hover:text-primary-700 relative transition-colors w-9 h-9 flex items-center justify-center rounded-xl hover:bg-primary-50">
                    <span class="material-symbols-outlined text-xl">notifications</span>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                </button>
                <button class="text-slate-400 hover:text-primary-700 transition-colors w-9 h-9 flex items-center justify-center rounded-xl hover:bg-primary-50">
                    <span class="material-symbols-outlined text-xl">settings</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Content -->
    <main class="flex-1 overflow-y-auto px-8 py-6">
        @yield('content')
    </main>
</div>

@yield('scripts')
</body>
</html>
