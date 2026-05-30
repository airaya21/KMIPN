@extends('layouts.superadmin')

@section('title', 'Pusat Darurat')

@section('content')
<div class="animate-fade-in-up">
    <!-- ==================== HEADER ==================== -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-6">
        <div>
            <div class="flex items-center gap-3 mb-1">
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Pusat Darurat Nasional</h1>
                <span class="px-2 py-1 bg-red-100 dark:bg-red-900/40 text-red-600 dark:text-red-400 rounded-lg text-[10px] font-bold uppercase tracking-wider">Command Center</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Pemantauan dan koordinasi penanganan insiden kritis secara real-time pada seluruh daycare Indonesia.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <button class="flex items-center gap-2 px-4 py-2 bg-red-600 text-white rounded-xl text-sm font-semibold shadow-md hover:bg-red-700 transition-all">
                <span class="material-symbols-outlined text-[18px]">emergency</span>
                Aktifkan Mode Krisis
            </button>
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[18px]">send</span>
                Kirim Tim Respon
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Ekspor Laporan
            </button>
        </div>
    </div>

    <!-- ==================== RINGKASAN STATUS DARURAT (4 Cards) ==================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-red-50 dark:bg-red-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-600 dark:text-red-400 text-[24px]">notifications_active</span>
                </div>
                <span class="text-red-600 text-xs font-semibold bg-red-50 dark:bg-red-900/30 px-2 py-1 rounded-full">↑ +3</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Insiden Aktif</p>
            <p class="text-3xl font-bold text-red-600 dark:text-red-400">12</p>
            <p class="text-[11px] text-slate-400 mt-1">Perlu penanganan segera</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400 text-[24px]">priority_high</span>
                </div>
                <span class="text-amber-600 text-xs font-semibold bg-amber-50 dark:bg-amber-900/30 px-2 py-1 rounded-full">Kritis</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Prioritas Tinggi</p>
            <p class="text-3xl font-bold text-amber-600 dark:text-amber-400">4</p>
            <p class="text-[11px] text-slate-400 mt-1">Eskalasi nasional</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-[24px]">handshake</span>
                </div>
                <span class="text-blue-600 text-xs font-semibold bg-blue-50 dark:bg-blue-900/30 px-2 py-1 rounded-full">Proses</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Sedang Ditangani</p>
            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">8</p>
            <p class="text-[11px] text-slate-400 mt-1">Tim di lapangan</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 text-[24px]">check_circle</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">↑ +5%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Respon Berhasil</p>
            <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">96<sup class="text-sm">%</sup></p>
            <p class="text-[11px] text-slate-400 mt-1">Tingkat keberhasilan</p>
        </div>
    </div>

    <!-- ==================== PETA NASIONAL INSIDEN ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden mb-6">
        <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800 flex justify-between items-center flex-wrap gap-3">
            <h3 class="font-bold text-slate-800 dark:text-white">Peta Darurat Nasional</h3>
            <div class="flex gap-3 text-xs">
                <div class="flex items-center gap-1"><span class="w-2.5 h-2.5 bg-emerald-500 rounded-full"></span><span>Aman</span></div>
                <div class="flex items-center gap-1"><span class="w-2.5 h-2.5 bg-amber-500 rounded-full"></span><span>Waspada</span></div>
                <div class="flex items-center gap-1"><span class="w-2.5 h-2.5 bg-red-500 rounded-full animate-pulse"></span><span>Darurat</span></div>
            </div>
        </div>
        <div class="p-5">
            <div class="bg-slate-100 dark:bg-slate-800 rounded-xl h-80 relative flex items-center justify-center border border-slate-200 dark:border-slate-700">
                <!-- Peta Placeholder dengan Hotspot -->
                <div class="relative w-full h-full">
                    <div class="absolute top-1/3 left-1/4 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer group">
                        <div class="w-4 h-4 bg-red-500 rounded-full animate-ping absolute"></div>
                        <div class="w-4 h-4 bg-red-500 rounded-full relative"></div>
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white dark:bg-slate-800 rounded-lg shadow-lg p-2 w-48 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10">
                            <p class="text-xs font-bold text-slate-800 dark:text-white">Little Stars Academy</p>
                            <p class="text-[10px] text-slate-500">Makassar, Sulsel</p>
                            <p class="text-[10px] font-semibold text-red-600">Jenis: Gerakan Agresif</p>
                            <p class="text-[10px] text-slate-400">3 menit lalu • Kritis</p>
                        </div>
                    </div>
                    <div class="absolute top-2/3 left-1/3 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer group">
                        <div class="w-3 h-3 bg-amber-500 rounded-full relative"></div>
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white dark:bg-slate-800 rounded-lg shadow-lg p-2 w-48 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10">
                            <p class="text-xs font-bold text-slate-800 dark:text-white">Bright Horizons</p>
                            <p class="text-[10px] text-slate-500">Bandung, Jabar</p>
                            <p class="text-[10px] font-semibold text-amber-600">Jenis: Tangisan Berkepanjangan</p>
                            <p class="text-[10px] text-slate-400">12 menit lalu • Waspada</p>
                        </div>
                    </div>
                    <div class="absolute top-1/2 left-2/3 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer group">
                        <div class="w-3 h-3 bg-amber-500 rounded-full relative"></div>
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white dark:bg-slate-800 rounded-lg shadow-lg p-2 w-48 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10">
                            <p class="text-xs font-bold text-slate-800 dark:text-white">Taman Anak Kita</p>
                            <p class="text-[10px] text-slate-500">Jakarta Selatan</p>
                            <p class="text-[10px] font-semibold text-amber-600">Jenis: Aktivitas Mencurigakan</p>
                            <p class="text-[10px] text-slate-400">25 menit lalu • Waspada</p>
                        </div>
                    </div>
                    <div class="absolute bottom-1/4 right-1/4 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer group">
                        <div class="w-4 h-4 bg-red-500 rounded-full animate-ping absolute"></div>
                        <div class="w-4 h-4 bg-red-500 rounded-full relative"></div>
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white dark:bg-slate-800 rounded-lg shadow-lg p-2 w-48 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10">
                            <p class="text-xs font-bold text-slate-800 dark:text-white">Pelangi Daycare</p>
                            <p class="text-[10px] text-slate-500">Surabaya, Jatim</p>
                            <p class="text-[10px] font-semibold text-red-600">Jenis: Anak Jatuh</p>
                            <p class="text-[10px] text-slate-400">8 menit lalu • Kritis</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <span class="material-symbols-outlined text-6xl text-slate-300 dark:text-slate-600">map</span>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <p class="text-xs text-slate-400">Arahkan kursor ke titik untuk melihat detail insiden</p>
            </div>
        </div>
    </div>

    <!-- ==================== LIVE EMERGENCY FEED + DAFTAR INSIDEN AKTIF ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Live Emergency Feed (Side Panel) -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="px-4 py-3 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                <h4 class="font-bold text-slate-800 dark:text-white">Live Emergency Feed</h4>
                <span class="text-xs text-slate-400">| Real-time</span>
            </div>
            <div class="divide-y divide-slate-100 dark:divide-slate-800 max-h-96 overflow-y-auto">
                <div class="p-3 hover:bg-red-50 dark:hover:bg-red-900/20 transition flex gap-3">
                                    <div class="w-12 h-12 rounded-lg bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-red-500 text-[20px]">falling</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Anak terjatuh dari perosotan</p>
                        <p class="text-xs text-slate-500">Little Stars Academy • Makassar</p>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-semibold text-red-500 px-1.5 py-0.5 bg-red-50 rounded-full">KRITIS</span>
                            <span class="text-[10px] text-slate-400">3 menit lalu</span>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-red-50 dark:hover:bg-red-900/20 transition flex gap-3">
                    <div class="w-12 h-12 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-amber-500 text-[20px]">person_off</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Anak dilaporkan hilang dari area aman</p>
                        <p class="text-xs text-slate-500">Pelangi Daycare • Surabaya</p>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-semibold text-red-500 px-1.5 py-0.5 bg-red-50 rounded-full">KRITIS</span>
                            <span class="text-[10px] text-slate-400">8 menit lalu</span>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-red-50 dark:hover:bg-red-900/20 transition flex gap-3">
                    <div class="w-12 h-12 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-amber-500 text-[20px]">local_fire_department</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Kebakaran kecil di dapur</p>
                        <p class="text-xs text-slate-500">Little Sunshine Daycare • Jakarta</p>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-semibold text-red-500 px-1.5 py-0.5 bg-red-50 rounded-full">KRITIS</span>
                            <span class="text-[10px] text-slate-400">15 menit lalu</span>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-red-50 dark:hover:bg-red-900/20 transition flex gap-3">
                    <div class="w-12 h-12 rounded-lg bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-orange-500 text-[20px]">medical_services</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Anak tersedak makanan</p>
                        <p class="text-xs text-slate-500">Ceria Daycare • Bandung</p>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-semibold text-orange-500 px-1.5 py-0.5 bg-orange-50 rounded-full">TINGGI</span>
                            <span class="text-[10px] text-slate-400">22 menit lalu</span>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-red-50 dark:hover:bg-red-900/20 transition flex gap-3">
                    <div class="w-12 h-12 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                        <span class="material-symbols-outlined text-slate-500 text-[20px]">sports_mma</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Keributan antar anak</p>
                        <p class="text-xs text-slate-500">Taman Anak Kita • Jakarta</p>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-semibold text-yellow-500 px-1.5 py-0.5 bg-yellow-50 rounded-full">SEDANG</span>
                            <span class="text-[10px] text-slate-400">35 menit lalu</span>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-red-50 dark:hover:bg-red-900/20 transition flex gap-3">
                    <div class="w-12 h-12 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                        <span class="material-symbols-outlined text-slate-500 text-[20px]">visibility_off</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Aktivitas mencurigakan terdeteksi</p>
                        <p class="text-xs text-slate-500">Smart Kids Center • Medan</p>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-semibold text-yellow-500 px-1.5 py-0.5 bg-yellow-50 rounded-full">SEDANG</span>
                            <span class="text-[10px] text-slate-400">48 menit lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daftar Insiden Aktif (Tabel) -->
        <div class="lg:col-span-2 bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800">
                <h4 class="font-bold text-slate-800 dark:text-white">Daftar Insiden Aktif</h4>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-slate-50 dark:bg-slate-800/50">
                        <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                            <th class="px-5 py-3">ID Insiden</th>
                            <th class="px-5 py-3">Daycare</th>
                            <th class="px-5 py-3">Wilayah</th>
                            <th class="px-5 py-3">Jenis Insiden</th>
                            <th class="px-5 py-3">Prioritas</th>
                            <th class="px-5 py-3">Waktu</th>
                            <th class="px-5 py-3">Status</th>
                            <th class="px-5 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3 text-sm font-mono text-red-600">#INC-001</td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Little Stars Academy</td>
                            <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Makassar</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 dark:bg-red-900/40 text-red-600 rounded-full">Gerakan Agresif</span></td>
                            <td class="px-5 py-3"><span class="text-xs font-bold text-red-600">Kritis</span></td>
                            <td class="px-5 py-3 text-slate-500">09:47</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 dark:bg-red-900/40 text-red-600 rounded-full">Menunggu Respon</span></td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">call</span></button>
                                    <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">trending_up</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3 text-sm font-mono text-red-600">#INC-002</td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Pelangi Daycare</td>
                            <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Surabaya</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 dark:bg-red-900/40 text-red-600 rounded-full">Anak Jatuh</span></td>
                            <td class="px-5 py-3"><span class="text-xs font-bold text-red-600">Kritis</span></td>
                            <td class="px-5 py-3 text-slate-500">09:52</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-600 rounded-full">Dalam Penanganan</span></td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">call</span></button>
                                    <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">trending_up</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3 text-sm font-mono text-amber-600">#INC-003</td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Little Sunshine Daycare</td>
                            <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Jakarta</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-600 rounded-full">Kebakaran</span></td>
                            <td class="px-5 py-3"><span class="text-xs font-bold text-red-600">Kritis</span></td>
                            <td class="px-5 py-3 text-slate-500">10:05</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 dark:bg-red-900/40 text-red-600 rounded-full">Eskalasi Nasional</span></td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">call</span></button>
                                    <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">trending_up</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3 text-sm font-mono text-orange-600">#INC-004</td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Ceria Daycare</td>
                            <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Bandung</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-orange-100 dark:bg-orange-900/40 text-orange-600 rounded-full">Tersedak</span></td>
                            <td class="px-5 py-3"><span class="text-xs font-bold text-orange-600">Tinggi</span></td>
                            <td class="px-5 py-3 text-slate-500">10:22</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-blue-100 dark:bg-blue-900/40 text-blue-600 rounded-full">Dalam Penanganan</span></td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">call</span></button>
                                    <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">trending_up</span></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-5 py-3 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center">
                <p class="text-xs text-slate-500">Menampilkan 4 dari 12 insiden aktif</p>
                <button class="text-xs text-primary font-semibold hover:underline">Lihat Semua →</button>
            </div>
        </div>
    </div>

    <!-- ==================== DASHBOARD RESPON DARURAT + ANALISIS INSIDEN ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-4 border border-slate-100 dark:border-slate-800 text-center">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mx-auto mb-2">
                <span class="material-symbols-outlined text-primary text-[24px]">groups</span>
            </div>
            <p class="text-2xl font-bold text-slate-800 dark:text-white">14</p>
            <p class="text-xs text-slate-400">Tim Respon Aktif</p>
            <p class="text-[10px] text-emerald-600 mt-1">+2 dari shift sebelumnya</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-4 border border-slate-100 dark:border-slate-800 text-center">
            <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center mx-auto mb-2">
                <span class="material-symbols-outlined text-blue-600 text-[24px]">local_taxi</span>
            </div>
            <p class="text-2xl font-bold text-slate-800 dark:text-white">8</p>
            <p class="text-xs text-slate-400">Ambulans Terdekat</p>
            <p class="text-[10px] text-slate-400 mt-1">Radius 5 km</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-4 border border-slate-100 dark:border-slate-800 text-center">
            <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center mx-auto mb-2">
                <span class="material-symbols-outlined text-emerald-600 text-[24px]">phone_in_talk</span>
            </div>
            <p class="text-2xl font-bold text-slate-800 dark:text-white">36</p>
            <p class="text-xs text-slate-400">Kontak Darurat Aktif</p>
            <p class="text-[10px] text-slate-400 mt-1">24 jam tersedia</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-4 border border-slate-100 dark:border-slate-800 text-center">
            <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center mx-auto mb-2">
                <span class="material-symbols-outlined text-amber-600 text-[24px]">schedule</span>
            </div>
            <p class="text-2xl font-bold text-amber-600">7</p>
            <p class="text-xs text-slate-400">Estimasi Waktu Respon</p>
            <p class="text-[10px] text-slate-400 mt-1">Rata-rata nasional (menit)</p>
        </div>
    </div>

    <!-- ==================== ANALISIS JENIS INSIDEN + TIMELINE ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Analisis Jenis Insiden (Chart Bar) -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between items-center mb-4 flex-wrap gap-3">
                <h4 class="font-bold text-slate-800 dark:text-white">Analisis Jenis Insiden</h4>
                <div class="flex gap-2">
                    <button class="px-3 py-1 text-xs font-semibold bg-primary/10 text-primary rounded-lg">Mingguan</button>
                    <button class="px-3 py-1 text-xs font-semibold text-slate-500 hover:bg-slate-100 rounded-lg">Bulanan</button>
                </div>
            </div>
            <div class="space-y-3">
                <div><div class="flex justify-between text-sm mb-1"><span>Jatuh</span><span class="text-red-500">24</span></div><div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-red-500 h-2 rounded-full" style="width:24%"></div></div></div>
                <div><div class="flex justify-between text-sm mb-1"><span>Cedera</span><span class="text-red-500">18</span></div><div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-red-500 h-2 rounded-full" style="width:18%"></div></div></div>
                <div><div class="flex justify-between text-sm mb-1"><span>Tersedak</span><span class="text-amber-500">12</span></div><div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-amber-500 h-2 rounded-full" style="width:12%"></div></div></div>
                <div><div class="flex justify-between text-sm mb-1"><span>Kebakaran</span><span class="text-amber-500">3</span></div><div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-amber-500 h-2 rounded-full" style="width:3%"></div></div></div>
                <div><div class="flex justify-between text-sm mb-1"><span>Kehilangan Anak</span><span class="text-orange-500">8</span></div><div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-orange-500 h-2 rounded-full" style="width:8%"></div></div></div>
                <div><div class="flex justify-between text-sm mb-1"><span>Aktivitas Berbahaya</span><span class="text-yellow-500">15</span></div><div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-yellow-500 h-2 rounded-full" style="width:15%"></div></div></div>
                <div><div class="flex justify-between text-sm mb-1"><span>Gangguan Keamanan</span><span class="text-blue-500">6</span></div><div class="w-full bg-slate-100 rounded-full h-2"><div class="bg-blue-500 h-2 rounded-full" style="width:6%"></div></div></div>
            </div>
        </div>

        <!-- Timeline Penanganan -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white mb-4">Timeline Penanganan</h4>
            <div class="space-y-4">
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-red-500 text-[16px]">warning</span></div>
                        <div class="w-0.5 h-10 bg-slate-200 dark:bg-slate-700 mt-1"></div>
                    </div>
                    <div class="flex-1 pb-4">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Insiden terdeteksi oleh AI</p>
                        <p class="text-xs text-slate-400">09:47 - Little Stars Academy</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-amber-500 text-[16px]">notifications</span></div>
                        <div class="w-0.5 h-10 bg-slate-200 dark:bg-slate-700 mt-1"></div>
                    </div>
                    <div class="flex-1 pb-4">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Peringatan dikirim ke daycare & super admin</p>
                        <p class="text-xs text-slate-400">09:48 - Notifikasi terkirim</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-blue-500 text-[16px]">check_circle</span></div>
                        <div class="w-0.5 h-10 bg-slate-200 dark:bg-slate-700 mt-1"></div>
                    </div>
                    <div class="flex-1 pb-4">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Pengasuh mengonfirmasi kejadian</p>
                        <p class="text-xs text-slate-400">09:50 - Diterima oleh tim daycare</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-purple-500 text-[16px]">ambulance</span></div>
                        <div class="w-0.5 h-10 bg-slate-200 dark:bg-slate-700 mt-1"></div>
                    </div>
                    <div class="flex-1 pb-4">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Tim respon dihubungi & dikerahkan</p>
                        <p class="text-xs text-slate-400">09:52 - Tim medis dalam perjalanan</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-emerald-500 text-[16px]">check</span></div>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Situasi terkendali & laporan akhir</p>
                        <p class="text-xs text-slate-400">10:15 - Status selesai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== KONTAK DARURAT NASIONAL ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 mb-6">
        <h4 class="font-bold text-slate-800 dark:text-white mb-4">Kontak Darurat Nasional</h4>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
            <div class="bg-slate-50 dark:bg-slate-800 rounded-xl p-3 text-center hover:shadow-md transition-all">
                <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center mx-auto mb-2">
                    <span class="material-symbols-outlined text-red-600 text-[20px">ambulance</span>
                </div>
                <p class="text-xs font-semibold text-slate-800 dark:text-white">Ambulans</p>
                <p class="text-[10px] text-slate-400">118</p>
                <button class="mt-2 text-[10px] font-semibold text-primary hover:underline">Hubungi →</button>
            </div>
            <div class="bg-slate-50 dark:bg-slate-800 rounded-xl p-3 text-center hover:shadow-md transition-all">
                <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mx-auto mb-2">
                    <span class="material-symbols-outlined text-blue-600 text-[20px">local_police</span>
                </div>
                <p class="text-xs font-semibold text-slate-800 dark:text-white">Polisi</p>
                <p class="text-[10px] text-slate-400">110</p>
                <button class="mt-2 text-[10px] font-semibold text-primary hover:underline">Hubungi →</button>
            </div>
            <div class="bg-slate-50 dark:bg-slate-800 rounded-xl p-3 text-center hover:shadow-md transition-all">
                <div class="w-10 h-10 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center mx-auto mb-2">
                    <span class="material-symbols-outlined text-orange-600 text-[20px">local_fire_department</span>
                </div>
                <p class="text-xs font-semibold text-slate-800 dark:text-white">Pemadam Kebakaran</p>
                <p class="text-[10px] text-slate-400">113</p>
                <button class="mt-2 text-[10px] font-semibold text-primary hover:underline">Hubungi →</button>
            </div>
            <div class="bg-slate-50 dark:bg-slate-800 rounded-xl p-3 text-center hover:shadow-md transition-all">
                <div class="w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center mx-auto mb-2">
                    <span class="material-symbols-outlined text-emerald-600 text-[20px">child_care</span>
                </div>
                <p class="text-xs font-semibold text-slate-800 dark:text-white">Dinas Perlindungan Anak</p>
                <p class="text-[10px] text-slate-400">1500-123</p>
                <button class="mt-2 text-[10px] font-semibold text-primary hover:underline">Hubungi →</button>
            </div>
            <div class="bg-slate-50 dark:bg-slate-800 rounded-xl p-3 text-center hover:shadow-md transition-all">
                <div class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center mx-auto mb-2">
                    <span class="material-symbols-outlined text-purple-600 text-[20px">local_hospital</span>
                </div>
                <p class="text-xs font-semibold text-slate-800 dark:text-white">Rumah Sakit Terdekat</p>
                <p class="text-[10px] text-slate-400">119</p>
                <button class="mt-2 text-[10px] font-semibold text-primary hover:underline">Cari →</button>
            </div>
        </div>
    </div>

    <!-- ==================== AI EMERGENCY MONITORING ==================== -->
    <div class="bg-gradient-to-r from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-5 border border-primary/20 mb-6">
        <div class="flex justify-between items-center flex-wrap gap-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">neurology</span>
                </div>
                <div>
                    <h4 class="font-bold text-slate-800 dark:text-white">AI Emergency Monitoring</h4>
                    <p class="text-xs text-slate-500">Terhubung dengan CERIA AI Intelligence</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                <span class="text-xs font-semibold text-emerald-600">AI Active</span>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
            <div class="text-center">
                <p class="text-xs text-slate-500 mb-1">Risiko Nasional</p>
                <p class="text-xl font-bold text-red-600">Tinggi</p>
                <p class="text-[10px] text-slate-400">↑ 12% dari kemarin</p>
            </div>
            <div class="text-center">
                <p class="text-xs text-slate-500 mb-1">Prediksi Potensi Insiden</p>
                <p class="text-xl font-bold text-amber-600">17</p>
                <p class="text-[10px] text-slate-400">Hari ini</p>
            </div>
            <div class="text-center">
                <p class="text-xs text-slate-500 mb-1">Area Prioritas Pemantauan</p>
                <p class="text-sm font-bold text-slate-800 dark:text-white">Jakarta, Surabaya, Makassar</p>
                <p class="text-[10px] text-slate-400">3 wilayah kritis</p>
            </div>
            <div class="text-center">
                <p class="text-xs text-slate-500 mb-1">Akurasi Prediksi AI</p>
                <p class="text-xl font-bold text-emerald-600">98.7<sup class="text-sm">%</sup></p>
                <p class="text-[10px] text-slate-400">Berdasarkan data 30 hari</p>
            </div>
        </div>
    </div>

    <!-- ==================== FLOATING CRISIS STATUS BAR ==================== -->
    <div class="fixed bottom-6 right-6 z-40">
        <div class="bg-primary/95 backdrop-blur-md text-white rounded-full px-5 py-2.5 shadow-lg flex items-center gap-3">
            <span class="w-2.5 h-2.5 bg-red-400 rounded-full animate-pulse"></span>
            <span class="text-sm font-semibold">CERIA Emergency System sedang memantau 12 insiden aktif di 8 provinsi dengan tingkat respon 96%.</span>
            <button class="text-xs text-white/80 hover:text-white transition flex items-center gap-1">
                Detail Krisis <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
            </button>
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