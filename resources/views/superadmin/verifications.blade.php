@extends('layouts.superadmin')

@section('title', 'Verifikasi Daycare')

@section('content')
<div class="animate-fade-in-up">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-6">
        <div>
            <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Verifikasi Daycare</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Tinjau dan verifikasi daycare baru yang mendaftar di sistem CERIA.</p>
        </div>
        <div class="flex gap-3">
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">refresh</span>
                Refresh
            </button>
        </div>
    </div>
    
    <!-- Statistik Verifikasi -->
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Menunggu Verifikasi</p>
                    <p class="text-2xl font-bold text-amber-600 dark:text-amber-400">4</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400">pending</span>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Terverifikasi</p>
                    <p class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">36</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400">verified</span>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Ditolak</p>
                    <p class="text-2xl font-bold text-red-600 dark:text-red-400">2</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-600 dark:text-red-400">cancel</span>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Verifikasi Bulan Ini</p>
                    <p class="text-2xl font-bold text-slate-800 dark:text-white">8</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                    <span class="material-symbols-outlined text-slate-500 dark:text-slate-400">calendar_month</span>
                </div>
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
                    <option value="pending">Menunggu Verifikasi</option>
                    <option value="approved">Terverifikasi</option>
                    <option value="rejected">Ditolak</option>
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
    
    <!-- Tabel Daftar Verifikasi -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-xl border border-slate-100 dark:border-slate-800 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-100 dark:border-slate-800">
                    <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                        <th class="px-5 py-3">ID Pengajuan</th>
                        <th class="px-5 py-3">Nama Daycare</th>
                        <th class="px-5 py-3">Pemilik</th>
                        <th class="px-5 py-3">Lokasi</th>
                        <th class="px-5 py-3">Tanggal Daftar</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <!-- Pengajuan 1 - Menunggu Verifikasi -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#REQ001</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Sunshine Kids Center</p>
                            <p class="text-[11px] text-slate-400">Email: info@sunshinekids.com</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Budi Santoso</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Surabaya, Jawa Timur</td>
                        <td class="px-5 py-4 text-sm text-slate-500">25 Mei 2026</td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 rounded-full text-[11px] font-bold flex items-center gap-1 w-fit">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                Menunggu Verifikasi
                            </span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition" title="Detail">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 rounded-lg transition" title="Terima">
                                    <span class="material-symbols-outlined text-[18px]">check_circle</span>
                                </button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition" title="Tolak">
                                    <span class="material-symbols-outlined text-[18px]">cancel</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Pengajuan 2 - Menunggu Verifikasi -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#REQ002</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Ceria Daycare & Preschool</p>
                            <p class="text-[11px] text-slate-400">Email: ceria@daycare.com</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Siti Aminah</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Bandung, Jawa Barat</td>
                        <td class="px-5 py-4 text-sm text-slate-500">28 Mei 2026</td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 rounded-full text-[11px] font-bold flex items-center gap-1 w-fit">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                Menunggu Verifikasi
                            </span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">check_circle</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">cancel</span></button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Pengajuan 3 - Menunggu Verifikasi (Prioritas) -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition bg-amber-50/30 dark:bg-amber-900/10">
                        <td class="px-5 py-4 text-sm text-slate-500">#REQ003</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Pelangi Daycare Center</p>
                            <p class="text-[11px] text-slate-400">Email: pelangi@daycare.com</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Dewi Kartika</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Makassar, Sulawesi Selatan</td>
                        <td class="px-5 py-4 text-sm text-slate-500">30 Mei 2026</td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 rounded-full text-[11px] font-bold flex items-center gap-1 w-fit">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-ping"></span>
                                Menunggu Verifikasi
                            </span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">check_circle</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">cancel</span></button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Pengajuan 4 - Menunggu Verifikasi -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-4 text-sm text-slate-500">#REQ004</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Bintang Kecil Daycare</p>
                            <p class="text-[11px] text-slate-400">Email: bintang@daycare.com</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Andi Wijaya</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Yogyakarta, DIY</td>
                        <td class="px-5 py-4 text-sm text-slate-500">29 Mei 2026</td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 rounded-full text-[11px] font-bold flex items-center gap-1 w-fit">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                Menunggu Verifikasi
                            </span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">check_circle</span></button>
                                <button class="p-1.5 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">cancel</span></button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Riwayat Verifikasi - Sudah Diverifikasi -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition opacity-70">
                        <td class="px-5 py-4 text-sm text-slate-500">#REQ005</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Mutiara Hati Daycare</p>
                            <p class="text-[11px] text-slate-400">Email: mutiara@daycare.com</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Ratna Sari</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Tangerang, Banten</td>
                        <td class="px-5 py-4 text-sm text-slate-500">20 Mei 2026</td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-400 rounded-full text-[11px] font-bold">Terverifikasi</span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                            </div>
                        </td>
                     </tr>
                    
                    <!-- Riwayat Verifikasi - Ditolak -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition opacity-70">
                        <td class="px-5 py-4 text-sm text-slate-500">#REQ006</td>
                        <td class="px-5 py-4">
                            <p class="font-semibold text-slate-800 dark:text-white">Cahaya Ananda Daycare</p>
                            <p class="text-[11px] text-slate-400">Email: cahaya@ananda.com</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Hendra Gunawan</td>
                        <td class="px-5 py-4 text-sm text-slate-600 dark:text-slate-300">Medan, Sumatera Utara</td>
                        <td class="px-5 py-4 text-sm text-slate-500">15 Mei 2026</td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-1 bg-red-100 dark:bg-red-900/40 text-red-700 dark:text-red-400 rounded-full text-[11px] font-bold">Ditolak</span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex gap-2">
                                <button class="p-1.5 text-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
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