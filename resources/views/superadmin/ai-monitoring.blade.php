@extends('layouts.superadmin')

@section('title', 'AI Monitoring Intelligence')

@section('content')
<div class="animate-fade-in-up">
    <!-- ==================== 1. HEADER ==================== -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-6">
        <div>
            <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">AI Monitoring Intelligence</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Pemantauan aktivitas Artificial Intelligence secara real-time pada seluruh daycare nasional.</p>
        </div>
        <div class="flex items-center gap-3">
            <!-- Search Bar -->
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
                <input type="text" placeholder="Cari daycare, kamera, atau deteksi..." class="pl-10 pr-4 py-2 w-64 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
            </div>
            <!-- Filter Button -->
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">tune</span>
                Filter
            </button>
            <!-- Refresh Button -->
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[18px]">refresh</span>
                Refresh
            </button>
        </div>
    </div>

    <!-- ==================== 2. RINGKASAN STATISTIK AI (4 Cards) ==================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
        <!-- Akurasi Sistem AI -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[24px]">neurology</span>
                </div>
                <div class="flex items-center gap-1 text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">
                    <span class="material-symbols-outlined text-[14px]">trending_up</span> +2.3%
                </div>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Akurasi Sistem AI</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">99.8<sup class="text-sm">%</sup></p>
            <p class="text-[11px] text-slate-400 mt-1">↑ 0.5% dari minggu lalu</p>
        </div>
        <!-- Frame Diproses per Detik -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 text-[24px]">speed</span>
                </div>
                <div class="flex items-center gap-1 text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">
                    <span class="material-symbols-outlined text-[14px]">trending_up</span> +12%
                </div>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Frame Diproses per Detik</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">24.5K</p>
            <p class="text-[11px] text-slate-400 mt-1">Rata-rata 23.2K kemarin</p>
        </div>
        <!-- AI Service Uptime -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-[24px]">cloud_sync</span>
                </div>
                <div class="flex items-center gap-1 text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">
                    <span class="material-symbols-outlined text-[14px]">check_circle</span> Stable
                </div>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">AI Service Uptime</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">99.99<sup class="text-sm">%</sup></p>
            <p class="text-[11px] text-slate-400 mt-1">30 hari terakhir</p>
        </div>
        <!-- Peringatan Aktif -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-red-50 dark:bg-red-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-600 dark:text-red-400 text-[24px]">notifications_active</span>
                </div>
                <div class="flex items-center gap-1 text-red-600 text-xs font-semibold bg-red-50 dark:bg-red-900/30 px-2 py-1 rounded-full">
                    <span class="material-symbols-outlined text-[14px]">warning</span> +1
                </div>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Peringatan Aktif</p>
            <p class="text-3xl font-bold text-red-600 dark:text-red-400">2</p>
            <p class="text-[11px] text-slate-400 mt-1">Perlu perhatian segera</p>
        </div>
    </div>

    <!-- ==================== 3. LIVE VISUAL MONITORING ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden mb-6">
        <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800 flex justify-between items-center flex-wrap gap-3">
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                <h3 class="font-bold text-slate-800 dark:text-white">Live Visual Monitoring</h3>
                <span class="text-xs text-slate-400">| Real-time AI Detection</span>
            </div>
            <div class="flex gap-2">
                <button class="p-2 text-primary bg-primary/10 rounded-lg hover:bg-primary/20 transition">
                    <span class="material-symbols-outlined text-[18px]">grid_view</span>
                </button>
                <button class="p-2 text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition">
                    <span class="material-symbols-outlined text-[18px]">crop_free</span>
                </button>
            </div>
        </div>
        <div class="p-5">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
                <!-- Camera Card 1 - Little Stars Academy (Kritis) -->
                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-lg transition-all">
                    <div class="relative">
                        <div class="h-44 bg-gradient-to-br from-slate-700 to-slate-900 flex items-center justify-center relative">
                            <span class="material-symbols-outlined text-5xl text-slate-500">videocam</span>
                            <!-- Bounding Box -->
                            <div class="absolute top-8 left-8 border-2 border-red-500 rounded-lg p-4">
                                <div class="absolute -top-6 left-0 bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded">Aggressive Movement - 94%</div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-black/70 text-white text-[10px] px-2 py-1 rounded-full flex items-center gap-1">
                                <span class="w-1.5 h-1.5 bg-red-500 rounded-full animate-pulse"></span> LIVE
                            </div>
                        </div>
                        <div class="absolute top-2 left-2 flex gap-1">
                            <span class="px-2 py-0.5 bg-red-500 text-white text-[9px] font-bold rounded-full">KRITIS</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <p class="font-bold text-slate-800 dark:text-white text-sm">Little Stars Academy</p>
                                <p class="text-[10px] text-slate-400">Camera A2 - Playground</p>
                            </div>
                            <span class="text-[10px] font-semibold text-red-500 bg-red-50 dark:bg-red-900/30 px-2 py-0.5 rounded-full">Observasi</span>
                        </div>
                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-[9px] px-2 py-0.5 bg-red-100 dark:bg-red-900/40 text-red-600 rounded-full">Child Detected</span>
                            <span class="text-[9px] px-2 py-0.5 bg-red-100 dark:bg-red-900/40 text-red-600 rounded-full">Aggressive Movement</span>
                        </div>
                    </div>
                </div>
                <!-- Camera Card 2 - Bright Horizons (Waspada) -->
                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-lg transition-all">
                    <div class="relative">
                        <div class="h-44 bg-gradient-to-br from-slate-700 to-slate-900 flex items-center justify-center relative">
                            <span class="material-symbols-outlined text-5xl text-slate-500">videocam</span>
                            <div class="absolute top-8 left-12 border-2 border-amber-500 rounded-lg p-3">
                                <div class="absolute -top-6 left-0 bg-amber-500 text-white text-[10px] font-bold px-2 py-0.5 rounded">Crying Detected - 87%</div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-black/70 text-white text-[10px] px-2 py-1 rounded-full flex items-center gap-1">
                                <span class="w-1.5 h-1.5 bg-red-500 rounded-full animate-pulse"></span> LIVE
                            </div>
                        </div>
                        <div class="absolute top-2 left-2 flex gap-1">
                            <span class="px-2 py-0.5 bg-amber-500 text-white text-[9px] font-bold rounded-full">WASPADA</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <p class="font-bold text-slate-800 dark:text-white text-sm">Bright Horizons</p>
                                <p class="text-[10px] text-slate-400">Camera B1 - Indoor</p>
                            </div>
                            <span class="text-[10px] font-semibold text-amber-500 bg-amber-50 dark:bg-amber-900/30 px-2 py-0.5 rounded-full">Observasi</span>
                        </div>
                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-[9px] px-2 py-0.5 bg-amber-100 dark:bg-amber-900/40 text-amber-600 rounded-full">Crying Detected</span>
                            <span class="text-[9px] px-2 py-0.5 bg-slate-100 dark:bg-slate-700 text-slate-500 rounded-full">Activity Cluster</span>
                        </div>
                    </div>
                </div>
                <!-- Camera Card 3 - Taman Anak Kita (Aman) -->
                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-lg transition-all">
                    <div class="relative">
                        <div class="h-44 bg-gradient-to-br from-slate-700 to-slate-900 flex items-center justify-center relative">
                            <span class="material-symbols-outlined text-5xl text-slate-500">videocam</span>
                            <div class="absolute bottom-4 left-4 border-2 border-emerald-500 rounded-full p-2">
                                <div class="absolute -top-5 left-0 bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">Safe Zone - 98%</div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-black/70 text-white text-[10px] px-2 py-1 rounded-full flex items-center gap-1">
                                <span class="w-1.5 h-1.5 bg-red-500 rounded-full animate-pulse"></span> LIVE
                            </div>
                        </div>
                        <div class="absolute top-2 left-2 flex gap-1">
                            <span class="px-2 py-0.5 bg-emerald-500 text-white text-[9px] font-bold rounded-full">AMAN</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <p class="font-bold text-slate-800 dark:text-white text-sm">Taman Anak Kita</p>
                                <p class="text-[10px] text-slate-400">Camera C3 - Garden</p>
                            </div>
                            <span class="text-[10px] font-semibold text-emerald-500 bg-emerald-50 dark:bg-emerald-900/30 px-2 py-0.5 rounded-full">Aman</span>
                        </div>
                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-[9px] px-2 py-0.5 bg-emerald-100 dark:bg-emerald-900/40 text-emerald-600 rounded-full">Safe Zone</span>
                            <span class="text-[9px] px-2 py-0.5 bg-blue-100 dark:bg-blue-900/40 text-blue-600 rounded-full">Active Play</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button class="text-primary text-sm font-semibold hover:underline">Lihat Semua Kamera (42) →</button>
            </div>
        </div>
    </div>

    <!-- ==================== 4. GALERI DETEKSI TERBARU ==================== -->
    <div class="mb-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="font-bold text-slate-800 dark:text-white text-lg">Galeri Deteksi Terbaru</h3>
            <button class="text-primary text-sm font-semibold hover:underline">Lihat Semua →</button>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <!-- Detection Item 1 - Alert -->
            <div class="bg-white dark:bg-[#1a1d20] rounded-xl overflow-hidden border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all group cursor-pointer">
                                <div class="h-28 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center relative">
                    <span class="material-symbols-outlined text-3xl text-white">warning</span>
                    <span class="absolute top-1 right-1 text-[9px] font-bold text-white bg-black/50 px-1.5 py-0.5 rounded-full">2m ago</span>
                </div>
                <div class="p-2">
                    <p class="text-[11px] font-bold text-red-600 uppercase">Alert</p>
                    <p class="text-xs font-semibold text-slate-800 dark:text-white truncate">Fall Detected</p>
                    <p class="text-[10px] text-slate-400 truncate">Little Stars Academy</p>
                </div>
            </div>
            <!-- Detection Item 2 - Interaction -->
            <div class="bg-white dark:bg-[#1a1d20] rounded-xl overflow-hidden border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all group cursor-pointer">
                <div class="h-28 bg-gradient-to-br from-amber-500 to-amber-600 flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl text-white">group</span>
                    <span class="absolute top-1 right-1 text-[9px] font-bold text-white bg-black/50 px-1.5 py-0.5 rounded-full">5m ago</span>
                </div>
                <div class="p-2">
                    <p class="text-[11px] font-bold text-amber-600 uppercase">Interaction</p>
                    <p class="text-xs font-semibold text-slate-800 dark:text-white truncate">Aggressive Movement</p>
                    <p class="text-[10px] text-slate-400 truncate">Smart Kids Center</p>
                </div>
            </div>
            <!-- Detection Item 3 - Nutrition -->
            <div class="bg-white dark:bg-[#1a1d20] rounded-xl overflow-hidden border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all group cursor-pointer">
                <div class="h-28 bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl text-white">restaurant</span>
                    <span class="absolute top-1 right-1 text-[9px] font-bold text-white bg-black/50 px-1.5 py-0.5 rounded-full">12m ago</span>
                </div>
                <div class="p-2">
                    <p class="text-[11px] font-bold text-emerald-600 uppercase">Nutrition</p>
                    <p class="text-xs font-semibold text-slate-800 dark:text-white truncate">Meal Time Completed</p>
                    <p class="text-[10px] text-slate-400 truncate">Bright Horizons</p>
                </div>
            </div>
            <!-- Detection Item 4 - Learning -->
            <div class="bg-white dark:bg-[#1a1d20] rounded-xl overflow-hidden border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all group cursor-pointer">
                <div class="h-28 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl text-white">menu_book</span>
                    <span class="absolute top-1 right-1 text-[9px] font-bold text-white bg-black/50 px-1.5 py-0.5 rounded-full">25m ago</span>
                </div>
                <div class="p-2">
                    <p class="text-[11px] font-bold text-blue-600 uppercase">Learning</p>
                    <p class="text-xs font-semibold text-slate-800 dark:text-white truncate">Reading Session</p>
                    <p class="text-[10px] text-slate-400 truncate">Taman Anak Kita</p>
                </div>
            </div>
            <!-- Detection Item 5 - Active Play -->
            <div class="bg-white dark:bg-[#1a1d20] rounded-xl overflow-hidden border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all group cursor-pointer">
                <div class="h-28 bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl text-white">sports_soccer</span>
                    <span class="absolute top-1 right-1 text-[9px] font-bold text-white bg-black/50 px-1.5 py-0.5 rounded-full">38m ago</span>
                </div>
                <div class="p-2">
                    <p class="text-[11px] font-bold text-purple-600 uppercase">Active Play</p>
                    <p class="text-xs font-semibold text-slate-800 dark:text-white truncate">Outdoor Activity</p>
                    <p class="text-[10px] text-slate-400 truncate">Pelangi Daycare</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== 5. GRAFIK ANALISIS AI + LIVE FEED ALERT (2 kolom) ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Grafik Detection Frequencies -->
        <div class="lg:col-span-2 bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between items-center mb-4 flex-wrap gap-3">
                <h4 class="font-bold text-slate-800 dark:text-white">Detection Frequencies</h4>
                <div class="flex gap-2">
                    <button class="px-3 py-1 text-xs font-semibold bg-primary/10 text-primary rounded-lg">Harian</button>
                    <button class="px-3 py-1 text-xs font-semibold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">Mingguan</button>
                    <button class="px-3 py-1 text-xs font-semibold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">Bulanan</button>
                </div>
            </div>
            <!-- Chart Placeholder -->
            <div class="h-64 bg-slate-50 dark:bg-slate-800/50 rounded-xl flex items-center justify-center border border-slate-100 dark:border-slate-700">
                <div class="text-center">
                    <span class="material-symbols-outlined text-4xl text-slate-300 dark:text-slate-600">show_chart</span>
                    <p class="text-sm text-slate-400 mt-2">Grafik tren deteksi AI</p>
                    <div class="flex flex-wrap justify-center gap-3 mt-2 text-xs">
                        <span class="flex items-center gap-1"><span class="w-2 h-2 bg-red-500 rounded-full"></span> Crying</span>
                        <span class="flex items-center gap-1"><span class="w-2 h-2 bg-amber-500 rounded-full"></span> Fall Detection</span>
                        <span class="flex items-center gap-1"><span class="w-2 h-2 bg-purple-500 rounded-full"></span> Aggressive</span>
                        <span class="flex items-center gap-1"><span class="w-2 h-2 bg-blue-500 rounded-full"></span> Unsafe Behaviour</span>
                        <span class="flex items-center gap-1"><span class="w-2 h-2 bg-emerald-500 rounded-full"></span> Activity</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Live Feed Alert (Side Panel) -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="px-4 py-3 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                <h4 class="font-bold text-slate-800 dark:text-white">Live Feed Alert</h4>
                <span class="text-xs text-slate-400">| Real-time</span>
            </div>
            <div class="divide-y divide-slate-100 dark:divide-slate-800 max-h-80 overflow-y-auto">
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition flex gap-3">
                    <div class="w-12 h-12 rounded-lg bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-red-500 text-[20px]">emergency</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Child Fall Detected</p>
                        <p class="text-xs text-slate-500">Little Stars Academy</p>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-semibold text-red-500">Confidence: 96%</span>
                            <span class="text-[10px] text-slate-400">2 menit lalu</span>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition flex gap-3">
                    <div class="w-12 h-12 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-amber-500 text-[20px]">sentiment_dissatisfied</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Crying Alert</p>
                        <p class="text-xs text-slate-500">Bright Horizons</p>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-semibold text-amber-500">Confidence: 87%</span>
                            <span class="text-[10px] text-slate-400">12 menit lalu</span>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition flex gap-3">
                    <div class="w-12 h-12 rounded-lg bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-purple-500 text-[20px]">sports_mma</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Unsafe Activity</p>
                        <p class="text-xs text-slate-500">Taman Anak Kita</p>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-semibold text-purple-500">Confidence: 92%</span>
                            <span class="text-[10px] text-slate-400">25 menit lalu</span>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition flex gap-3">
                    <div class="w-12 h-12 rounded-lg bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-blue-500 text-[20px]">location_off</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Restricted Area Access</p>
                        <p class="text-xs text-slate-500">Smart Kids Center</p>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-semibold text-blue-500">Confidence: 84%</span>
                            <span class="text-[10px] text-slate-400">38 menit lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== 6. AI PERFORMANCE HEATMAP ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 mb-6">
        <h4 class="font-bold text-slate-800 dark:text-white mb-4">AI Performance Heatmap</h4>
        <div class="overflow-x-auto">
            <table class="w-full min-w-[500px]">
                <thead>
                    <tr class="border-b border-slate-100 dark:border-slate-800">
                        <th class="text-left py-3 px-2 text-xs font-semibold text-slate-400">Detection / Condition</th>
                        <th class="text-center py-3 px-2 text-xs font-semibold text-slate-400">Bright</th>
                        <th class="text-center py-3 px-2 text-xs font-semibold text-slate-400">Dim</th>
                        <th class="text-center py-3 px-2 text-xs font-semibold text-slate-400">Indoor</th>
                        <th class="text-center py-3 px-2 text-xs font-semibold text-slate-400">Outdoor</th>
                        <th class="text-center py-3 px-2 text-xs font-semibold text-slate-400">Night</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-slate-100 dark:border-slate-800">
                        <td class="py-3 px-2 text-sm font-medium text-slate-700 dark:text-slate-300">Cry Detection</td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">96%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">92%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">94%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">91%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-amber-100 text-amber-700 rounded-lg text-xs font-semibold">84%</span></td>
                    </tr>
                    <tr class="border-b border-slate-100 dark:border-slate-800">
                        <td class="py-3 px-2 text-sm font-medium text-slate-700 dark:text-slate-300">Fall Detection</td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">94%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-amber-100 text-amber-700 rounded-lg text-xs font-semibold">86%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">93%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-amber-100 text-amber-700 rounded-lg text-xs font-semibold">88%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-red-100 text-red-700 rounded-lg text-xs font-semibold">72%</span></td>
                    </tr>
                    <tr class="border-b border-slate-100 dark:border-slate-800">
                        <td class="py-3 px-2 text-sm font-medium text-slate-700 dark:text-slate-300">Motion Detection</td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">98%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">95%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">97%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">96%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-amber-100 text-amber-700 rounded-lg text-xs font-semibold">88%</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-2 text-sm font-medium text-slate-700 dark:text-slate-300">Behaviour Analysis</td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">91%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-amber-100 text-amber-700 rounded-lg text-xs font-semibold">82%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-semibold">90%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-amber-100 text-amber-700 rounded-lg text-xs font-semibold">85%</span></td>
                        <td class="text-center py-3 px-2"><span class="px-2 py-1 bg-red-100 text-red-700 rounded-lg text-xs font-semibold">68%</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ==================== 7. REGIONAL AI PERFORMANCE ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden mb-6">
        <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white">Regional AI Performance</h4>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 dark:bg-slate-800/50">
                    <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                        <th class="px-5 py-3">Provinsi</th>
                        <th class="px-5 py-3">Jumlah Kamera</th>
                        <th class="px-5 py-3">Latency</th>
                        <th class="px-5 py-3">Uptime</th>
                        <th class="px-5 py-3">AI Accuracy</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">DKI Jakarta</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">48</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">1.2s</td>
                        <td class="px-5 py-3"><span class="text-emerald-600 font-semibold">99.99%</span></td>
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-20 bg-slate-100 dark:bg-slate-700 rounded-full h-1.5"><div class="bg-emerald-500 h-1.5 rounded-full" style="width:96%"></div></div>
                                <span class="text-sm font-semibold text-emerald-600">96.2%</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Jawa Barat</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">36</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">1.4s</td>
                        <td class="px-5 py-3"><span class="text-emerald-600 font-semibold">99.97%</span></td>
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-20 bg-slate-100 dark:bg-slate-700 rounded-full h-1.5"><div class="bg-emerald-500 h-1.5 rounded-full" style="width:95%"></div></div>
                                <span class="text-sm font-semibold text-emerald-600">95.1%</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Jawa Timur</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">28</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">1.5s</td>
                        <td class="px-5 py-3"><span class="text-emerald-600 font-semibold">99.95%</span></td>
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-20 bg-slate-100 dark:bg-slate-700 rounded-full h-1.5"><div class="bg-emerald-500 h-1.5 rounded-full" style="width:94%"></div></div>
                                <span class="text-sm font-semibold text-emerald-600">94.3%</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Kalimantan Selatan</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">12</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">1.8s</td>
                        <td class="px-5 py-3"><span class="text-emerald-600 font-semibold">99.92%</span></td>
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-20 bg-slate-100 dark:bg-slate-700 rounded-full h-1.5"><div class="bg-amber-500 h-1.5 rounded-full" style="width:89%"></div></div>
                                <span class="text-sm font-semibold text-amber-600">89.2%</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Sulawesi Selatan</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">14</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">1.6s</td>
                        <td class="px-5 py-3"><span class="text-emerald-600 font-semibold">99.94%</span></td>
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-20 bg-slate-100 dark:bg-slate-700 rounded-full h-1.5"><div class="bg-emerald-500 h-1.5 rounded-full" style="width:91%"></div></div>
                                <span class="text-sm font-semibold text-emerald-600">91.7%</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ==================== 8. FLOATING AI STATUS BAR ==================== -->
    <div class="fixed bottom-6 right-6 z-40">
        <div class="bg-primary/95 backdrop-blur-md text-white rounded-full px-5 py-2.5 shadow-lg flex items-center gap-3">
            <span class="w-2.5 h-2.5 bg-emerald-400 rounded-full animate-pulse"></span>
            <span class="text-sm font-semibold">CERIA AI saat ini memproses 1.422 feed nasional dengan tingkat akurasi 99.8%.</span>
            <span class="text-xs text-white/70">| Last sync: 2s ago</span>
        </div>
    </div>
</div>

<style>
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
    .animate-fade-in-up {
        animation: fadeInUp 0.5s ease-out;
    }
</style>
@endsection