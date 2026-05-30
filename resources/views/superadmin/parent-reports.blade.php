@extends('layouts.superadmin')

@section('title', 'Laporan Orang Tua')

@section('content')
<div class="animate-fade-in-up">
    <!-- ==================== HEADER ==================== -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-6">
        <div>
            <div class="flex items-center gap-3 mb-1">
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Laporan Orang Tua Nasional</h1>
                <span class="px-2 py-1 bg-primary/10 text-primary rounded-lg text-[10px] font-bold uppercase tracking-wider">Real-time</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Pemantauan seluruh laporan, keluhan, saran, dan pengaduan yang dikirim oleh orang tua dari seluruh daycare secara real-time.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Wilayah</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
            </select>
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Status</option>
                <option value="new">Baru</option>
                <option value="reviewed">Ditinjau</option>
                <option value="processed">Diproses</option>
                <option value="completed">Selesai</option>
                <option value="rejected">Ditolak</option>
            </select>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Ekspor Laporan
            </button>
        </div>
    </div>

    <!-- ==================== RINGKASAN STATISTIK (4 Cards) ==================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[24px]">description</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">↑ +12%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Total Laporan</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">1.248</p>
            <p class="text-[11px] text-slate-400 mt-1">30 hari terakhir</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400 text-[24px]">pending</span>
                </div>
                <span class="text-amber-600 text-xs font-semibold bg-amber-50 dark:bg-amber-900/30 px-2 py-1 rounded-full">Perlu Tindakan</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Menunggu Tinjauan</p>
            <p class="text-3xl font-bold text-amber-600 dark:text-amber-400">186</p>
            <p class="text-[11px] text-slate-400 mt-1">Belum diproses</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-[24px]">sync</span>
                </div>
                <span class="text-blue-600 text-xs font-semibold bg-blue-50 dark:bg-blue-900/30 px-2 py-1 rounded-full">Proses</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Sedang Diproses</p>
            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">94</p>
            <p class="text-[11px] text-slate-400 mt-1">Tim investigasi</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 text-[24px]">check_circle</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">↑ +5%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Selesai Ditangani</p>
            <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">968</p>
            <p class="text-[11px] text-slate-400 mt-1">Tingkat penyelesaian 77.6%</p>
        </div>
    </div>

    <!-- ==================== GRAFIK TREN LAPORAN + ANALISIS KATEGORI ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Grafik Tren Laporan -->
        <div class="lg:col-span-2 bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between items-center mb-4 flex-wrap gap-3">
                <h4 class="font-bold text-slate-800 dark:text-white">Tren Laporan Orang Tua</h4>
                <div class="flex gap-2">
                    <button class="px-3 py-1 text-xs font-semibold bg-primary/10 text-primary rounded-lg">Harian</button>
                    <button class="px-3 py-1 text-xs font-semibold text-slate-500 hover:bg-slate-100 rounded-lg">Mingguan</button>
                    <button class="px-3 py-1 text-xs font-semibold text-slate-500 hover:bg-slate-100 rounded-lg">Bulanan</button>
                </div>
            </div>
            <div class="h-64 bg-slate-50 dark:bg-slate-800/50 rounded-xl flex items-center justify-center border border-slate-100 dark:border-slate-700">
                <div class="text-center">
                    <span class="material-symbols-outlined text-4xl text-slate-300 dark:text-slate-600">show_chart</span>
                    <p class="text-sm text-slate-400 mt-2">Grafik tren laporan orang tua</p>
                    <div class="flex flex-wrap justify-center gap-3 mt-2 text-xs">
                        <span class="flex items-center gap-1"><span class="w-2 h-2 bg-primary rounded-full"></span> Keselamatan</span>
                        <span class="flex items-center gap-1"><span class="w-2 h-2 bg-amber-500 rounded-full"></span> Pengasuhan</span>
                        <span class="flex items-center gap-1"><span class="w-2 h-2 bg-emerald-500 rounded-full"></span> Kesehatan</span>
                        <span class="flex items-center gap-1"><span class="w-2 h-2 bg-purple-500 rounded-full"></span> Fasilitas</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Diagram Donat Kategori Keluhan -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white mb-4">Analisis Kategori Keluhan</h4>
            <div class="flex flex-col items-center">
                <div class="w-40 h-40 rounded-full border-8 border-primary/20 relative mb-4">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-3xl font-bold text-slate-800 dark:text-white">1.2K</span>
                    </div>
                </div>
                <div class="w-full space-y-2 text-sm">
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-primary rounded-full"></span> Keselamatan Anak</span><span class="font-semibold">32%</span></div>
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-amber-500 rounded-full"></span> Pengawasan Pengasuh</span><span class="font-semibold">24%</span></div>
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-emerald-500 rounded-full"></span> Kesehatan</span><span class="font-semibold">15%</span></div>
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-purple-500 rounded-full"></span> Fasilitas</span><span class="font-semibold">12%</span></div>
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-slate-400 rounded-full"></span> Administrasi</span><span class="font-semibold">9%</span></div>
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-slate-300 rounded-full"></span> Lainnya</span><span class="font-semibold">8%</span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== DAFTAR LAPORAN PRIORITAS TINGGI ==================== -->
    <div class="bg-red-50 dark:bg-red-900/20 rounded-2xl p-5 border border-red-200 dark:border-red-800 mb-6">
        <div class="flex items-center gap-2 mb-4">
            <span class="material-symbols-outlined text-red-500">warning</span>
            <h4 class="font-bold text-red-800 dark:text-red-300">Laporan Prioritas Tinggi & Kritis</h4>
            <span class="px-2 py-0.5 bg-red-500 text-white text-[10px] font-bold rounded-full">Perhatian Segera</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 border-l-4 border-red-500 shadow-sm">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <p class="font-bold text-slate-800 dark:text-white">Daycare Pelangi</p>
                        <p class="text-xs text-slate-500">Surabaya, Jawa Timur</p>
                    </div>
                    <div class="flex gap-1">
                        <span class="px-2 py-0.5 bg-red-500 text-white text-[9px] font-bold rounded-full">KRITIS</span>
                    </div>
                </div>
                <p class="text-sm text-slate-600 dark:text-slate-300">Kekhawatiran terhadap pengawasan area bermain - laporan dari 7 orang tua berbeda.</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-[10px] text-slate-400">Dilaporkan: 2 jam lalu</span>
                    <button class="text-primary text-xs font-semibold hover:underline">Tindak Lanjut →</button>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 border-l-4 border-red-500 shadow-sm">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <p class="font-bold text-slate-800 dark:text-white">Little Stars Academy</p>
                        <p class="text-xs text-slate-500">Makassar, Sulawesi Selatan</p>
                    </div>
                    <div class="flex gap-1">
                        <span class="px-2 py-0.5 bg-red-500 text-white text-[9px] font-bold rounded-full">KRITIS</span>
                        <span class="px-2 py-0.5 bg-amber-500 text-white text-[9px] font-bold rounded-full">BERULANG</span>
                    </div>
                </div>
                <p class="text-sm text-slate-600 dark:text-slate-300">Keluhan keterlambatan penanganan insiden anak (insiden serupa dalam 7 hari terakhir).</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-[10px] text-slate-400">Dilaporkan: 5 jam lalu</span>
                    <button class="text-primary text-xs font-semibold hover:underline">Tindak Lanjut →</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== TABEL LAPORAN ORANG TUA ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden mb-6">
        <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white">Semua Laporan Orang Tua</h4>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 dark:bg-slate-800/50">
                    <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                        <th class="px-5 py-3">ID</th>
                        <th class="px-5 py-3">Nama Orang Tua</th>
                        <th class="px-5 py-3">Daycare</th>
                        <th class="px-5 py-3">Wilayah</th>
                        <th class="px-5 py-3">Kategori</th>
                        <th class="px-5 py-3">Judul Laporan</th>
                        <th class="px-5 py-3">Tanggal</th>
                        <th class="px-5 py-3">Prioritas</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 text-sm font-mono text-slate-500">#RP-001</td>
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Budi Santoso</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Little Stars Academy</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Makassar</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 text-red-600 rounded-full">Keselamatan</span></td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Kekhawatiran area bermain</td>
                        <td class="px-5 py-3 text-slate-500">2 jam lalu</td>
                        <td class="px-5 py-3"><span class="text-xs font-bold text-red-600">Kritis</span></td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 text-red-600 rounded-full">Baru</span></td>
                        <td class="px-5 py-3">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">assignment</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">trending_up</span></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 text-sm font-mono text-slate-500">#RP-002</td>
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Siti Aminah</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Pelangi Daycare</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Surabaya</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-600 rounded-full">Pengasuhan</span></td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Komunikasi pengasuh kurang responsif</td>
                        <td class="px-5 py-3 text-slate-500">5 jam lalu</td>
                        <td class="px-5 py-3"><span class="text-xs font-bold text-red-600">Tinggi</span></td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-600 rounded-full">Ditinjau</span></td>
                        <td class="px-5 py-3">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">assignment</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">trending_up</span></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 text-sm font-mono text-slate-500">#RP-003</td>
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Dewi Kartika</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Bright Horizons</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Bandung</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-600 rounded-full">Kesehatan</span></td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Penanganan anak sakit</td>
                        <td class="px-5 py-3 text-slate-500">Kemarin</td>
                        <td class="px-5 py-3"><span class="text-xs font-bold text-amber-600">Sedang</span></td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-blue-100 text-blue-600 rounded-full">Diproses</span></td>
                        <td class="px-5 py-3">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">assignment</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">trending_up</span></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 text-sm font-mono text-slate-500">#RP-004</td>
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Andi Wijaya</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Taman Anak Kita</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Jakarta</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-purple-100 text-purple-600 rounded-full">Fasilitas</span></td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Mainan rusak dan tidak aman</td>
                        <td class="px-5 py-3 text-slate-500">Kemarin</td>
                        <td class="px-5 py-3"><span class="text-xs font-bold text-amber-600">Sedang</span></td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-600 rounded-full">Selesai</span></td>
                        <td class="px-5 py-3">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">assignment</span></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="px-5 py-3 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center">
            <p class="text-xs text-slate-500">Menampilkan 1-4 dari 186 laporan baru</p>
            <div class="flex gap-2">
                <button class="px-3 py-1.5 border rounded-lg text-sm disabled:opacity-50" disabled>Sebelumnya</button>
                <button class="px-3 py-1.5 bg-primary text-white rounded-lg text-sm">1</button>
                <button class="px-3 py-1.5 border rounded-lg text-sm">2</button>
                <button class="px-3 py-1.5 border rounded-lg text-sm">3</button>
                <button class="px-3 py-1.5 border rounded-lg text-sm">Selanjutnya</button>
            </div>
        </div>
    </div>

    <!-- ==================== SEBARAN LAPORAN + AI INSIGHT ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Peta Sebaran Laporan Nasional -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white mb-4">Sebaran Laporan Berdasarkan Wilayah</h4>
            <div class="space-y-3">
                <div class="flex justify-between items-center p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-slate-800 dark:text-white">DKI Jakarta</span>
                        <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                    </div>
                    <div class="flex-1 mx-4">
                        <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                            <div class="bg-red-500 h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                    <span class="text-sm font-bold text-red-600">214</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-slate-800 dark:text-white">Jawa Timur</span>
                        <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                    </div>
                    <div class="flex-1 mx-4">
                        <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                            <div class="bg-red-500 h-2 rounded-full" style="width: 87%"></div>
                        </div>
                    </div>
                    <span class="text-sm font-bold text-red-600">186</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-slate-800 dark:text-white">Jawa Barat</span>
                        <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                    </div>
                    <div class="flex-1 mx-4">
                        <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                            <div class="bg-amber-500 h-2 rounded-full" style="width: 80%"></div>
                        </div>
                    </div>
                    <span class="text-sm font-bold text-amber-600">172</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-slate-800 dark:text-white">Sulawesi Selatan</span>
                        <span class="w-2 h-2 bg-yellow-500 rounded-full"></span>
                    </div>
                    <div class="flex-1 mx-4">
                        <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 42%"></div>
                        </div>
                    </div>
                    <span class="text-sm font-bold text-yellow-600">89</span>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 dark:border-slate-700">
                <div class="flex justify-between text-xs">
                    <span class="flex items-center gap-1"><span class="w-2 h-2 bg-red-500 rounded-full"></span> Tinggi (>150)</span>
                    <span class="flex items-center gap-1"><span class="w-2 h-2 bg-amber-500 rounded-full"></span> Sedang (100-150)</span>
                    <span class="flex items-center gap-1"><span class="w-2 h-2 bg-yellow-500 rounded-full"></span> Rendah (<100)</span>
                </div>
            </div>
        </div>

        <!-- AI Complaint Insight -->
        <div class="bg-gradient-to-r from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-5 border border-primary/20">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-[18px]">neurology</span>
                    </div>
                    <h4 class="font-bold text-slate-800 dark:text-white">AI Complaint Insight</h4>
                </div>
                <span class="text-xs text-primary font-semibold">CERIA AI Analytics</span>
            </div>
            
            <!-- Sentiment -->
            <div class="mb-4">
                <p class="text-xs text-slate-500 mb-2">Sentimen Orang Tua</p>
                <div class="flex gap-2">
                    <div class="flex-1 text-center p-2 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg">
                        <p class="text-lg font-bold text-emerald-600">72%</p>
                        <p class="text-[10px] text-emerald-600">Positif</p>
                    </div>
                    <div class="flex-1 text-center p-2 bg-slate-100 dark:bg-slate-700 rounded-lg">
                        <p class="text-lg font-bold text-slate-500">18%</p>
                        <p class="text-[10px] text-slate-500">Netral</p>
                    </div>
                    <div class="flex-1 text-center p-2 bg-red-100 dark:bg-red-900/30 rounded-lg">
                        <p class="text-lg font-bold text-red-500">10%</p>
                        <p class="text-[10px] text-red-500">Negatif</p>
                    </div>
                </div>
            </div>
            
            <!-- Topik Keluhan Terbanyak -->
            <div class="mb-4">
                <p class="text-xs text-slate-500 mb-2">Topik Keluhan Terbanyak</p>
                <div class="space-y-2">
                    <div class="flex justify-between items-center"><span class="text-sm">Pengawasan Anak</span><span class="text-sm font-semibold text-red-500">32%</span></div>
                    <div class="flex justify-between items-center"><span class="text-sm">Keamanan Area Bermain</span><span class="text-sm font-semibold text-amber-500">24%</span></div>
                    <div class="flex justify-between items-center"><span class="text-sm">Komunikasi Pengasuh</span><span class="text-sm font-semibold text-emerald-500">18%</span></div>
                </div>
            </div>
            
            <!-- Daycare Evaluasi -->
            <div class="mb-4">
                <p class="text-xs text-slate-500 mb-2">Daycare yang Memerlukan Evaluasi</p>
                <div class="space-y-1">
                    <div class="flex justify-between items-center text-sm"><span>Little Stars Academy</span><span class="font-semibold text-red-500">28 laporan</span></div>
                    <div class="flex justify-between items-center text-sm"><span>Pelangi Daycare</span><span class="font-semibold text-amber-500">21 laporan</span></div>
                    <div class="flex justify-between items-center text-sm"><span>Bright Horizons</span><span class="font-semibold text-yellow-500">15 laporan</span></div>
                </div>
            </div>
            
            <!-- Prediksi Tren -->
            <div class="bg-primary/10 rounded-xl p-3">
                <p class="text-xs text-primary font-semibold mb-1">Prediksi Tren Minggu Depan</p>
                <p class="text-sm text-slate-700 dark:text-slate-300">📈 Keluhan terkait pengawasan anak diprediksi meningkat <span class="font-bold text-red-500">8%</span>.</p>
            </div>
        </div>
    </div>

    <!-- ==================== TIMELINE AKTIVITAS TERBARU ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 mb-6">
        <h4 class="font-bold text-slate-800 dark:text-white mb-4">Timeline Aktivitas Terbaru</h4>
        <div class="space-y-4">
            <div class="flex gap-3">
                <div class="flex flex-col items-center">
                    <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center"><span class="material-symbols-outlined text-primary text-[16px]">description</span></div>
                    <div class="w-0.5 h-10 bg-slate-200 dark:bg-slate-700 mt-1"></div>
                </div>
                <div class="flex-1 pb-3">
                    <p class="text-sm font-semibold text-slate-800 dark:text-white">Laporan baru diterima dari Daycare Pelangi</p>
                    <p class="text-xs text-slate-400">10:15 - Kategori: Pengasuhan</p>
                </div>
            </div>
            <div class="flex gap-3">
                <div class="flex flex-col items-center">
                    <div class="w-8 h-8 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-amber-500 text-[16px]">assignment</span></div>
                    <div class="w-0.5 h-10 bg-slate-200 dark:bg-slate-700 mt-1"></div>
                </div>
                <div class="flex-1 pb-3">
                    <p class="text-sm font-semibold text-slate-800 dark:text-white">Laporan diteruskan ke tim investigasi</p>
                    <p class="text-xs text-slate-400">10:32 - Little Stars Academy</p>
                </div>
            </div>
            <div class="flex gap-3">
                <div class="flex flex-col items-center">
                    <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-emerald-500 text-[16px]">chat</span></div>
                    <div class="w-0.5 h-10 bg-slate-200 dark:bg-slate-700 mt-1"></div>
                </div>
                <div class="flex-1 pb-3">
                    <p class="text-sm font-semibold text-slate-800 dark:text-white">Daycare memberikan tanggapan resmi</p>
                    <p class="text-xs text-slate-400">11:05 - Bright Horizons</p>
                </div>
            </div>
            <div class="flex gap-3">
                <div class="flex flex-col items-center">
                    <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-blue-500 text-[16px]">check_circle</span></div>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold text-slate-800 dark:text-white">Status laporan diperbarui menjadi Diproses</p>
                    <p class="text-xs text-slate-400">11:20 - Taman Anak Kita</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== FLOATING INSIGHT BAR ==================== -->
    <div class="fixed bottom-6 right-6 z-40">
        <div class="bg-primary/95 backdrop-blur-md text-white rounded-full px-5 py-2.5 shadow-lg flex items-center gap-3">
            <span class="w-2.5 h-2.5 bg-emerald-400 rounded-full animate-pulse"></span>
            <span class="text-sm font-semibold">CERIA AI mendeteksi peningkatan 12% laporan terkait pengawasan anak dalam 7 hari terakhir.</span>
            <button class="text-xs text-white/80 hover:text-white transition flex items-center gap-1">
                Lihat Analisis <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
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