@extends('layouts.superadmin')

@section('title', 'Skor Keselamatan')

@section('content')
<div class="animate-fade-in-up">
    <!-- ==================== HEADER ==================== -->
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-6">
        <div>
            <div class="flex items-center gap-3 mb-1">
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Skor Keselamatan Nasional</h1>
                <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-400 rounded-lg text-[10px] font-bold uppercase tracking-wider">Update Real-time</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Analisis performa keamanan daycare berdasarkan pemantauan AI, laporan insiden, dan kepatuhan operasional.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
                Export PDF
            </button>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Unduh Data
            </button>
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold shadow-sm hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[18px]">refresh</span>
                Refresh Analisis
            </button>
        </div>
    </div>

    <!-- ==================== STATISTIK (4 Cards) ==================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[24px]">security</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">↑ +2.3%</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Rata-rata Skor Nasional</p>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">94.8</p>
            <p class="text-[11px] text-slate-400 mt-1">Dari 100 poin</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 text-[24px]">verified</span>
                </div>
                <span class="text-emerald-600 text-xs font-semibold bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 rounded-full">+12</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Daycare Sangat Aman</p>
            <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">1.245</p>
            <p class="text-[11px] text-slate-400 mt-1">Skor >90</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400 text-[24px]">warning</span>
                </div>
                <span class="text-amber-600 text-xs font-semibold bg-amber-50 dark:bg-amber-900/30 px-2 py-1 rounded-full">-3</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Perlu Perhatian</p>
            <p class="text-3xl font-bold text-amber-600 dark:text-amber-400">84</p>
            <p class="text-[11px] text-slate-400 mt-1">Skor 70-90</p>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all">
            <div class="flex justify-between items-start mb-3">
                <div class="w-12 h-12 rounded-xl bg-red-50 dark:bg-red-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-600 dark:text-red-400 text-[24px]">error</span>
                </div>
                <span class="text-red-600 text-xs font-semibold bg-red-50 dark:bg-red-900/30 px-2 py-1 rounded-full">Kritis</span>
            </div>
            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide mb-1">Risiko Tinggi</p>
            <p class="text-3xl font-bold text-red-600 dark:text-red-400">12</p>
            <p class="text-[11px] text-slate-400 mt-1">Skor <70</p>
        </div>
    </div>

    <!-- ==================== GRAFIK UTAMA + RANKING WILAYAH ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Line Chart - Tren Skor Keselamatan -->
        <div class="lg:col-span-2 bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between items-center mb-4 flex-wrap gap-3">
                <h4 class="font-bold text-slate-800 dark:text-white">Tren Skor Keselamatan Nasional</h4>
                <div class="flex gap-2">
                    <button class="px-3 py-1 text-xs font-semibold bg-primary/10 text-primary rounded-lg">Mingguan</button>
                    <button class="px-3 py-1 text-xs font-semibold text-slate-500 hover:bg-slate-100 rounded-lg">Bulanan</button>
                    <button class="px-3 py-1 text-xs font-semibold text-slate-500 hover:bg-slate-100 rounded-lg">Tahunan</button>
                </div>
            </div>
            <!-- Chart Container -->
            <canvas id="safetyTrendChart" class="w-full h-64"></canvas>
            <div class="mt-4 flex justify-center gap-6 text-xs">
                <span class="flex items-center gap-1"><span class="w-3 h-3 bg-primary rounded-full"></span> Skor Keselamatan</span>
                <span class="flex items-center gap-1"><span class="w-3 h-3 bg-emerald-500 rounded-full"></span> Target Nasional (95)</span>
            </div>
        </div>

        <!-- Ranking Wilayah -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white mb-4">🏆 Ranking Keselamatan per Wilayah</h4>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 bg-emerald-500 text-white rounded-full flex items-center justify-center text-xs font-bold">1</span>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">DKI Jakarta</p>
                            <p class="text-[10px] text-slate-400">42 Daycare</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-emerald-600">98.2</p>
                        <span class="text-[10px] text-emerald-600">Aman</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 bg-emerald-500 text-white rounded-full flex items-center justify-center text-xs font-bold">2</span>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Jawa Timur</p>
                            <p class="text-[10px] text-slate-400">38 Daycare</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-emerald-600">95.4</p>
                        <span class="text-[10px] text-emerald-600">Aman</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 bg-emerald-500 text-white rounded-full flex items-center justify-center text-xs font-bold">3</span>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Kalimantan Selatan</p>
                            <p class="text-[10px] text-slate-400">28 Daycare</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-emerald-600">94.8</p>
                        <span class="text-[10px] text-emerald-600">Aman</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 bg-amber-500 text-white rounded-full flex items-center justify-center text-xs font-bold">4</span>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Sulawesi Selatan</p>
                            <p class="text-[10px] text-slate-400">24 Daycare</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-amber-600">88.5</p>
                        <span class="text-[10px] text-amber-600">Waspada</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center text-xs font-bold">5</span>
                        <div>
                            <p class="font-semibold text-slate-800 dark:text-white">Papua</p>
                            <p class="text-[10px] text-slate-400">8 Daycare</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-red-600">72.3</p>
                        <span class="text-[10px] text-red-600">Risiko</span>
                    </div>
                </div>
            </div>
            <button class="w-full mt-4 py-2 text-center text-sm font-semibold text-primary hover:bg-primary/10 rounded-lg transition">Lihat Semua Provinsi →</button>
        </div>
    </div>

    <!-- ==================== TOP DAYCARE TERAMAN + PETA NASIONAL ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Top Daycare Teraman -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-bold text-slate-800 dark:text-white mb-4">⭐ Top Daycare Teraman Nasional</h4>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gradient-to-r from-emerald-50 to-transparent dark:from-emerald-900/20 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-emerald-600">stars</span>
                        </div>
                        <div>
                            <p class="font-bold text-slate-800 dark:text-white">Little Stars Academy</p>
                            <p class="text-xs text-slate-500">Makassar, Sulawesi Selatan</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-xl font-bold text-emerald-600">99.2</p>
                        <span class="text-[10px] text-emerald-600">Sangat Aman</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">verified</span>
                        </div>
                        <div>
                            <p class="font-bold text-slate-800 dark:text-white">Pelangi Daycare Center</p>
                            <p class="text-xs text-slate-500">Surabaya, Jawa Timur</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-xl font-bold text-emerald-600">98.7</p>
                        <span class="text-[10px] text-emerald-600">Sangat Aman</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">security</span>
                        </div>
                        <div>
                            <p class="font-bold text-slate-800 dark:text-white">Taman Anak Kita</p>
                            <p class="text-xs text-slate-500">Jakarta Selatan, DKI Jakarta</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-xl font-bold text-emerald-600">98.2</p>
                        <span class="text-[10px] text-emerald-600">Sangat Aman</span>
                    </div>
                </div>
            </div>
            <button class="w-full mt-4 py-2 text-center text-sm font-semibold text-primary hover:bg-primary/10 rounded-lg transition">Lihat Semua Daycare →</button>
        </div>

        <!-- Peta Nasional Keselamatan -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-2xl p-5 border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between items-center mb-4">
                <h4 class="font-bold text-slate-800 dark:text-white">🗺️ Peta Keselamatan Nasional</h4>
                <div class="flex gap-3 text-xs">
                    <span class="flex items-center gap-1"><span class="w-2.5 h-2.5 bg-emerald-500 rounded-full"></span> Aman >90</span>
                    <span class="flex items-center gap-1"><span class="w-2.5 h-2.5 bg-amber-500 rounded-full"></span> Waspada 70-90</span>
                    <span class="flex items-center gap-1"><span class="w-2.5 h-2.5 bg-red-500 rounded-full"></span> Risiko <70</span>
                </div>
            </div>
            <div class="bg-slate-100 dark:bg-slate-800 rounded-xl h-64 relative flex items-center justify-center border border-slate-200 dark:border-slate-700">
                <div class="relative w-full h-full">
                    <!-- Hotspot Peta Interaktif (Placeholder) -->
                    <div class="absolute top-1/4 left-1/3 cursor-pointer group">
                        <div class="w-3 h-3 bg-emerald-500 rounded-full relative"></div>
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white dark:bg-slate-800 rounded-lg shadow-lg p-2 w-40 opacity-0 group-hover:opacity-100 transition-opacity">
                            <p class="text-xs font-bold">DKI Jakarta</p>
                            <p class="text-[10px] text-emerald-600">Skor: 98.2</p>
                            <p class="text-[10px] text-slate-500">42 Daycare • Aman</p>
                        </div>
                    </div>
                    <div class="absolute top-1/2 left-1/2 cursor-pointer group">
                        <div class="w-3 h-3 bg-emerald-500 rounded-full relative"></div>
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white dark:bg-slate-800 rounded-lg shadow-lg p-2 w-40 opacity-0 group-hover:opacity-100 transition-opacity">
                            <p class="text-xs font-bold">Jawa Timur</p>
                            <p class="text-[10px] text-emerald-600">Skor: 95.4</p>
                            <p class="text-[10px] text-slate-500">38 Daycare • Aman</p>
                        </div>
                    </div>
                    <div class="absolute top-2/3 left-2/3 cursor-pointer group">
                        <div class="w-3 h-3 bg-emerald-500 rounded-full relative"></div>
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white dark:bg-slate-800 rounded-lg shadow-lg p-2 w-40 opacity-0 group-hover:opacity-100 transition-opacity">
                            <p class="text-xs font-bold">Kalimantan Selatan</p>
                            <p class="text-[10px] text-emerald-600">Skor: 94.8</p>
                            <p class="text-[10px] text-slate-500">28 Daycare • Aman</p>
                        </div>
                    </div>
                    <div class="absolute top-1/2 right-1/4 cursor-pointer group">
                        <div class="w-3 h-3 bg-amber-500 rounded-full relative"></div>
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white dark:bg-slate-800 rounded-lg shadow-lg p-2 w-40 opacity-0 group-hover:opacity-100 transition-opacity">
                            <p class="text-xs font-bold">Sulawesi Selatan</p>
                            <p class="text-[10px] text-amber-600">Skor: 88.5</p>
                            <p class="text-[10px] text-slate-500">24 Daycare • Waspada</p>
                        </div>
                    </div>
                    <div class="absolute bottom-1/4 right-1/3 cursor-pointer group">
                        <div class="w-3 h-3 bg-red-500 rounded-full relative"></div>
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-white dark:bg-slate-800 rounded-lg shadow-lg p-2 w-40 opacity-0 group-hover:opacity-100 transition-opacity">
                            <p class="text-xs font-bold">Papua</p>
                            <p class="text-[10px] text-red-600">Skor: 72.3</p>
                            <p class="text-[10px] text-slate-500">8 Daycare • Risiko</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <span class="material-symbols-outlined text-5xl text-slate-300 dark:text-slate-600">map</span>
                    </div>
                </div>
            </div>
            <p class="text-center text-xs text-slate-400 mt-3">Arahkan kursor ke titik untuk detail wilayah</p>
        </div>
    </div>

    <!-- ==================== CERIA AI INSIGHT ==================== -->
    <div class="bg-gradient-to-r from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-5 border border-primary/20">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[18px]">neurology</span>
                </div>
                <h4 class="font-bold text-slate-800 dark:text-white">CERIA AI Safety Insight</h4>
            </div>
            <span class="text-xs text-primary font-semibold">Analisis Prediktif</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">🏆 Faktor Keamanan Terbaik</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">Kepatuhan SOP & Monitoring AI</p>
                <p class="text-[10px] text-emerald-600 mt-1">Kontribusi +12.4%</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">📈 Peningkatan Tertinggi</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">Kalimantan Selatan</p>
                <p class="text-[10px] text-emerald-600 mt-1">↑ +8.2% dari bulan lalu</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">⚠️ Prediksi Risiko Bulan Depan</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">Potensi penurunan 3.2%</p>
                <p class="text-[10px] text-amber-600 mt-1">Fokus pada 4 wilayah</p>
            </div>
            <div class="bg-white/50 dark:bg-slate-800/50 rounded-xl p-3">
                <p class="text-xs text-slate-500 mb-1">📋 Rekomendasi Peningkatan</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-white">Tingkatkan training SOP</p>
                <p class="text-[10px] text-primary mt-1">Target +5% skor</p>
            </div>
        </div>
        <div class="bg-primary/10 rounded-xl p-3">
            <p class="text-xs text-primary font-semibold mb-1">📊 Ringkasan Analisis AI</p>
            <p class="text-sm text-slate-700 dark:text-slate-300">CERIA AI mendeteksi peningkatan signifikan skor keselamatan di wilayah <span class="font-bold text-primary">Kalimantan Selatan dan Sulawesi Tenggara</span> berkat implementasi sistem monitoring AI. Wilayah <span class="font-bold text-amber-600">Papua</span> memerlukan perhatian khusus dengan rekomendasi peningkatan infrastruktur keamanan.</p>
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
        const ctx = document.getElementById('safetyTrendChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4', 'Minggu 5', 'Minggu 6', 'Minggu 7', 'Minggu 8'],
                datasets: [
                    {
                        label: 'Skor Keselamatan',
                        data: [92.5, 93.1, 94.2, 93.8, 94.5, 95.1, 94.8, 94.8],
                        borderColor: '#00658d',
                        backgroundColor: 'rgba(0, 101, 141, 0.05)',
                        borderWidth: 3,
                        pointRadius: 4,
                        pointBackgroundColor: '#00658d',
                        pointBorderColor: '#fff',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Target Nasional',
                        data: [95, 95, 95, 95, 95, 95, 95, 95],
                        borderColor: '#10b981',
                        borderWidth: 2,
                        borderDash: [5, 5],
                        pointRadius: 0,
                        fill: false
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: { boxWidth: 12, font: { size: 11 } }
                    },
                    tooltip: { mode: 'index', intersect: false }
                },
                scales: {
                    y: {
                        min: 90,
                        max: 100,
                        ticks: { stepSize: 2 },
                        title: { display: true, text: 'Skor Keselamatan', font: { size: 11 } }
                    },
                    x: { title: { display: true, text: 'Periode', font: { size: 11 } } }
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