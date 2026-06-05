@extends('layouts.parent')

@section('title', 'Dashboard Utama')
@section('header_title', 'Selamat datang, ' . (auth()->check() ? auth()->user()->name : 'Orang Tua') . '!')
@section('header_subtitle', 'Pantau tumbuh kembang anak Anda hari ini')

@section('content')
    <div class="animate-fade-in-up">
        {{-- STATS --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] transition-all duration-300 group cursor-default relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 rounded-bl-full -mr-4 -mt-4 opacity-50 group-hover:scale-110 transition-transform"></div>
                <div class="flex items-center gap-5 relative z-10">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:rotate-[10deg] transition-transform duration-300 ring-1 ring-blue-100">
                        <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">child_care</span>
                    </div>
                    <div>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-wider mb-1">Jumlah Anak</p>
                        <div class="flex items-baseline gap-2">
                            <p class="text-3xl font-black text-slate-800">2</p>
                        </div>
                        <p class="text-[11px] text-green-600 font-bold mt-1 flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">check_circle</span> Semua aktif
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] transition-all duration-300 group cursor-default relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-[#FFD600]/10 rounded-bl-full -mr-4 -mt-4 opacity-50 group-hover:scale-110 transition-transform"></div>
                <div class="flex items-center gap-5 relative z-10">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFD600]/10 flex items-center justify-center text-[#B29600] group-hover:-rotate-[10deg] transition-transform duration-300 ring-1 ring-[#FFD600]/20">
                        <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">calendar_month</span>
                    </div>
                    <div>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-wider mb-1">Aktivitas Hari Ini</p>
                        <p class="text-3xl font-black text-slate-800">5</p>
                        <p class="text-[11px] text-slate-400 font-bold mt-1 flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">schedule</span> Diperbarui 10 mnt lalu
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] transition-all duration-300 group cursor-default relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-green-50 rounded-bl-full -mr-4 -mt-4 opacity-50 group-hover:scale-110 transition-transform"></div>
                <div class="flex items-center gap-5 relative z-10">
                    <div class="w-14 h-14 rounded-2xl bg-green-50 flex items-center justify-center text-green-600 group-hover:scale-110 transition-transform duration-300 ring-1 ring-green-100">
                        <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">mood</span>
                    </div>
                    <div>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-wider mb-1">Suasana Hati</p>
                        <p class="text-3xl font-black text-slate-800">😊</p>
                        <p class="text-[11px] text-green-600 font-bold mt-1 flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">star</span> Ceria & aktif
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- AKTIVITAS TERBARU --}}
            <div class="lg:col-span-2 bg-white rounded-3xl p-7 border border-slate-100 shadow-[0_4px_24px_rgba(0,0,0,0.02)]">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-6 bg-[#FFD600] rounded-full"></div>
                        <h3 class="font-extrabold text-slate-800 text-lg tracking-tight">Aktivitas Terbaru Anak</h3>
                    </div>
                    <a href="{{ route('parent.activity') }}" class="text-blue-600 text-sm font-bold hover:text-blue-700 hover:underline flex items-center gap-1 transition-colors">
                        Lihat semua <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
                
                <div class="space-y-4">
                    @foreach([
                    ['icon'=>'restaurant','color'=>'bg-blue-50 text-blue-600','ring'=>'ring-blue-100','title'=>'Makan Siang','desc'=>'Habis 1 porsi penuh — porsi baik!','time'=>'12:30','badge'=>'Baik','badgeColor'=>'bg-green-100 text-green-700'],
                    ['icon'=>'bedtime','color'=>'bg-[#FFD600]/10 text-[#B29600]','ring'=>'ring-[#FFD600]/30','title'=>'Tidur Siang','desc'=>'Durasi tidur: 1 jam 45 menit','time'=>'13:00','badge'=>'Normal','badgeColor'=>'bg-blue-100 text-blue-700'],
                    ['icon'=>'sports_soccer','color'=>'bg-green-50 text-green-600','ring'=>'ring-green-100','title'=>'Bermain Luar','desc'=>'Aktif bermain bersama teman-teman','time'=>'15:30','badge'=>'Aktif','badgeColor'=>'bg-green-100 text-green-700'],
                    ] as $item)
                    <div class="flex items-center gap-4 p-4 rounded-2xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all duration-300 group cursor-pointer">
                        <div class="w-12 h-12 rounded-2xl {{ $item['color'] }} flex items-center justify-center shrink-0 ring-1 {{ $item['ring'] }} group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">{{ $item['icon'] }}</span>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-slate-800 text-[15px] mb-0.5 group-hover:text-blue-600 transition-colors">{{ $item['title'] }}</p>
                            <p class="text-slate-500 text-xs font-medium">{{ $item['desc'] }}</p>
                        </div>
                        <div class="text-right flex flex-col items-end">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wide {{ $item['badgeColor'] }}">{{ $item['badge'] }}</span>
                            <p class="text-slate-400 text-xs font-semibold mt-1.5">{{ $item['time'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- PESAN PENGASUH --}}
            <div class="bg-white rounded-3xl p-7 border border-slate-100 shadow-[0_4px_24px_rgba(0,0,0,0.02)] h-fit">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-2 h-6 bg-blue-500 rounded-full"></div>
                    <h3 class="font-extrabold text-slate-800 text-lg tracking-tight">Pesan Pengasuh</h3>
                </div>
                
                <div class="bg-blue-50/50 border border-blue-100 rounded-2xl p-5 relative overflow-hidden group hover:border-blue-200 transition-colors">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-blue-100 rounded-bl-full -mr-4 -mt-4 opacity-50"></div>
                    
                    <div class="flex gap-4 relative z-10">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 ring-4 ring-blue-50 shadow-sm">
                            <span class="material-symbols-outlined text-blue-600 text-[20px]" style="font-variation-settings: 'FILL' 1;">face</span>
                        </div>
                        <div>
                            <p class="font-extrabold text-sm text-slate-800">Bu Sari</p>
                            <p class="text-[10px] uppercase tracking-wider text-blue-600 font-bold mb-2">Pengasuh</p>
                            
                            <div class="bg-white p-3 rounded-xl rounded-tl-none border border-blue-50 shadow-sm mb-2 relative">
                                <p class="text-slate-600 text-xs leading-relaxed font-medium">"Hari ini Dinda sangat ceria dan aktif bermain. Makannya juga habis. Tidak ada keluhan kesehatan."</p>
                            </div>
                            
                            <p class="text-slate-400 text-[10px] font-bold flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">schedule</span> Hari ini, 15:45
                            </p>
                        </div>
                    </div>
                </div>
                
                <button class="w-full mt-4 py-3 bg-white border-2 border-slate-100 rounded-xl text-sm font-bold text-slate-600 hover:text-blue-600 hover:border-blue-100 hover:bg-blue-50 transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">chat</span>
                    Balas Pesan
                </button>
            </div>
        </div>
    </div>
@endsection
