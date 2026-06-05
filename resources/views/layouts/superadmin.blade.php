<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CERIA | @yield('title', 'Pusat Kendali Daycare Indonesia')</title>
    
    <!-- Skrip Tema: Dijalankan lebih awal untuk mencegah kelap-kelip tema yang salah (FOUC) -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    
    <!-- Tailwind CSS dengan plugin resmi -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- Font & Ikon Premium -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    
    <!-- Konfigurasi Tailwind CSS -->
    <script id="tailwind-config">
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
                    spacing: {
                        "stack-lg": "48px",
                        "stack-sm": "12px",
                        "stack-md": "24px",
                        gutter: "24px",
                        "container-padding": "32px",
                        unit: "8px"
                    },
                    fontFamily: {
                        "display-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "display-lg": ["36px", {lineHeight: "1.2", fontWeight: "700"}],
                        "label-md": ["14px", {lineHeight: "1.2", letterSpacing: "0.02em", fontWeight: "600"}],
                        "label-sm": ["12px", {lineHeight: "1.2", fontWeight: "700"}],
                        "headline-md": ["24px", {lineHeight: "1.3", fontWeight: "700"}],
                        "body-lg": ["18px", {lineHeight: "1.6", fontWeight: "400"}],
                        "body-md": ["16px", {lineHeight: "1.6", fontWeight: "400"}],
                        "headline-sm": ["20px", {lineHeight: "1.4", fontWeight: "600"}],
                        "body-sm": ["14px", {lineHeight: "1.5", fontWeight: "400"}]
                    }
                },
            },
        }
    </script>
    <style>
        /* Desain Sistem Harmonik: Dipetakan ke CSS Variables untuk mendukung Mode Gelap otomatis */
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

        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .card-shadow { box-shadow: 0 8px 30px rgba(0, 0, 0, 0.02); }
        .dark .card-shadow { box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2); }
        
        /* Desain Scrollbar Kustom */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: var(--color-outline-variant); border-radius: 9999px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--color-outline); }
        
        /* Efek Denyut Peringatan */
        .alert-glow {
            animation: pulse-glow 2s infinite;
        }
        @keyframes pulse-glow {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.02); }
        }
    </style>
</head>
<body class="bg-background text-on-surface transition-colors duration-300 min-h-screen">

<!-- Backdrop Overlay untuk Navigasi Seluler -->
<div id="sidebar-backdrop" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden transition-opacity duration-300 opacity-0" onclick="toggleMobileSidebar()"></div>

<!-- Panel Navigasi Samping -->
<aside id="sidebar" class="h-screen w-72 fixed left-0 top-0 bg-surface-container dark:bg-surface-container-high shadow-sm flex flex-col p-stack-md z-50 overflow-y-auto transition-transform duration-300 -translate-x-full lg:translate-x-0 border-r border-outline-variant/30">
    <div class="mb-10 px-4 flex justify-between items-center">
        <div>
            <h1 class="text-headline-md font-headline-md font-bold text-[#EAB308] dark:text-[#FACC15] tracking-tight">CERIA</h1>
            <p class="font-label-sm text-label-sm text-outline opacity-70">Pusat Kendali Daycare Indonesia</p>
        </div>
        <!-- Tombol Tutup Sidebar Seluler -->
        <button onclick="toggleMobileSidebar()" class="lg:hidden p-1.5 text-on-surface-variant hover:bg-surface-container-highest rounded-full transition-colors">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    
    <nav class="flex flex-col gap-2 grow">
        <!-- Ringkasan (Overview) -->
        <a href="{{ route('superadmin.dashboard') }}"
        class="flex items-center gap-3 px-4 py-3
        {{ request()->routeIs('superadmin.dashboard')
         ? 'bg-primary-container text-primary rounded-xl font-bold'
         : 'text-on-surface-variant hover:bg-surface-container-highest/50 rounded-xl transition-all' }}">
        <span class="material-symbols-outlined">dashboard</span>
        <span class="font-label-md text-label-md">Ringkasan</span>
        </a>

<!-- Manajemen Daycare -->
@php
$isDaycareActive = request()->routeIs([
    'superadmin.daycares',
    'superadmin.verifications',
    'superadmin.suspended'
]);
@endphp

<div class="space-y-1">
    <button onclick="toggleSidebarGroup(this)"
        class="w-full flex items-center justify-between px-4 py-3 text-on-surface-variant font-bold hover:bg-surface-container-highest/50 rounded-xl transition-all">

        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined">child_care</span>
            <span class="font-label-md text-label-md">Manajemen Daycare</span>
        </div>

        <span class="material-symbols-outlined text-lg transition-transform duration-200 {{ $isDaycareActive ? 'rotate-180' : '' }}">
            expand_more
        </span>
    </button>

    <div class="submenu overflow-hidden transition-all duration-300 flex flex-col pl-6"
         style="max-height: {{ $isDaycareActive ? '200px' : '0px' }}">

        <a href="{{ route('superadmin.daycares') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.daycares')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Pusat Daycare
        </a>

        <a href="{{ route('superadmin.verifications') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.verifications')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Verifikasi
        </a>

        <a href="{{ route('superadmin.suspended') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.suspended')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Daycare Ditangguhkan
        </a>

    </div>
</div>

<!-- Pemantauan Nasional -->
@php
$isMonitoringActive = request()->routeIs([
    'superadmin.live-alerts',
    'superadmin.ai-monitoring',
    'superadmin.emergency-center'
]);
@endphp

<div class="space-y-1">
    <button onclick="toggleSidebarGroup(this)"
        class="w-full flex items-center justify-between px-4 py-3 text-on-surface-variant font-bold hover:bg-surface-container-highest/50 rounded-xl transition-all">

        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined">visibility</span>
            <span class="font-label-md text-label-md">Pemantauan Nasional</span>
        </div>

        <span class="material-symbols-outlined text-lg transition-transform duration-200 {{ $isMonitoringActive ? 'rotate-180' : '' }}">
            expand_more
        </span>
    </button>

    <div class="submenu overflow-hidden transition-all duration-300 flex flex-col pl-6"
         style="max-height: {{ $isMonitoringActive ? '200px' : '0px' }}">

        <a href="{{ route('superadmin.live-alerts') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.live-alerts')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Peringatan Langsung
        </a>

        <a href="{{ route('superadmin.ai-monitoring') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.ai-monitoring')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Pemantauan AI
        </a>

        <a href="{{ route('superadmin.emergency-center') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.emergency-center')
                ? 'text-error font-bold bg-error/10'
                : 'text-error hover:bg-error/5 transition-all' }}">
            Pusat Darurat
        </a>

    </div>
</div>

<!-- Pengaduan -->
@php
$isComplaintActive = request()->routeIs([
    'superadmin.parent-reports',
    'superadmin.investigations'
]);
@endphp

<div class="space-y-1">
    <button onclick="toggleSidebarGroup(this)"
        class="w-full flex items-center justify-between px-4 py-3 text-on-surface-variant font-bold hover:bg-surface-container-highest/50 rounded-xl transition-all">

        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined">report_problem</span>
            <span class="font-label-md text-label-md">Pengaduan</span>
        </div>

        <span class="material-symbols-outlined text-lg transition-transform duration-200 {{ $isComplaintActive ? 'rotate-180' : '' }}">
            expand_more
        </span>
    </button>

    <div class="submenu overflow-hidden transition-all duration-300 flex flex-col pl-6"
         style="max-height: {{ $isComplaintActive ? '150px' : '0px' }}">

        <a href="{{ route('superadmin.parent-reports') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.parent-reports')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Laporan Orang Tua
        </a>

        <a href="{{ route('superadmin.investigations') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.investigations')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Penyelidikan
        </a>

    </div>
</div>

<!-- Pengguna -->
@php
$isUserActive = request()->routeIs([
    'superadmin.parents',
    'superadmin.caregivers',
    'superadmin.admins'
]);
@endphp

<div class="space-y-1">
    <button onclick="toggleSidebarGroup(this)"
        class="w-full flex items-center justify-between px-4 py-3 text-on-surface-variant font-bold hover:bg-surface-container-highest/50 rounded-xl transition-all">

        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined">group</span>
            <span class="font-label-md text-label-md">Pengguna</span>
        </div>

        <span class="material-symbols-outlined text-lg transition-transform duration-200 {{ $isUserActive ? 'rotate-180' : '' }}">
            expand_more
        </span>
    </button>

    <div class="submenu overflow-hidden transition-all duration-300 flex flex-col pl-6"
         style="max-height: {{ $isUserActive ? '200px' : '0px' }}">

        <a href="{{ route('superadmin.parents') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.parents')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Orang Tua
        </a>

        <a href="{{ route('superadmin.caregivers') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.caregivers')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Pengasuh
        </a>

        <a href="{{ route('superadmin.admins') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.admins')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Admin Daycare
        </a>

    </div>
</div>

<!-- Analitik -->
@php
$isAnalyticsActive = request()->routeIs([
    'superadmin.safety-score',
    'superadmin.alert-trends',
    'superadmin.reports'
]);
@endphp

<div class="space-y-1">
    <button onclick="toggleSidebarGroup(this)"
        class="w-full flex items-center justify-between px-4 py-3 text-on-surface-variant font-bold hover:bg-surface-container-highest/50 rounded-xl transition-all">

        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined">analytics</span>
            <span class="font-label-md text-label-md">Analitik</span>
        </div>

        <span class="material-symbols-outlined text-lg transition-transform duration-200 {{ $isAnalyticsActive ? 'rotate-180' : '' }}">
            expand_more
        </span>
    </button>

    <div class="submenu overflow-hidden transition-all duration-300 flex flex-col pl-6"
         style="max-height: {{ $isAnalyticsActive ? '200px' : '0px' }}">

        <a href="{{ route('superadmin.safety-score') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.safety-score')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Skor Keselamatan
        </a>

        <a href="{{ route('superadmin.alert-trends') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.alert-trends')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Analisis Peringatan
        </a>

        <a href="{{ route('superadmin.reports') }}"
           class="flex items-center py-2 px-4 rounded-lg text-body-sm
           {{ request()->routeIs('superadmin.reports')
                ? 'text-primary font-bold bg-primary-container/30'
                : 'text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all' }}">
            Laporan
        </a>

    </div>
</div>

<!-- Paket Langganan -->
<a href="{{ route('superadmin.subscriptions') }}"
   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all mt-4 active:scale-95 duration-200
   {{ request()->routeIs('superadmin.subscriptions')
        ? 'bg-primary-container text-primary font-bold'
        : 'text-on-surface-variant hover:bg-surface-container-highest' }}">

    <span class="material-symbols-outlined">payments</span>
    <span class="font-label-md text-label-md">Paket Langganan</span>

</a>
    </nav>
    
    <!-- Pengaturan Samping -->
    <div class="mt-8 border-t border-outline-variant/30 pt-4">
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-highest rounded-xl transition-all active:scale-95 duration-200" href="#">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-label-md text-label-md">Pengaturan</span>
        </a>
    </div>
</aside>

<!-- Area Tampilan Utama -->
<main class="ml-0 lg:ml-72 min-h-screen pb-stack-lg transition-all duration-300">
    
    <!-- Header Navigasi Atas -->
    <header class="flex justify-between items-center h-20 px-gutter sticky top-0 bg-surface/85 backdrop-blur-md border-b border-outline-variant/30 z-40">
        <div class="flex items-center gap-4">
            <!-- Pemicu Sidebar Seluler -->
            <button onclick="toggleMobileSidebar()" class="lg:hidden p-2 text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors">
                <span class="material-symbols-outlined">menu</span>
            </button>
            
            <!-- Kolom Pencarian -->
            <div class="flex items-center gap-4 bg-surface-container-low rounded-full px-4 py-2 w-72 sm:w-96 focus-within:ring-2 focus-within:ring-primary/20 transition-all border border-outline-variant/10">
                <span class="material-symbols-outlined text-outline">search</span>
                <input class="bg-transparent border-none outline-none focus:outline-none focus:ring-0 text-body-sm w-full placeholder-outline/60 text-on-surface" placeholder="Cari berdasarkan wilayah, daycare, atau ID insiden..." type="text">
            </div>
        </div>
        
        <!-- Aksi Header -->
<div class="flex items-center gap-6">

    <!-- Icon Actions -->
    <div class="flex items-center gap-3">

        <!-- Theme Toggle -->
        <button id="theme-toggle"
            class="w-10 h-10 flex items-center justify-center rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-all duration-200 active:scale-95"
            title="Ubah Mode Gelap/Terang">

            <span class="material-symbols-outlined block dark:hidden">
                dark_mode
            </span>

            <span class="material-symbols-outlined hidden dark:block">
                light_mode
            </span>
        </button>

        <!-- Notification -->
        <div class="relative">
            <button
                class="w-10 h-10 flex items-center justify-center rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-all duration-200 active:scale-95">

                <span class="material-symbols-outlined">
                    notifications
                </span>

            </button>

            <span
                class="absolute top-2.5 right-2.5 w-2 h-2 bg-error rounded-full border-2 border-surface">
            </span>
        </div>

        <!-- Help -->
        <button
            class="w-10 h-10 flex items-center justify-center rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-all duration-200 active:scale-95">

            <span class="material-symbols-outlined">
                help
            </span>
        </button>

    </div>

            <!-- Profil Pengguna -->
            <div class="flex items-center gap-3 border-l border-outline-variant/30 pl-4 sm:pl-6">
                <div class="text-right hidden sm:block">
                    <p class="font-label-md text-label-md text-on-surface leading-none font-bold">Kepala Komando</p>
                    <p class="font-label-sm text-[10px] text-outline uppercase tracking-wider mt-1">Superadmin</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-primary-container overflow-hidden ring-2 ring-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-xl">admin_panel_settings</span>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Kanvas Konten Utama -->
    <div class="p-4 sm:p-container-padding space-y-stack-md">
        
        @yield('content')

    </div>
</main>

<script>
    // Fungsionalitas Pengubah Tema (Dark/Light Mode)
    const themeToggleBtn = document.getElementById('theme-toggle');
    themeToggleBtn.addEventListener('click', () => {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    });

    // Fungsionalitas Buka/Tutup Sidebar Seluler
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

    // Fungsionalitas Akordeon Sidebar
    function toggleSidebarGroup(button) {
        const submenu = button.nextElementSibling;
        const arrow = button.querySelector('.material-symbols-outlined:last-child');
        
        if (submenu.style.maxHeight && submenu.style.maxHeight !== '0px') {
            submenu.style.maxHeight = '0px';
            arrow.classList.remove('rotate-180');
        } else {
            submenu.style.maxHeight = submenu.scrollHeight + 'px';
            arrow.classList.add('rotate-180');
        }
    }

    // Fungsionalitas Tooltip Peta Interaktif
    const mapTooltip = document.getElementById('map-tooltip');
    const tooltipTitle = document.getElementById('tooltip-title');
    const tooltipCenters = document.getElementById('tooltip-centers');
    const tooltipScore = document.getElementById('tooltip-score');
    const tooltipStatus = document.getElementById('tooltip-status');

    function showMapTooltip(event, name, centers, score, status, statusClass) {
        tooltipTitle.textContent = name;
        tooltipCenters.textContent = centers;
        tooltipScore.textContent = score;
        tooltipStatus.textContent = status;
        
        // Atur warna teks status
        tooltipStatus.className = 'font-bold uppercase';
        if (statusClass === 'secondary') {
            tooltipStatus.classList.add('text-secondary');
            tooltipScore.className = 'font-bold text-secondary text-base';
        } else if (statusClass === 'tertiary') {
            tooltipStatus.classList.add('text-tertiary');
            tooltipScore.className = 'font-bold text-tertiary text-base';
        } else {
            tooltipStatus.classList.add('text-error');
            tooltipScore.className = 'font-bold text-error text-base';
        }

        mapTooltip.classList.remove('hidden');
        moveMapTooltip(event);
    }

    function moveMapTooltip(event) {
        const containerRect = event.currentTarget.ownerSVGElement.parentNode.getBoundingClientRect();
        const mouseX = event.clientX - containerRect.left;
        const mouseY = event.clientY - containerRect.top;

        // Posisikan tooltip
        mapTooltip.style.left = (mouseX + 15) + 'px';
        mapTooltip.style.top = (mouseY + 15) + 'px';
    }

    function hideMapTooltip() {
        mapTooltip.classList.add('hidden');
    }

    // Aksi tombol fokus daerah
    function focusRegion(regionName) {
        alert(`Memfokuskan pemantauan telemetri ke wilayah: ${regionName}`);
    }

    // Animasi Masuk Sleek saat Scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-4');
            }
        });
    }, { threshold: 0.05 });

    document.querySelectorAll('.card-shadow').forEach(card => {
        card.classList.add('transition-all', 'duration-500', 'opacity-0', 'translate-y-4');
        observer.observe(card);
    });
</script>
</body>
</html>
