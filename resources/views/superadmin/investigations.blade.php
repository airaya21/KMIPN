@extends('layouts.superadmin')

@section('title', 'Penyelidikan')

@section('content')
<div class="animate-fade-in-up">
    <!-- ==================== HEADER ==================== -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-6">
        <div>
            <div class="flex items-center gap-3 mb-1">
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Pusat Penyelidikan Nasional</h1>
                <span class="px-2 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 rounded-lg text-[10px] font-bold uppercase tracking-wider">Investigasi Aktif</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Pemantauan, pengelolaan, dan penyelesaian kasus yang memerlukan investigasi lanjutan pada seluruh daycare Indonesia.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[18px]">add</span>
                Buat Kasus Baru
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Ekspor Data
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">assignment</span>
                Laporan Investigasi
            </button>
        </div>
    </div>

    <!-- ==================== RINGKASAN STATISTIK (4 Cards) ==================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[24px]">gavel</span>
                </div>
                <span class="text-red-600 text-xs font-semibold bg-red-50 dark:bg-red-900/30 px-2 py-1 rounded-full">↑ +8%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Total Kasus Aktif</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">156</p>
            <p class="text-[11px] text-slate-400 mt-1">Seluruh Indonesia</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-red-50 dark:bg-red-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-600 dark:text-red-400 text-[24px]">priority_high</span>
                </div>
                <span class="text-red-600 text-xs font-semibold bg-red-50 dark:bg-red-900/30 px-2 py-1 rounded-full">Kritis</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Prioritas Tinggi</p>
            <p class="text-3xl font-bold text-red-600 dark:text-red-400">28</p>
            <p class="text-[11px] text-slate-400 mt-1">Perlu eskalasi segera</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400 text-[24px]">search</span>
                </div>
                <span class="text-amber-600 text-xs font-semibold bg-amber-50 dark:bg-amber-900/30 px-2 py-1 rounded-full">Proses</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Dalam Investigasi</p>
            <p class="text-3xl font-bold text-amber-600 dark:text-amber-400">74</p>
            <p class="text-[11px] text-slate-400 mt-1">Tim di lapangan</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 text-[24px]">verified</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">↑ +5%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Kasus Selesai</p>
            <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">82<sup class="text-sm">%</sup></p>
            <p class="text-[11px] text-slate-400 mt-1">Tingkat penyelesaian</p>
        </div>
    </div>

    <!-- ==================== DAFTAR KASUS PRIORITAS TINGGI ==================== -->
    <div class="bg-red-50 dark:bg-red-900/20 rounded-2xl p-5 border border-red-200 dark:border-red-800 mb-6">
        <div class="flex items-center gap-2 mb-4">
            <span class="material-symbols-outlined text-red-500">warning</span>
            <h4 class="font-bold text-red-800 dark:text-red-300">Kasus Prioritas Tinggi & Kritis</h4>
            <span class="px-2 py-0.5 bg-red-500 text-white text-[10px] font-bold rounded-full">Perhatian Segera</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 border-l-4 border-red-500 shadow-sm">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <p class="text-xs text-red-500 font-mono">#INV-1024</p>
                        <p class="font-bold text-slate-800 dark:text-white">Daycare Pelangi</p>
                        <p class="text-xs text-slate-500">Jakarta, DKI Jakarta</p>
                    </div>
                    <div class="flex gap-1">
                        <span class="px-2 py-0.5 bg-red-500 text-white text-[9px] font-bold rounded-full">KRITIS</span>
                    </div>
                </div>
                <p class="text-sm text-slate-600 dark:text-slate-300">Laporan dugaan kelalaian pengawasan anak dari 7 orang tua berbeda.</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-[10px] text-slate-400">Dibuka: 2 hari lalu</span>
                    <button class="text-primary text-xs font-semibold hover:underline">Detail →</button>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 border-l-4 border-red-500 shadow-sm">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <p class="text-xs text-red-500 font-mono">#INV-1031</p>
                        <p class="font-bold text-slate-800 dark:text-white">Little Stars Academy</p>
                        <p class="text-xs text-slate-500">Surabaya, Jawa Timur</p>
                    </div>
                    <div class="flex gap-1">
                        <span class="px-2 py-0.5 bg-red-500 text-white text-[9px] font-bold rounded-full">KRITIS</span>
                        <span class="px-2 py-0.5 bg-amber-500 text-white text-[9px] font-bold rounded-full">BERULANG</span>
                    </div>
                </div>
                <p class="text-sm text-slate-600 dark:text-slate-300">Indikasi pelanggaran SOP keamanan setelah insiden berulang.</p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-[10px] text-slate-400">Dibuka: 5 hari lalu</span>
                    <button class="text-primary text-xs font-semibold hover:underline">Detail →</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== TABEL INVESTIGASI NASIONAL ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden mb-6">
        <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white">Daftar Investigasi Nasional</h4>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 dark:bg-slate-800/50">
                    <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                        <th class="px-5 py-3">ID Kasus</th>
                        <th class="px-5 py-3">Daycare</th>
                        <th class="px-5 py-3">Wilayah</th>
                        <th class="px-5 py-3">Sumber Laporan</th>
                        <th class="px-5 py-3">Kategori</th>
                        <th class="px-5 py-3">Prioritas</th>
                        <th class="px-5 py-3">Investigator</th>
                        <th class="px-5 py-3">Tanggal Dibuka</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 text-sm font-mono text-red-600">#INV-1024</td>
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Daycare Pelangi</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Jakarta</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 text-red-600 rounded-full">Orang Tua</span></td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 text-red-600 rounded-full">Keselamatan</span></td>
                        <td class="px-5 py-3"><span class="text-xs font-bold text-red-600">Kritis</span></td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Ahmad Pratama</td>
                        <td class="px-5 py-3 text-slate-500">28 Mei 2026</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 text-red-600 rounded-full">Investigasi Lapangan</span></td>
                        <td class="px-5 py-3">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">person_add</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">trending_up</span></button>
                            </div>
                        </td>
                     </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 text-sm font-mono text-red-600">#INV-1031</td>
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Little Stars Academy</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Surabaya</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-600 rounded-full">AI Monitoring</span></td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 text-red-600 rounded-full">SOP</span></td>
                        <td class="px-5 py-3"><span class="text-xs font-bold text-red-600">Kritis</span></td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Siti Rahma</td>
                        <td class="px-5 py-3 text-slate-500">25 Mei 2026</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-600 rounded-full">Menunggu Bukti</span></td>
                        <td class="px-5 py-3">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">person_add</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">trending_up</span></button>
                            </div>
                        </td>
                     </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 text-sm font-mono text-amber-600">#INV-1056</td>
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Taman Anak Kita</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Bandung</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-600 rounded-full">Audit Internal</span></td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-600 rounded-full">Pengawasan</span></td>
                        <td class="px-5 py-3"><span class="text-xs font-bold text-amber-600">Tinggi</span></td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Budi Santoso</td>
                        <td class="px-5 py-3 text-slate-500">20 Mei 2026</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-blue-100 text-blue-600 rounded-full">Sedang Ditinjau</span></td>
                        <td class="px-5 py-3">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">person_add</span></button>
                            </div>
                        </td>
                     </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 text-sm font-mono text-slate-500">#INV-1082</td>
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Bright Horizons</td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Medan</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-purple-100 text-purple-600 rounded-full">Pengasuh</span></td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-600 rounded-full">Kesehatan</span></td>
                        <td class="px-5 py-3"><span class="text-xs font-bold text-emerald-600">Sedang</span></td>
                        <td class="px-5 py-3 text-slate-600 dark:text-slate-300">Dewi Lestari</td>
                        <td class="px-5 py-3 text-slate-500">15 Mei 2026</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-600 rounded-full">Selesai</span></td>
                        <td class="px-5 py-3">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                            </div>
                        </td>
                     </tr>
                </tbody>
            </table>
        </div>
        <div class="px-5 py-3 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center">
            <p class="text-xs text-slate-500">Menampilkan 1-4 dari 156 kasus aktif</p>
            <div class="flex gap-2">
                <button class="px-3 py-1.5 border rounded-lg text-sm disabled:opacity-50" disabled>Sebelumnya</button>
                <button class="px-3 py-1.5 bg-primary text-white rounded-lg text-sm">1</button>
                <button class="px-3 py-1.5 border rounded-lg text-sm">2</button>
                <button class="px-3 py-1.5 border rounded-lg text-sm">3</button>
                <button class="px-3 py-1.5 border rounded-lg text-sm">Selanjutnya</button>
            </div>
        </div>
    </div>

    <!-- ==================== TIMELINE INVESTIGASI + SEBARAN KASUS ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Timeline Investigasi -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white mb-4">Timeline Investigasi - Kasus #INV-1024</h4>
            <div class="space-y-4">
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center"><span class="material-symbols-outlined text-primary text-[16px]">smart_toy</span></div>
                        <div class="w-0.5 h-10 bg-slate-200 dark:bg-slate-700 mt-1"></div>
                    </div>
                    <div class="flex-1 pb-3">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Kasus dibuat otomatis oleh CERIA AI</p>
                        <p class="text-xs text-slate-400">08:15 - 28 Mei 2026</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-amber-500 text-[16px]">check_circle</span></div>
                        <div class="w-0.5 h-10 bg-slate-200 dark:bg-slate-700 mt-1"></div>
                    </div>
                    <div class="flex-1 pb-3">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Laporan diverifikasi oleh tim super admin</p>
                        <p class="text-xs text-slate-400">08:30 - 28 Mei 2026</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-blue-500 text-[16px]">person</span></div>
                        <div class="w-0.5 h-10 bg-slate-200 dark:bg-slate-700 mt-1"></div>
                    </div>
                    <div class="flex-1 pb-3">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Investigator ditugaskan (Ahmad Pratama)</p>
                        <p class="text-xs text-slate-400">09:10 - 28 Mei 2026</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-emerald-500 text-[16px]">video_library</span></div>
                        <div class="w-0.5 h-10 bg-slate-200 dark:bg-slate-700 mt-1"></div>
                    </div>
                    <div class="flex-1 pb-3">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Bukti video diterima dari daycare</p>
                        <p class="text-xs text-slate-400">10:45 - 28 Mei 2026</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center"><span class="material-symbols-outlined text-red-500 text-[16px]">search</span></div>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Status berubah menjadi Investigasi Lapangan</p>
                        <p class="text-xs text-slate-400">12:20 - 29 Mei 2026</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Peta Sebaran Kasus Nasional -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white mb-4">Sebaran Kasus Nasional</h4>
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
                    <span class="text-sm font-bold text-red-600">32</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-slate-800 dark:text-white">Jawa Timur</span>
                        <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                    </div>
                    <div class="flex-1 mx-4">
                        <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                            <div class="bg-red-500 h-2 rounded-full" style="width: 84%"></div>
                        </div>
                    </div>
                    <span class="text-sm font-bold text-red-600">27</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-slate-800 dark:text-white">Jawa Barat</span>
                        <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                    </div>
                    <div class="flex-1 mx-4">
                        <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                            <div class="bg-amber-500 h-2 rounded-full" style="width: 78%"></div>
                        </div>
                    </div>
                    <span class="text-sm font-bold text-amber-600">25</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-slate-800 dark:text-white">Sulawesi Selatan</span>
                        <span class="w-2 h-2 bg-yellow-500 rounded-full"></span>
                    </div>
                    <div class="flex-1 mx-4">
                        <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 38%"></div>
                        </div>
                    </div>
                    <span class="text-sm font-bold text-yellow-600">12</span>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 dark:border-slate-700">
                <div class="flex justify-between text-xs">
                    <span class="flex items-center gap-1"><span class="w-2 h-2 bg-red-500 rounded-full"></span> Tinggi (>25)</span>
                    <span class="flex items-center gap-1"><span class="w-2 h-2 bg-amber-500 rounded-full"></span> Sedang (15-25)</span>
                    <span class="flex items-center gap-1"><span class="w-2 h-2 bg-yellow-500 rounded-full"></span> Rendah (<15)</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== ANALISIS KATEGORI KASUS + AI INSIGHT ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Diagram Donat Kategori Kasus -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white mb-4">Analisis Kategori Kasus</h4>
            <div class="flex flex-col items-center">
                <div class="w-40 h-40 rounded-full border-8 border-primary/20 relative mb-4">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-3xl font-bold text-slate-800 dark:text-white">156</span>
                    </div>
                </div>
                <div class="w-full space-y-2 text-sm">
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-red-500 rounded-full"></span> Keselamatan Anak</span><span class="font-semibold">28%</span></div>
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-amber-500 rounded-full"></span> Pengawasan Pengasuh</span><span class="font-semibold">22%</span></div>
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-purple-500 rounded-full"></span> Kekerasan</span><span class="font-semibold">12%</span></div>
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-orange-500 rounded-full"></span> Kelalaian SOP</span><span class="font-semibold">15%</span></div>
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-emerald-500 rounded-full"></span> Kesehatan</span><span class="font-semibold">10%</span></div>
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-blue-500 rounded-full"></span> Keamanan Lingkungan</span><span class="font-semibold">8%</span></div>
                    <div class="flex justify-between items-center"><span class="flex items-center gap-2"><span class="w-3 h-3 bg-slate-400 rounded-full"></span> Administrasi</span><span class="font-semibold">5%</span></div>
                </div>
            </div>
        </div>

        <!-- CERIA AI Investigation Insight -->
        <div class="bg-gradient-to-r from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-5 border border-primary/20">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-[18px]">neurology</span>
                    </div>
                    <h4 class="font-bold text-slate-800 dark:text-white">CERIA AI Investigation Insight</h4>
                </div>
                <span class="text-xs text-primary font-semibold">AI Analytics</span>
            </div>
            
            <!-- AI Metrics -->
            <div class="grid grid-cols-2 gap-3 mb-4">
                <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                    <p class="text-2xl font-bold text-red-600">21</p>
                    <p class="text-[10px] text-slate-500">Kasus Berisiko Tinggi</p>
                </div>
                <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                    <p class="text-2xl font-bold text-amber-600">14</p>
                    <p class="text-[10px] text-slate-500">Potensi Pelanggaran SOP</p>
                </div>
                <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                    <p class="text-2xl font-bold text-blue-600">9</p>
                    <p class="text-[10px] text-slate-500">Investigasi Direkomendasikan</p>
                </div>
                <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                    <p class="text-2xl font-bold text-emerald-600">98.6<sup class="text-sm">%</sup></p>
                    <p class="text-[10px] text-slate-500">Akurasi Analisis AI</p>
                </div>
            </div>
            
            <!-- Temuan AI -->
            <div class="space-y-2">
                <div class="bg-primary/10 rounded-xl p-3">
                    <p class="text-xs text-primary font-semibold mb-1">📊 Temuan AI</p>
                    <p class="text-sm text-slate-700 dark:text-slate-300">CERIA AI mendeteksi pola peningkatan laporan terkait pengawasan anak sebesar <span class="font-bold text-red-500">18%</span> dalam 30 hari terakhir.</p>
                </div>
                <div class="bg-primary/10 rounded-xl p-3">
                    <p class="text-sm text-slate-700 dark:text-slate-300">📍 Wilayah Jawa Timur menunjukkan tingkat eskalasi kasus tertinggi bulan ini.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== PANEL INVESTIGATOR + KASUS TERBARU ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Panel Investigator Aktif -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between items-center mb-4">
                <h4 class="font-bold text-slate-800 dark:text-white">Tim Investigator Aktif</h4>
                <button class="text-primary text-xs font-semibold hover:underline">Lihat Semua →</button>
            </div>
            <div class="space-y-3">
                <div class="flex justify-between items-center p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">person</span>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Ahmad Pratama</p>
                            <p class="text-[10px] text-slate-400">Senior Investigator</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-primary">8</p>
                        <p class="text-[10px] text-slate-400">Kasus Ditangani</p>
                    </div>
                    <span class="px-2 py-1 bg-emerald-100 text-emerald-700 text-[10px] font-bold rounded-full">Aktif</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-amber-600">person</span>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Siti Rahma</p>
                            <p class="text-[10px] text-slate-400">Investigator</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-primary">5</p>
                        <p class="text-[10px] text-slate-400">Kasus Ditangani</p>
                    </div>
                    <span class="px-2 py-1 bg-emerald-100 text-emerald-700 text-[10px] font-bold rounded-full">Aktif</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-blue-600">person</span>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Budi Santoso</p>
                            <p class="text-[10px] text-slate-400">Field Investigator</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-primary">7</p>
                        <p class="text-[10px] text-slate-400">Kasus Ditangani</p>
                    </div>
                    <span class="px-2 py-1 bg-amber-100 text-amber-700 text-[10px] font-bold rounded-full">Investigasi Lapangan</span>
                </div>
            </div>
        </div>

        <!-- Kasus Terbaru -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between items-center mb-4">
                <h4 class="font-bold text-slate-800 dark:text-white">Kasus Terbaru</h4>
                <button class="text-primary text-xs font-semibold hover:underline">Lihat Semua →</button>
            </div>
            <div class="space-y-3">
                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl border-l-4 border-red-500">
                    <div class="flex justify-between items-start mb-1">
                        <p class="font-semibold text-slate-800 dark:text-white">Dugaan Kelalaian Pengawasan</p>
                        <span class="text-[9px] font-mono text-red-500">#INV-1024</span>
                    </div>
                    <p class="text-xs text-slate-500">Daycare Pelangi • Jakarta</p>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-[10px] px-2 py-0.5 bg-amber-100 text-amber-700 rounded-full">Sedang Ditinjau</span>
                        <span class="text-[10px] text-slate-400">2 jam lalu</span>
                    </div>
                </div>
                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl border-l-4 border-amber-500">
                    <div class="flex justify-between items-start mb-1">
                        <p class="font-semibold text-slate-800 dark:text-white">Pelanggaran SOP Keamanan</p>
                        <span class="text-[9px] font-mono text-amber-500">#INV-1031</span>
                    </div>
                    <p class="text-xs text-slate-500">Little Stars Academy • Surabaya</p>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-[10px] px-2 py-0.5 bg-red-100 text-red-700 rounded-full">Investigasi Lapangan</span>
                        <span class="text-[10px] text-slate-400">5 jam lalu</span>
                    </div>
                </div>
                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl border-l-4 border-blue-500">
                    <div class="flex justify-between items-start mb-1">
                        <p class="font-semibold text-slate-800 dark:text-white">Laporan Kesehatan Anak</p>
                        <span class="text-[9px] font-mono text-blue-500">#INV-1082</span>
                    </div>
                    <p class="text-xs text-slate-500">Bright Horizons • Medan</p>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-[10px] px-2 py-0.5 bg-emerald-100 text-emerald-700 rounded-full">Selesai</span>
                        <span class="text-[10px] text-slate-400">1 hari lalu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== FLOATING INVESTIGATION INSIGHT BAR ==================== -->
    <div class="fixed bottom-6 right-6 z-40">
        <div class="bg-primary/95 backdrop-blur-md text-white rounded-full px-5 py-2.5 shadow-lg flex items-center gap-3">
            <span class="w-2.5 h-2.5 bg-red-400 rounded-full animate-pulse"></span>
            <span class="text-sm font-semibold">CERIA AI mendeteksi 28 kasus prioritas tinggi yang memerlukan tindak lanjut dalam 48 jam ke depan.</span>
            <button class="text-xs text-white/80 hover:text-white transition flex items-center gap-1">
                Lihat Detail <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
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