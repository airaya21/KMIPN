@extends('layouts.superadmin')

@section('title', 'Daycare Ditangguhkan')

@section('content')
<div class="animate-fade-in-up">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-6">
        <div>
            <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Daycare Ditangguhkan</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Kelola daycare yang sedang dalam masa penangguhan atau sanksi administratif.</p>
        </div>
        <div class="flex gap-3">
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">refresh</span>
                Refresh
            </button>
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Export Laporan
            </button>
        </div>
    </div>
    
    <!-- Statistik Penangguhan -->
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Total Ditangguhkan</p>
                    <p class="text-2xl font-bold text-red-600 dark:text-red-400">2</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-600 dark:text-red-400">gavel</span>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Penangguhan Sementara</p>
                    <p class="text-2xl font-bold text-amber-600 dark:text-amber-400">1</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400">hourglass_top</span>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Permanen Ditutup</p>
                    <p class="text-2xl font-bold text-slate-800 dark:text-white">1</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                    <span class="material-symbols-outlined text-slate-500 dark:text-slate-400">block</span>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Menunggu Banding</p>
                    <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">1</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400">gavel</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Alert Info -->
    <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-xl p-4 mb-6">
        <div class="flex items-start gap-3">
            <span class="material-symbols-outlined text-red-500">info</span>
            <div>
                <p class="text-sm font-semibold text-red-800 dark:text-red-300">Informasi Penangguhan</p>
                <p class="text-sm text-red-700 dark:text-red-400">Daycare yang ditangguhkan tidak dapat beroperasi hingga masa penangguhan selesai atau status dicabut. Banding dapat diajukan melalui form resmi.</p>
            </div>
        </div>
    </div>
    
    <!-- Filter & Search -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-xl border border-slate-100 dark:border-slate-800 p-4 mb-6">
        <div class="flex flex-col sm:flex-row gap-4">
            <div class="flex-1">
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
                    <input type="text" placeholder="Cari daycare berdasarkan nama, pemilik, atau ID..." class="w-full pl-10 pr-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg bg-white dark:bg-slate-800 text-slate-800 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                </div>
            </div>
            <div class="flex gap-3">
                <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                    <option value="">Semua Status</option>
                    <option value="temporary">Penangguhan Sementara</option>
                    <option value="permanent">Permanen Ditutup</option>
                    <option value="appeal">Menunggu Banding</option>
                </select>
                <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                    <option value="">Semua Provinsi</option>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                </select>
            </div>
        </div>
    </div>
    
    <!-- Tabel Daftar Daycare Ditangguhkan -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-xl border border-slate-100 dark:border-slate-800 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-100 dark:border-slate-800">
                    <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                        <th class="px-5 py-3">ID Daycare</th>
                        <th class="px-5 py-3">Nama Daycare</th>
                        <th class="px-5 py-3">Pemilik</th>
                        <th class="px-5 py-3">Lokasi</th>
                        <th class="px-5 py-3">Tanggal Penangguhan</th>
                        <th class="px-5 py-3">Alasan</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <!-- Daycare 1 - Penangguhan Sementara (Smart Kids Academy) -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#DC005</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Smart Kids Academy</p>
                            <p class="text-[11px] text-slate-400">Terdaftar: 20 Des 2024</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Budi Santoso</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Medan, Sumatera Utara</td>
                        <td class="px-5 py-4 text-sm text-slate-500">15 Mei 2026</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px] text-red-400">warning</span>
                                Pelanggaran protokol kesehatan
                            </span>
                        </td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 rounded-full text-[11px] font-bold flex items-center gap-1 w-fit">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                Penangguhan Sementara
                            </span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition" title="Detail">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 rounded-lg transition" title="Pulihkan">
                                    <span class="material-symbols-outlined text-[18px]">restore</span>
                                </button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition" title="Perpanjang">
                                    <span class="material-symbols-outlined text-[18px]">more_time</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Daycare 2 - Permanen Ditutup -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#DC012</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Gemilang Daycare</p>
                            <p class="text-[11px] text-slate-400">Terdaftar: 10 Mar 2023</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Siti Nurhaliza</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Jakarta Pusat, DKI Jakarta</td>
                        <td class="px-5 py-4 text-sm text-slate-500">01 Feb 2026</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px] text-red-400">report</span>
                                Pelanggaran berat (3x)
                            </span>
                        </td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded-full text-[11px] font-bold">Permanen Ditutup</span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition" title="Detail">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition" title="Arsip" disabled>
                                    <span class="material-symbols-outlined text-[18px]">archive</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Daycare 3 - Menunggu Banding (ditampilkan dengan highlight) -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition bg-blue-50/30 dark:bg-blue-900/10">
                        <td class="px-5 py-4 text-sm text-slate-500">#DC008</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Ceria Banget Daycare</p>
                            <p class="text-[11px] text-slate-400">Terdaftar: 05 Sep 2024</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Rina Wati</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Semarang, Jawa Tengah</td>
                        <td class="px-5 py-4 text-sm text-slate-500">10 Mei 2026</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px] text-blue-400">gavel</span>
                                Sanksi administratif
                            </span>
                        </td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-400 rounded-full text-[11px] font-bold flex items-center gap-1 w-fit">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 animate-pulse"></span>
                                Menunggu Banding
                            </span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition" title="Detail">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 rounded-lg transition" title="Tinjau Banding">
                                    <span class="material-symbols-outlined text-[18px]">review</span>
                                </button>
                                <button class="p-1.5 text-amber-500 hover:bg-amber-50 dark:hover:bg-amber-900/30 rounded-lg transition" title="Proses">
                                    <span class="material-symbols-outlined text-[18px]">hourglass_empty</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Daycare 4 - Penangguhan Sementara (batas waktu dekat) -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#DC015</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Pelangi Edu Daycare</p>
                            <p class="text-[11px] text-slate-400">Terdaftar: 20 Nov 2024</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Andi Saputra</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Surabaya, Jawa Timur</td>
                        <td class="px-5 py-4 text-sm text-slate-500">20 Mei 2026</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px] text-red-400">warning</span>
                                Kelalaian dalam pengawasan
                            </span>
                        </td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 rounded-full text-[11px] font-bold flex items-center gap-1 w-fit">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                Penangguhan Sementara
                            </span>
                            <p class="text-[10px] text-red-500 mt-1">Berakhir: 3 hari lagi</p>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition" title="Detail">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 rounded-lg transition" title="Pulihkan">
                                    <span class="material-symbols-outlined text-[18px]">restore</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="flex justify-between items-center px-5 py-4 border-t border-slate-100 dark:border-slate-800">
            <p class="text-sm text-slate-500 dark:text-slate-400">Menampilkan 1-4 dari 4 data</p>
            <div class="flex gap-2">
                <button class="px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-lg text-sm text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition disabled:opacity-50" disabled>Sebelumnya</button>
                <button class="px-3 py-1.5 bg-primary text-white rounded-lg text-sm font-semibold hover:bg-primary/90 transition">1</button>
                <button class="px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-lg text-sm text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition disabled:opacity-50" disabled>Selanjutnya</button>
            </div>
        </div>
    </div>
    
    <!-- Informasi Sanksi & Regulasi -->
    <div class="mt-6 bg-slate-50 dark:bg-slate-800/50 rounded-xl p-5 border border-slate-100 dark:border-slate-700">
        <h4 class="font-semibold text-slate-800 dark:text-white mb-3 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary text-[20px]">gavel</span>
            Regulasi Penangguhan Daycare
        </h4>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
            <div class="flex items-start gap-2">
                <span class="material-symbols-outlined text-amber-500 text-[18px]">schedule</span>
                <div>
                    <p class="font-semibold text-slate-700 dark:text-slate-300">Penangguhan Sementara</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Maksimal 30 hari, dapat diperpanjang</p>
                </div>
            </div>
            <div class="flex items-start gap-2">
                <span class="material-symbols-outlined text-red-500 text-[18px]">block</span>
                <div>
                    <p class="font-semibold text-slate-700 dark:text-slate-300">Penutupan Permanen</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Untuk pelanggaran berat berulang</p>
                </div>
            </div>
            <div class="flex items-start gap-2">
                <span class="material-symbols-outlined text-blue-500 text-[18px]">gavel</span>
                <div>
                    <p class="font-semibold text-slate-700 dark:text-slate-300">Hak Banding</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Maksimal 14 hari setelah keputusan</p>
                </div>
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