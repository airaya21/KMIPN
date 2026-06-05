@extends('layouts.superadmin')

@section('title', 'Pusat Daycare')

@section('content')
<div class="animate-fade-in-up">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-6">
        <div>
            <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Pusat Daycare</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Kelola seluruh daycare yang terdaftar di sistem CERIA.</p>
        </div>
        <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
            <span class="material-symbols-outlined text-[18px]">add</span>
            Tambah Daycare
        </button>
    </div>
    
    <!-- Statistik Ringkas -->
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Total Daycare</p>
            <p class="text-2xl font-bold text-slate-800 dark:text-white">42</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Aktif</p>
            <p class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">36</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Menunggu Verifikasi</p>
            <p class="text-2xl font-bold text-amber-600 dark:text-amber-400">4</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Ditangguhkan</p>
            <p class="text-2xl font-bold text-red-600 dark:text-red-400">2</p>
        </div>
    </div>
    
    <!-- Filter & Search -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-xl border border-slate-100 dark:border-slate-800 p-4 mb-6">
        <div class="flex flex-col sm:flex-row gap-4">
            <div class="flex-1">
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
                    <input type="text" placeholder="Cari daycare berdasarkan nama, kota, atau ID..." class="w-full pl-10 pr-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg bg-white dark:bg-slate-800 text-slate-800 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                </div>
            </div>
            <div class="flex gap-3">
                <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                    <option value="">Semua Status</option>
                    <option value="active">Aktif</option>
                    <option value="pending">Menunggu Verifikasi</option>
                    <option value="suspended">Ditangguhkan</option>
                </select>
                <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                    <option value="">Semua Provinsi</option>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Banten">Banten</option>
                    <option value="Sumatera Utara">Sumatera Utara</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                </select>
            </div>
        </div>
    </div>
    
    <!-- Tabel Daftar Daycare -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-xl border border-slate-100 dark:border-slate-800 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-100 dark:border-slate-800">
                    <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                        <th class="px-5 py-3">ID</th>
                        <th class="px-5 py-3">Nama Daycare</th>
                        <th class="px-5 py-3">Kota / Provinsi</th>
                        <th class="px-5 py-3">Pengasuh</th>
                        <th class="px-5 py-3">Anak Asuh</th>
                        <th class="px-5 py-3">Skor Keamanan</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <!-- Daycare 1 - Aktif -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#DC001</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Little Stars Academy</p>
                            <p class="text-[11px] text-slate-400">Terdaftar: 15 Mar 2024</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Jakarta Selatan, DKI Jakarta</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">8 Orang</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">45 Anak</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-2">
                                <div class="w-16 bg-slate-100 dark:bg-slate-700 rounded-full h-1.5">
                                    <div class="bg-emerald-500 h-1.5 rounded-full" style="width: 98%"></div>
                                </div>
                                <span class="text-sm font-semibold text-emerald-600 dark:text-emerald-400">98.2</span>
                            </div>
                        </td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-400 rounded-full text-[11px] font-bold">Aktif</span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition" title="Detail">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 text-amber-500 hover:bg-amber-50 dark:hover:bg-amber-900/30 rounded-lg transition" title="Edit">
                                    <span class="material-symbols-outlined text-[18px]">edit</span>
                                </button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition" title="Hapus">
                                    <span class="material-symbols-outlined text-[18px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Daycare 2 - Aktif -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#DC002</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Bright Horizons Daycare</p>
                            <p class="text-[11px] text-slate-400">Terdaftar: 02 Feb 2024</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Bandung, Jawa Barat</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">6 Orang</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">32 Anak</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-2">
                                <div class="w-16 bg-slate-100 dark:bg-slate-700 rounded-full h-1.5">
                                    <div class="bg-emerald-500 h-1.5 rounded-full" style="width: 96%"></div>
                                </div>
                                <span class="text-sm font-semibold text-emerald-600 dark:text-emerald-400">96.5</span>
                            </div>
                        </td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-400 rounded-full text-[11px] font-bold">Aktif</span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-amber-500 hover:bg-amber-50 dark:hover:bg-amber-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Daycare 3 - Menunggu Verifikasi -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#DC003</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Sunshine Kids Center</p>
                            <p class="text-[11px] text-slate-400">Terdaftar: 25 Mei 2026</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Surabaya, Jawa Timur</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">4 Orang</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">28 Anak</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-2">
                                <div class="w-16 bg-slate-100 dark:bg-slate-700 rounded-full h-1.5">
                                    <div class="bg-amber-500 h-1.5 rounded-full" style="width: 72%"></div>
                                </div>
                                <span class="text-sm font-semibold text-amber-600 dark:text-amber-400">72.0</span>
                            </div>
                        </td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 rounded-full text-[11px] font-bold">Menunggu Verifikasi</span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">check_circle</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">cancel</span></button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Daycare 4 - Aktif -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#DC004</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Taman Bermain Ceria</p>
                            <p class="text-[11px] text-slate-400">Terdaftar: 10 Jan 2024</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Yogyakarta, DIY</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">5 Orang</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">38 Anak</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-2">
                                <div class="w-16 bg-slate-100 dark:bg-slate-700 rounded-full h-1.5">
                                    <div class="bg-emerald-500 h-1.5 rounded-full" style="width: 97%"></div>
                                </div>
                                <span class="text-sm font-semibold text-emerald-600 dark:text-emerald-400">97.2</span>
                            </div>
                        </td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-400 rounded-full text-[11px] font-bold">Aktif</span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-amber-500 hover:bg-amber-50 dark:hover:bg-amber-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Daycare 5 - Ditangguhkan -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#DC005</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Smart Kids Academy</p>
                            <p class="text-[11px] text-slate-400">Terdaftar: 20 Des 2024</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Medan, Sumatera Utara</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">3 Orang</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">22 Anak</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-2">
                                <div class="w-16 bg-slate-100 dark:bg-slate-700 rounded-full h-1.5">
                                    <div class="bg-red-500 h-1.5 rounded-full" style="width: 45%"></div>
                                </div>
                                <span class="text-sm font-semibold text-red-600 dark:text-red-400">45.0</span>
                            </div>
                        </td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-red-100 dark:bg-red-900/40 text-red-700 dark:text-red-400 rounded-full text-[11px] font-bold">Ditangguhkan</span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-amber-500 hover:bg-amber-50 dark:hover:bg-amber-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">restore</span></button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Daycare 6 - Aktif -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#DC006</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Pelangi Daycare</p>
                            <p class="text-[11px] text-slate-400">Terdaftar: 05 Mar 2025</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Makassar, Sulawesi Selatan</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">7 Orang</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">41 Anak</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-2">
                                <div class="w-16 bg-slate-100 dark:bg-slate-700 rounded-full h-1.5">
                                    <div class="bg-emerald-500 h-1.5 rounded-full" style="width: 94%"></div>
                                </div>
                                <span class="text-sm font-semibold text-emerald-600 dark:text-emerald-400">94.2</span>
                            </div>
                        </td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-400 rounded-full text-[11px] font-bold">Aktif</span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-amber-500 hover:bg-amber-50 dark:hover:bg-amber-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="flex justify-between items-center px-5 py-4 border-t border-slate-100 dark:border-slate-800">
            <p class="text-sm text-slate-500 dark:text-slate-400">Menampilkan 1-6 dari 42 data</p>
            <div class="flex gap-2">
                <button class="px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-lg text-sm text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition disabled:opacity-50" disabled>Sebelumnya</button>
                <button class="px-3 py-1.5 bg-primary text-white rounded-lg text-sm font-semibold hover:bg-primary/90 transition">1</button>
                <button class="px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-lg text-sm text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition">2</button>
                <button class="px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-lg text-sm text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition">3</button>
                <button class="px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-lg text-sm text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition">Selanjutnya</button>
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