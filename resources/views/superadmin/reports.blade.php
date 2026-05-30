@extends('layouts.superadmin')

@section('title', 'Laporan')

@section('content')
<div class="animate-fade-in-up">
    <!-- ==================== HEADER ==================== -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-6">
        <div>
            <div class="flex items-center gap-3 mb-1">
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Pusat Laporan Nasional</h1>
                <span class="px-2 py-1 bg-primary/10 text-primary rounded-lg text-[10px] font-bold uppercase tracking-wider">Data Center</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Kelola, lihat, dan unduh laporan operasional seluruh daycare Indonesia.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[18px]">add</span>
                Generate Laporan Baru
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
                Export PDF
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">table_chart</span>
                Export Excel
            </button>
        </div>
    </div>

    <!-- ==================== STATISTIK (4 Cards) ==================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[24px]">description</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">↑ +12%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Total Laporan</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">4.521</p>
            <p class="text-[11px] text-slate-400 mt-1">Sepanjang waktu</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-[24px]">calendar_month</span>
                </div>
                <span class="text-blue-600 text-xs font-semibold bg-blue-50 dark:bg-blue-900/30 px-2 py-1 rounded-full">Bulan Ini</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Laporan Bulan Ini</p>
            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">352</p>
            <p class="text-[11px] text-slate-400 mt-1">↑ +8% dari bulan lalu</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 text-[24px]">smart_toy</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">AI Generated</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Laporan Otomatis</p>
            <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">3.210</p>
            <p class="text-[11px] text-slate-400 mt-1">71% dari total</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400 text-[24px]">edit_note</span>
                </div>
                <span class="text-amber-600 text-xs font-semibold bg-amber-50 dark:bg-amber-900/30 px-2 py-1 rounded-full">Manual</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Laporan Manual</p>
            <p class="text-3xl font-bold text-amber-600 dark:text-amber-400">1.311</p>
            <p class="text-[11px] text-slate-400 mt-1">29% dari total</p>
        </div>
    </div>

    <!-- ==================== FILTER ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 p-5 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Kategori</option>
                <option value="safety">Keselamatan</option>
                <option value="operational">Operasional</option>
                <option value="users">Pengguna</option>
                <option value="complaints">Pengaduan</option>
                <option value="ai">AI Monitoring</option>
                <option value="finance">Keuangan</option>
            </select>
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Wilayah</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
            </select>
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Daycare</option>
                <option value="Little Stars Academy">Little Stars Academy</option>
                <option value="Pelangi Daycare">Pelangi Daycare</option>
                <option value="Bright Horizons">Bright Horizons</option>
                <option value="Taman Anak Kita">Taman Anak Kita</option>
            </select>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">calendar_today</span>
                <input type="date" class="w-full pl-10 pr-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
            </div>
        </div>
    </div>

    <!-- ==================== TABEL LAPORAN + LAPORAN TERBARU ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Tabel Laporan (2/3 lebar) -->
        <div class="lg:col-span-2 bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800">
                <h4 class="font-bold text-slate-800 dark:text-white">Daftar Laporan Nasional</h4>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-slate-50 dark:bg-slate-800/50">
                        <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                            <th class="px-5 py-3">Nama Laporan</th>
                            <th class="px-5 py-3">Kategori</th>
                            <th class="px-5 py-3">Wilayah</th>
                            <th class="px-5 py-3">Dibuat Oleh</th>
                            <th class="px-5 py-3">Tanggal</th>
                            <th class="px-5 py-3">Status</th>
                            <th class="px-5 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Laporan Keselamatan Bulanan</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 text-red-700 rounded-full">Keselamatan</span></td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Nasional</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Sistem AI</td>
                            <td class="px-5 py-3 text-sm text-slate-500">30 Mei 2026</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Selesai</span></td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">download</span></button>
                                    <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">share</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Analisis Peringatan AI - Mei 2026</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-purple-100 text-purple-700 rounded-full">AI Monitoring</span></td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Nasional</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Sistem AI</td>
                            <td class="px-5 py-3 text-sm text-slate-500">29 Mei 2026</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Selesai</span></td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">download</span></button>
                                    <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">share</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Laporan Pengaduan Orang Tua</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-700 rounded-full">Pengaduan</span></td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Jawa Timur</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Super Admin</td>
                            <td class="px-5 py-3 text-sm text-slate-500">28 Mei 2026</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Selesai</span></td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">download</span></button>
                                    <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">share</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Statistik Pengguna Aktif</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-blue-100 text-blue-700 rounded-full">Pengguna</span></td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Nasional</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Sistem AI</td>
                            <td class="px-5 py-3 text-sm text-slate-500">27 Mei 2026</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Selesai</span></td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">download</span></button>
                                    <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">share</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Laporan Operasional Daycare</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Operasional</span></td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Sulawesi Selatan</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Admin Daycare</td>
                            <td class="px-5 py-3 text-sm text-slate-500">26 Mei 2026</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Selesai</span></td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">download</span></button>
                                    <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">share</span></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-5 py-3 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center">
                <p class="text-xs text-slate-500">Menampilkan 1-5 dari 4.521 laporan</p>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 border rounded-lg text-sm disabled:opacity-50" disabled>Sebelumnya</button>
                    <button class="px-3 py-1.5 bg-primary text-white rounded-lg text-sm">1</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">2</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">3</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">Selanjutnya</button>
                </div>
            </div>
        </div>

        <!-- Laporan Terbaru (Panel Samping) -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="px-4 py-3 border-b border-slate-100 dark:border-slate-800 bg-gradient-to-r from-primary/5 to-transparent">
                <h4 class="font-bold text-slate-800 dark:text-white flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">schedule</span>
                    Laporan Terbaru
                </h4>
            </div>
            <div class="divide-y divide-slate-100 dark:divide-slate-800">
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-[16px]">description</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-800 dark:text-white">Laporan Keselamatan Bulanan</p>
                            <p class="text-[10px] text-slate-400">2 jam yang lalu • oleh Sistem AI</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-purple-600 text-[16px]">analytics</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-800 dark:text-white">Analisis Peringatan AI</p>
                            <p class="text-[10px] text-slate-400">1 hari lalu • oleh Sistem AI</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-amber-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-amber-600 text-[16px]">report</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-800 dark:text-white">Laporan Pengaduan</p>
                            <p class="text-[10px] text-slate-400">2 hari lalu • oleh Super Admin</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-blue-600 text-[16px]">group</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-800 dark:text-white">Statistik Pengguna Aktif</p>
                            <p class="text-[10px] text-slate-400">3 hari lalu • oleh Sistem AI</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-emerald-600 text-[16px]">business_center</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-800 dark:text-white">Laporan Operasional</p>
                            <p class="text-[10px] text-slate-400">4 hari lalu • oleh Admin Daycare</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 border-t border-slate-100 dark:border-slate-800">
                <button class="w-full py-2 text-center text-sm font-semibold text-primary hover:bg-primary/10 rounded-lg transition">Lihat Semua Laporan →</button>
            </div>
        </div>
    </div>

    <!-- ==================== CERIA AI SUMMARY ==================== -->
    <div class="bg-gradient-to-r from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-5 border border-primary/20">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[18px]">neurology</span>
                </div>
                <h4 class="font-bold text-slate-800 dark:text-white">CERIA AI Summary - Ringkasan Laporan Nasional</h4>
            </div>
            <span class="text-xs text-primary font-semibold">Auto-generated</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">📊 Total Laporan Bulan Ini</p>
                <p class="text-2xl font-bold text-slate-800 dark:text-white">352</p>
                <p class="text-[10px] text-emerald-600 mt-1">↑ 8% dari bulan lalu</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">🤖 Laporan AI Generated</p>
                <p class="text-2xl font-bold text-slate-800 dark:text-white">3.210</p>
                <p class="text-[10px] text-primary mt-1">71% dari total</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">📈 Kategori Terbanyak</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">Keselamatan & AI Monitoring</p>
                <p class="text-[10px] text-blue-600 mt-1">48% dari total laporan</p>
            </div>
        </div>
        <div class="bg-primary/10 rounded-xl p-3">
            <p class="text-xs text-primary font-semibold mb-1">📋 Ringkasan Eksekutif</p>
            <p class="text-sm text-slate-700 dark:text-slate-300">Berdasarkan 4.521 laporan yang tersedia, CERIA AI merangkum bahwa <span class="font-bold text-primary">keselamatan anak dan pemantauan AI</span> menjadi fokus utama laporan dengan peningkatan 12% dalam 3 bulan terakhir. Wilayah <span class="font-bold text-amber-600">Sulawesi Selatan</span> memerlukan perhatian khusus dengan peningkatan laporan insiden sebesar 18%. Rekomendasi: tingkatkan frekuensi pelaporan otomatis dan audit rutin untuk daycare dengan skor rendah.</p>
            <div class="flex justify-between items-center mt-2">
                <span class="text-[10px] text-slate-500">Last generated: 5 menit lalu</span>
                <button class="text-primary text-xs font-semibold hover:underline">Generate Ringkasan Baru →</button>
            </div>
        </div>
    </div>

    <!-- ==================== JENIS LAPORAN CARD ==================== -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 mt-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-3 text-center border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center mx-auto mb-2">
                <span class="material-symbols-outlined text-red-500">security</span>
            </div>
            <p class="text-xs font-semibold text-slate-800 dark:text-white">Keselamatan</p>
            <p class="text-[10px] text-slate-400">1.248 laporan</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-3 text-center border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mx-auto mb-2">
                <span class="material-symbols-outlined text-blue-500">settings</span>
            </div>
            <p class="text-xs font-semibold text-slate-800 dark:text-white">Operasional</p>
            <p class="text-[10px] text-slate-400">892 laporan</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-3 text-center border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center mx-auto mb-2">
                <span class="material-symbols-outlined text-emerald-500">group</span>
            </div>
            <p class="text-xs font-semibold text-slate-800 dark:text-white">Pengguna</p>
            <p class="text-[10px] text-slate-400">756 laporan</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-3 text-center border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center mx-auto mb-2">
                <span class="material-symbols-outlined text-amber-500">report</span>
            </div>
            <p class="text-xs font-semibold text-slate-800 dark:text-white">Pengaduan</p>
            <p class="text-[10px] text-slate-400">634 laporan</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-3 text-center border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center mx-auto mb-2">
                <span class="material-symbols-outlined text-purple-500">smart_toy</span>
            </div>
            <p class="text-xs font-semibold text-slate-800 dark:text-white">AI Monitoring</p>
            <p class="text-[10px] text-slate-400">521 laporan</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-3 text-center border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center mx-auto mb-2">
                <span class="material-symbols-outlined text-slate-500">payments</span>
            </div>
            <p class="text-xs font-semibold text-slate-800 dark:text-white">Keuangan</p>
            <p class="text-[10px] text-slate-400">470 laporan</p>
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