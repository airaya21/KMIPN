@extends('layouts.superadmin')

@section('title', 'Peringatan Langsung')

@section('content')
<div class="animate-fade-in-up">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-6">
        <div>
            <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 dark:text-white tracking-tight">Peringatan Langsung</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Pemantauan insiden dan peringatan secara real-time dari seluruh daycare di Indonesia.</p>
        </div>
        <div class="flex gap-3">
            <div class="flex items-center gap-2 px-3 py-2 bg-red-100 dark:bg-red-900/30 rounded-full">
                <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                <span class="text-xs font-bold text-red-700 dark:text-red-300">LIVE: Real-time Monitoring</span>
            </div>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                <span class="material-symbols-outlined text-[18px]">refresh</span>
                Refresh
            </button>
        </div>
    </div>
    
    <!-- Statistik Peringatan -->
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 mb-6">
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Total Hari Ini</p>
                    <p class="text-2xl font-bold text-red-600 dark:text-red-400">12</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-600 dark:text-red-400">notifications_active</span>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Kritis</p>
                    <p class="text-2xl font-bold text-red-600 dark:text-red-400">4</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-red-600 dark:text-red-400">error</span>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Waspada</p>
                    <p class="text-2xl font-bold text-amber-600 dark:text-amber-400">5</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 dark:text-amber-400">warning</span>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-4 border border-slate-100 dark:border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-400 text-xs font-semibold uppercase mb-1">Informasi</p>
                    <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">3</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400">info</span>
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
                    <input type="text" placeholder="Cari berdasarkan daycare, lokasi, atau jenis insiden..." class="w-full pl-10 pr-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg bg-white dark:bg-slate-800 text-slate-800 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                </div>
            </div>
            <div class="flex gap-3">
                <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                    <option value="">Semua Tingkat</option>
                    <option value="critical">Kritis</option>
                    <option value="warning">Waspada</option>
                    <option value="info">Informasi</option>
                </select>
                <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                    <option value="">Semua Provinsi</option>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                </select>
                <select class="px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
                    <option value="">7 Hari Terakhir</option>
                    <option value="today">Hari Ini</option>
                    <option value="yesterday">Kemarin</option>
                    <option value="week">Minggu Ini</option>
                </select>
            </div>
        </div>
    </div>
    
    <!-- Live Alert Stream -->
    <div class="space-y-4 mb-6">
        <!-- Alert Kritis 1 - Baru masuk (dengan highlight dan efek) -->
        <div class="bg-red-50 dark:bg-red-900/20 border-l-4 border-red-500 rounded-xl p-4 shadow-sm hover:shadow-md transition-all">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div class="flex items-start gap-3">
                    <div class="relative">
                        <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/40 flex items-center justify-center">
                            <span class="material-symbols-outlined text-red-600 dark:text-red-400">campaign</span>
                        </div>
                        <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full animate-ping"></span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="px-2 py-0.5 bg-red-500 text-white rounded-full text-[10px] font-bold uppercase">Kritis</span>
                            <span class="text-xs text-red-600 dark:text-red-300 font-mono">#ALT-001</span>
                            <span class="text-xs text-slate-400 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">schedule</span>
                                2 menit yang lalu
                            </span>
                        </div>
                        <h4 class="font-bold text-slate-800 dark:text-white mt-1">Little Stars Academy</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-300 mt-0.5">Gerakan agresif terdeteksi antara 2 anak di area bermain.</p>
                        <div class="flex items-center gap-4 mt-2 text-xs text-slate-500">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">location_on</span> Makassar, Sulawesi Selatan</span>
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">videocam</span> CCTV Area A2</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 bg-primary text-white rounded-lg text-xs font-semibold hover:bg-primary/90 transition">Tangani Sekarang</button>
                    <button class="p-1.5 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                </div>
            </div>
        </div>
        
        <!-- Alert Kritis 2 -->
        <div class="bg-red-50 dark:bg-red-900/20 border-l-4 border-red-500 rounded-xl p-4 shadow-sm hover:shadow-md transition-all">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/40 flex items-center justify-center">
                        <span class="material-symbols-outlined text-red-600 dark:text-red-400">ambulance</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="px-2 py-0.5 bg-red-500 text-white rounded-full text-[10px] font-bold uppercase">Kritis</span>
                            <span class="text-xs text-red-600 dark:text-red-300 font-mono">#ALT-002</span>
                            <span class="text-xs text-slate-400 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">schedule</span>
                                15 menit yang lalu
                            </span>
                        </div>
                        <h4 class="font-bold text-slate-800 dark:text-white mt-1">Bright Horizons</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-300 mt-0.5">Anak tidak bergerak/terjatuh di area tidur siang, diduga pingsan.</p>
                        <div class="flex items-center gap-4 mt-2 text-xs text-slate-500">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">location_on</span> Bandung, Jawa Barat</span>
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">videocam</span> Kamar Tidur 2</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 bg-primary text-white rounded-lg text-xs font-semibold hover:bg-primary/90 transition">Tangani Sekarang</button>
                    <button class="p-1.5 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                </div>
            </div>
        </div>
        
        <!-- Alert Waspada -->
        <div class="bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 rounded-xl p-4 shadow-sm hover:shadow-md transition-all">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-full bg-amber-100 dark:bg-amber-900/40 flex items-center justify-center">
                        <span class="material-symbols-outlined text-amber-600 dark:text-amber-400">warning</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="px-2 py-0.5 bg-amber-500 text-white rounded-full text-[10px] font-bold uppercase">Waspada</span>
                            <span class="text-xs text-amber-600 dark:text-amber-300 font-mono">#ALT-003</span>
                            <span class="text-xs text-slate-400 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">schedule</span>
                                35 menit yang lalu
                            </span>
                        </div>
                        <h4 class="font-bold text-slate-800 dark:text-white mt-1">Taman Anak Kita</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-300 mt-0.5">Tangisan berkepanjangan tanpa sebab yang jelas selama 15 menit.</p>
                        <div class="flex items-center gap-4 mt-2 text-xs text-slate-500">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">location_on</span> Jakarta Selatan, DKI Jakarta</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 border border-primary text-primary rounded-lg text-xs font-semibold hover:bg-primary/10 transition">Tinjau</button>
                    <button class="p-1.5 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                </div>
            </div>
        </div>
        
        <!-- Alert Informasi -->
        <div class="bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-500 rounded-xl p-4 shadow-sm hover:shadow-md transition-all">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/40 flex items-center justify-center">
                        <span class="material-symbols-outlined text-blue-600 dark:text-blue-400">info</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="px-2 py-0.5 bg-blue-500 text-white rounded-full text-[10px] font-bold uppercase">Informasi</span>
                            <span class="text-xs text-blue-600 dark:text-blue-300 font-mono">#ALT-004</span>
                            <span class="text-xs text-slate-400 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">schedule</span>
                                1 jam yang lalu
                            </span>
                        </div>
                        <h4 class="font-bold text-slate-800 dark:text-white mt-1">Mutiara Daycare</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-300 mt-0.5">Kamera pemantau mati selama 10 menit, telah kembali normal.</p>
                        <div class="flex items-center gap-4 mt-2 text-xs text-slate-500">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">location_on</span> Tangerang, Banten</span>
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">cctv</span> CCTV Utama</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 border border-slate-300 dark:border-slate-600 text-slate-600 dark:text-slate-300 rounded-lg text-xs font-semibold hover:bg-slate-100 dark:hover:bg-slate-700 transition">Diabaikan</button>
                    <button class="p-1.5 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                </div>
            </div>
        </div>
        
        <!-- Alert Waspada lainnya -->
        <div class="bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 rounded-xl p-4 shadow-sm hover:shadow-md transition-all">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-full bg-amber-100 dark:bg-amber-900/40 flex items-center justify-center">
                        <span class="material-symbols-outlined text-amber-600 dark:text-amber-400">sos</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="px-2 py-0.5 bg-amber-500 text-white rounded-full text-[10px] font-bold uppercase">Waspada</span>
                            <span class="text-xs text-amber-600 dark:text-amber-300 font-mono">#ALT-005</span>
                            <span class="text-xs text-slate-400 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">schedule</span>
                                2 jam yang lalu
                            </span>
                        </div>
                        <h4 class="font-bold text-slate-800 dark:text-white mt-1">Pelangi Hati</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-300 mt-0.5">Terdeteksi suara benturan keras di ruang bermain.</p>
                        <div class="flex items-center gap-4 mt-2 text-xs text-slate-500">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">location_on</span> Surabaya, Jawa Timur</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 border border-primary text-primary rounded-lg text-xs font-semibold hover:bg-primary/10 transition">Tinjau</button>
                    <button class="p-1.5 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg transition"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Statistik Insiden Berdasarkan Jenis -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Distribusi Insiden -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-semibold text-slate-800 dark:text-white mb-4">Distribusi Insiden Hari Ini</h4>
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between text-sm mb-1"><span>😢 Tangisan Terdeteksi</span><span class="font-bold text-amber-500">24%</span></div>
                    <div class="w-full bg-slate-100 dark:bg-slate-700 rounded-full h-2"><div class="bg-amber-500 h-2 rounded-full" style="width:24%"></div></div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1"><span>⚡ Gerakan Agresif</span><span class="font-bold text-red-500">15%</span></div>
                    <div class="w-full bg-slate-100 dark:bg-slate-700 rounded-full h-2"><div class="bg-red-500 h-2 rounded-full" style="width:15%"></div></div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1"><span>⚠️ Terjatuh / Tidak Bergerak</span><span class="font-bold text-red-500">8%</span></div>
                    <div class="w-full bg-slate-100 dark:bg-slate-700 rounded-full h-2"><div class="bg-red-500 h-2 rounded-full" style="width:8%"></div></div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1"><span>🤝 Interaksi Tidak Wajar</span><span class="font-bold text-amber-500">12%</span></div>
                    <div class="w-full bg-slate-100 dark:bg-slate-700 rounded-full h-2"><div class="bg-amber-500 h-2 rounded-full" style="width:12%"></div></div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1"><span>📹 Gangguan Kamera</span><span class="font-bold text-blue-500">5%</span></div>
                    <div class="w-full bg-slate-100 dark:bg-slate-700 rounded-full h-2"><div class="bg-blue-500 h-2 rounded-full" style="width:5%"></div></div>
                </div>
            </div>
        </div>
        
        <!-- Aktivitas Tim -->
        <div class="bg-white dark:bg-[#1a1d20] rounded-xl p-5 border border-slate-100 dark:border-slate-800">
            <h4 class="font-semibold text-slate-800 dark:text-white mb-4">Respon Tim</h4>
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 text-[16px]">check_circle</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-slate-800 dark:text-white">Insiden Little Stars Academy</p>
                        <p class="text-xs text-slate-400">Ditangani tim response center</p>
                    </div>
                    <span class="text-xs text-emerald-600">Selesai</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-amber-600 dark:text-amber-400 text-[16px]">hourglass_empty</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-slate-800 dark:text-white">Insiden Bright Horizons</p>
                        <p class="text-xs text-slate-400">Dalam penanganan</p>
                    </div>
                    <span class="text-xs text-amber-600">Proses</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                        <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-[16px]">pending</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-slate-800 dark:text-white">Insiden Taman Anak Kita</p>
                        <p class="text-xs text-slate-400">Menunggu verifikasi</p>
                    </div>
                    <span class="text-xs text-blue-600">Antrian</span>
                </div>
            </div>
            <button class="w-full mt-4 py-2 text-center text-sm font-semibold text-primary hover:bg-primary/10 rounded-lg transition">Lihat Semua Aktivitas →</button>
        </div>
    </div>
    
    <!-- Rekomendasi Tindakan -->
    <div class="mt-6 bg-primary/5 dark:bg-primary/10 rounded-xl p-5 border border-primary/20">
        <h4 class="font-semibold text-slate-800 dark:text-white mb-3 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">tips_and_updates</span>
            Rekomendasi Tindakan Cepat
        </h4>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary text-[18px]">emergency</span>
                <div>
                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">Insiden Kritis</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Segera kerahkan tim respons ke lokasi</p>
                </div>
            </div>
            <div class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary text-[18px]">videocam</span>
                <div>
                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">Verifikasi Rekaman</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Amankan rekaman CCTV untuk investigasi</p>
                </div>
            </div>
            <div class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary text-[18px]">phone</span>
                <div>
                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">Hubungi Pihak Terkait</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Koordinasi dengan pengasuh dan orang tua</p>
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