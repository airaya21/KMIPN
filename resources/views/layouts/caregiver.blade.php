<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>CERIA @yield('title', 'Dashboard Caregiver')</title>
    
    <!-- Tema & Skrip Awal -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- Font & Ikon Premium -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "var(--color-primary)",
                        "on-primary": "var(--color-on-primary)",
                        "primary-container": "var(--color-primary-container)",
                        "on-primary-container": "var(--color-on-primary-container)",
                        secondary: "var(--color-secondary)",
                        "on-secondary": "var(--color-on-secondary)",
                        "secondary-container": "var(--color-secondary-container)",
                        "on-secondary-container": "var(--color-on-secondary-container)",
                        tertiary: "var(--color-tertiary)",
                        "on-tertiary": "var(--color-on-tertiary)",
                        "tertiary-container": "var(--color-tertiary-container)",
                        "on-tertiary-container": "var(--color-on-tertiary-container)",
                        error: "var(--color-error)",
                        "on-error": "var(--color-on-error)",
                        "error-container": "var(--color-error-container)",
                        "on-error-container": "var(--color-on-error-container)",
                        background: "var(--color-background)",
                        "on-background": "var(--color-on-background)",
                        surface: "var(--color-surface)",
                        "on-surface": "var(--color-on-surface)",
                        "on-surface-variant": "var(--color-on-surface-variant)",
                        "surface-container-lowest": "var(--color-surface-container-lowest)",
                        "surface-container-low": "var(--color-surface-container-low)",
                        "surface-container": "var(--color-surface-container)",
                        "surface-container-high": "var(--color-surface-container-high)",
                        "surface-container-highest": "var(--color-surface-container-highest)",
                        outline: "var(--color-outline)",
                        "outline-variant": "var(--color-outline-variant)",
                        "inverse-surface": "var(--color-inverse-surface)",
                        "inverse-on-surface": "var(--color-inverse-on-surface)",
                        "inverse-primary": "var(--color-inverse-primary)",
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        full: "9999px"
                    },
                    fontFamily: {
                        'plus-jakarta': ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        /* CSS Variables Material Design 3 */
        :root {
            --color-primary: #00658d;
            --color-on-primary: #ffffff;
            --color-primary-container: #c6e7ff;
            --color-on-primary-container: #001e2d;
            --color-secondary: #246d00;
            --color-on-secondary: #ffffff;
            --color-secondary-container: #99f670;
            --color-on-secondary-container: #062100;
            --color-tertiary: #b05c00;
            --color-on-tertiary: #ffffff;
            --color-tertiary-container: #ffddb6;
            --color-on-tertiary-container: #391b00;
            --color-error: #ba1a1a;
            --color-on-error: #ffffff;
            --color-error-container: #ffdad6;
            --color-on-error-container: #93000a;
            --color-background: #f7fafe;
            --color-on-background: #181c1f;
            --color-surface: #f7fafe;
            --color-on-surface: #181c1f;
            --color-on-surface-variant: #3f484f;
            --color-surface-container-lowest: #ffffff;
            --color-surface-container-low: #f1f4f8;
            --color-surface-container: #ebeef2;
            --color-surface-container-high: #e5e8ed;
            --color-surface-container-highest: #e0e3e7;
            --color-outline: #6f7880;
            --color-outline-variant: #bfc8d0;
            --color-inverse-surface: #2d3134;
            --color-inverse-on-surface: #eef1f5;
            --color-inverse-primary: #82cfff;
        }

        .dark {
            --color-primary: #82cfff;
            --color-on-primary: #00344b;
            --color-primary-container: #004c6b;
            --color-on-primary-container: #c6e7ff;
            --color-secondary: #81dc5a;
            --color-on-secondary: #0f3900;
            --color-secondary-container: #195200;
            --color-on-secondary-container: #99f670;
            --color-tertiary: #ffb870;
            --color-on-tertiary: #4f2500;
            --color-tertiary-container: #713700;
            --color-on-tertiary-container: #ffddb6;
            --color-error: #ffb4ab;
            --color-on-error: #690005;
            --color-error-container: #93000a;
            --color-on-error-container: #ffdad6;
            --color-background: #0f1316;
            --color-on-background: #e1e2e5;
            --color-surface: #0f1316;
            --color-on-surface: #e1e2e5;
            --color-on-surface-variant: #c0c7cd;
            --color-surface-container-lowest: #0c0f12;
            --color-surface-container-low: #1a1d20;
            --color-surface-container: #1e2225;
            --color-surface-container-high: #282b2f;
            --color-surface-container-highest: #33373b;
            --color-outline: #899299;
            --color-outline-variant: #43484c;
            --color-inverse-surface: #e1e2e5;
            --color-inverse-on-surface: #181c1f;
            --color-inverse-primary: #00658d;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--color-background);
            color: var(--color-on-surface);
        }
        
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        
        .card-shadow {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.02);
        }
        .dark .card-shadow {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
        
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--color-outline-variant);
            border-radius: 9999px;
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.5s ease-out;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    
    @yield('styles')
</head>
<body class="bg-background text-on-surface">

<!-- Backdrop untuk mobile sidebar -->
<div id="sidebar-backdrop" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden transition-opacity duration-300 opacity-0" onclick="toggleMobileSidebar()"></div>

<!-- SIDEBAR -->
<aside id="sidebar" class="h-screen w-72 fixed left-0 top-0 bg-surface-container dark:bg-surface-container-high shadow-sm flex flex-col p-6 z-50 overflow-y-auto transition-transform duration-300 -translate-x-full lg:translate-x-0 border-r border-outline-variant/30">
    <div class="mb-8 px-2 flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold tracking-tight" style="color: #F4B400;">CERIA</h1>
            <p class="text-xs text-outline opacity-70 font-semibold mt-0.5">Pengasuh</p>
        </div>
        <button onclick="toggleMobileSidebar()" class="lg:hidden p-1.5 text-on-surface-variant hover:bg-surface-container-highest rounded-full">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    
<nav class="flex flex-col gap-1.5 flex-1">

    <!-- Dashboard -->
    <a href="{{ route('caregiver.dashboard') }}"
       class="flex items-center gap-3 px-4 py-3
       {{ request()->routeIs('caregiver.dashboard')
            ? 'bg-primary-container text-primary rounded-xl font-bold'
            : 'text-on-surface-variant hover:bg-surface-container-highest/50 rounded-xl transition-all' }}">
        <span class="material-symbols-outlined">dashboard</span>
        <span class="text-sm {{ request()->routeIs('caregiver.dashboard') ? 'font-bold' : 'font-medium' }}">
            Dashboard
        </span>
    </a>

    <!-- Anak Asuh -->
    <a href="{{ route('caregiver.children') }}"
       class="flex items-center gap-3 px-4 py-3
       {{ request()->routeIs('caregiver.children')
            ? 'bg-primary-container text-primary rounded-xl font-bold'
            : 'text-on-surface-variant hover:bg-surface-container-highest/50 rounded-xl transition-all' }}">
        <span class="material-symbols-outlined">family_restroom</span>
        <span class="text-sm {{ request()->routeIs('caregiver.children') ? 'font-bold' : 'font-medium' }}">
            Anak Asuh
        </span>
    </a>

    <!-- Catat Aktivitas -->
    <a href="{{ route('caregiver.activity') }}"
       class="flex items-center gap-3 px-4 py-3
       {{ request()->routeIs('caregiver.activity')
            ? 'bg-primary-container text-primary rounded-xl font-bold'
            : 'text-on-surface-variant hover:bg-surface-container-highest/50 rounded-xl transition-all' }}">
        <span class="material-symbols-outlined">edit_calendar</span>
        <span class="text-sm {{ request()->routeIs('caregiver.activity') ? 'font-bold' : 'font-medium' }}">
            Catat Aktivitas
        </span>
    </a>

    <!-- Jadwal -->
    <a href="{{ route('caregiver.schedule') }}"
       class="flex items-center gap-3 px-4 py-3
       {{ request()->routeIs('caregiver.schedule')
            ? 'bg-primary-container text-primary rounded-xl font-bold'
            : 'text-on-surface-variant hover:bg-surface-container-highest/50 rounded-xl transition-all' }}">
        <span class="material-symbols-outlined">schedule</span>
        <span class="text-sm {{ request()->routeIs('caregiver.schedule') ? 'font-bold' : 'font-medium' }}">
            Jadwal
        </span>
    </a>

    <!-- Laporan -->
    <a href="{{ route('caregiver.reports') }}"
       class="flex items-center gap-3 px-4 py-3
       {{ request()->routeIs('caregiver.reports')
            ? 'bg-primary-container text-primary rounded-xl font-bold'
            : 'text-on-surface-variant hover:bg-surface-container-highest/50 rounded-xl transition-all' }}">
        <span class="material-symbols-outlined">assessment</span>
        <span class="text-sm {{ request()->routeIs('caregiver.reports') ? 'font-bold' : 'font-medium' }}">
            Laporan
        </span>
    </a>
    <!-- Ganti Password -->
    <a href="{{ route('profile.change-password') }}"
       class="flex items-center gap-3 px-4 py-3
       {{ request()->routeIs('profile.change-password')
            ? 'bg-primary-container text-primary rounded-xl font-bold'
            : 'text-on-surface-variant hover:bg-surface-container-highest/50 rounded-xl transition-all' }}">
        <span class="material-symbols-outlined">lock_reset</span>
        <span class="text-sm {{ request()->routeIs('profile.change-password') ? 'font-bold' : 'font-medium' }}">
            Ganti Password
        </span>
    </a>

</nav>
    
    <div class="mt-auto pt-6 border-t border-outline-variant/30 space-y-1">
        <div class="flex items-center gap-3 px-4 py-2 text-xs text-outline cursor-pointer hover:text-on-surface">
            <span class="material-symbols-outlined text-sm">help</span>
            <span>Pusat Bantuan</span>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-xs text-red-500 hover:bg-red-50 rounded-xl transition-all">
                <span class="material-symbols-outlined text-sm">logout</span>
                <span>Keluar</span>
            </button>
        </form>
    </div>
</aside>

<!-- MAIN CONTENT -->
<main class="ml-0 lg:ml-72 min-h-screen transition-all duration-300">
    <!-- HEADER / TOPBAR -->
    <header class="sticky top-0 z-30 bg-surface/85 backdrop-blur-md border-b border-outline-variant/30 px-4 sm:px-8 py-4 flex justify-between items-center">
        <div class="flex items-center gap-4">
            <button onclick="toggleMobileSidebar()" class="lg:hidden p-2 text-on-surface-variant hover:bg-surface-container rounded-xl">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <div class="hidden md:flex items-center gap-2 bg-surface-container-low rounded-full px-4 py-2 w-80 focus-within:ring-2 focus-within:ring-primary/30">
                <span class="material-symbols-outlined text-outline text-sm">search</span>
                <input type="text" placeholder="Cari anak, aktivitas..." class="bg-transparent border-none outline-none text-sm w-full text-on-surface placeholder:text-outline/60">
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button id="theme-toggle" class="w-9 h-9 flex items-center justify-center rounded-full text-on-surface-variant hover:bg-surface-container-high">
                <span class="material-symbols-outlined block dark:hidden">dark_mode</span>
                <span class="material-symbols-outlined hidden dark:block">light_mode</span>
            </button>
            <div class="relative">
                <button class="w-9 h-9 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-surface"></span>
            </div>
            <div class="flex items-center gap-3 border-l border-outline-variant/30 pl-4">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-bold text-on-surface">{{ Auth::user()->name ?? 'Sarah' }}</p>
                    <p class="text-[10px] text-outline uppercase font-bold">Pengasuh Senior</p>
                </div>
                <div class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">badge</span>
                </div>
            </div>
        </div>
    </header>
    
    <!-- KONTEN UTAMA -->
    <div class="p-5 sm:p-8 space-y-7 animate-fade-in-up">
        <!-- Header Selamat Datang & Badge Status -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-4">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-on-surface tracking-tight">@yield('header_title', 'Ringkasan Pengawasan Hari Ini')</h2>
                <p class="text-on-surface-variant text-sm mt-1">@yield('header_subtitle', 'Pantau aktivitas, keselamatan, dan kondisi anak secara real-time melalui CERIA AI.')</p>
            </div>
            <div class="flex items-center gap-2 bg-primary-container/30 text-primary px-4 py-2 rounded-full border border-primary/20 self-start">
                <span class="material-symbols-outlined text-sm">neurology</span>
                <span class="text-xs font-bold">AI Monitoring Aktif</span>
            </div>
        </div>
        
        @yield('content')
        
        <footer class="text-center text-xs text-outline py-6 border-t border-outline-variant/20 mt-4">
            CERIA Dashboard Pengasuh • Keamanan anak didukung AI • Data real-time
        </footer>
    </div>
</main>

<script>
    // Theme toggle
    const themeToggle = document.getElementById('theme-toggle');
    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });
    }
    
    // Mobile sidebar toggle
    function toggleMobileSidebar() {
        const sidebar = document.getElementById('sidebar');
        const backdrop = document.getElementById('sidebar-backdrop');
        if (sidebar.classList.contains('-translate-x-full')) {
            sidebar.classList.remove('-translate-x-full');
            backdrop.classList.remove('hidden');
            setTimeout(() => backdrop.classList.add('opacity-100'), 10);
        } else {
            sidebar.classList.add('-translate-x-full');
            backdrop.classList.remove('opacity-100');
            setTimeout(() => backdrop.classList.add('hidden'), 300);
        }
    }
    
    // Animasi fade-in untuk card
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.05 });
    
    document.querySelectorAll('.bg-surface-container-lowest, .grid > div, .lg\\:col-span-2, .lg\\:col-span-1').forEach(el => {
        if (el.classList && !el.classList.contains('animate-fade-in-up')) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(12px)';
            el.style.transition = 'all 0.4s ease-out';
            observer.observe(el);
        }
    });
</script>

@yield('scripts')
</body>
</html>