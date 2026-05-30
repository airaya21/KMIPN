@extends('layouts.superadmin')

@section('title', 'Analisis Peringatan')

@section('content')
<div class="animate-fade-in-up">
    <!-- ==================== HEADER ==================== -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-6">
        <div>
            <div class="flex items-center gap-3 mb-1">
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Analisis Tren Peringatan</h1>
                <span class="px-2 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 rounded-lg text-[10px] font-bold uppercase tracking-wider">Real-time Analytics</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Pemantauan pola insiden dan peringatan keamanan berdasarkan data nasional dari seluruh daycare Indonesia.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">analytics</span>
                Export Analisis
            </button>
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Download CSV
            </button>
        </div>
    </div>

    <!-- ==================== STATISTIK (4 Cards) ==================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[24px]">notifications</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">↑ +8%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Total Peringatan</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">18.420</p>
            <p class="text-[11px] text-slate-400 mt-1">30 hari terakhir</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-red-50 dark:bg-red-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-600 dark:text-red-400 text-[24px]">today</span>
                </div>
                <span class="text-red-600 text-xs font-semibold bg-red-50 dark:bg-red-900/30 px-2 py-1 rounded-full">Hari Ini</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Hari Ini</p>
            <p class="text-3xl font-bold text-red-600 dark:text-red-400">124</p>
            <p class="text-[11px] text-slate-400 mt-1">±12 per jam</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400 text-[24px]">date_range</span>
                </div>
                <span class="text-amber-600 text-xs font-semibold bg-amber-50 dark:bg-amber-900/30 px-2 py-1 rounded-full">Minggu Ini</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Minggu Ini</p>
            <p class="text-3xl font-bold text-amber-600 dark:text-amber-400">1.048</p>
            <p class="text-[11px] text-slate-400 mt-1">↑ +12% dari minggu lalu</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-[24px]">calendar_month</span>
                </div>
                <span class="text-blue-600 text-xs font-semibold bg-blue-50 dark:bg-blue-900/30 px-2 py-1 rounded-full">Bulan Ini</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Bulan Ini</p>
            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">4.231</p>
            <p class="text-[11px] text-slate-400 mt-1">Proyeksi: 5.200</p>
        </div>
    </div>

    <!-- ==================== GRAFIK UTAMA (Area Chart) ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 mb-6">
        <div class="flex justify-between items-center mb-4 flex-wrap gap-3">
            <h4 class="font-bold text-slate-800 dark:text-white">Tren Peringatan Nasional</h4>
            <div class="flex gap-2">
                <button class="px-3 py-1 text-xs font-semibold bg-primary/10 text-primary rounded-lg">Harian</button>
                <button class="px-3 py-1 text-xs font-semibold text-slate-500 hover:bg-slate-100 rounded-lg">Mingguan</button>
                <button class="px-3 py-1 text-xs font-semibold text-slate-500 hover:bg-slate-100 rounded-lg">Bulanan</button>
            </div>
        </div>
        <!-- Area Chart Container -->
        <canvas id="alertTrendChart" class="w-full h-80"></canvas>
        <div class="mt-4 flex flex-wrap justify-center gap-4 text-xs">
            <span class="flex items-center gap-1"><span class="w-3 h-3 bg-red-500 rounded-full"></span> Jatuh</span>
            <span class="flex items-center gap-1"><span class="w-3 h-3 bg-amber-500 rounded-full"></span> Menangis Berlebihan</span>
            <span class="flex items-center gap-1"><span class="w-3 h-3 bg-purple-500 rounded-full"></span> Area Terlarang</span>
            <span class="flex items-center gap-1"><span class="w-3 h-3 bg-orange-500 rounded-full"></span> Konflik Anak</span>
            <span class="flex items-center gap-1"><span class="w-3 h-3 bg-emerald-500 rounded-full"></span> Darurat Medis</span>
        </div>
    </div>

    <!-- ==================== HEATMAP WILAYAH + TOP INSIDEN ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Heatmap Wilayah (Placeholder) -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white mb-4">🔥 Heatmap Wilayah Insiden Tertinggi</h4>
            <div class="bg-slate-100 dark:bg-slate-800 rounded-xl h-64 relative flex items-center justify-center border border-slate-200 dark:border-slate-700">
                <div class="relative w-full h-full">
                    <!-- Hotspot dengan intensitas berbeda -->
                    <div class="absolute top-1/4 left-1/3">
                        <div class="relative w-12 h-12 bg-red-500/30 rounded-full animate-pulse">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-red-500 rounded-full"></div>
                        </div>
                        <p class="text-[10px] font-semibold text-red-600 mt-1">Jakarta</p>
                    </div>
                    <div class="absolute top-1/2 left-1/2">
                        <div class="relative w-10 h-10 bg-amber-500/30 rounded-full animate-pulse">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-amber-500 rounded-full"></div>
                        </div>
                        <p class="text-[10px] font-semibold text-amber-600 mt-1">Surabaya</p>
                    </div>
                    <div class="absolute top-2/3 left-2/3">
                        <div class="relative w-8 h-8 bg-orange-500/30 rounded-full animate-pulse">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-orange-500 rounded-full"></div>
                        </div>
                        <p class="text-[10px] font-semibold text-orange-600 mt-1">Bandung</p>
                    </div>
                    <div class="absolute top-3/4 right-1/4">
                        <div class="relative w-14 h-14 bg-red-500/40 rounded-full animate-pulse">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-5 h-5 bg-red-500 rounded-full"></div>
                        </div>
                        <p class="text-[10px] font-semibold text-red-600 mt-1">Makassar</p>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <span class="material-symbols-outlined text-5xl text-slate-300 dark:text-slate-600">map</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-center gap-4 mt-3 text-xs">
                <span class="flex items-center gap-1"><span class="w-2 h-2 bg-red-500 rounded-full"></span> Tinggi (>200)</span>
                <span class="flex items-center gap-1"><span class="w-2 h-2 bg-amber-500 rounded-full"></span> Sedang (100-200)</span>
                <span class="flex items-center gap-1"><span class="w-2 h-2 bg-orange-500 rounded-full"></span> Rendah (<100)</span>
            </div>
        </div>

        <!-- Top Insiden (Tabel) -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white mb-4">Top Kategori Insiden</h4>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-red-500 text-[16px]">falling</span>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Jatuh</p>
                            <p class="text-[10px] text-slate-400">Insiden fisik</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-red-600">4.872</p>
                        <div class="flex items-center gap-1">
                            <span class="text-[10px] text-emerald-600">↑ +12%</span>
                            <span class="text-[10px] text-slate-400">(26.4%)</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-amber-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-amber-500 text-[16px]">sentiment_dissatisfied</span>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Menangis Berlebihan</p>
                            <p class="text-[10px] text-slate-400">Emosional</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-amber-600">4.105</p>
                        <div class="flex items-center gap-1">
                            <span class="text-[10px] text-emerald-600">↑ +5%</span>
                            <span class="text-[10px] text-slate-400">(22.3%)</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-purple-500 text-[16px]">block</span>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Area Terlarang</p>
                            <p class="text-[10px] text-slate-400">Pelanggaran zona</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-purple-600">3.241</p>
                        <div class="flex items-center gap-1">
                            <span class="text-[10px] text-red-600">↓ -2%</span>
                            <span class="text-[10px] text-slate-400">(17.6%)</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-orange-500 text-[16px]">sports_mma</span>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Konflik Anak</p>
                            <p class="text-[10px] text-slate-400">Interaksi negatif</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-orange-600">2.894</p>
                        <div class="flex items-center gap-1">
                            <span class="text-[10px] text-emerald-600">↑ +8%</span>
                            <span class="text-[10px] text-slate-400">(15.7%)</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-emerald-500 text-[16px]">medical_services</span>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Darurat Medis</p>
                            <p class="text-[10px] text-slate-400">Kesehatan</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-emerald-600">1.248</p>
                        <div class="flex items-center gap-1">
                            <span class="text-[10px] text-red-600">↓ -1%</span>
                            <span class="text-[10px] text-slate-400">(6.8%)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== DAYCARE DENGAN INSIDEN TERBANYAK ==================== -->
    <div class="bg-white dark:bg-[#1a1d20] rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden mb-6">
        <div class="px-5 py-4 border-b border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white">🏢 Daycare dengan Insiden Terbanyak</h4>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 dark:bg-slate-800/50">
                    <tr class="text-left text-xs font-semibold text-slate-500 dark:text-slate-400">
                        <th class="px-5 py-3">Nama Daycare</th>
                        <th class="px-5 py-3">Wilayah</th>
                        <th class="px-5 py-3">Jumlah Peringatan</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Little Stars Academy</td>
                        <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Makassar, Sulawesi Selatan</td>
                        <td class="px-5 py-3 text-sm font-bold text-red-600">247</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-red-100 text-red-700 rounded-full">Perhatian Khusus</span></td>
                        <td class="px-5 py-3"><button class="text-primary text-xs font-semibold hover:underline">Analisis →</button></td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Pelangi Daycare Center</td>
                        <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Surabaya, Jawa Timur</td>
                        <td class="px-5 py-3 text-sm font-bold text-amber-600">189</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-700 rounded-full">Monitoring</span></td>
                        <td class="px-5 py-3"><button class="text-primary text-xs font-semibold hover:underline">Analisis →</button></td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Taman Anak Kita</td>
                        <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Jakarta Selatan, DKI Jakarta</td>
                        <td class="px-5 py-3 text-sm font-bold text-amber-600">156</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-amber-100 text-amber-700 rounded-full">Monitoring</span></td>
                        <td class="px-5 py-3"><button class="text-primary text-xs font-semibold hover:underline">Analisis →</button></td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition">
                        <td class="px-5 py-3 font-medium text-slate-800 dark:text-white">Bright Horizons Daycare</td>
                        <td class="px-5 py-3 text-sm text-slate-600 dark:text-slate-300">Bandung, Jawa Barat</td>
                        <td class="px-5 py-3 text-sm font-bold text-emerald-600">98</td>
                        <td class="px-5 py-3"><span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full">Normal</span></td>
                        <td class="px-5 py-3"><button class="text-primary text-xs font-semibold hover:underline">Analisis →</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ==================== CERIA AI ANALYTICS ==================== -->
    <div class="bg-gradient-to-r from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-5 border border-primary/20">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[18px]">neurology</span>
                </div>
                <h4 class="font-bold text-slate-800 dark:text-white">CERIA AI Analytics - Prediksi & Rekomendasi</h4>
            </div>
            <span class="text-xs text-primary font-semibold">AI Predictive Analysis</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">📊 Pola Insiden Paling Dominan</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">Insiden Jatuh</p>
                <p class="text-[10px] text-red-600 mt-1">Meningkat 12% sebulan</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">📍 Wilayah Paling Berisiko</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">Sulawesi Selatan</p>
                <p class="text-[10px] text-red-600 mt-1">Insiden 2x lipat rata-rata</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">📈 Prediksi Peningkatan Insiden</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">+8.5% bulan depan</p>
                <p class="text-[10px] text-amber-600 mt-1">Fokus area bermain</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">🛡️ Rekomendasi Pencegahan</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">Inspeksi rutin + training</p>
                <p class="text-[10px] text-emerald-600 mt-1">Target turun 15%</p>
            </div>
        </div>
        <div class="bg-primary/10 rounded-xl p-3">
            <p class="text-xs text-primary font-semibold mb-1">📋 Ringkasan Analisis AI</p>
            <p class="text-sm text-slate-700 dark:text-slate-300">CERIA AI mendeteksi peningkatan signifikan insiden <span class="font-bold text-red-600">jatuh dan konflik anak</span> di wilayah Sulawesi Selatan dan Jawa Timur dalam 30 hari terakhir. Rekomendasi peningkatan pengawasan area bermain dan pelatihan pengasuh untuk menurunkan risiko.</p>
            <div class="flex justify-between items-center mt-2">
                <span class="text-[10px] text-slate-500">Updated: 5 menit lalu</span>
                <button class="text-primary text-xs font-semibold hover:underline">Lihat Analisis Lengkap →</button>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('alertTrendChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['1 Apr', '5 Apr', '9 Apr', '13 Apr', '17 Apr', '21 Apr', '25 Apr', '29 Apr', '3 Mei', '7 Mei', '11 Mei', '15 Mei', '19 Mei', '23 Mei', '27 Mei', '30 Mei'],
                datasets: [
                    {
                        label: 'Jatuh',
                        data: [28, 32, 35, 38, 42, 45, 48, 52, 55, 58, 62, 65, 68, 72, 75, 78],
                        borderColor: '#ef4444',
                        backgroundColor: 'rgba(239, 68, 68, 0.05)',
                        borderWidth: 2,
                        pointRadius: 2,
                        pointBackgroundColor: '#ef4444',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Menangis Berlebihan',
                        data: [32, 34, 36, 35, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 60],
                        borderColor: '#f59e0b',
                        backgroundColor: 'rgba(245, 158, 11, 0.05)',
                        borderWidth: 2,
                        pointRadius: 2,
                        pointBackgroundColor: '#f59e0b',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Area Terlarang',
                        data: [25, 26, 28, 30, 32, 34, 35, 36, 38, 39, 40, 42, 43, 44, 45, 46],
                        borderColor: '#8b5cf6',
                        backgroundColor: 'rgba(139, 92, 246, 0.05)',
                        borderWidth: 2,
                        pointRadius: 2,
                        pointBackgroundColor: '#8b5cf6',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Konflik Anak',
                        data: [18, 20, 22, 25, 28, 30, 32, 35, 38, 40, 42, 45, 48, 50, 52, 54],
                        borderColor: '#f97316',
                        backgroundColor: 'rgba(249, 115, 22, 0.05)',
                        borderWidth: 2,
                        pointRadius: 2,
                        pointBackgroundColor: '#f97316',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Darurat Medis',
                        data: [12, 13, 14, 15, 16, 15, 17, 18, 17, 16, 18, 19, 18, 17, 19, 20],
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.05)',
                        borderWidth: 2,
                        pointRadius: 2,
                        pointBackgroundColor: '#10b981',
                        tension: 0.3,
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: { boxWidth: 12, font: { size: 10 } }
                    },
                    tooltip: { mode: 'index', intersect: false }
                },
                scales: {
                    y: {
                        title: { display: true, text: 'Jumlah Peringatan', font: { size: 11 } },
                        stacked: false
                    },
                    x: {
                        title: { display: true, text: 'Periode (30 Hari)', font: { size: 11 } },
                        ticks: { maxRotation: 45, minRotation: 45 }
                    }
                }
            }
        });
    });
</script>

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