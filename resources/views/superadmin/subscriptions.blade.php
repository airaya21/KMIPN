@extends('layouts.superadmin')

@section('title', 'Paket Langganan')

@section('content')
<div class="animate-fade-in-up">
    <!-- ==================== HEADER ==================== -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-6">
        <div>
            <div class="flex items-center gap-3 mb-1">
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Manajemen Paket Langganan</h1>
                <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-400 rounded-lg text-[10px] font-bold uppercase tracking-wider">SaaS Dashboard</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Pemantauan pelanggan, paket aktif, dan pendapatan layanan CERIA secara real-time.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[18px]">add</span>
                Tambah Paket
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">monetization_on</span>
                Kelola Harga
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Export Data
            </button>
        </div>
    </div>

    <!-- ==================== STATISTIK (4 Cards) ==================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[24px]">business</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">↑ +8%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Total Pelanggan</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">1.284</p>
            <p class="text-[11px] text-slate-400 mt-1">Daycare aktif</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 text-[24px]">check_circle</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">Aktif</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Paket Aktif</p>
            <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">1.176</p>
            <p class="text-[11px] text-slate-400 mt-1">91.6% dari total</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-[24px]">payments</span>
                </div>
                <span class="text-blue-600 text-xs font-semibold bg-blue-50 dark:bg-blue-900/30 px-2 py-1 rounded-full">Bulan Ini</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Pendapatan Bulan Ini</p>
            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">Rp 284.5J</p>
            <p class="text-[11px] text-slate-400 mt-1">↑ +12% dari bulan lalu</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400 text-[24px]">autorenew</span>
                </div>
                <span class="text-amber-600 text-xs font-semibold bg-amber-50 dark:bg-amber-900/30 px-2 py-1 rounded-full">Retensi</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Tingkat Perpanjangan</p>
            <p class="text-3xl font-bold text-amber-600 dark:text-amber-400">94<sup class="text-sm">%</sup></p>
            <p class="text-[11px] text-slate-400 mt-1">↑ +2% dari kuartal lalu</p>
        </div>
    </div>

    <!-- ==================== KARTU PAKET (3 Paket Premium) ==================== -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Paket Basic -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden hover:shadow-xl transition-all group">
            <div class="p-6 border-b border-slate-100 dark:border-slate-800 bg-gradient-to-br from-slate-50 to-white dark:from-slate-800/50 dark:to-transparent">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-bold text-slate-800 dark:text-white">Paket Basic</h3>
                        <p class="text-sm text-slate-500 mt-1">Untuk daycare skala kecil</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                        <span class="material-symbols-outlined text-slate-500">rocket_launch</span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-3xl font-black text-slate-800 dark:text-white">Rp499k</span>
                    <span class="text-sm text-slate-400">/bulan</span>
                </div>
                <button class="w-full py-2 border border-primary text-primary rounded-xl text-sm font-semibold hover:bg-primary/10 transition-all">Pilih Paket</button>
            </div>
            <div class="p-6 space-y-3">
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Monitoring Dasar</div>
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Maks 20 Anak</div>
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Laporan Standar</div>
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Email Support</div>
            </div>
            <div class="px-6 pb-6">
                <p class="text-xs text-slate-400">Populer untuk daycare dengan < 20 anak</p>
            </div>
        </div>

        <!-- Paket Professional (Recommended) -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border-2 border-primary shadow-xl relative overflow-hidden hover:shadow-2xl transition-all group">
            <div class="absolute top-0 right-0">
                <div class="bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl">Paling Populer</div>
            </div>
            <div class="p-6 border-b border-slate-100 dark:border-slate-800 bg-gradient-to-br from-primary/5 to-white dark:from-primary/10 dark:to-transparent">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-bold text-primary">Paket Professional</h3>
                        <p class="text-sm text-slate-500 mt-1">Untuk daycare skala menengah</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">stars</span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-3xl font-black text-primary">Rp999k</span>
                    <span class="text-sm text-slate-400">/bulan</span>
                </div>
                <button class="w-full py-2 bg-primary text-white rounded-xl text-sm font-semibold hover:bg-primary/90 transition-all shadow-sm">Pilih Paket</button>
            </div>
            <div class="p-6 space-y-3">
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> AI Monitoring</div>
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Laporan Lengkap</div>
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Notifikasi Real-time</div>
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Prioritas Support</div>
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Maks 50 Anak</div>
            </div>
            <div class="px-6 pb-6">
                <p class="text-xs text-primary">⭐ 68% pelanggan memilih paket ini</p>
            </div>
        </div>

        <!-- Paket Enterprise -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden hover:shadow-xl transition-all group">
            <div class="p-6 border-b border-slate-100 dark:border-slate-800 bg-gradient-to-br from-slate-50 to-white dark:from-slate-800/50 dark:to-transparent">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-bold text-slate-800 dark:text-white">Paket Enterprise</h3>
                        <p class="text-sm text-slate-500 mt-1">Untuk daycare skala besar</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-purple-500">diamond</span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-3xl font-black text-slate-800 dark:text-white">Rp2.49J</span>
                    <span class="text-sm text-slate-400">/bulan</span>
                </div>
                <button class="w-full py-2 border border-primary text-primary rounded-xl text-sm font-semibold hover:bg-primary/10 transition-all">Pilih Paket</button>
            </div>
            <div class="p-6 space-y-3">
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> AI Premium</div>
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Multi Cabang</div>
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Dukungan Prioritas 24/7</div>
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Unlimited Anak</div>
                <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> API Akses</div>
            </div>
            <div class="px-6 pb-6">
                <p class="text-xs text-slate-400">Untuk daycare dengan > 100 anak</p>
            </div>
        </div>
    </div>

    <!-- ==================== GRAFIK PENDAPATAN ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 mb-6">
        <div class="flex justify-between items-center mb-4 flex-wrap gap-3">
            <h4 class="font-bold text-slate-800 dark:text-white">📈 Pendapatan CERIA</h4>
            <div class="flex gap-2">
                <button class="px-3 py-1 text-xs font-semibold bg-primary/10 text-primary rounded-lg">Mingguan</button>
                <button class="px-3 py-1 text-xs font-semibold text-slate-500 hover:bg-slate-100 rounded-lg">Bulanan</button>
                <button class="px-3 py-1 text-xs font-semibold text-slate-500 hover:bg-slate-100 rounded-lg">Tahunan</button>
            </div>
        </div>
        <canvas id="revenueChart" class="w-full h-80"></canvas>
    </div>

    <!-- ==================== TABEL PELANGGAN ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden mb-6">
        <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800 flex justify-between items-center">
            <h4 class="font-bold text-slate-800 dark:text-white">📋 Daftar Pelanggan Aktif</h4>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
                <input type="text" placeholder="Cari daycare..." class="pl-10 pr-4 py-1.5 border border-slate-200 dark:border-slate-700 rounded-lg text-sm w-64">
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 dark:bg-slate-800/50">
                    <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                        <th class="px-5 py-3">Nama Daycare</th>
                        <th class="px-5 py-3">Paket</th>
                        <th class="px-5 py-3">Wilayah</th>
                        <th class="px-5 py-3">Tanggal Berlangganan</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3">Masa Berlaku</th>
                        <th class="px-5 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Little Stars Academy</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-primary/10 text-primary rounded-full">Professional</span></td>
                        <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Makassar</td>
                        <td class="px-5 py-3 text-sm text-slate-500">15 Mar 2026</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Aktif</span></td>
                        <td class="px-5 py-3 text-sm text-slate-500">14 Jun 2026</td>
                        <td class="px-5 py-3"><button class="text-primary text-xs font-semibold hover:underline">Detail</button></td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Pelangi Daycare Center</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-purple-100 text-purple-700 rounded-full">Enterprise</span></td>
                        <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Surabaya</td>
                        <td class="px-5 py-3 text-sm text-slate-500">10 Mar 2026</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Aktif</span></td>
                        <td class="px-5 py-3 text-sm text-slate-500">09 Jun 2026</td>
                        <td class="px-5 py-3"><button class="text-primary text-xs font-semibold hover:underline">Detail</button></td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Taman Anak Kita</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-primary/10 text-primary rounded-full">Professional</span></td>
                        <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Jakarta</td>
                        <td class="px-5 py-3 text-sm text-slate-500">05 Mar 2026</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-700 rounded-full">Hampir Berakhir</span></td>
                        <td class="px-5 py-3 text-sm text-slate-500">04 Jun 2026</td>
                        <td class="px-5 py-3"><button class="text-primary text-xs font-semibold hover:underline">Detail</button></td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Bright Horizons Daycare</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-slate-100 text-slate-600 rounded-full">Basic</span></td>
                        <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Bandung</td>
                        <td class="px-5 py-3 text-sm text-slate-500">20 Feb 2026</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Aktif</span></td>
                        <td class="px-5 py-3 text-sm text-slate-500">19 Mei 2026</td>
                        <td class="px-5 py-3"><button class="text-primary text-xs font-semibold hover:underline">Detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="px-5 py-3 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center">
            <p class="text-xs text-slate-500">Menampilkan 1-4 dari 1.284 pelanggan</p>
            <div class="flex gap-2">
                <button class="px-3 py-1.5 border rounded-lg text-sm disabled:opacity-50" disabled>Sebelumnya</button>
                <button class="px-3 py-1.5 bg-primary text-white rounded-lg text-sm">1</button>
                <button class="px-3 py-1.5 border rounded-lg text-sm">2</button>
                <button class="px-3 py-1.5 border rounded-lg text-sm">3</button>
                <button class="px-3 py-1.5 border rounded-lg text-sm">Selanjutnya</button>
            </div>
        </div>
    </div>

    <!-- ==================== CERIA BUSINESS INSIGHT ==================== -->
    <div class="bg-gradient-to-r from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-5 border border-primary/20">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[18px]">neurology</span>
                </div>
                <h4 class="font-bold text-slate-800 dark:text-white">CERIA Business Insight</h4>
            </div>
            <span class="text-xs text-primary font-semibold">AI Analytics</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">🏆 Paket Paling Populer</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">Professional</p>
                <p class="text-[10px] text-emerald-600 mt-1">68% pelanggan</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">📈 Pertumbuhan Pelanggan</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">+12.4%</p>
                <p class="text-[10px] text-emerald-600 mt-1">dalam 3 bulan</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">💰 Prediksi Pendapatan</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">Rp 1.2M</p>
                <p class="text-[10px] text-blue-600 mt-1">Bulan depan (+15%)</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">🎯 Rekomendasi Harga</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">Optimasi Enterprise</p>
                <p class="text-[10px] text-amber-600 mt-1">Potensi +8% ARPU</p>
            </div>
        </div>
        <div class="bg-primary/10 rounded-xl p-3">
            <p class="text-xs text-primary font-semibold mb-1">📊 Ringkasan Bisnis</p>
            <p class="text-sm text-slate-700 dark:text-slate-300">CERIA AI memproyeksikan pertumbuhan pendapatan sebesar <span class="font-bold text-primary">15%</span> pada bulan depan didorong oleh peningkatan adopsi paket Professional dan Enterprise. Wilayah dengan pertumbuhan tercepat: <span class="font-bold text-emerald-600">Jawa Timur (+18%)</span> dan <span class="font-bold text-emerald-600">Sulawesi Selatan (+14%)</span>. Rekomendasi: luncurkan promo tahunan untuk meningkatkan retensi.</p>
            <div class="flex justify-between items-center mt-2">
                <span class="text-[10px] text-slate-500">Updated: 5 menit lalu</span>
                <button class="text-primary text-xs font-semibold hover:underline">Lihat Laporan Lengkap →</button>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('revenueChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [
                    {
                        label: 'Pendapatan (Juta Rp)',
                        data: [185, 192, 210, 228, 245, 260, 275, 284, 295, 310, 325, 340],
                        borderColor: '#00658d',
                        backgroundColor: 'rgba(0, 101, 141, 0.05)',
                        borderWidth: 3,
                        pointRadius: 4,
                        pointBackgroundColor: '#00658d',
                        pointBorderColor: '#fff',
                        tension: 0.3,
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: { position: 'top', labels: { boxWidth: 12, font: { size: 11 } } },
                    tooltip: { callbacks: { label: (ctx) => `Rp ${ctx.raw} Juta` } }
                },
                scales: {
                    y: { title: { display: true, text: 'Pendapatan (Juta Rp)', font: { size: 11 } }, beginAtZero: false, min: 150 },
                    x: { title: { display: true, text: 'Periode 2026', font: { size: 11 } } }
                }
            }
        });
    });
</script>

<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up { animation: fadeInUp 0.5s ease-out; }
</style>
@endsection