@extends('layouts.superadmin')

@section('title', 'Orang Tua')

@section('content')
<div class="animate-fade-in-up">
    <!-- ==================== HEADER ==================== -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-6">
        <div>
            <div class="flex items-center gap-3 mb-1">
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Manajemen Orang Tua Nasional</h1>
                <span class="px-2 py-1 bg-primary/10 text-primary rounded-lg text-[10px] font-bold uppercase tracking-wider">Data Real-time</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Pemantauan dan pengelolaan seluruh akun orang tua yang terhubung dengan daycare di Indonesia.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[18px]">person_add</span>
                Tambah Orang Tua
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Export Data
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">description</span>
                Unduh Laporan
            </button>
        </div>
    </div>

    <!-- ==================== STATISTIK (4 Cards) ==================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[24px]">people</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">↑ +8%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Total Orang Tua</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">18.452</p>
            <p class="text-[11px] text-slate-400 mt-1">Seluruh Indonesia</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 text-[24px]">verified</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">Aktif</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Akun Aktif</p>
            <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">17.980</p>
            <p class="text-[11px] text-slate-400 mt-1">97.4% dari total</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400 text-[24px]">pending</span>
                </div>
                <span class="text-amber-600 text-xs font-semibold bg-amber-50 dark:bg-amber-900/30 px-2 py-1 rounded-full">Perlu Tindakan</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Perlu Verifikasi</p>
            <p class="text-3xl font-bold text-amber-600 dark:text-amber-400">124</p>
            <p class="text-[11px] text-slate-400 mt-1">Menunggu approval</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-[24px]">trending_up</span>
                </div>
                <span class="text-blue-600 text-xs font-semibold bg-blue-50 dark:bg-blue-900/30 px-2 py-1 rounded-full">↑ +12%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Pengguna Baru Bulan Ini</p>
            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">+842</p>
            <p class="text-[11px] text-slate-400 mt-1">Pertumbuhan signifikan</p>
        </div>
    </div>

    <!-- ==================== FILTER ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 p-5 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-3">
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
                <input type="text" placeholder="Cari nama..." class="w-full pl-10 pr-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
            </div>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">email</span>
                <input type="text" placeholder="Cari email..." class="w-full pl-10 pr-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
            </div>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">call</span>
                <input type="text" placeholder="Cari nomor telepon..." class="w-full pl-10 pr-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
            </div>
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Wilayah</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="Banten">Banten</option>
                <option value="Sumatera Utara">Sumatera Utara</option>
                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
            </select>
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Status</option>
                <option value="active">Aktif</option>
                <option value="inactive">Tidak Aktif</option>
                <option value="pending">Menunggu Verifikasi</option>
                <option value="suspended">Ditangguhkan</option>
            </select>
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Daycare</option>
                <option value="Little Stars Academy">Little Stars Academy</option>
                <option value="Pelangi Daycare">Pelangi Daycare</option>
                <option value="Bright Horizons">Bright Horizons</option>
                <option value="Taman Anak Kita">Taman Anak Kita</option>
            </select>
        </div>
    </div>

    <!-- ==================== TABEL + ACTIVITY SIDEBAR ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Tabel Data Orang Tua (2/3 lebar) -->
        <div class="lg:col-span-2 bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800">
                <h4 class="font-bold text-slate-800 dark:text-white">Daftar Orang Tua</h4>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-slate-50 dark:bg-slate-800/50">
                        <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                            <th class="px-5 py-3">Foto</th>
                            <th class="px-5 py-3">Nama Orang Tua</th>
                            <th class="px-5 py-3">Email</th>
                            <th class="px-5 py-3">Nomor Telepon</th>
                            <th class="px-5 py-3">Jumlah Anak</th>
                            <th class="px-5 py-3">Daycare</th>
                            <th class="px-5 py-3">Wilayah</th>
                            <th class="px-5 py-3">Status</th>
                            <th class="px-5 py-3">Terakhir Aktif</th>
                            <th class="px-5 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3">
                                <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary text-[18px]">person</span>
                                </div>
                            </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Budi Santoso</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">budi@email.com</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">0812-3456-7890</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">2</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Little Stars Academy</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Makassar</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Aktif</span></td>
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
                                    <span class="material-symbols-outlined text-primary text-[18px]">person</span>
                                </div>
                             </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Siti Aminah</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">siti@email.com</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">0813-5678-9012</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">1</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Pelangi Daycare</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Surabaya</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Aktif</span></td>
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
                                    <span class="material-symbols-outlined text-primary text-[18px]">person</span>
                                </div>
                             </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Dewi Kartika</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">dewi@email.com</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">0814-6789-0123</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">3</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Bright Horizons</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Bandung</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-700 rounded-full">Menunggu Verifikasi</span></td>
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
                                    <span class="material-symbols-outlined text-primary text-[18px]">person</span>
                                </div>
                             </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Andi Wijaya</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">andi@email.com</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">0815-7890-1234</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">2</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Taman Anak Kita</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Jakarta</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 text-red-700 rounded-full">Ditangguhkan</span></td>
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
                <p class="text-xs text-slate-500">Menampilkan 1-4 dari 18.452 orang tua</p>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 border rounded-lg text-sm disabled:opacity-50" disabled>Sebelumnya</button>
                    <button class="px-3 py-1.5 bg-primary text-white rounded-lg text-sm">1</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">2</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">3</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">Selanjutnya</button>
                </div>
            </div>
        </div>

        <!-- Aktivitas Terbaru (Panel Samping) -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="px-4 py-3 border-b border-slate-100 dark:border-slate-800">
                <h4 class="font-bold text-slate-800 dark:text-white">Aktivitas Terbaru</h4>
            </div>
            <div class="divide-y divide-slate-100 dark:divide-slate-800">
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition flex gap-3">
                    <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-[18px]">login</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Login Terakhir</p>
                        <p class="text-xs text-slate-500">Budi Santoso - Little Stars Academy</p>
                        <p class="text-[10px] text-slate-400 mt-1">2 jam yang lalu</p>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition flex gap-3">
                    <div class="w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-emerald-600 text-[18px]">person_add</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Registrasi Baru</p>
                        <p class="text-xs text-slate-500">Siti Rahma - Pelangi Daycare</p>
                        <p class="text-[10px] text-slate-400 mt-1">5 jam yang lalu</p>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition flex gap-3">
                    <div class="w-10 h-10 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-amber-600 text-[18px]">edit</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Perubahan Data Akun</p>
                        <p class="text-xs text-slate-500">Dewi Kartika - Bright Horizons</p>
                        <p class="text-[10px] text-slate-400 mt-1">Kemarin, 14:30</p>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition flex gap-3">
                    <div class="w-10 h-10 rounded-lg bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-red-600 text-[18px]">report</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-800 dark:text-white">Pengajuan Pengaduan</p>
                        <p class="text-xs text-slate-500">Andi Wijaya - Taman Anak Kita</p>
                        <p class="text-[10px] text-slate-400 mt-1">Kemarin, 09:15</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== CERIA AI INSIGHT ==================== -->
    <div class="bg-gradient-to-r from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-5 border border-primary/20">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[18px]">neurology</span>
                </div>
                <h4 class="font-bold text-slate-800 dark:text-white">CERIA AI Insight - Analisis Pengguna</h4>
            </div>
            <span class="text-xs text-primary font-semibold">Update real-time</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-primary text-[20px]">stars</span>
                </div>
                <p class="text-sm font-bold text-slate-800 dark:text-white">Budi Santoso</p>
                <p class="text-[10px] text-slate-500">Orang Tua Paling Aktif</p>
                <p class="text-xs font-semibold text-primary mt-1">248 interaksi</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-emerald-600 text-[20px]">trending_up</span>
                </div>
                <p class="text-sm font-bold text-slate-800 dark:text-white">Jawa Timur</p>
                <p class="text-[10px] text-slate-500">Pertumbuhan Tertinggi</p>
                <p class="text-xs font-semibold text-emerald-600 mt-1">↑ +18%</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-blue-600 text-[20px]">engagement</span>
                </div>
                <p class="text-sm font-bold text-slate-800 dark:text-white">87.5%</p>
                <p class="text-[10px] text-slate-500">Tingkat Keterlibatan</p>
                <p class="text-xs font-semibold text-blue-600 mt-1">Aktif menggunakan app</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-amber-600 text-[20px]">analytics</span>
                </div>
                <p class="text-sm font-bold text-slate-800 dark:text-white">+12.5%</p>
                <p class="text-[10px] text-slate-500">Tren Penggunaan Aplikasi</p>
                <p class="text-xs font-semibold text-amber-600 mt-1">vs bulan lalu</p>
            </div>
        </div>
        <div class="mt-4 p-3 bg-primary/10 rounded-xl">
            <p class="text-xs text-primary font-semibold mb-1">📊 Insights Tambahan</p>
            <p class="text-sm text-slate-700 dark:text-slate-300">CERIA AI mendeteksi peningkatan signifikan registrasi orang tua di wilayah <span class="font-bold text-primary">Jawa Timur dan Sulawesi Selatan</span> dalam 7 hari terakhir (+23%). Tingkat verifikasi akun meningkat 15% setelah implementasi notifikasi otomatis.</p>
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