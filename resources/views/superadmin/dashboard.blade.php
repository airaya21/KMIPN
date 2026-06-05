@extends('layouts.superadmin')

@section('content')

       <!-- Judul Dashboard -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-4">
            <div>
                <h2 class="font-display-lg text-2xl sm:text-display-lg text-on-surface">Dashboard Monitoring Nasional</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-1">Pemantauan keselamatan anak, aktivitas daycare, dan peringatan penting secara real-time dari seluruh daycare yang terdaftar.</p>
            </div>
            <div class="flex gap-3">
                <button class="flex items-center gap-2 px-4 py-2 border border-outline/30 rounded-xl font-label-md text-label-md hover:bg-surface-container-highest/40 transition-all active:scale-95 text-on-surface">
                    <span class="material-symbols-outlined text-[18px]">map</span>
                    Tampilan Global
                </button>
                <button class="flex items-center gap-2 px-6 py-2 bg-primary text-on-primary rounded-xl font-label-md text-label-md shadow-lg active:scale-95 transition-all hover:opacity-90">
                    <span class="material-symbols-outlined text-[18px]">add_moderator</span>
                    Kerahkan Respons Darurat
                </button>
            </div>
        </div>
        
        <!-- Baris Metrik Utama -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
            <!-- Metrik 1 -->
            <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/30 group hover:-translate-y-1 transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-primary-container text-on-primary-container rounded-2xl">
                        <span class="material-symbols-outlined">child_care</span>
                    </div>
                    <span class="text-secondary font-label-sm flex items-center gap-1 font-bold">
                        <span class="material-symbols-outlined text-sm">trending_up</span> +3
                    </span>
                </div>
                <p class="font-label-md text-label-md text-outline">Total Pusat Daycare</p>
                <h3 class="font-display-lg text-3xl font-bold text-on-surface mt-1">42</h3>
                <p class="font-label-sm text-[11px] text-outline mt-2">6 menunggu verifikasi</p>
            </div>
            
            <!-- Metrik 2 -->
            <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/30 group hover:-translate-y-1 transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-secondary-container text-on-secondary-container rounded-2xl">
                        <span class="material-symbols-outlined">security</span>
                    </div>
                    <span class="text-secondary font-label-sm flex items-center gap-1 font-bold">
                        <span class="material-symbols-outlined text-sm">trending_up</span> 1.2%
                    </span>
                </div>
                <p class="font-label-md text-label-md text-outline">Skor Keselamatan Nasional</p>
                <h3 class="font-display-lg text-3xl font-bold text-on-surface mt-1">94.8</h3>
                <div class="w-full bg-surface-container-highest rounded-full h-1.5 mt-4 overflow-hidden">
                    <div class="bg-secondary h-1.5 rounded-full" style="width: 94.8%"></div>
                </div>
            </div>
            
            <!-- Metrik 3 -->
            <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/30 group hover:-translate-y-1 transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-tertiary-container text-on-tertiary-container rounded-2xl">
                        <span class="material-symbols-outlined">memory</span>
                    </div>
                    <div class="flex items-center gap-1.5 px-2.5 py-0.5 bg-secondary/15 text-secondary rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
                        <span class="text-[10px] font-bold">AKTIF</span>
                    </div>
                </div>
                <p class="font-label-md text-label-md text-outline">Pemantauan AI Aktif</p>
                <h3 class="font-display-lg text-3xl font-bold text-on-surface mt-1">1.2M</h3>
                <p class="font-label-sm text-[11px] text-outline mt-2">Bingkai dianalisis per menit</p>
            </div>
            
            <!-- Metrik 4: Pusat Peringatan Kritis -->
            <div class="bg-error text-on-error p-6 rounded-3xl card-shadow group hover:-translate-y-1 transition-all duration-300 relative overflow-hidden alert-glow">
                <div class="flex justify-between items-start mb-4 relative z-10">
                    <div class="p-3 bg-white/20 rounded-2xl">
                        <span class="material-symbols-outlined text-white">campaign</span>
                    </div>
                    <span class="px-2.5 py-0.5 bg-white text-error font-bold text-[10px] rounded-full uppercase tracking-wider shadow">Prioritas Tinggi</span>
                </div>
                <p class="font-label-md text-label-md text-white/80 relative z-10">Peringatan Kritis Hari Ini</p>
                <h3 class="font-display-lg text-3xl font-bold mt-1 relative z-10">04</h3>
                <p class="font-label-sm text-[11px] text-white/70 mt-2 relative z-10">Terbaru: Little Stars Academy (3 mnt lalu)</p>
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
            </div>
        </div>
        
        <!-- Peta Monitoring Keamanan Daycare -->
        <div class="grid grid-cols-12 gap-gutter">
            <div class="col-span-12 bg-surface-container-lowest rounded-3xl p-6 sm:p-8 card-shadow overflow-hidden relative min-h-[500px] border border-outline-variant/20">
                <div class="flex flex-col sm:flex-row justify-between items-start gap-4 mb-6">
                    <div>
                        <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">Peta Monitoring Keamanan Daycare</h4>
                        <p class="text-body-sm text-outline mt-1">Visualisasi tingkat keamanan dan peringatan daycare secara real-time di seluruh Indonesia.</p>
                    </div>
                    <div class="flex flex-wrap gap-4 text-xs font-semibold">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-secondary"></span>
                            <span class="text-on-surface-variant">Aman (90+)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-tertiary"></span>
                            <span class="text-on-surface-variant">Waspada (70-89)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-error"></span>
                            <span class="text-on-surface-variant">Kritis (&lt;70)</span>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Peta SVG Indonesia Interaktif -->
                    <div class="flex-grow bg-surface-container-low rounded-2xl relative h-[380px] flex items-center justify-center border border-outline-variant/20 p-4">
                        <div class="absolute inset-0 opacity-25 pointer-events-none" style="background-image: radial-gradient(var(--color-primary) 1.5px, transparent 1.5px); background-size: 24px 24px;"></div>
                        
                        <!-- Kontainer Tooltip di dalam Kanvas Peta -->
                        <div id="map-tooltip" class="absolute hidden bg-surface-container-lowest text-on-surface p-4 rounded-2xl border border-outline-variant/30 shadow-xl z-30 pointer-events-none text-xs w-52 transition-all duration-150">
                            <p class="font-bold text-sm text-primary" id="tooltip-title">Sumatra</p>
                            <hr class="my-2 border-outline-variant/30" />
                            <div class="flex justify-between my-1"><span class="text-outline">Total Daycare:</span> <span class="font-bold" id="tooltip-centers">12</span></div>
                            <div class="flex justify-between my-1"><span class="text-outline">Skor Keselamatan:</span> <span class="font-bold text-secondary" id="tooltip-score">96.2</span></div>
                            <div class="flex justify-between my-1"><span class="text-outline">Status:</span> <span class="font-bold uppercase" id="tooltip-status">Aman</span></div>
                        </div>

                        <!-- Bentuk Vektor Peta SVG Indonesia -->
                        <svg class="w-full h-full max-h-[340px]" viewBox="0 0 700 350" xmlns="http://www.w3.org/2000/svg">
                            <!-- Jalur Pulau -->
                            <!-- Sumatra -->
                            <path d="M40 80 L80 60 L180 150 L200 180 L180 200 L140 190 L50 100 Z" 
                                  class="fill-surface-container-highest dark:fill-surface-container stroke-outline-variant/40 hover:fill-primary-container/40 dark:hover:fill-primary-container/20 transition-all duration-300 cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Simpul Sumatra', '11 Daycare', '93.5', 'Aman', 'secondary')"
                                  onmouseout="hideMapTooltip()"/>
                            
                            <!-- Jawa -->
                            <path d="M190 230 L220 230 L290 250 L340 255 L380 255 L380 265 L320 265 L220 245 L190 235 Z" 
                                  class="fill-surface-container-highest dark:fill-surface-container stroke-outline-variant/40 hover:fill-primary-container/40 dark:hover:fill-primary-container/20 transition-all duration-300 cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Simpul Jawa (DKI, Jabar, Jatim)', '32 Daycare', '95.1', 'Aman', 'secondary')"
                                  onmouseout="hideMapTooltip()"/>
                            
                            <!-- Kalimantan -->
                            <path d="M250 80 L310 60 L360 80 L370 120 L350 170 L270 170 L240 130 Z" 
                                  class="fill-surface-container-highest dark:fill-surface-container stroke-outline-variant/40 hover:fill-primary-container/40 dark:hover:fill-primary-container/20 transition-all duration-300 cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Simpul Kalimantan', '5 Daycare', '91.0', 'Aman', 'secondary')"
                                  onmouseout="hideMapTooltip()"/>
                            
                            <!-- Sulawesi -->
                            <path d="M390 90 L430 90 L415 110 L445 110 L445 125 L415 125 L425 155 L415 155 L405 125 L380 130 L380 120 L400 120 Z" 
                                  class="fill-surface-container-highest dark:fill-surface-container stroke-outline-variant/40 hover:fill-primary-container/40 dark:hover:fill-primary-container/20 transition-all duration-300 cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Simpul Sulawesi', '6 Daycare', '74.2', 'Waspada', 'tertiary')"
                                  onmouseout="hideMapTooltip()"/>
                            
                            <!-- Papua -->
                            <path d="M560 120 L620 120 L650 130 L650 180 L590 170 L560 140 Z" 
                                  class="fill-surface-container-highest dark:fill-surface-container stroke-outline-variant/40 hover:fill-primary-container/40 dark:hover:fill-primary-container/20 transition-all duration-300 cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Simpul Papua', '2 Daycare', '90.5', 'Aman', 'secondary')"
                                  onmouseout="hideMapTooltip()"/>
                            
                            <!-- Bali & Nusa Tenggara -->
                            <path d="M385 265 L400 265 L410 268 L430 268 L450 270 L480 272" 
                                  class="stroke-outline-variant/50 stroke-[4] stroke-linecap-round fill-none hover:stroke-primary transition-all cursor-pointer"
                                  onmouseover="showMapTooltip(event, 'Bali & Kepulauan Nusa Tenggara', '3 Daycare', '94.0', 'Aman', 'secondary')"
                                  onmouseout="hideMapTooltip()"/>

                            <!-- Hotspot Denyut Interaktif -->
                            <!-- Jakarta (Aman) -->
                            <g class="cursor-pointer group" onmouseover="showMapTooltip(event, 'DKI Jakarta', '18 Daycare', '98.2', 'Aman', 'secondary')" onmouseout="hideMapTooltip()">
                                <circle cx="210" cy="235" r="10" class="fill-secondary/20 animate-ping"/>
                                <circle cx="210" cy="235" r="5" class="fill-secondary stroke-surface-container-lowest stroke-2"/>
                            </g>

                            <!-- Jawa Timur (Waspada) -->
                            <g class="cursor-pointer group" onmouseover="showMapTooltip(event, 'Jawa Timur', '9 Daycare', '88.5', 'Waspada', 'tertiary')" onmouseout="hideMapTooltip()">
                                <circle cx="280" cy="250" r="10" class="fill-tertiary/20 animate-ping"/>
                                <circle cx="280" cy="250" r="5" class="fill-tertiary stroke-surface-container-lowest stroke-2"/>
                            </g>

                            <!-- Makassar (Kritis) -->
                            <g class="cursor-pointer group" onmouseover="showMapTooltip(event, 'Sulawesi Selatan (Makassar)', '4 Daycare', '64.2', 'Kritis', 'error')" onmouseout="hideMapTooltip()">
                                <circle cx="410" cy="140" r="12" class="fill-error/30 animate-ping"/>
                                <circle cx="410" cy="140" r="6" class="fill-error stroke-surface-container-lowest stroke-2"/>
                            </g>
                        </svg>
                        
                        <div class="absolute bottom-4 left-4 bg-surface-container-lowest/80 backdrop-blur border border-outline-variant/30 px-3 py-1.5 rounded-xl text-[10px] text-outline font-bold">
                            Arahkan kursor pada pulau atau hotspot untuk detail wilayah
                        </div>
                    </div>
                    
                    <!-- Sidebar Rincian Wilayah -->
                    <div class="w-full lg:w-80 space-y-4 flex flex-col justify-between">
                        <div>
                            <h5 class="font-label-md text-primary uppercase tracking-widest text-[11px] font-bold">Rincian Wilayah</h5>
                            <div class="space-y-3 mt-3">
                                <div onclick="focusRegion('DKI Jakarta')" class="p-4 bg-surface-container-low rounded-2xl flex justify-between items-center border border-outline-variant/20 hover:border-primary/30 hover:bg-surface-container transition-all cursor-pointer">
                                    <div>
                                        <p class="font-bold text-label-md text-on-surface">DKI Jakarta</p>
                                        <p class="text-[10px] text-outline mt-0.5">18 Pusat • 0 Peringatan</p>
                                    </div>
                                    <span class="text-secondary font-bold text-label-md bg-secondary/10 px-2.5 py-1 rounded-lg">98.2</span>
                                </div>
                                <div onclick="focusRegion('Jawa Timur')" class="p-4 bg-surface-container-low rounded-2xl flex justify-between items-center border border-outline-variant/20 hover:border-primary/30 hover:bg-surface-container transition-all cursor-pointer">
                                    <div>
                                        <p class="font-bold text-label-md text-on-surface">Jawa Timur</p>
                                        <p class="text-[10px] text-outline mt-0.5">9 Pusat • 1 Peringatan</p>
                                    </div>
                                    <span class="text-tertiary font-bold text-label-md bg-tertiary/10 px-2.5 py-1 rounded-lg">88.5</span>
                                </div>
                                <div onclick="focusRegion('Sulawesi Selatan')" class="p-4 bg-error/5 rounded-2xl flex justify-between items-center border border-error/20 hover:bg-error/10 transition-all cursor-pointer">
                                    <div>
                                        <p class="font-bold text-label-md text-on-surface">Sulawesi Selatan</p>
                                        <p class="text-[10px] text-error font-bold mt-0.5">4 Pusat • 2 Kritis</p>
                                    </div>
                                    <span class="text-error font-bold text-label-md bg-error/15 px-2.5 py-1 rounded-lg">64.2</span>
                                </div>
                            </div>
                        </div>
                        <button class="w-full py-3 border border-outline/30 rounded-xl text-label-sm font-bold text-on-surface hover:bg-surface-container-highest/40 transition-all active:scale-95 mt-4">
                            Lihat Semua Provinsi
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Panel Investigasi Darurat -->
        <div class="bg-surface-container-lowest rounded-3xl p-6 sm:p-8 card-shadow border-t-4 border-error border-x border-b border-outline-variant/20">
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-error animate-pulse">emergency</span>
                    <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">Insiden Kritis Aktif</h4>
                </div>
                <button class="text-primary font-label-md flex items-center gap-1 hover:underline text-sm font-bold">
                    Lihat Arsip <span class="material-symbols-outlined text-sm">open_in_new</span>
                </button>
            </div>
            
            <div class="overflow-x-auto -mx-6 sm:mx-0">
                <div class="inline-block min-w-full align-middle px-6 sm:px-0">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-outline border-b border-outline-variant/20">
                                <th class="pb-4 font-label-md">Daycare / Provinsi</th>
                                <th class="pb-4 font-label-md">Jenis Insiden</th>
                                <th class="pb-4 font-label-md">Waktu Kejadian</th>
                                <th class="pb-4 font-label-md">Status</th>
                                <th class="pb-4 font-label-md">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/20">
                            <!-- Baris insiden 1 -->
                            <tr class="group hover:bg-error/5 dark:hover:bg-error/10 transition-colors">
                                <td class="py-5 pr-4">
                                    <div class="font-body-md font-bold text-on-surface">Little Stars Academy</div>
                                    <div class="text-[11px] text-outline mt-0.5">Makassar, Sulawesi Selatan</div>
                                </td>
                                <td class="py-5 pr-4">
                                    <span class="px-3 py-1 bg-error-container text-on-error-container rounded-full text-[12px] font-bold">Gerakan Agresif</span>
                                </td>
                                <td class="py-5 text-outline text-body-sm pr-4">3 menit lalu</td>
                                <td class="py-5 pr-4">
                                    <div class="flex items-center gap-2 text-error">
                                        <span class="w-2 h-2 rounded-full bg-error animate-ping"></span>
                                        <span class="font-label-sm font-bold uppercase tracking-wider text-[11px]">Dieskalasi</span>
                                    </div>
                                </td>
                                <td class="py-5">
                                    <div class="flex gap-2">
                                        <button class="p-2 bg-primary text-on-primary rounded-xl hover:opacity-90 active:scale-95 transition-all" title="Lihat Rekaman">
                                            <span class="material-symbols-outlined text-[18px]">videocam</span>
                                        </button>
                                        <button class="p-2 bg-surface-container text-on-surface rounded-xl hover:bg-surface-container-high active:scale-95 transition-all" title="Buka Penyelidikan">
                                            <span class="material-symbols-outlined text-[18px]">gavel</span>
                                        </button>
                                        <button class="p-2 bg-error text-on-error rounded-xl hover:opacity-90 active:scale-95 transition-all" title="Hubungi Daycare">
                                            <span class="material-symbols-outlined text-[18px]">phone</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- Baris insiden 2 -->
                            <tr class="group hover:bg-surface-container/50 transition-colors">
                                <td class="py-5 pr-4">
                                    <div class="font-body-md font-bold text-on-surface">Bright Horizons</div>
                                    <div class="text-[11px] text-outline mt-0.5">Bandung, Jawa Barat</div>
                                </td>
                                <td class="py-5 pr-4">
                                    <span class="px-3 py-1 bg-tertiary-container text-on-tertiary-container rounded-full text-[12px] font-bold">Tangisan Berkepanjangan</span>
                                </td>
                                <td class="py-5 text-outline text-body-sm pr-4">12 menit lalu</td>
                                <td class="py-5 pr-4">
                                    <div class="flex items-center gap-2 text-tertiary">
                                        <span class="material-symbols-outlined text-[16px] animate-spin" style="animation-duration: 3s;">hourglass_empty</span>
                                        <span class="font-label-sm font-semibold">Memverifikasi</span>
                                    </div>
                                </td>
                                <td class="py-5">
                                    <div class="flex gap-2">
                                        <button class="p-2 bg-primary text-on-primary rounded-xl hover:opacity-90 active:scale-95 transition-all">
                                            <span class="material-symbols-outlined text-[18px]">videocam</span>
                                        </button>
                                        <button class="p-2 bg-surface-container text-on-surface rounded-xl hover:bg-surface-container-high active:scale-95 transition-all">
                                            <span class="material-symbols-outlined text-[18px]">gavel</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Pemantauan AI & Analitik Keselamatan -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
            <!-- Distribusi Insiden Terdeteksi -->
            <div class="bg-surface-container-lowest rounded-3xl p-6 sm:p-8 card-shadow border border-outline-variant/20">
                <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-6">Distribusi Insiden Terdeteksi</h4>
                <div class="space-y-6">
                    <!-- 24% = Kuning -->
                     <div>
                        <div class="flex justify-between text-label-md text-on-surface mb-2 font-semibold">
                            <span>Deteksi Tangisan</span>
                            <span class="font-bold text-amber-600">24%</span>
                        </div>
                        <div class="w-full bg-surface-container-highest rounded-full h-2">
                            <div class="bg-amber-500 h-2 rounded-full" style="width: 24%"></div>
                        </div>
                    </div>
                    <!-- 8% = Kuning -->
                     <div>
                        <div class="flex justify-between text-label-md text-on-surface mb-2 font-semibold">
                            <span>Gerakan Agresif</span>
                            <span class="font-bold text-amber-600">8%</span>
                        </div>
                        <div class="w-full bg-surface-container-highest rounded-full h-2">
                            <div class="bg-amber-500 h-2 rounded-full" style="width: 8%"></div>
                        </div>
                    </div>
                    <!-- 12% = Kuning -->
                     <div>
                        <div class="flex justify-between text-label-md text-on-surface mb-2 font-semibold">
                            <span>Terjatuh / Tidak Bergerak</span>
                            <span class="font-bold text-amber-600">12%</span>
                        </div>
                        <div class="w-full bg-surface-container-highest rounded-full h-2">
                            <div class="bg-amber-500 h-2 rounded-full" style="width: 12%"></div>
                        </div>
                    </div>
                    <!-- 5% = Hijau -->
                     <div>
                        <div class="flex justify-between text-label-md text-on-surface mb-2 font-semibold">
                            <span>Interaksi Tidak Wajar</span>
                            <span class="font-bold text-green-600">5%</span>
                        </div>
                        <div class="w-full bg-surface-container-highest rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 5%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Leaderboard Keamanan Daycare -->
            <div class="bg-primary text-on-primary rounded-3xl p-6 sm:p-8 card-shadow relative overflow-hidden flex flex-col justify-between">
                <div class="relative z-10">
                    <h4 class="font-headline-sm text-headline-sm font-bold mb-2">Leaderboard Keamanan Daycare</h4>
                    <p class="text-on-primary/70 text-body-sm mb-6 font-semibold">Provinsi dengan performa keamanan terbaik bulan ini</p>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-4 bg-white/10 rounded-2xl border border-white/10 hover:bg-white/15 transition-all">
                            <div class="flex items-center gap-3">
                                <span class="w-8 h-8 flex items-center justify-center bg-white/20 rounded-full font-bold">1</span>
                                <span class="font-label-md font-bold">DKI Jakarta</span>
                            </div>
                            <span class="font-bold text-lg">99.2</span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-white/10 rounded-2xl border border-white/10 hover:bg-white/15 transition-all opacity-90">
                            <div class="flex items-center gap-3">
                                <span class="w-8 h-8 flex items-center justify-center bg-white/20 rounded-full font-bold">2</span>
                                <span class="font-label-md font-bold">Jawa Barat</span>
                            </div>
                            <span class="font-bold text-lg">97.8</span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-white/10 rounded-2xl border border-white/10 hover:bg-white/15 transition-all opacity-80">
                            <div class="flex items-center gap-3">
                                <span class="w-8 h-8 flex items-center justify-center bg-white/20 rounded-full font-bold">3</span>
                                <span class="font-label-md font-bold">Jawa Tengah</span>
                            </div>
                            <span class="font-bold text-lg">96.5</span>
                        </div>
                    </div>
                </div>
                <button class="mt-6 py-3 bg-white text-primary rounded-xl font-bold hover:bg-white/95 active:scale-[0.98] transition-all relative z-10">
                    Laporan Rinci
                </button>
                <div class="absolute -right-20 -top-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            </div>
        </div>
        
        <!-- Aliran Pengaduan & Antrean Verifikasi -->
        <div class="grid grid-cols-12 gap-gutter">
            <!-- Laporan Orang Tua Aktif -->
            <div class="col-span-12 lg:col-span-7 bg-surface-container-lowest rounded-3xl p-6 sm:p-8 card-shadow border border-outline-variant/20">
                <div class="flex justify-between items-center mb-6">
                    <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">Laporan Orang Tua Aktif</h4>
                    <span class="px-3 py-1 bg-error-container text-on-error-container rounded-full text-[10px] font-bold">12 BELUM SELESAI</span>
                </div>
                
                <div class="space-y-4">
                    <!-- Item laporan 1 -->
                    <div class="flex items-start gap-4 p-4 border border-outline-variant/20 rounded-2xl hover:bg-surface-container-low transition-all">
                        <div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center flex-shrink-0 text-on-surface-variant border border-outline-variant/10">
                            <span class="material-symbols-outlined">person</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start mb-1">
                                <span class="font-bold text-label-md text-on-surface">Budi Santoso</span>
                                <span class="text-[10px] text-outline">ID: #REP-2041</span>
                            </div>
                            <p class="text-body-sm text-on-surface-variant line-clamp-2">Perilaku mencurigakan dilaporkan pada saat jam makan siang di Sunshine Daycare...</p>
                            <div class="flex items-center gap-3 mt-2 flex-wrap">
                                <span class="px-2.5 py-0.5 bg-tertiary-container text-on-tertiary-container rounded text-[10px] font-bold uppercase tracking-wide">Kinerja Staf</span>
                                <span class="text-[10px] text-outline">2 jam lalu</span>
                            </div>
                        </div>
                        <button class="self-center p-2 text-primary hover:bg-primary/10 rounded-full transition-colors active:scale-90">
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                    
                    <!-- Item laporan 2 -->
                    <div class="flex items-start gap-4 p-4 border border-outline-variant/20 rounded-2xl hover:bg-surface-container-low transition-all">
                        <div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center flex-shrink-0 text-on-surface-variant border border-outline-variant/10">
                            <span class="material-symbols-outlined">person</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start mb-1">
                                <span class="font-bold text-label-md text-on-surface">Siti Aminah</span>
                                <span class="text-[10px] text-outline">ID: #REP-1992</span>
                            </div>
                            <p class="text-body-sm text-on-surface-variant line-clamp-2">Koneksi kamera pemantau mati selama 45 menit pagi ini tanpa pemberitahuan sistem.</p>
                            <div class="flex items-center gap-3 mt-2 flex-wrap">
                                <span class="px-2.5 py-0.5 bg-surface-container-highest text-on-surface-variant rounded text-[10px] font-bold uppercase tracking-wide">Masalah Teknis</span>
                                <span class="text-[10px] text-outline">Kemarin</span>
                            </div>
                        </div>
                        <button class="self-center p-2 text-primary hover:bg-primary/10 rounded-full transition-colors active:scale-90">
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Antrean Verifikasi Baru -->
            <div class="col-span-12 lg:col-span-5 bg-surface-container-lowest rounded-3xl p-6 sm:p-8 card-shadow border border-outline-variant/20">
                <div class="flex justify-between items-center mb-6">
                    <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">Verifikasi Baru</h4>
                    <button class="text-label-sm font-bold text-primary hover:underline">Lihat Antrean</button>
                </div>
                
                <div class="space-y-4">
                    <!-- Antrean 1 -->
                    <div class="p-4 bg-surface-container-low rounded-2xl border border-outline-variant/20 flex flex-col justify-between">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="font-bold text-label-md text-on-surface">Rainbow Kids Hub</p>
                                <p class="text-[10px] text-outline mt-0.5">Surabaya, Jawa Timur</p>
                            </div>
                            <span class="text-[10px] font-bold text-outline">12 Okt 2023</span>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 py-2 bg-secondary text-on-secondary rounded-xl text-[11px] font-bold hover:opacity-90 active:scale-[0.98] transition-all">SETUJUI</button>
                            <button class="flex-1 py-2 border border-error text-error rounded-xl text-[11px] font-bold hover:bg-error/5 active:scale-[0.98] transition-all">TOLAK</button>
                        </div>
                    </div>
                    
                    <!-- Antrean 2 -->
                    <div class="p-4 bg-surface-container-low rounded-2xl border border-outline-variant/20 flex flex-col justify-between">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="font-bold text-label-md text-on-surface">Happy Feet Nursery</p>
                                <p class="text-[10px] text-outline mt-0.5">Medan, Sumatra Utara</p>
                            </div>
                            <span class="text-[10px] font-bold text-outline">11 Okt 2023</span>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 py-2 bg-secondary text-on-secondary rounded-xl text-[11px] font-bold hover:opacity-90 active:scale-[0.98] transition-all">SETUJUI</button>
                            <button class="flex-1 py-2 border border-error text-error rounded-xl text-[11px] font-bold hover:bg-error/5 active:scale-[0.98] transition-all">TOLAK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection