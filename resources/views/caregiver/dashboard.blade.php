<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>CERIA | Dashboard Pengasuh</title>
    
    <!-- Tema & Skrip Awal (sinkron dengan superadmin) -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    
    <!-- Tailwind CSS + Konfigurasi (identik dengan superadmin) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        /* CSS Variables (Material Design 3) - SAMA dengan superadmin */
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
        
        /* Custom scrollbar */
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
        
        /* Transisi halus untuk semua elemen */
        * {
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
            transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
            transition-duration: 200ms;
        }
    </style>
</head>
<body class="bg-background text-on-surface">

<!-- Backdrop overlay untuk mobile sidebar (sama seperti superadmin) -->
<div id="sidebar-backdrop" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden transition-opacity duration-300 opacity-0" onclick="toggleMobileSidebar()"></div>

<!-- SIDEBAR - Konsisten dengan Superadmin (warna, radius, spacing) -->
<aside id="sidebar" class="h-screen w-72 fixed left-0 top-0 bg-surface-container dark:bg-surface-container-high shadow-sm flex flex-col p-stack-md z-50 overflow-y-auto transition-transform duration-300 -translate-x-full lg:translate-x-0 border-r border-outline-variant/30">
    <div class="mb-8 px-4 flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold tracking-tight" style="color: #F4B400;">CERIA</h1>
            <p class="text-xs text-outline opacity-70 font-semibold mt-0.5">Pusat Kendali Pengasuh</p>
        </div>
        <button onclick="toggleMobileSidebar()" class="lg:hidden p-1.5 text-on-surface-variant hover:bg-surface-container-highest rounded-full">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    
    <nav class="flex flex-col gap-1.5 flex-1">
        <!-- Dashboard aktif -->
        <a class="flex items-center gap-3 px-4 py-3 bg-primary-container text-primary rounded-xl font-bold">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-sm font-semibold">Dashboard</span>
        </a>
        
        <!-- Navigasi lainnya -->
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-highest/50 rounded-xl transition-all">
            <span class="material-symbols-outlined">family_restroom</span>
            <span class="text-sm font-medium">Anak Asuh</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-highest/50 rounded-xl transition-all">
            <span class="material-symbols-outlined">edit_calendar</span>
            <span class="text-sm font-medium">Catat Aktivitas</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-highest/50 rounded-xl transition-all">
            <span class="material-symbols-outlined">schedule</span>
            <span class="text-sm font-medium">Jadwal</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-highest/50 rounded-xl transition-all">
            <span class="material-symbols-outlined">assessment</span>
            <span class="text-sm font-medium">Laporan</span>
        </a>
    </nav>
    
    <div class="mt-auto pt-6 border-t border-outline-variant/30">
        <div class="flex items-center gap-3 px-4 py-2 text-xs text-outline">
            <span class="material-symbols-outlined text-sm">settings</span>
            <span>Pengaturan</span>
        </div>
    </div>
</aside>

<!-- MAIN CONTENT -->
<main class="ml-0 lg:ml-72 min-h-screen transition-all duration-300">
    <!-- Header Atas (konsisten dengan superadmin) -->
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
            <!-- Theme Toggle (sama persis) -->
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
                    <p class="text-sm font-bold text-on-surface">Sarah</p>
                    <p class="text-[10px] text-outline uppercase font-bold">Pengasuh Senior</p>
                </div>
                <div class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">badge</span>
                </div>
            </div>
        </div>
    </header>
    
    <!-- KONTEN UTAMA (data asli caregiver, visual superadmin) -->
    <div class="p-5 sm:p-8 space-y-7">
        
        <!-- Judul Halaman + Badge AI -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-4">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-on-surface tracking-tight">Ringkasan Pengawasan Hari Ini</h2>
                <p class="text-on-surface-variant text-sm mt-1">Pantau aktivitas, keselamatan, dan kondisi anak secara real-time melalui CERIA AI.</p>
            </div>
            <div class="flex items-center gap-2 bg-primary-container/30 text-primary px-4 py-2 rounded-full border border-primary/20 self-start">
                <span class="material-symbols-outlined text-sm">neurology</span>
                <span class="text-xs font-bold">AI Monitoring Aktif</span>
            </div>
        </div>
        
        <!-- Statistic Cards (3 kartu: Anak Diasuh, Aktivitas Dicatat, Perlu Perhatian) dengan gaya premium -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            <!-- Kartu 1 -->
            <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/20 hover:-translate-y-1 transition-all">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-primary-container text-primary rounded-2xl">
                        <span class="material-symbols-outlined">child_care</span>
                    </div>
                    <span class="text-secondary text-xs font-bold bg-secondary/10 px-2 py-1 rounded-full">↑ +2 minggu ini</span>
                </div>
                <p class="text-outline text-xs font-semibold uppercase tracking-wide">Anak Diasuh Hari Ini</p>
                <h3 class="text-4xl font-extrabold text-on-surface mt-1">12</h3>
            </div>
            
            <!-- Kartu 2 -->
            <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/20 hover:-translate-y-1 transition-all">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-tertiary-container text-tertiary rounded-2xl">
                        <span class="material-symbols-outlined">event_note</span>
                    </div>
                    <span class="text-outline text-xs font-bold bg-surface-container-high px-2 py-1 rounded-full">Dari 18 terjadwal</span>
                </div>
                <p class="text-outline text-xs font-semibold uppercase tracking-wide">Aktivitas Dicatat</p>
                <h3 class="text-4xl font-extrabold text-on-surface mt-1">14</h3>
            </div>
            
            <!-- Kartu 3 (Perhatian) -->
            <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/20 hover:-translate-y-1 transition-all relative overflow-hidden">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-error-container text-error rounded-2xl">
                        <span class="material-symbols-outlined">priority_high</span>
                    </div>
                    <span class="text-error text-xs font-bold bg-error/10 px-2 py-1 rounded-full">+1 dari kemarin</span>
                </div>
                <p class="text-outline text-xs font-semibold uppercase tracking-wide">Perlu Perhatian</p>
                <h3 class="text-4xl font-extrabold text-error mt-1">3</h3>
                <div class="absolute -right-6 -bottom-6 w-24 h-24 bg-error/5 rounded-full blur-xl"></div>
            </div>
        </div>
        
        <!-- RINGKASAN CERIA AI (4 insight cards) gaya superadmin -->
        <div>
            <div class="flex items-center gap-2 mb-4">
                <span class="material-symbols-outlined text-primary">lightbulb</span>
                <h3 class="text-xl font-bold text-on-surface">Ringkasan Ceria AI</h3>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="bg-surface-container-lowest rounded-2xl p-5 border-l-4 border-secondary shadow-sm">
                    <p class="text-outline text-xs font-semibold">AMAN</p>
                    <p class="text-3xl font-black text-on-surface mt-1">8</p>
                    <p class="text-xs text-on-surface-variant mt-1">Anak dalam kondisi aman</p>
                </div>
                <div class="bg-surface-container-lowest rounded-2xl p-5 border-l-4 border-tertiary shadow-sm">
                    <p class="text-outline text-xs font-semibold">OBSERVASI</p>
                    <p class="text-3xl font-black text-on-surface mt-1">4</p>
                    <p class="text-xs text-on-surface-variant mt-1">Perlu pemantauan ekstra</p>
                </div>
                <div class="bg-surface-container-lowest rounded-2xl p-5 border-l-4 border-error shadow-sm">
                    <p class="text-outline text-xs font-semibold">PERINGATAN AI</p>
                    <p class="text-3xl font-black text-on-surface mt-1">2</p>
                    <p class="text-xs text-on-surface-variant mt-1">Insiden terdeteksi</p>
                </div>
                <div class="bg-surface-container-lowest rounded-2xl p-5 border-l-4 border-primary shadow-sm">
                    <p class="text-outline text-xs font-semibold">AKTIVITAS HARI INI</p>
                    <p class="text-3xl font-black text-on-surface mt-1">47</p>
                    <p class="text-xs text-on-surface-variant mt-1">Makan, tidur, bermain</p>
                </div>
            </div>
        </div>
        
        <!-- 2 KOLOM: STATUS ANAK + INPUT AKTIVITAS HARIAN -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Card Status Anak (redesign modern dengan avatar) -->
            <div class="bg-surface-container-lowest rounded-3xl p-6 card-shadow border border-outline-variant/20">
                <div class="flex justify-between items-center mb-5">
                    <h3 class="text-lg font-bold text-on-surface flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">face_4</span> Status Anak Hari Ini
                    </h3>
                    <span class="text-xs text-outline">Diperbarui real-time</span>
                </div>
                <div class="space-y-4">
                    <!-- List anak asli dari data caregiver -->
                    <div class="flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-low transition-all">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary-container text-primary flex items-center justify-center font-bold">EJ</div>
                            <div><p class="font-bold text-sm">Ethan James</p><p class="text-xs text-outline">3 tahun</p></div>
                        </div>
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-secondary/15 text-secondary">Aman</span>
                    </div>
                    <div class="flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-low transition-all">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-tertiary-container text-tertiary flex items-center justify-center font-bold">ML</div>
                            <div><p class="font-bold text-sm">Mia Lopez</p><p class="text-xs text-outline">2 tahun 8 bln</p></div>
                        </div>
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-tertiary/15 text-tertiary">Observasi</span>
                    </div>
                    <div class="flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-low transition-all">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary-container text-primary flex items-center justify-center font-bold">OW</div>
                            <div><p class="font-bold text-sm">Oliver White</p><p class="text-xs text-outline">4 tahun</p></div>
                        </div>
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-secondary/15 text-secondary">Aman</span>
                    </div>
                    <div class="flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-low transition-all">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-error-container text-error flex items-center justify-center font-bold">SC</div>
                            <div><p class="font-bold text-sm">Sophia Chen</p><p class="text-xs text-outline">3 tahun 2 bln</p></div>
                        </div>
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-error/15 text-error">Perlu Perhatian</span>
                    </div>
                </div>
                <p class="text-right text-xs text-primary mt-4 font-semibold">+3 anak lainnya →</p>
            </div>
            
            <!-- Catat Aktivitas Cepat (quick action cards) -->
            <div class="bg-surface-container-lowest rounded-3xl p-6 card-shadow border border-outline-variant/20">
                <h3 class="text-lg font-bold text-on-surface mb-5 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">add_task</span> Catat Aktivitas Cepat
                </h3>
                <div class="grid grid-cols-2 gap-3">
                    <!-- Tombol aktivitas -->
                    <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all border border-outline-variant/20 text-left">
                        <div class="w-9 h-9 rounded-full bg-primary/10 text-primary flex items-center justify-center"><span class="material-symbols-outlined text-sm">restaurant</span></div>
                        <span class="text-sm font-semibold">Makan</span>
                    </button>
                    <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all">
                        <div class="w-9 h-9 rounded-full bg-tertiary/10 text-tertiary flex items-center justify-center"><span class="material-symbols-outlined text-sm">bedtime</span></div>
                        <span class="text-sm font-semibold">Tidur Siang</span>
                    </button>
                    <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all">
                        <div class="w-9 h-9 rounded-full bg-primary/10 text-primary flex items-center justify-center"><span class="material-symbols-outlined text-sm">wc</span></div>
                        <span class="text-sm font-semibold">Ke Toilet</span>
                    </button>
                    <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all">
                        <div class="w-9 h-9 rounded-full bg-tertiary/10 text-tertiary flex items-center justify-center"><span class="material-symbols-outlined text-sm">sports_esports</span></div>
                        <span class="text-sm font-semibold">Bermain</span>
                    </button>
                    <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all">
                        <div class="w-9 h-9 rounded-full bg-error/10 text-error flex items-center justify-center"><span class="material-symbols-outlined text-sm">medication</span></div>
                        <span class="text-sm font-semibold">Obat/Kesehatan</span>
                    </button>
                    <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all">
                        <div class="w-9 h-9 rounded-full bg-primary/10 text-primary flex items-center justify-center"><span class="material-symbols-outlined text-sm">sentiment_satisfied</span></div>
                        <span class="text-sm font-semibold">Mood Check</span>
                    </button>
                </div>
                <div class="mt-5 pt-4 border-t border-outline-variant/20 flex justify-between text-sm">
                    <div><span class="font-bold text-on-surface">Makan:</span> <span class="text-outline">8x</span></div>
                    <div><span class="font-bold text-on-surface">Tidur:</span> <span class="text-outline">5x</span></div>
                    <div><span class="font-bold text-on-surface">Toilet:</span> <span class="text-outline">11x</span></div>
                    <div><span class="font-bold text-on-surface">Bermain:</span> <span class="text-outline">9x</span></div>
                </div>
            </div>
        </div>
        
        <!-- DETEKSI CERIA AI HARI INI (progress bars gaya superadmin) -->
        <div>
            <div class="flex items-center gap-2 mb-4">
                <span class="material-symbols-outlined text-primary">monitor_heart</span>
                <h3 class="text-xl font-bold text-on-surface">Deteksi Ceria AI Hari Ini</h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="bg-surface-container-lowest p-5 rounded-2xl card-shadow">
                    <div class="flex justify-between text-sm font-semibold mb-2"><span>😢 Tangisan Terdeteksi</span><span class="text-amber-600">24%</span></div>
                    <div class="w-full h-2 bg-surface-container-highest rounded-full overflow-hidden"><div class="h-full bg-amber-500 rounded-full" style="width:24%"></div></div>
                </div>
                <div class="bg-surface-container-lowest p-5 rounded-2xl card-shadow">
                    <div class="flex justify-between text-sm font-semibold mb-2"><span>⚡ Gerakan Agresif</span><span class="text-amber-600">8%</span></div>
                    <div class="w-full h-2 bg-surface-container-highest rounded-full overflow-hidden"><div class="h-full bg-amber-500 rounded-full" style="width:8%"></div></div>
                </div>
                <div class="bg-surface-container-lowest p-5 rounded-2xl card-shadow">
                    <div class="flex justify-between text-sm font-semibold mb-2"><span>⚠️ Terjatuh / Tidak Bergerak</span><span class="text-error">3%</span></div>
                    <div class="w-full h-2 bg-surface-container-highest rounded-full overflow-hidden"><div class="h-full bg-error rounded-full" style="width:3%"></div></div>
                </div>
                <div class="bg-surface-container-lowest p-5 rounded-2xl card-shadow">
                    <div class="flex justify-between text-sm font-semibold mb-2"><span>🤝 Interaksi Tidak Wajar</span><span class="text-orange-600">5%</span></div>
                    <div class="w-full h-2 bg-surface-container-highest rounded-full overflow-hidden"><div class="h-full bg-orange-500 rounded-full" style="width:5%"></div></div>
                </div>
            </div>
        </div>
        
        <!-- AKTIVITAS TERBARU (timeline) dengan gaya card yang elevated -->
        <div class="bg-surface-container-lowest rounded-3xl p-6 card-shadow border border-outline-variant/20">
            <div class="flex justify-between items-center mb-5">
                <h3 class="text-lg font-bold text-on-surface flex items-center gap-2"><span class="material-symbols-outlined text-primary">history</span> Aktivitas Terbaru</h3>
                <span class="text-xs text-primary font-semibold">Lihat semua →</span>
            </div>
            <div class="space-y-4">
                <div class="flex items-center gap-4 pb-3 border-b border-outline-variant/20">
                    <span class="text-sm font-bold text-primary min-w-[60px]">08:45</span>
                    <div class="flex-1"><span class="font-bold">Ethan James</span> · Sarapan (Nasi tim + telur)</div>
                    <span class="text-xs px-2 py-1 rounded-full bg-secondary/10 text-secondary">Selesai</span>
                </div>
                <div class="flex items-center gap-4 pb-3 border-b border-outline-variant/20">
                    <span class="text-sm font-bold text-primary min-w-[60px]">09:30</span>
                    <div class="flex-1"><span class="font-bold">Sophia Chen</span> · Ke toilet + cuci tangan</div>
                    <span class="text-xs px-2 py-1 rounded-full bg-error/10 text-error">Perlu perhatian</span>
                </div>
                <div class="flex items-center gap-4 pb-3 border-b border-outline-variant/20">
                    <span class="text-sm font-bold text-primary min-w-[60px]">10:15</span>
                    <div class="flex-1"><span class="font-bold">Mia Lopez</span> · Bermain sensori (pasir kinetik)</div>
                    <span class="text-xs px-2 py-1 rounded-full bg-tertiary/10 text-tertiary">Observasi</span>
                </div>
                <div class="flex items-center gap-4 pb-3 border-b border-outline-variant/20">
                    <span class="text-sm font-bold text-primary min-w-[60px]">11:00</span>
                    <div class="flex-1"><span class="font-bold">Oliver White</span> · Tidur siang (durasi 75 menit)</div>
                    <span class="text-xs px-2 py-1 rounded-full bg-surface-container-high text-outline">Normal</span>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-sm font-bold text-primary min-w-[60px]">13:20</span>
                    <div class="flex-1"><span class="font-bold">Ethan James</span> · Minum susu + obat (vitamin)</div>
                    <span class="text-xs px-2 py-1 rounded-full bg-primary/10 text-primary">Kesehatan</span>
                </div>
            </div>
        </div>
        
        <footer class="text-center text-xs text-outline py-6 border-t border-outline-variant/20 mt-2">
            CERIA Dashboard Pengasuh • Keamanan anak didukung AI • Data real-time
        </footer>
    </div>
</main>

<script>
    // Theme toggle (sama persis dengan superadmin)
    const themeToggle = document.getElementById('theme-toggle');
    themeToggle.addEventListener('click', () => {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    });
    
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
    
    // Animasi fade-in untuk card (opsional)
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.05 });
    document.querySelectorAll('.bg-surface-container-lowest, .grid > div').forEach(el => {
        if (el.classList) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(12px)';
            el.style.transition = 'all 0.4s ease-out';
            observer.observe(el);
        }
    });
</script>
</body>
</html>