@extends('layouts.superadmin')

@section('title', 'Pengasuh')

@section('content')
<div class="animate-fade-in-up">
    <!-- ==================== HEADER ==================== -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-6">
        <div>
            <div class="flex items-center gap-3 mb-1">
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Manajemen Pengasuh Nasional</h1>
                <span class="px-2 py-1 bg-primary/10 text-primary rounded-lg text-[10px] font-bold uppercase tracking-wider">Kompetensi & Performa</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Pemantauan kompetensi, status kerja, dan performa seluruh pengasuh daycare Indonesia.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[18px]">person_add</span>
                Tambah Pengasuh
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Export Data
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">print</span>
                Cetak Laporan
            </button>
        </div>
    </div>

    <!-- ==================== STATISTIK (4 Cards) ==================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[24px]">badge</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">↑ +5%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Total Pengasuh</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">5.248</p>
            <p class="text-[11px] text-slate-400 mt-1">Seluruh Indonesia</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 text-[24px]">work</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">Aktif</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Aktif Bertugas</p>
            <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">4.921</p>
            <p class="text-[11px] text-slate-400 mt-1">93.8% dari total</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-[24px]">verified</span>
                </div>
                <span class="text-blue-600 text-xs font-semibold bg-blue-50 dark:bg-blue-900/30 px-2 py-1 rounded-full">Valid</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Sertifikasi Valid</p>
            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">4.510</p>
            <p class="text-[11px] text-slate-400 mt-1">85.9% memiliki sertifikasi</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400 text-[24px]">warning</span>
                </div>
                <span class="text-amber-600 text-xs font-semibold bg-amber-50 dark:bg-amber-900/30 px-2 py-1 rounded-full">Perhatian</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Perlu Evaluasi</p>
            <p class="text-3xl font-bold text-amber-600 dark:text-amber-400">138</p>
            <p class="text-[11px] text-slate-400 mt-1">Rekomendasi evaluasi</p>
        </div>
    </div>

    <!-- ==================== FILTER ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 p-5 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-3">
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
                <input type="text" placeholder="Cari nama pengasuh..." class="w-full pl-10 pr-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
            </div>
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Daycare</option>
                <option value="Little Stars Academy">Little Stars Academy</option>
                <option value="Pelangi Daycare">Pelangi Daycare</option>
                <option value="Bright Horizons">Bright Horizons</option>
                <option value="Taman Anak Kita">Taman Anak Kita</option>
            </select>
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Wilayah</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
            </select>
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Status</option>
                <option value="active">Aktif</option>
                <option value="leave">Cuti</option>
                <option value="inactive">Tidak Aktif</option>
                <option value="suspended">Ditangguhkan</option>
            </select>
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Sertifikasi</option>
                <option value="valid">Valid</option>
                <option value="expired">Kadaluarsa</option>
                <option value="none">Belum Bersertifikasi</option>
            </select>
        </div>
    </div>

    <!-- ==================== TABEL PENGASUH + PANEL PERFORMA ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Tabel Pengasuh (2/3 lebar) -->
        <div class="lg:col-span-2 bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800">
                <h4 class="font-bold text-slate-800 dark:text-white">Daftar Pengasuh Aktif</h4>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-slate-50 dark:bg-slate-800/50">
                        <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                            <th class="px-5 py-3">Foto</th>
                            <th class="px-5 py-3">Nama Pengasuh</th>
                            <th class="px-5 py-3">Daycare</th>
                            <th class="px-5 py-3">Wilayah</th>
                            <th class="px-5 py-3">Pengalaman</th>
                            <th class="px-5 py-3">Sertifikasi</th>
                            <th class="px-5 py-3">Status</th>
                            <th class="px-5 py-3">Rating</th>
                            <th class="px-5 py-3">Terakhir Aktif</th>
                            <th class="px-5 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3">
                                <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary text-[18px]">face</span>
                                </div>
                            </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Siti Nurhaliza</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Little Stars Academy</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Makassar</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">5 tahun</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Valid</span></td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Aktif</span></td>
                            <td class="px-5 py-3">
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-amber-400 text-[14px]">star</span>
                                    <span class="text-sm font-semibold text-slate-800 dark:text-white">4.9</span>
                                </div>
                            </td>
                            <td class="px-5 py-3 text-sm text-slate-500">2 jam lalu</td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-amber-500 hover:bg-amber-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">block</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3">
                                <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary text-[18px]">face</span>
                                </div>
                            </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Ahmad Hidayat</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Pelangi Daycare</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Surabaya</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">3 tahun</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Valid</span></td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Aktif</span></td>
                            <td class="px-5 py-3">
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-amber-400 text-[14px]">star</span>
                                    <span class="text-sm font-semibold text-slate-800 dark:text-white">4.8</span>
                                </div>
                            </td>
                            <td class="px-5 py-3 text-sm text-slate-500">5 jam lalu</td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-amber-500 hover:bg-amber-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">block</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3">
                                <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary text-[18px]">face</span>
                                </div>
                            </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Dewi Lestari</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Bright Horizons</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Bandung</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">7 tahun</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Valid</span></td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-700 rounded-full">Cuti</span></td>
                            <td class="px-5 py-3">
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-amber-400 text-[14px]">star</span>
                                    <span class="text-sm font-semibold text-slate-800 dark:text-white">4.9</span>
                                </div>
                            </td>
                            <td class="px-5 py-3 text-sm text-slate-500">Kemarin</td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-amber-500 hover:bg-amber-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">block</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3">
                                <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary text-[18px]">face</span>
                                </div>
                            </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Rina Wati</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Taman Anak Kita</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Jakarta</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">2 tahun</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 text-red-700 rounded-full">Kadaluarsa</span></td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-700 rounded-full">Ditangguhkan</span></td>
                            <td class="px-5 py-3">
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-amber-400 text-[14px]">star</span>
                                    <span class="text-sm font-semibold text-slate-800 dark:text-white">4.5</span>
                                </div>
                            </td>
                            <td class="px-5 py-3 text-sm text-slate-500">3 hari lalu</td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-amber-500 hover:bg-amber-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">check_circle</span></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-5 py-3 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center">
                <p class="text-xs text-slate-500">Menampilkan 1-4 dari 5.248 pengasuh</p>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 border rounded-lg text-sm disabled:opacity-50" disabled>Sebelumnya</button>
                    <button class="px-3 py-1.5 bg-primary text-white rounded-lg text-sm">1</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">2</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">3</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">Selanjutnya</button>
                </div>
            </div>
        </div>

        <!-- Panel Top Performer (1/3 lebar) -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="px-4 py-3 border-b border-slate-100 dark:border-slate-800 bg-gradient-to-r from-amber-50 to-transparent">
                <h4 class="font-bold text-slate-800 dark:text-white flex items-center gap-2">
                    <span class="material-symbols-outlined text-amber-500">stars</span>
                    Top Performer Bulan Ini
                </h4>
            </div>
            <div class="divide-y divide-slate-100 dark:divide-slate-800">
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-[18px]">face</span>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold text-slate-800 dark:text-white">Siti Nurhaliza</p>
                            <p class="text-xs text-slate-500">Little Stars Academy</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-amber-400 text-[14px]">star</span>
                                <span class="text-sm font-bold text-slate-800 dark:text-white">4.9</span>
                            </div>
                            <p class="text-[10px] text-slate-400">248 aktivitas</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-[18px]">face</span>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold text-slate-800 dark:text-white">Ahmad Hidayat</p>
                            <p class="text-xs text-slate-500">Pelangi Daycare</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-amber-400 text-[14px]">star</span>
                                <span class="text-sm font-bold text-slate-800 dark:text-white">4.8</span>
                            </div>
                            <p class="text-[10px] text-slate-400">212 aktivitas</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-[18px]">face</span>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold text-slate-800 dark:text-white">Dewi Lestari</p>
                            <p class="text-xs text-slate-500">Bright Horizons</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-amber-400 text-[14px]">star</span>
                                <span class="text-sm font-bold text-slate-800 dark:text-white">4.9</span>
                            </div>
                            <p class="text-[10px] text-slate-400">198 aktivitas</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-[18px]">face</span>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold text-slate-800 dark:text-white">Rina Wati</p>
                            <p class="text-xs text-slate-500">Taman Anak Kita</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-amber-400 text-[14px]">star</span>
                                <span class="text-sm font-bold text-slate-800 dark:text-white">4.5</span>
                            </div>
                            <p class="text-[10px] text-slate-400">156 aktivitas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 border-t border-slate-100 dark:border-slate-800">
                <button class="w-full py-2 text-center text-sm font-semibold text-primary hover:bg-primary/10 rounded-lg transition">Lihat Semua Performer →</button>
            </div>
        </div>
    </div>

    <!-- ==================== CERIA AI ANALYSIS ==================== -->
    <div class="bg-gradient-to-r from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-5 border border-primary/20">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[18px]">neurology</span>
                </div>
                <h4 class="font-bold text-slate-800 dark:text-white">CERIA AI Analysis - Performa Pengasuh</h4>
            </div>
            <span class="text-xs text-primary font-semibold">AI Analytics</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-primary text-[20px]">stars</span>
                </div>
                <p class="text-sm font-bold text-slate-800 dark:text-white">Siti Nurhaliza</p>
                <p class="text-[10px] text-slate-500">Performa Terbaik</p>
                <p class="text-xs font-semibold text-primary mt-1">Rating 4.9</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-emerald-600 text-[20px]">location_city</span>
                </div>
                <p class="text-sm font-bold text-slate-800 dark:text-white">DKI Jakarta</p>
                <p class="text-[10px] text-slate-500">Kualitas Tertinggi</p>
                <p class="text-xs font-semibold text-emerald-600 mt-1">Rating rata-rata 4.8</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-amber-600 text-[20px]">warning</span>
                </div>
                <p class="text-sm font-bold text-slate-800 dark:text-white">47</p>
                <p class="text-[10px] text-slate-500">Berisiko Burnout</p>
                <p class="text-xs font-semibold text-amber-600 mt-1">Perlu intervensi</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-blue-600 text-[20px]">verified</span>
                </div>
                <p class="text-sm font-bold text-slate-800 dark:text-white">85.9%</p>
                <p class="text-[10px] text-slate-500">Bersertifikasi Valid</p>
                <p class="text-xs font-semibold text-blue-600 mt-1">Nasional</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-primary/10 rounded-xl p-3">
                <p class="text-xs text-primary font-semibold mb-2">📊 Distribusi Sertifikasi Nasional</p>
                <div class="space-y-2">
                    <div><div class="flex justify-between text-xs"><span>Valid</span><span>85.9%</span></div><div class="w-full bg-slate-200 rounded-full h-1.5"><div class="bg-emerald-500 h-1.5 rounded-full" style="width:85.9%"></div></div></div>
                    <div><div class="flex justify-between text-xs"><span>Kadaluarsa</span><span>8.3%</span></div><div class="w-full bg-slate-200 rounded-full h-1.5"><div class="bg-amber-500 h-1.5 rounded-full" style="width:8.3%"></div></div></div>
                    <div><div class="flex justify-between text-xs"><span>Belum Bersertifikasi</span><span>5.8%</span></div><div class="w-full bg-slate-200 rounded-full h-1.5"><div class="bg-red-500 h-1.5 rounded-full" style="width:5.8%"></div></div></div>
                </div>
            </div>
            <div class="bg-primary/10 rounded-xl p-3">
                <p class="text-xs text-primary font-semibold mb-2">📈 Rekomendasi AI</p>
                <p class="text-sm text-slate-700 dark:text-slate-300">CERIA AI merekomendasikan peningkatan program sertifikasi di wilayah <span class="font-bold text-primary">Sulawesi Selatan dan Jawa Timur</span> untuk mengejar ketertinggalan kompetensi pengasuh.</p>
                <p class="text-xs text-slate-500 mt-2">Updated: 2 jam yang lalu</p>
            </div>
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