@extends('layouts.superadmin')

@section('title', 'Admin Daycare')

@section('content')
<div class="animate-fade-in-up">
    <!-- ==================== HEADER ==================== -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-6">
        <div>
            <div class="flex items-center gap-3 mb-1">
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Manajemen Admin Daycare</h1>
                <span class="px-2 py-1 bg-primary/10 text-primary rounded-lg text-[10px] font-bold uppercase tracking-wider">Akses & Keamanan</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Pengelolaan akun administrator daycare yang mengoperasikan sistem CERIA.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[18px]">admin_panel_settings</span>
                Tambah Admin
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Export Data
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">security</span>
                Audit Akses
            </button>
        </div>
    </div>

    <!-- ==================== STATISTIK (4 Cards) ==================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[24px]">shield</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">↑ +4%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Total Admin</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">1.245</p>
            <p class="text-[11px] text-slate-400 mt-1">Seluruh Indonesia</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 text-[24px]">verified</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">Aktif</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Admin Aktif</p>
            <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">1.192</p>
            <p class="text-[11px] text-slate-400 mt-1">95.7% dari total</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-[24px]">login</span>
                </div>
                <span class="text-blue-600 text-xs font-semibold bg-blue-50 dark:bg-blue-900/30 px-2 py-1 rounded-full">Hari Ini</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Login Hari Ini</p>
            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">842</p>
            <p class="text-[11px] text-slate-400 mt-1">Aktivitas tinggi</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400 text-[24px]">pending</span>
                </div>
                <span class="text-amber-600 text-xs font-semibold bg-amber-50 dark:bg-amber-900/30 px-2 py-1 rounded-full">Perlu Tindakan</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Perlu Verifikasi</p>
            <p class="text-3xl font-bold text-amber-600 dark:text-amber-400">28</p>
            <p class="text-[11px] text-slate-400 mt-1">Menunggu approval</p>
        </div>
    </div>

    <!-- ==================== FILTER ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 p-5 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-3">
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
                <input type="text" placeholder="Cari nama admin..." class="w-full pl-10 pr-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
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
                <option value="inactive">Tidak Aktif</option>
                <option value="suspended">Ditangguhkan</option>
                <option value="pending">Menunggu Verifikasi</option>
            </select>
            <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                <option value="">Semua Role</option>
                <option value="head">Kepala Daycare</option>
                <option value="admin">Administrator</option>
                <option value="supervisor">Supervisor</option>
            </select>
        </div>
    </div>

    <!-- ==================== TABEL ADMIN + PANEL AUDIT ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Tabel Admin (2/3 lebar) -->
        <div class="lg:col-span-2 bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800">
                <h4 class="font-bold text-slate-800 dark:text-white">Daftar Admin Daycare</h4>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-slate-50 dark:bg-slate-800/50">
                        <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                            <th class="px-5 py-3">Foto</th>
                            <th class="px-5 py-3">Nama Admin</th>
                            <th class="px-5 py-3">Email</th>
                            <th class="px-5 py-3">Daycare</th>
                            <th class="px-5 py-3">Wilayah</th>
                            <th class="px-5 py-3">Role</th>
                            <th class="px-5 py-3">Status</th>
                            <th class="px-5 py-3">Login Terakhir</th>
                            <th class="px-5 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                            <td class="px-5 py-3">
                                <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary text-[18px]">admin_panel_settings</span>
                                </div>
                            </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Dr. Ahmad Fauzi</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">ahmad@littlestars.com</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Little Stars Academy</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Makassar</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-primary/10 text-primary rounded-full">Kepala Daycare</span></td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Aktif</span></td>
                            <td class="px-5 py-3 text-sm text-slate-500">1 jam lalu</td>
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
                                    <span class="material-symbols-outlined text-primary text-[18px]">admin_panel_settings</span>
                                </div>
                            </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Siti Rahmawati</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">siti@pelangi.com</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Pelangi Daycare</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Surabaya</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-blue-100 text-blue-700 rounded-full">Administrator</span></td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Aktif</span></td>
                            <td class="px-5 py-3 text-sm text-slate-500">3 jam lalu</td>
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
                                    <span class="material-symbols-outlined text-primary text-[18px]">admin_panel_settings</span>
                                </div>
                             </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Budi Santoso, S.Kom</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">budi@brighthorizons.com</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Bright Horizons</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Bandung</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-purple-100 text-purple-700 rounded-full">Supervisor</span></td>
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
                                    <span class="material-symbols-outlined text-primary text-[18px]">admin_panel_settings</span>
                                </div>
                             </td>
                            <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Dewi Kartika</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">dewi@tamananak.com</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Taman Anak Kita</td>
                            <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Jakarta</td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-700 rounded-full">Menunggu Verifikasi</span></td>
                            <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-700 rounded-full">Menunggu Verifikasi</span></td>
                            <td class="px-5 py-3 text-sm text-slate-500">Kemarin</td>
                            <td class="px-5 py-3">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-primary hover:bg-primary/10 rounded-lg"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-emerald-500 hover:bg-emerald-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">check_circle</span></button>
                                    <button class="p-1.5 text-red-500 hover:bg-red-50 rounded-lg"><span class="material-symbols-outlined text-[18px]">cancel</span></button>
                                </div>
                             </td>
                         </tr>
                    </tbody>
                 </table>
            </div>
            <div class="px-5 py-3 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center">
                <p class="text-xs text-slate-500">Menampilkan 1-4 dari 1.245 admin</p>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 border rounded-lg text-sm disabled:opacity-50" disabled>Sebelumnya</button>
                    <button class="px-3 py-1.5 bg-primary text-white rounded-lg text-sm">1</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">2</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">3</button>
                    <button class="px-3 py-1.5 border rounded-lg text-sm">Selanjutnya</button>
                </div>
            </div>
        </div>

        <!-- Panel Audit Akses (1/3 lebar) -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="px-4 py-3 border-b border-slate-100 dark:border-slate-800 bg-gradient-to-r from-primary/5 to-transparent">
                <h4 class="font-bold text-slate-800 dark:text-white flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">history</span>
                    Audit Akses Terbaru
                </h4>
            </div>
            <div class="divide-y divide-slate-100 dark:divide-slate-800 max-h-96 overflow-y-auto">
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-[16px]">login</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-800 dark:text-white">Login - Ahmad Fauzi</p>
                            <p class="text-xs text-slate-500">Little Stars Academy, Makassar</p>
                            <p class="text-[10px] text-slate-400 mt-1">1 jam yang lalu • IP 180.244.x.x</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                            <span class="material-symbols-outlined text-amber-600 text-[16px]">edit</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-800 dark:text-white">Perubahan Data - Siti Rahmawati</p>
                            <p class="text-xs text-slate-500">Mengubah jadwal operasional daycare</p>
                            <p class="text-[10px] text-slate-400 mt-1">3 jam yang lalu</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center">
                            <span class="material-symbols-outlined text-emerald-600 text-[16px]">verified</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-800 dark:text-white">Verifikasi - Budi Santoso</p>
                            <p class="text-xs text-slate-500">Menyetujui laporan aktivitas</p>
                            <p class="text-[10px] text-slate-400 mt-1">5 jam yang lalu</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                            <span class="material-symbols-outlined text-red-600 text-[16px]">warning</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-800 dark:text-white">Percobaan Login Gagal</p>
                            <p class="text-xs text-slate-500">3x percobaan - Taman Anak Kita</p>
                            <p class="text-[10px] text-slate-400 mt-1">12 jam yang lalu • IP tidak dikenal</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-[16px]">assignment</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-800 dark:text-white">Laporan Baru Dibuat</p>
                            <p class="text-xs text-slate-500">Laporan keamanan bulanan</p>
                            <p class="text-[10px] text-slate-400 mt-1">Kemarin, 14:30</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 border-t border-slate-100 dark:border-slate-800">
                <button class="w-full py-2 text-center text-sm font-semibold text-primary hover:bg-primary/10 rounded-lg transition">Lihat Semua Aktivitas →</button>
            </div>
        </div>
    </div>

    <!-- ==================== TOP ADMIN + CERIA AI SECURITY INSIGHT ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Top Admin Daycare -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between items-center mb-4">
                <h4 class="font-bold text-slate-800 dark:text-white">🏆 Top Admin Daycare</h4>
                <span class="text-xs text-primary font-semibold">Berdasarkan Skor Manajemen</span>
            </div>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Dr. Ahmad Fauzi</p>
                            <p class="text-xs text-slate-500">Little Stars Academy</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-primary">98.5</p>
                        <p class="text-[10px] text-slate-400">Skor Manajemen</p>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Siti Rahmawati</p>
                            <p class="text-xs text-slate-500">Pelangi Daycare</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-primary">96.2</p>
                        <p class="text-[10px] text-slate-400">Skor Manajemen</p>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Budi Santoso, S.Kom</p>
                            <p class="text-xs text-slate-500">Bright Horizons</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-primary">94.8</p>
                        <p class="text-[10px] text-slate-400">Skor Manajemen</p>
                    </div>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 dark:border-slate-700">
                <div class="flex justify-between text-xs text-slate-500">
                    <span>Aktivitas Sistem: 1.248x</span>
                    <span>Respon Cepat: 96%</span>
                </div>
            </div>
        </div>

        <!-- CERIA AI Security Insight -->
        <div class="bg-gradient-to-r from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-5 border border-primary/20">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-[18px]">neurology</span>
                    </div>
                    <h4 class="font-bold text-slate-800 dark:text-white">CERIA AI Security Insight</h4>
                </div>
                <span class="text-xs text-primary font-semibold">Real-time Protection</span>
            </div>
            <div class="grid grid-cols-2 gap-3 mb-4">
                <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                    <p class="text-2xl font-bold text-red-600">3</p>
                    <p class="text-[10px] text-slate-500">Akun Aktivitas Tidak Biasa</p>
                </div>
                <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                    <p class="text-2xl font-bold text-amber-600">12</p>
                    <p class="text-[10px] text-slate-500">Login dari Lokasi Baru</p>
                </div>
                <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                    <p class="text-2xl font-bold text-emerald-600">98.7<sup class="text-sm">%</sup></p>
                    <p class="text-[10px] text-slate-500">Tingkat Keamanan Nasional</p>
                </div>
                <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3 text-center">
                    <p class="text-2xl font-bold text-blue-600">2</p>
                    <p class="text-[10px] text-slate-500">Risiko Keamanan Akun</p>
                </div>
            </div>
            <div class="bg-primary/10 rounded-xl p-3">
                <p class="text-xs text-primary font-semibold mb-1">🛡️ Rekomendasi Keamanan</p>
                <p class="text-sm text-slate-700 dark:text-slate-300">CERIA AI mendeteksi peningkatan percobaan login dari wilayah baru. Rekomendasikan aktivasi 2FA untuk akun-akun dengan risiko tinggi.</p>
                <div class="flex justify-between items-center mt-2">
                    <span class="text-[10px] text-slate-500">Updated: 5 menit lalu</span>
                    <button class="text-primary text-xs font-semibold hover:underline">Tinjau Detail →</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== FLOATING SECURITY BAR ==================== -->
    <div class="fixed bottom-6 right-6 z-40">
        <div class="bg-primary/95 backdrop-blur-md text-white rounded-full px-5 py-2.5 shadow-lg flex items-center gap-3">
            <span class="w-2.5 h-2.5 bg-emerald-400 rounded-full animate-pulse"></span>
            <span class="text-sm font-semibold">🛡️ CERIA Security System aktif • 1.245 akun admin terlindungi</span>
            <button class="text-xs text-white/80 hover:text-white transition flex items-center gap-1">
                Detail Keamanan <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
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