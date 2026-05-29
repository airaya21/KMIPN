@extends('layouts.parent')

@section('title', 'Aktivitas')
@section('header_title', 'Monitoring Aktivitas Anak')
@section('header_subtitle', 'Pantau aktivitas, kondisi, dan notifikasi AI anak secara real-time.')

@section('content')
<div class="space-y-6 animate-fade-in-up" id="app-container">

    {{-- SECTION 1 & 2: Status Anak & AI Monitoring Summary (Grid) --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        {{-- Section 1: Status Anak Saat Ini --}}
        <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)] lg:col-span-2 relative overflow-hidden flex flex-col justify-between">
            <div class="absolute -right-10 -top-10 w-40 h-40 bg-blue-50 rounded-full blur-3xl opacity-60"></div>
            
            <div class="flex items-center justify-between mb-4 relative z-10">
                <h3 class="font-extrabold text-slate-800 text-lg flex items-center gap-2">
                    <span class="material-symbols-outlined text-blue-600">location_on</span> Status Saat Ini
                </h3>
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1 border border-green-200">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span> 🟢 Aman
                </span>
            </div>

            <div class="flex flex-col sm:flex-row items-center gap-6 relative z-10 bg-slate-50 border border-slate-100 rounded-2xl p-5">
                <div class="w-20 h-20 sm:w-16 sm:h-16 rounded-2xl overflow-hidden shrink-0 border-2 border-white shadow-md bg-white">
                    <img src="{{ asset('images/DINDA.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Dinda&background=fdf4ff&color=d946ef'" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 grid grid-cols-2 md:grid-cols-4 gap-4 w-full">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Anak</p>
                        <p class="text-sm font-bold text-slate-700">Dinda</p>
                    </div>
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Aktivitas</p>
                        <p class="text-sm font-bold text-slate-700 flex items-center gap-1"><span class="material-symbols-outlined text-[16px] text-[#FFD600]">toys</span> Bermain</p>
                    </div>
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Lokasi</p>
                        <p class="text-sm font-bold text-slate-700">Ruang Bermain</p>
                    </div>
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Pendamping</p>
                        <p class="text-sm font-bold text-slate-700">Bu Sari</p>
                    </div>
                </div>
            </div>
            <p class="text-[10px] text-slate-400 font-bold text-right mt-3 relative z-10">Update Terakhir: 14:10 WIB</p>
        </div>

        {{-- Section 2: AI Monitoring Summary --}}
        <div class="bg-blue-600 rounded-3xl p-6 shadow-lg shadow-blue-600/20 text-white relative overflow-hidden flex flex-col justify-between">
            <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-white rounded-full blur-3xl opacity-10"></div>
            
            <h3 class="font-extrabold text-white text-lg mb-4 flex items-center gap-2">
                <span class="material-symbols-outlined text-[#FFD600]">memory</span> AI Summary
            </h3>
            
            <div class="grid grid-cols-2 gap-4 flex-1">
                <div class="bg-white/10 rounded-xl p-3 border border-white/10 flex flex-col justify-center">
                    <p class="text-[10px] font-medium text-blue-200 uppercase tracking-wider mb-1">Total Aktivitas</p>
                    <p class="text-xl font-black">12</p>
                </div>
                <div class="bg-white/10 rounded-xl p-3 border border-white/10 flex flex-col justify-center relative overflow-hidden">
                    <div class="absolute right-0 top-0 w-8 h-8 bg-[#FFD600] opacity-20 blur-xl"></div>
                    <p class="text-[10px] font-medium text-blue-200 uppercase tracking-wider mb-1">Alert AI Hari Ini</p>
                    <p class="text-xl font-black text-[#FFD600]">1</p>
                </div>
                <div class="bg-white/10 rounded-xl p-3 border border-white/10 flex flex-col justify-center">
                    <p class="text-[10px] font-medium text-blue-200 uppercase tracking-wider mb-1">Status Risiko</p>
                    <p class="text-sm font-bold mt-1 bg-green-500/20 text-green-300 rounded px-2 py-0.5 inline-block border border-green-500/30 w-max">Rendah</p>
                </div>
                <div class="bg-white/10 rounded-xl p-3 border border-white/10 flex flex-col justify-center">
                    <p class="text-[10px] font-medium text-blue-200 uppercase tracking-wider mb-1">Monitoring</p>
                    <p class="text-sm font-bold mt-1 flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-[#FFD600] animate-pulse"></span> Aktif</p>
                </div>
            </div>
        </div>

    </div>

    {{-- CCTV FEED --}}
    <div class="bg-slate-900 rounded-[2rem] overflow-hidden shadow-2xl relative group border-4 border-slate-800" id="cctv-container">
        <!-- Live Badge -->
        <div class="absolute top-6 left-6 bg-red-600 text-white px-3 py-1.5 rounded-lg text-xs font-black tracking-widest uppercase flex items-center gap-2 z-20">
            <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span> LIVE
        </div>
        
        <!-- Room Info -->
        <div class="absolute top-6 right-6 bg-black/50 backdrop-blur-md text-white px-4 py-2 rounded-xl text-sm font-bold border border-white/10 z-20" id="cctv-room-name">
            CCTV 1 - Semua Area
        </div>
        
        <!-- Video Feed (Simulated via image) -->
        <div class="aspect-video w-full relative">
            <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" class="w-full h-full object-cover opacity-90 transition-all duration-700" id="cctv-feed-img">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
        </div>

        <!-- Controls -->
        <div class="absolute bottom-0 left-0 right-0 p-6 flex flex-col sm:flex-row justify-between items-start sm:items-end gap-4 z-20">
            <div>
                <p class="text-white font-mono font-bold text-lg md:text-xl drop-shadow-md" id="cctv-timestamp">28 May 2026 • 14:00:00</p>
                <p class="text-slate-400 text-xs md:text-sm mt-1">Sistem Pemantauan Cerdas CERIA</p>
            </div>
            <div class="flex gap-2">
                <button class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur border border-white/10 text-white flex items-center justify-center transition-colors">
                    <span class="material-symbols-outlined">volume_up</span>
                </button>
                <button class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur border border-white/10 text-white flex items-center justify-center transition-colors">
                    <span class="material-symbols-outlined">fullscreen</span>
                </button>
            </div>
        </div>
    </div>

    {{-- SECTION 3: Live AI Alert --}}
    <div onclick="openModal('modal-alert-detail')" class="cursor-pointer bg-red-50 border-2 border-red-200 rounded-3xl p-5 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-[0_8px_30px_rgba(239,68,68,0.15)] relative overflow-hidden group hover:border-red-400 transition-all">
        <div class="absolute -right-4 -top-4 w-24 h-24 bg-red-100 rounded-full blur-2xl opacity-50"></div>
        <div class="flex items-start gap-4 relative z-10 w-full sm:w-auto">
            <div class="w-12 h-12 rounded-2xl bg-red-600 text-white flex items-center justify-center shrink-0 shadow-lg shadow-red-600/30 animate-pulse group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-[28px]">crisis_alert</span>
            </div>
            <div class="flex-1">
                <div class="flex flex-wrap items-center gap-2 mb-2">
                    <h4 class="text-base font-extrabold text-red-700">Peringatan: Insiden Terdeteksi AI</h4>
                    <span class="bg-red-600 text-white text-[9px] font-black uppercase tracking-widest px-2 py-0.5 rounded-full animate-pulse">Live Action</span>
                </div>
                
                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm font-medium">
                    <p class="text-red-900 bg-red-100/50 px-2 py-1 rounded"><span class="text-red-500 font-bold">Anak:</span> Dinda</p>
                    <p class="text-red-900 bg-red-100/50 px-2 py-1 rounded"><span class="text-red-500 font-bold">Lokasi:</span> Ruang Bermain Utama</p>
                    <p class="text-red-900 bg-red-100/50 px-2 py-1 rounded"><span class="text-red-500 font-bold">Risiko:</span> 🔴 Tinggi</p>
                    <p class="text-red-900 bg-red-100/50 px-2 py-1 rounded"><span class="text-red-500 font-bold">Status:</span> 🟡 Sedang Ditangani</p>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-2 w-full sm:w-auto relative z-10">
            <button onclick="event.stopPropagation(); alert('Memanggil Bu Sari...');" class="flex-1 sm:flex-none bg-white text-red-600 border border-red-200 px-4 py-3 rounded-xl text-sm font-bold hover:bg-red-50 transition-colors shrink-0 shadow-sm flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[18px]">call</span> Hubungi
            </button>
            <div class="flex-1 sm:flex-none bg-red-600 text-white px-4 py-3 rounded-xl text-sm font-bold transition-colors shrink-0 shadow-lg shadow-red-600/20 flex items-center justify-center gap-1 group-hover:bg-red-700">
                Lihat Detail <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        
        {{-- SECTION 4 & 7: Timeline Aktivitas --}}
        <div class="lg:col-span-2">
            
            {{-- Filter Tabs --}}
            <div class="flex items-center gap-2 mb-6 overflow-x-auto pb-2 scrollbar-hide">
                <button onclick="setFilter('all')" id="btn-filter-all" class="px-5 py-2.5 rounded-xl text-sm font-bold bg-slate-800 text-white shadow-lg shadow-slate-800/20 transition-all shrink-0">Semua Aktivitas</button>
                <button onclick="setFilter('dinda')" id="btn-filter-dinda" class="px-5 py-2.5 rounded-xl text-sm font-bold bg-white text-slate-500 border border-slate-200 hover:bg-slate-50 transition-all shrink-0 flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-pink-500"></span> Dinda</button>
                <button onclick="setFilter('arka')" id="btn-filter-arka" class="px-5 py-2.5 rounded-xl text-sm font-bold bg-white text-slate-500 border border-slate-200 hover:bg-slate-50 transition-all shrink-0 flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-blue-500"></span> Arka</button>
            </div>

            <div class="space-y-6 relative before:content-[''] before:absolute before:left-6 before:top-2 before:bottom-0 before:w-0.5 before:bg-slate-200">
                @php
                    $activities = [
                        ['child_id' => 'dinda', 'time' => '14:05', 'child' => 'Dinda', 'title' => '⚠ Menangis Karena Terjatuh', 'location' => 'Ruang Bermain Utama', 'status' => '🟡 Sedang Ditangani', 'status_color' => 'bg-yellow-100 text-yellow-700 border-yellow-200', 'status_icon' => 'warning', 'icon' => 'warning', 'color' => 'bg-red-100 text-red-600 border-red-300 animate-pulse', 'badge' => 'text-red-700 bg-red-100 border border-red-200', 'gradient' => 'from-red-500 to-red-600', 'bg_icon' => 'mood_bad', 'is_alert' => true],
                        ['child_id' => 'dinda', 'time' => '13:15', 'child' => 'Dinda', 'title' => '😴 Tidur Siang', 'location' => 'Ruang Tidur A', 'status' => '🟢 Normal', 'status_color' => 'bg-slate-50 text-slate-600 border-slate-200', 'status_icon' => 'check_circle', 'icon' => 'bedtime', 'color' => 'bg-pink-100 text-pink-600 border-pink-200', 'badge' => 'text-pink-700 bg-pink-50', 'gradient' => 'from-pink-400 to-pink-500', 'bg_icon' => 'bedtime'],
                        ['child_id' => 'arka', 'time' => '12:30', 'child' => 'Arka', 'title' => '🍽 Makan Siang (MPASI)', 'location' => 'Ruang Makan', 'status' => '🟢 Normal', 'status_color' => 'bg-slate-50 text-slate-600 border-slate-200', 'status_icon' => 'check_circle', 'icon' => 'restaurant', 'color' => 'bg-blue-100 text-blue-600 border-blue-200', 'badge' => 'text-blue-700 bg-blue-50', 'gradient' => 'from-blue-400 to-blue-500', 'bg_icon' => 'restaurant'],
                        ['child_id' => 'dinda', 'time' => '10:45', 'child' => 'Dinda', 'title' => '📚 Belajar Kelompok', 'location' => 'Kelas A', 'status' => '🟢 Normal', 'status_color' => 'bg-slate-50 text-slate-600 border-slate-200', 'status_icon' => 'check_circle', 'icon' => 'diversity_1', 'color' => 'bg-pink-100 text-pink-600 border-pink-200', 'badge' => 'text-pink-700 bg-pink-50', 'gradient' => 'from-purple-400 to-pink-400', 'bg_icon' => 'toys'],
                        ['child_id' => 'arka', 'time' => '09:00', 'child' => 'Arka', 'title' => '🧩 Aktivitas Motorik', 'location' => 'Area Motorik', 'status' => '🟢 Normal', 'status_color' => 'bg-slate-50 text-slate-600 border-slate-200', 'status_icon' => 'check_circle', 'icon' => 'extension', 'color' => 'bg-blue-100 text-blue-600 border-blue-200', 'badge' => 'text-blue-700 bg-blue-50', 'gradient' => 'from-cyan-400 to-blue-500', 'bg_icon' => 'extension'],
                        ['child_id' => 'dinda', 'time' => '08:30', 'child' => 'Dinda', 'title' => 'Kedatangan', 'location' => 'Pintu Utama', 'status' => '🟢 Normal', 'status_color' => 'bg-slate-50 text-slate-600 border-slate-200', 'status_icon' => 'check_circle', 'icon' => 'login', 'color' => 'bg-pink-100 text-pink-600 border-pink-200', 'badge' => 'text-pink-700 bg-pink-50', 'gradient' => 'from-rose-400 to-orange-400', 'bg_icon' => 'waving_hand'],
                        ['child_id' => 'arka', 'time' => '08:15', 'child' => 'Arka', 'title' => 'Kedatangan', 'location' => 'Pintu Utama', 'status' => '🟢 Normal', 'status_color' => 'bg-slate-50 text-slate-600 border-slate-200', 'status_icon' => 'check_circle', 'icon' => 'login', 'color' => 'bg-blue-100 text-blue-600 border-blue-200', 'badge' => 'text-blue-700 bg-blue-50', 'gradient' => 'from-sky-400 to-indigo-500', 'bg_icon' => 'waving_hand'],
                    ];
                @endphp

                @foreach($activities as $activity)
                <div class="relative pl-16 group activity-card transition-all duration-500 origin-top" data-child="{{ $activity['child_id'] }}">
                    <div class="absolute left-1.5 top-1 w-10 h-10 rounded-2xl bg-white border-2 {{ $activity['color'] }} flex items-center justify-center shadow-sm z-10 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">{{ $activity['icon'] }}</span>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-5 border {{ isset($activity['is_alert']) && $activity['is_alert'] ? 'border-red-400 shadow-[0_8px_30px_rgba(239,68,68,0.12)] bg-red-50/20' : 'border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.02)] group-hover:shadow-[0_8px_30px_rgba(0,0,0,0.06)] group-hover:border-blue-100' }} transition-all flex flex-col sm:flex-row gap-5">
                        <div class="flex-1">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <span class="text-[10px] font-black uppercase tracking-widest px-2.5 py-1 rounded-full {{ $activity['badge'] }}">{{ $activity['child'] }}</span>
                                    <h4 class="font-bold {{ isset($activity['is_alert']) && $activity['is_alert'] ? 'text-red-700' : 'text-slate-800' }} mt-2 text-base">{{ $activity['title'] }}</h4>
                                </div>
                                <span class="text-xs font-bold text-slate-400 bg-slate-50 px-2 py-1 rounded-lg border border-slate-100">{{ $activity['time'] }}</span>
                            </div>
                            
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="text-[11px] font-bold text-slate-600 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-md flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">location_on</span> Lokasi: {{ $activity['location'] }}</span>
                                <span class="text-[11px] font-bold {{ $activity['status_color'] }} border px-2.5 py-1 rounded-md flex items-center gap-1">Status: {{ $activity['status'] }}</span>
                            </div>
                        </div>
                        
                        @if(isset($activity['gradient']))
                        <div class="sm:w-32 h-24 rounded-2xl overflow-hidden shrink-0 relative group/img cursor-pointer bg-gradient-to-br {{ $activity['gradient'] }} flex items-center justify-center shadow-inner" onclick="{{ isset($activity['is_alert']) && $activity['is_alert'] ? 'openModal(\'modal-alert-detail\')' : '' }}">
                            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:12px_12px]"></div>
                            <span class="material-symbols-outlined text-white text-[40px] opacity-90 drop-shadow-lg group-hover/img:scale-110 group-hover/img:rotate-6 transition-transform duration-500" style="font-variation-settings: 'FILL' 1;">{{ $activity['bg_icon'] }}</span>
                            <div class="absolute bottom-2 right-2 {{ isset($activity['is_alert']) && $activity['is_alert'] ? 'bg-red-600' : 'bg-black/30' }} backdrop-blur-md text-white text-[9px] px-2 py-1 rounded-lg flex items-center gap-1 font-mono tracking-wider font-bold shadow-lg border border-white/10">
                                <span class="material-symbols-outlined text-[12px] text-white {{ isset($activity['is_alert']) && $activity['is_alert'] ? 'animate-pulse' : '' }}">auto_awesome</span> {{ isset($activity['is_alert']) && $activity['is_alert'] ? 'AI-ALERT' : 'AI-LOG' }}
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- SECTION 5: AI Activity Analysis --}}
        <div class="lg:col-span-1">
            <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)] sticky top-28">
                <h3 class="font-extrabold text-slate-800 text-lg mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-purple-600">insights</span> Analisis Aktivitas AI
                </h3>

                <div class="space-y-5">
                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Aktivitas Dominan Hari Ini</p>
                        <div class="bg-purple-50 text-purple-700 px-4 py-3 rounded-xl border border-purple-100 font-bold flex items-center gap-2 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">toys</span> 🧸 Bermain
                        </div>
                    </div>

                    <hr class="border-slate-100">

                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2 text-sm font-bold text-slate-700">
                                <div class="w-7 h-7 rounded-lg bg-pink-100 text-pink-600 flex items-center justify-center border border-pink-200"><span class="material-symbols-outlined text-[16px]">toys</span></div>
                                Bermain
                            </div>
                            <span class="text-sm font-black text-slate-900 bg-slate-50 px-2 py-1 rounded-lg border border-slate-100">3 Jam</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2 text-sm font-bold text-slate-700">
                                <div class="w-7 h-7 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center border border-blue-200"><span class="material-symbols-outlined text-[16px]">school</span></div>
                                Belajar
                            </div>
                            <span class="text-sm font-black text-slate-900 bg-slate-50 px-2 py-1 rounded-lg border border-slate-100">2 Jam</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2 text-sm font-bold text-slate-700">
                                <div class="w-7 h-7 rounded-lg bg-indigo-100 text-indigo-600 flex items-center justify-center border border-indigo-200"><span class="material-symbols-outlined text-[16px]">bedtime</span></div>
                                Tidur
                            </div>
                            <span class="text-sm font-black text-slate-900 bg-slate-50 px-2 py-1 rounded-lg border border-slate-100">1J 30M</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2 text-sm font-bold text-slate-700">
                                <div class="w-7 h-7 rounded-lg bg-orange-100 text-orange-600 flex items-center justify-center border border-orange-200"><span class="material-symbols-outlined text-[16px]">restaurant</span></div>
                                Makan
                            </div>
                            <span class="text-sm font-black text-slate-900 bg-slate-50 px-2 py-1 rounded-lg border border-slate-100">45 Menit</span>
                        </div>
                    </div>

                    <hr class="border-slate-100">

                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Interaksi Sosial</p>
                        <div class="bg-green-50 text-green-700 px-4 py-3 rounded-xl border border-green-100 font-bold flex items-center justify-between shadow-sm">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-[20px]">diversity_1</span> Sangat Baik
                            </div>
                            <div class="flex gap-1">
                                <span class="w-1.5 h-4 bg-green-500 rounded-full"></span>
                                <span class="w-1.5 h-4 bg-green-500 rounded-full"></span>
                                <span class="w-1.5 h-4 bg-green-500 rounded-full"></span>
                                <span class="w-1.5 h-4 bg-green-500 rounded-full"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- SECTION 6: Detail Alert Modal --}}
<div id="modal-alert-detail" class="fixed inset-0 z-50 hidden opacity-0 transition-opacity duration-300">
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeModal('modal-alert-detail')"></div>
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
        <div class="relative bg-white rounded-[2rem] text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:max-w-lg w-full scale-95 opacity-0 duration-300" id="modal-alert-detail-content">
            
            <div class="bg-red-600 px-6 py-5 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center text-white">
                        <span class="material-symbols-outlined">crisis_alert</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-extrabold text-white">Detail Insiden AI</h3>
                        <p class="text-red-100 text-xs font-medium mt-0.5 tracking-wider">TERDETEKSI SECARA OTOMATIS</p>
                    </div>
                </div>
                <button onclick="closeModal('modal-alert-detail')" class="text-white/80 hover:text-white hover:bg-white/20 p-2 rounded-full transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            
            <div class="p-6">
                {{-- Snapshot --}}
                <div class="w-full h-48 bg-slate-100 rounded-2xl border-2 border-red-100 overflow-hidden relative mb-6 group cursor-pointer" onclick="alert('Memutar ulang rekaman CCTV...');">
                    <img src="https://images.unsplash.com/photo-1588079590623-289552d43dbb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/20 flex items-center justify-center">
                        <button class="bg-white/90 backdrop-blur text-red-600 p-4 rounded-full group-hover:scale-110 group-hover:bg-red-600 group-hover:text-white transition-all shadow-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-[32px]">play_arrow</span>
                        </button>
                    </div>
                    <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur text-white text-[10px] px-2 py-1 rounded-lg font-mono font-bold flex items-center gap-2">
                        <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span> REC CCTV-1
                    </div>
                </div>

                {{-- Detail Grid --}}
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-100">
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Jenis Kejadian</p>
                        <p class="text-sm font-bold text-slate-800">⚠ Menangis Karena Terjatuh</p>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-100">
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Waktu Kejadian</p>
                        <p class="text-sm font-bold text-slate-800">14:05 WIB</p>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-100">
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Lokasi</p>
                        <p class="text-sm font-bold text-slate-800">Ruang Bermain Utama</p>
                    </div>
                    <div class="bg-red-50 p-4 rounded-xl border border-red-100">
                        <p class="text-[11px] font-bold text-red-400 uppercase tracking-wider mb-1">Tingkat Risiko</p>
                        <p class="text-sm font-bold text-red-700">🔴 Tinggi (High Risk)</p>
                    </div>
                </div>
                
                <div class="mt-4 bg-yellow-50 p-4 rounded-xl border border-yellow-200 shadow-inner">
                    <p class="text-[11px] font-bold text-yellow-600 mb-1 uppercase tracking-wider">Status Penanganan</p>
                    <p class="text-sm font-bold text-yellow-800 flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">pending</span> 🟡 Sedang Ditangani Pengasuh (Bu Sari)</p>
                </div>
            </div>
            
            <div class="px-6 py-4 bg-slate-50 flex justify-end gap-3 border-t border-slate-100">
                <button onclick="closeModal('modal-alert-detail')" class="px-5 py-2.5 rounded-xl text-sm font-bold text-slate-600 hover:bg-slate-200 transition-colors">Tutup</button>
                <button onclick="alert('Memanggil Pengasuh...');" class="bg-red-600 text-white px-6 py-2.5 rounded-xl text-sm font-extrabold hover:bg-red-700 transition-all shadow-lg shadow-red-600/30 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">call</span> Hubungi Pengasuh
                </button>
            </div>
            
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Tab Filter Logic
    function setFilter(childId) {
        // Reset buttons
        document.querySelectorAll('button[id^="btn-filter-"]').forEach(btn => {
            btn.classList.remove('bg-slate-800', 'text-white', 'shadow-lg');
            btn.classList.add('bg-white', 'text-slate-500', 'border', 'border-slate-200');
        });
        
        // Active button
        const activeBtn = document.getElementById('btn-filter-' + childId);
        if(activeBtn) {
            activeBtn.classList.remove('bg-white', 'text-slate-500', 'border', 'border-slate-200');
            activeBtn.classList.add('bg-slate-800', 'text-white', 'shadow-lg', 'shadow-slate-800/20');
        }
        
        // Filter cards
        const cards = document.querySelectorAll('.activity-card');
        cards.forEach(card => {
            if (childId === 'all' || card.dataset.child === childId) {
                card.style.display = 'block';
                setTimeout(() => card.style.opacity = '1', 50);
            } else {
                card.style.opacity = '0';
                setTimeout(() => card.style.display = 'none', 300);
            }
        });
    }

    // Modal Logic
    function openModal(id) {
        const modal = document.getElementById(id);
        const content = document.getElementById(id + '-content');
        
        modal.classList.remove('hidden');
        void modal.offsetWidth; // Force reflow
        
        modal.classList.remove('opacity-0');
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        const content = document.getElementById(id + '-content');
        
        modal.classList.add('opacity-0');
        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-95', 'opacity-0');
        
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }
</script>
@endsection
