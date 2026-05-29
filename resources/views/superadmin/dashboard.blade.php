<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CERIA Pusat Komando Nasional</title>
    
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
        <a class="flex items-center gap-3 px-4 py-3 bg-primary-container text-primary rounded-xl font-bold">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-label-md text-label-md">Ringkasan</span>
        </a>
        
        <!-- Manajemen Daycare -->
        <div class="space-y-1">
            <button onclick="toggleSidebarGroup(this)" class="w-full flex items-center justify-between px-4 py-3 text-on-surface-variant font-bold hover:bg-surface-container-highest/50 rounded-xl transition-all">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined">child_care</span>
                    <span class="font-label-md text-label-md">Manajemen Daycare</span>
                </div>
                <span class="material-symbols-outlined text-lg transition-transform duration-200">expand_more</span>
            </button>
            <div class="submenu overflow-hidden transition-all duration-300 max-h-0 flex flex-col pl-6">
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Pusat Daycare</a>
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Verifikasi</a>
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Daycare Ditangguhkan</a>
            </div>
        </div>
        
        <!-- Pemantauan Nasional -->
        <div class="space-y-1">
            <button onclick="toggleSidebarGroup(this)" class="w-full flex items-center justify-between px-4 py-3 text-on-surface-variant font-bold hover:bg-surface-container-highest/50 rounded-xl transition-all">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined">visibility</span>
                    <span class="font-label-md text-label-md">Pemantauan Nasional</span>
                </div>
                <span class="material-symbols-outlined text-lg transition-transform duration-200">expand_more</span>
            </button>
            <div class="submenu overflow-hidden transition-all duration-300 max-h-0 flex flex-col pl-6">
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Peringatan Langsung</a>
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Pemantauan AI</a>
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-error hover:bg-error/5 font-bold transition-all" href="#">Pusat Darurat</a>
            </div>
        </div>
        
        <!-- Pengaduan -->
        <div class="space-y-1">
            <button onclick="toggleSidebarGroup(this)" class="w-full flex items-center justify-between px-4 py-3 text-on-surface-variant font-bold hover:bg-surface-container-highest/50 rounded-xl transition-all">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined">report_problem</span>
                    <span class="font-label-md text-label-md">Pengaduan</span>
                </div>
                <span class="material-symbols-outlined text-lg transition-transform duration-200">expand_more</span>
            </button>
            <div class="submenu overflow-hidden transition-all duration-300 max-h-0 flex flex-col pl-6">
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Laporan Orang Tua</a>
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Penyelidikan</a>
            </div>
        </div>
        
        <!-- Pengguna -->
        <div class="space-y-1">
            <button onclick="toggleSidebarGroup(this)" class="w-full flex items-center justify-between px-4 py-3 text-on-surface-variant font-bold hover:bg-surface-container-highest/50 rounded-xl transition-all">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined">group</span>
                    <span class="font-label-md text-label-md">Pengguna</span>
                </div>
                <span class="material-symbols-outlined text-lg transition-transform duration-200">expand_more</span>
            </button>
            <div class="submenu overflow-hidden transition-all duration-300 max-h-0 flex flex-col pl-6">
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Orang Tua</a>
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Pengasuh</a>
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Admin Daycare</a>
            </div>
        </div>
        
        <!-- Analitik -->
        <div class="space-y-1">
            <button onclick="toggleSidebarGroup(this)" class="w-full flex items-center justify-between px-4 py-3 text-on-surface-variant font-bold hover:bg-surface-container-highest/50 rounded-xl transition-all">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined">analytics</span>
                    <span class="font-label-md text-label-md">Analitik</span>
                </div>
                <span class="material-symbols-outlined text-lg transition-transform duration-200">expand_more</span>
            </button>
            <div class="submenu overflow-hidden transition-all duration-300 max-h-0 flex flex-col pl-6">
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Skor Keselamatan</a>
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Tren Peringatan</a>
                <a class="flex items-center py-2 px-4 rounded-lg text-body-sm text-on-surface-variant hover:bg-surface-container-highest/30 hover:text-primary transition-all" href="#">Laporan</a>
            </div>
        </div>
        
        <!-- Paket Langganan -->
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-highest rounded-xl transition-all mt-4 active:scale-95 duration-200" href="#">
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
        
        <!-- Judul Dashboard -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-4">
            <div>
                <h2 class="font-display-lg text-2xl sm:text-display-lg text-on-surface">Dashboard Monitoring Nasional</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-1">Pemantauan keselamatan anak, aktivitas daycare, dan peringatan penting secara real-time dari seluruh daycare yang terdaftar.</p>
            </div>
            <div class="flex gap-3">
                <button class="flex items-center gap-2 px-4 py-2 border border-outline/30 rounded-xl font-label-md text-label-md hover:bg-surface-container-highest/40 transition-all active:scale-95 text-on-surface">
                    <span class="material-symbols-outlined text-[18px]">map</span>
                    Tampilan Global
                </button>
                <button class="flex items-center gap-2 px-6 py-2 bg-primary text-on-primary rounded-xl font-label-md text-label-md shadow-lg active:scale-95 transition-all hover:opacity-90">
                    <span class="material-symbols-outlined text-[18px]">add_moderator</span>
                    Kerahkan Respons Darurat
                </button>
            </div>
        </div>
        
        <!-- Baris Metrik Utama -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
            <!-- Metrik 1 -->
            <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/30 group hover:-translate-y-1 transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-primary-container text-on-primary-container rounded-2xl">
                        <span class="material-symbols-outlined">child_care</span>
                    </div>
                    <span class="text-secondary font-label-sm flex items-center gap-1 font-bold">
                        <span class="material-symbols-outlined text-sm">trending_up</span> +3
                    </span>
                </div>
                <p class="font-label-md text-label-md text-outline">Total Pusat Daycare</p>
                <h3 class="font-display-lg text-3xl font-bold text-on-surface mt-1">42</h3>
                <p class="font-label-sm text-[11px] text-outline mt-2">6 menunggu verifikasi</p>
            </div>
            
            <!-- Metrik 2 -->
            <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/30 group hover:-translate-y-1 transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-secondary-container text-on-secondary-container rounded-2xl">
                        <span class="material-symbols-outlined">security</span>
                    </div>
                    <span class="text-secondary font-label-sm flex items-center gap-1 font-bold">
                        <span class="material-symbols-outlined text-sm">trending_up</span> 1.2%
                    </span>
                </div>
                <p class="font-label-md text-label-md text-outline">Skor Keselamatan Nasional</p>
                <h3 class="font-display-lg text-3xl font-bold text-on-surface mt-1">94.8</h3>
                <div class="w-full bg-surface-container-highest rounded-full h-1.5 mt-4 overflow-hidden">
                    <div class="bg-secondary h-1.5 rounded-full" style="width: 94.8%"></div>
                </div>
            </div>
            
            <!-- Metrik 3 -->
            <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/30 group hover:-translate-y-1 transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-tertiary-container text-on-tertiary-container rounded-2xl">
                        <span class="material-symbols-outlined">memory</span>
                    </div>
                    <div class="flex items-center gap-1.5 px-2.5 py-0.5 bg-secondary/15 text-secondary rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
                        <span class="text-[10px] font-bold">AKTIF</span>
                    </div>
                </div>
                <p class="font-label-md text-label-md text-outline">Pemantauan AI Aktif</p>
                <h3 class="font-display-lg text-3xl font-bold text-on-surface mt-1">1.2M</h3>
                <p class="font-label-sm text-[11px] text-outline mt-2">Bingkai dianalisis per menit</p>
            </div>
            
            <!-- Metrik 4: Pusat Peringatan Kritis -->
            <div class="bg-error text-on-error p-6 rounded-3xl card-shadow group hover:-translate-y-1 transition-all duration-300 relative overflow-hidden alert-glow">
                <div class="flex justify-between items-start mb-4 relative z-10">
                    <div class="p-3 bg-white/20 rounded-2xl">
                        <span class="material-symbols-outlined text-white">campaign</span>
                    </div>
                    <span class="px-2.5 py-0.5 bg-white text-error font-bold text-[10px] rounded-full uppercase tracking-wider shadow">Prioritas Tinggi</span>
                </div>
                <p class="font-label-md text-label-md text-white/80 relative z-10">Peringatan Kritis Hari Ini</p>
                <h3 class="font-display-lg text-3xl font-bold mt-1 relative z-10">04</h3>
                <p class="font-label-sm text-[11px] text-white/70 mt-2 relative z-10">Terbaru: Little Stars Academy (3 mnt lalu)</p>
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
            </div>
        </div>
        
        <!-- Peta Monitoring Keamanan Daycare -->
        <div class="grid grid-cols-12 gap-gutter">
            <div class="col-span-12 bg-surface-container-lowest rounded-3xl p-6 sm:p-8 card-shadow overflow-hidden relative min-h-[500px] border border-outline-variant/20">
                <div class="flex flex-col sm:flex-row justify-between items-start gap-4 mb-6">
                    <div>
                        <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">Peta Monitoring Keamanan Daycare</h4>
                        <p class="text-body-sm text-outline mt-1">Visualisasi tingkat keamanan dan peringatan daycare secara real-time di seluruh Indonesia.</p>
                    </div>
                    <div class="flex flex-wrap gap-4 text-xs font-semibold">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-secondary"></span>
                            <span class="text-on-surface-variant">Aman (90+)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-tertiary"></span>
                            <span class="text-on-surface-variant">Waspada (70-89)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-error"></span>
                            <span class="text-on-surface-variant">Kritis (&lt;70)</span>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Peta SVG Indonesia Interaktif -->
                    <div class="flex-grow bg-surface-container-low rounded-2xl relative h-[380px] flex items-center justify-center border border-outline-variant/20 p-4">
                        <div class="absolute inset-0 opacity-25 pointer-events-none" style="background-image: radial-gradient(var(--color-primary) 1.5px, transparent 1.5px); background-size: 24px 24px;"></div>
                        
                        <!-- Kontainer Tooltip di dalam Kanvas Peta -->
                        <div id="map-tooltip" class="absolute hidden bg-surface-container-lowest text-on-surface p-4 rounded-2xl border border-outline-variant/30 shadow-xl z-30 pointer-events-none text-xs w-52 transition-all duration-150">
                            <p class="font-bold text-sm text-primary" id="tooltip-title">Sumatra</p>
                            <hr class="my-2 border-outline-variant/30" />
                            <div class="flex justify-between my-1"><span class="text-outline">Total Daycare:</span> <span class="font-bold" id="tooltip-centers">12</span></div>
                            <div class="flex justify-between my-1"><span class="text-outline">Skor Keselamatan:</span> <span class="font-bold text-secondary" id="tooltip-score">96.2</span></div>
                            <div class="flex justify-between my-1"><span class="text-outline">Status:</span> <span class="font-bold uppercase" id="tooltip-status">Aman</span></div>
                        </div>

                        <!-- Bentuk Vektor Peta SVG Indonesia -->
                        <svg class="w-full h-full max-h-[340px]" viewBox="0 0 700 350" xmlns="http://www.w3.org/2000/svg">
                            <!-- Jalur Pulau -->
                            <!-- Sumatra -->
                            <path d="M40 80 L80 60 L180 150 L200 180 L180 200 L140 190 L50 100 Z" 
                                  class="fill-surface-container-highest dark:fill-surface-container stroke-outline-variant/40 hover:fill-primary-container/40 dark:hover:fill-primary-container/20 transition-all duration-300 cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Simpul Sumatra', '11 Daycare', '93.5', 'Aman', 'secondary')"
                                  onmouseout="hideMapTooltip()"/>
                            
                            <!-- Jawa -->
                            <path d="M190 230 L220 230 L290 250 L340 255 L380 255 L380 265 L320 265 L220 245 L190 235 Z" 
                                  class="fill-surface-container-highest dark:fill-surface-container stroke-outline-variant/40 hover:fill-primary-container/40 dark:hover:fill-primary-container/20 transition-all duration-300 cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Simpul Jawa (DKI, Jabar, Jatim)', '32 Daycare', '95.1', 'Aman', 'secondary')"
                                  onmouseout="hideMapTooltip()"/>
                            
                            <!-- Kalimantan -->
                            <path d="M250 80 L310 60 L360 80 L370 120 L350 170 L270 170 L240 130 Z" 
                                  class="fill-surface-container-highest dark:fill-surface-container stroke-outline-variant/40 hover:fill-primary-container/40 dark:hover:fill-primary-container/20 transition-all duration-300 cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Simpul Kalimantan', '5 Daycare', '91.0', 'Aman', 'secondary')"
                                  onmouseout="hideMapTooltip()"/>
                            
                            <!-- Sulawesi -->
                            <path d="M390 90 L430 90 L415 110 L445 110 L445 125 L415 125 L425 155 L415 155 L405 125 L380 130 L380 120 L400 120 Z" 
                                  class="fill-surface-container-highest dark:fill-surface-container stroke-outline-variant/40 hover:fill-primary-container/40 dark:hover:fill-primary-container/20 transition-all duration-300 cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Simpul Sulawesi', '6 Daycare', '74.2', 'Waspada', 'tertiary')"
                                  onmouseout="hideMapTooltip()"/>
                            
                            <!-- Papua -->
                            <path d="M560 120 L620 120 L650 130 L650 180 L590 170 L560 140 Z" 
                                  class="fill-surface-container-highest dark:fill-surface-container stroke-outline-variant/40 hover:fill-primary-container/40 dark:hover:fill-primary-container/20 transition-all duration-300 cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Simpul Papua', '2 Daycare', '90.5', 'Aman', 'secondary')"
                                  onmouseout="hideMapTooltip()"/>
                            
                            <!-- Bali & Nusa Tenggara -->
                            <path d="M385 265 L400 265 L410 268 L430 268 L450 270 L480 272" 
                                  class="stroke-outline-variant/50 stroke-[4] stroke-linecap-round fill-none hover:stroke-primary transition-all cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Bali & Kepulauan Nusa Tenggara', '3 Daycare', '94.0', 'Aman', 'secondary')"
                                  onmouseout="hideMapTooltip()"/>

                            <!-- Hotspot Denyut Interaktif -->
                            <!-- Jakarta (Aman) -->
                            <g class="cursor-pointer group" onmouseover="showMapTooltip(event, 'DKI Jakarta', '18 Daycare', '98.2', 'Aman', 'secondary')" onmouseout="hideMapTooltip()">
                                <circle cx="210" cy="235" r="10" class="fill-secondary/20 animate-ping"/>
                                <circle cx="210" cy="235" r="5" class="fill-secondary stroke-surface-container-lowest stroke-2"/>
                            </g>

                            <!-- Jawa Timur (Waspada) -->
                            <g class="cursor-pointer group" onmouseover="showMapTooltip(event, 'Jawa Timur', '9 Daycare', '88.5', 'Waspada', 'tertiary')" onmouseout="hideMapTooltip()">
                                <circle cx="280" cy="250" r="10" class="fill-tertiary/20 animate-ping"/>
                                <circle cx="280" cy="250" r="5" class="fill-tertiary stroke-surface-container-lowest stroke-2"/>
                            </g>

                            <!-- Makassar (Kritis) -->
                            <g class="cursor-pointer group" onmouseover="showMapTooltip(event, 'Sulawesi Selatan (Makassar)', '4 Daycare', '64.2', 'Kritis', 'error')" onmouseout="hideMapTooltip()">
                                <circle cx="410" cy="140" r="12" class="fill-error/30 animate-ping"/>
                                <circle cx="410" cy="140" r="6" class="fill-error stroke-surface-container-lowest stroke-2"/>
                            </g>
                        </svg>
                        
                        <div class="absolute bottom-4 left-4 bg-surface-container-lowest/80 backdrop-blur border border-outline-variant/30 px-3 py-1.5 rounded-xl text-[10px] text-outline font-bold">
                            Arahkan kursor pada pulau atau hotspot untuk detail wilayah
                        </div>
                    </div>
                    
                    <!-- Sidebar Rincian Wilayah -->
                    <div class="w-full lg:w-80 space-y-4 flex flex-col justify-between">
                        <div>
                            <h5 class="font-label-md text-primary uppercase tracking-widest text-[11px] font-bold">Rincian Wilayah</h5>
                            <div class="space-y-3 mt-3">
                                <div onclick="focusRegion('DKI Jakarta')" class="p-4 bg-surface-container-low rounded-2xl flex justify-between items-center border border-outline-variant/20 hover:border-primary/30 hover:bg-surface-container transition-all cursor-pointer">
                                    <div>
                                        <p class="font-bold text-label-md text-on-surface">DKI Jakarta</p>
                                        <p class="text-[10px] text-outline mt-0.5">18 Pusat • 0 Peringatan</p>
                                    </div>
                                    <span class="text-secondary font-bold text-label-md bg-secondary/10 px-2.5 py-1 rounded-lg">98.2</span>
                                </div>
                                <div onclick="focusRegion('Jawa Timur')" class="p-4 bg-surface-container-low rounded-2xl flex justify-between items-center border border-outline-variant/20 hover:border-primary/30 hover:bg-surface-container transition-all cursor-pointer">
                                    <div>
                                        <p class="font-bold text-label-md text-on-surface">Jawa Timur</p>
                                        <p class="text-[10px] text-outline mt-0.5">9 Pusat • 1 Peringatan</p>
                                    </div>
                                    <span class="text-tertiary font-bold text-label-md bg-tertiary/10 px-2.5 py-1 rounded-lg">88.5</span>
                                </div>
                                <div onclick="focusRegion('Sulawesi Selatan')" class="p-4 bg-error/5 rounded-2xl flex justify-between items-center border border-error/20 hover:bg-error/10 transition-all cursor-pointer">
                                    <div>
                                        <p class="font-bold text-label-md text-on-surface">Sulawesi Selatan</p>
                                        <p class="text-[10px] text-error font-bold mt-0.5">4 Pusat • 2 Kritis</p>
                                    </div>
                                    <span class="text-error font-bold text-label-md bg-error/15 px-2.5 py-1 rounded-lg">64.2</span>
                                </div>
                            </div>
                        </div>
                        <button class="w-full py-3 border border-outline/30 rounded-xl text-label-sm font-bold text-on-surface hover:bg-surface-container-highest/40 transition-all active:scale-95 mt-4">
                            Lihat Semua Provinsi
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Panel Investigasi Darurat -->
        <div class="bg-surface-container-lowest rounded-3xl p-6 sm:p-8 card-shadow border-t-4 border-error border-x border-b border-outline-variant/20">
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-error animate-pulse">emergency</span>
                    <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">Insiden Kritis Aktif</h4>
                </div>
                <button class="text-primary font-label-md flex items-center gap-1 hover:underline text-sm font-bold">
                    Lihat Arsip <span class="material-symbols-outlined text-sm">open_in_new</span>
                </button>
            </div>
            
            <div class="overflow-x-auto -mx-6 sm:mx-0">
                <div class="inline-block min-w-full align-middle px-6 sm:px-0">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-outline border-b border-outline-variant/20">
                                <th class="pb-4 font-label-md">Daycare / Provinsi</th>
                                <th class="pb-4 font-label-md">Jenis Insiden</th>
                                <th class="pb-4 font-label-md">Waktu Kejadian</th>
                                <th class="pb-4 font-label-md">Status</th>
                                <th class="pb-4 font-label-md">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/20">
                            <!-- Baris insiden 1 -->
                            <tr class="group hover:bg-error/5 dark:hover:bg-error/10 transition-colors">
                                <td class="py-5 pr-4">
                                    <div class="font-body-md font-bold text-on-surface">Little Stars Academy</div>
                                    <div class="text-[11px] text-outline mt-0.5">Makassar, Sulawesi Selatan</div>
                                </td>
                                <td class="py-5 pr-4">
                                    <span class="px-3 py-1 bg-error-container text-on-error-container rounded-full text-[12px] font-bold">Gerakan Agresif</span>
                                </td>
                                <td class="py-5 text-outline text-body-sm pr-4">3 menit lalu</td>
                                <td class="py-5 pr-4">
                                    <div class="flex items-center gap-2 text-error">
                                        <span class="w-2 h-2 rounded-full bg-error animate-ping"></span>
                                        <span class="font-label-sm font-bold uppercase tracking-wider text-[11px]">Dieskalasi</span>
                                    </div>
                                </td>
                                <td class="py-5">
                                    <div class="flex gap-2">
                                        <button class="p-2 bg-primary text-on-primary rounded-xl hover:opacity-90 active:scale-95 transition-all" title="Lihat Rekaman">
                                            <span class="material-symbols-outlined text-[18px]">videocam</span>
                                        </button>
                                        <button class="p-2 bg-surface-container text-on-surface rounded-xl hover:bg-surface-container-high active:scale-95 transition-all" title="Buka Penyelidikan">
                                            <span class="material-symbols-outlined text-[18px]">gavel</span>
                                        </button>
                                        <button class="p-2 bg-error text-on-error rounded-xl hover:opacity-90 active:scale-95 transition-all" title="Hubungi Daycare">
                                            <span class="material-symbols-outlined text-[18px]">phone</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- Baris insiden 2 -->
                            <tr class="group hover:bg-surface-container/50 transition-colors">
                                <td class="py-5 pr-4">
                                    <div class="font-body-md font-bold text-on-surface">Bright Horizons</div>
                                    <div class="text-[11px] text-outline mt-0.5">Bandung, Jawa Barat</div>
                                </td>
                                <td class="py-5 pr-4">
                                    <span class="px-3 py-1 bg-tertiary-container text-on-tertiary-container rounded-full text-[12px] font-bold">Tangisan Berkepanjangan</span>
                                </td>
                                <td class="py-5 text-outline text-body-sm pr-4">12 menit lalu</td>
                                <td class="py-5 pr-4">
                                    <div class="flex items-center gap-2 text-tertiary">
                                        <span class="material-symbols-outlined text-[16px] animate-spin" style="animation-duration: 3s;">hourglass_empty</span>
                                        <span class="font-label-sm font-semibold">Memverifikasi</span>
                                    </div>
                                </td>
                                <td class="py-5">
                                    <div class="flex gap-2">
                                        <button class="p-2 bg-primary text-on-primary rounded-xl hover:opacity-90 active:scale-95 transition-all">
                                            <span class="material-symbols-outlined text-[18px]">videocam</span>
                                        </button>
                                        <button class="p-2 bg-surface-container text-on-surface rounded-xl hover:bg-surface-container-high active:scale-95 transition-all">
                                            <span class="material-symbols-outlined text-[18px]">gavel</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Pemantauan AI & Analitik Keselamatan -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
            <!-- Distribusi Insiden Terdeteksi -->
            <div class="bg-surface-container-lowest rounded-3xl p-6 sm:p-8 card-shadow border border-outline-variant/20">
                <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-6">Distribusi Insiden Terdeteksi</h4>
                <div class="space-y-6">
                    <!-- 24% = Kuning -->
                     <div>
                        <div class="flex justify-between text-label-md text-on-surface mb-2 font-semibold">
                            <span>Deteksi Tangisan</span>
                            <span class="font-bold text-amber-600">24%</span>
                        </div>
                        <div class="w-full bg-surface-container-highest rounded-full h-2">
                            <div class="bg-amber-500 h-2 rounded-full" style="width: 24%"></div>
                        </div>
                    </div>
                    <!-- 8% = Kuning -->
                     <div>
                        <div class="flex justify-between text-label-md text-on-surface mb-2 font-semibold">
                            <span>Gerakan Agresif</span>
                            <span class="font-bold text-amber-600">8%</span>
                        </div>
                        <div class="w-full bg-surface-container-highest rounded-full h-2">
                            <div class="bg-amber-500 h-2 rounded-full" style="width: 8%"></div>
                        </div>
                    </div>
                    <!-- 12% = Kuning -->
                     <div>
                        <div class="flex justify-between text-label-md text-on-surface mb-2 font-semibold">
                            <span>Terjatuh / Tidak Bergerak</span>
                            <span class="font-bold text-amber-600">12%</span>
                        </div>
                        <div class="w-full bg-surface-container-highest rounded-full h-2">
                            <div class="bg-amber-500 h-2 rounded-full" style="width: 12%"></div>
                        </div>
                    </div>
                    <!-- 5% = Hijau -->
                     <div>
                        <div class="flex justify-between text-label-md text-on-surface mb-2 font-semibold">
                            <span>Interaksi Tidak Wajar</span>
                            <span class="font-bold text-green-600">5%</span>
                        </div>
                        <div class="w-full bg-surface-container-highest rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 5%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Leaderboard Keamanan Daycare -->
            <div class="bg-primary text-on-primary rounded-3xl p-6 sm:p-8 card-shadow relative overflow-hidden flex flex-col justify-between">
                <div class="relative z-10">
                    <h4 class="font-headline-sm text-headline-sm font-bold mb-2">Leaderboard Keamanan Daycare</h4>
                    <p class="text-on-primary/70 text-body-sm mb-6 font-semibold">Provinsi dengan performa keamanan terbaik bulan ini</p>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-4 bg-white/10 rounded-2xl border border-white/10 hover:bg-white/15 transition-all">
                            <div class="flex items-center gap-3">
                                <span class="w-8 h-8 flex items-center justify-center bg-white/20 rounded-full font-bold">1</span>
                                <span class="font-label-md font-bold">DKI Jakarta</span>
                            </div>
                            <span class="font-bold text-lg">99.2</span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-white/10 rounded-2xl border border-white/10 hover:bg-white/15 transition-all opacity-90">
                            <div class="flex items-center gap-3">
                                <span class="w-8 h-8 flex items-center justify-center bg-white/20 rounded-full font-bold">2</span>
                                <span class="font-label-md font-bold">Jawa Barat</span>
                            </div>
                            <span class="font-bold text-lg">97.8</span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-white/10 rounded-2xl border border-white/10 hover:bg-white/15 transition-all opacity-80">
                            <div class="flex items-center gap-3">
                                <span class="w-8 h-8 flex items-center justify-center bg-white/20 rounded-full font-bold">3</span>
                                <span class="font-label-md font-bold">Jawa Tengah</span>
                            </div>
                            <span class="font-bold text-lg">96.5</span>
                        </div>
                    </div>
                </div>
                <button class="mt-6 py-3 bg-white text-primary rounded-xl font-bold hover:bg-white/95 active:scale-[0.98] transition-all relative z-10">
                    Laporan Rinci
                </button>
                <div class="absolute -right-20 -top-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            </div>
        </div>
        
        <!-- Aliran Pengaduan & Antrean Verifikasi -->
        <div class="grid grid-cols-12 gap-gutter">
            <!-- Laporan Orang Tua Aktif -->
            <div class="col-span-12 lg:col-span-7 bg-surface-container-lowest rounded-3xl p-6 sm:p-8 card-shadow border border-outline-variant/20">
                <div class="flex justify-between items-center mb-6">
                    <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">Laporan Orang Tua Aktif</h4>
                    <span class="px-3 py-1 bg-error-container text-on-error-container rounded-full text-[10px] font-bold">12 BELUM SELESAI</span>
                </div>
                
                <div class="space-y-4">
                    <!-- Item laporan 1 -->
                    <div class="flex items-start gap-4 p-4 border border-outline-variant/20 rounded-2xl hover:bg-surface-container-low transition-all">
                        <div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center flex-shrink-0 text-on-surface-variant border border-outline-variant/10">
                            <span class="material-symbols-outlined">person</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start mb-1">
                                <span class="font-bold text-label-md text-on-surface">Budi Santoso</span>
                                <span class="text-[10px] text-outline">ID: #REP-2041</span>
                            </div>
                            <p class="text-body-sm text-on-surface-variant line-clamp-2">Perilaku mencurigakan dilaporkan pada saat jam makan siang di Sunshine Daycare...</p>
                            <div class="flex items-center gap-3 mt-2 flex-wrap">
                                <span class="px-2.5 py-0.5 bg-tertiary-container text-on-tertiary-container rounded text-[10px] font-bold uppercase tracking-wide">Kinerja Staf</span>
                                <span class="text-[10px] text-outline">2 jam lalu</span>
                            </div>
                        </div>
                        <button class="self-center p-2 text-primary hover:bg-primary/10 rounded-full transition-colors active:scale-90">
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                    
                    <!-- Item laporan 2 -->
                    <div class="flex items-start gap-4 p-4 border border-outline-variant/20 rounded-2xl hover:bg-surface-container-low transition-all">
                        <div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center flex-shrink-0 text-on-surface-variant border border-outline-variant/10">
                            <span class="material-symbols-outlined">person</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start mb-1">
                                <span class="font-bold text-label-md text-on-surface">Siti Aminah</span>
                                <span class="text-[10px] text-outline">ID: #REP-1992</span>
                            </div>
                            <p class="text-body-sm text-on-surface-variant line-clamp-2">Koneksi kamera pemantau mati selama 45 menit pagi ini tanpa pemberitahuan sistem.</p>
                            <div class="flex items-center gap-3 mt-2 flex-wrap">
                                <span class="px-2.5 py-0.5 bg-surface-container-highest text-on-surface-variant rounded text-[10px] font-bold uppercase tracking-wide">Masalah Teknis</span>
                                <span class="text-[10px] text-outline">Kemarin</span>
                            </div>
                        </div>
                        <button class="self-center p-2 text-primary hover:bg-primary/10 rounded-full transition-colors active:scale-90">
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Antrean Verifikasi Baru -->
            <div class="col-span-12 lg:col-span-5 bg-surface-container-lowest rounded-3xl p-6 sm:p-8 card-shadow border border-outline-variant/20">
                <div class="flex justify-between items-center mb-6">
                    <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">Verifikasi Baru</h4>
                    <button class="text-label-sm font-bold text-primary hover:underline">Lihat Antrean</button>
                </div>
                
                <div class="space-y-4">
                    <!-- Antrean 1 -->
                    <div class="p-4 bg-surface-container-low rounded-2xl border border-outline-variant/20 flex flex-col justify-between">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="font-bold text-label-md text-on-surface">Rainbow Kids Hub</p>
                                <p class="text-[10px] text-outline mt-0.5">Surabaya, Jawa Timur</p>
                            </div>
                            <span class="text-[10px] font-bold text-outline">12 Okt 2023</span>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 py-2 bg-secondary text-on-secondary rounded-xl text-[11px] font-bold hover:opacity-90 active:scale-[0.98] transition-all">SETUJUI</button>
                            <button class="flex-1 py-2 border border-error text-error rounded-xl text-[11px] font-bold hover:bg-error/5 active:scale-[0.98] transition-all">TOLAK</button>
                        </div>
                    </div>
                    
                    <!-- Antrean 2 -->
                    <div class="p-4 bg-surface-container-low rounded-2xl border border-outline-variant/20 flex flex-col justify-between">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="font-bold text-label-md text-on-surface">Happy Feet Nursery</p>
                                <p class="text-[10px] text-outline mt-0.5">Medan, Sumatra Utara</p>
                            </div>
                            <span class="text-[10px] font-bold text-outline">11 Okt 2023</span>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 py-2 bg-secondary text-on-secondary rounded-xl text-[11px] font-bold hover:opacity-90 active:scale-[0.98] transition-all">SETUJUI</button>
                            <button class="flex-1 py-2 border border-error text-error rounded-xl text-[11px] font-bold hover:bg-error/5 active:scale-[0.98] transition-all">TOLAK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
            // Tutup akordeon lainnya terlebih dahulu
            document.querySelectorAll('.submenu').forEach(el => el.style.maxHeight = '0px');
            document.querySelectorAll('.rotate-180').forEach(el => el.classList.remove('rotate-180'));
            
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
