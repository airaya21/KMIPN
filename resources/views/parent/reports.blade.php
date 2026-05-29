@extends('layouts.parent')

@section('title', 'Laporan & Dokumen')
@section('header_title', 'Laporan Anak')
@section('header_subtitle', 'Tinjau laporan perkembangan harian, mingguan, dan bulanan')

@section('content')
<div class="space-y-8 animate-fade-in-up" id="app-container">
    {{-- RINGKASAN --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        {{-- Card 1: Milestone --}}
        <div class="bg-blue-600 rounded-3xl p-8 text-white relative overflow-hidden shadow-xl shadow-blue-600/20 lg:col-span-2 flex flex-col justify-between">
            {{-- Background Accent --}}
            <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
            
            <div class="relative z-10 mb-8">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <span class="bg-[#FFD600] text-blue-900 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full mb-3 inline-block shadow-sm">Bulan Ini</span>
                        <h3 class="text-2xl font-extrabold tracking-tight">Perkembangan Sangat Baik!</h3>
                    </div>
                    <div class="w-12 h-12 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/20">
                        <span class="material-symbols-outlined text-[#FFD600] text-[28px]">stars</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm max-w-md leading-relaxed font-medium">Dinda dan Arka menunjukkan peningkatan signifikan dalam motorik kasar dan interaksi sosial bulan ini.</p>
            </div>
            
            <div class="relative z-10 grid grid-cols-2 gap-4">
                <div class="bg-black/10 backdrop-blur-sm border border-white/10 rounded-2xl p-4 hover:bg-black/20 transition-colors">
                    <p class="text-blue-200 text-[10px] font-bold uppercase tracking-wider mb-1">Rata-rata Tidur Siang</p>
                    <div class="flex items-end gap-2">
                        <p class="text-3xl font-black text-white tracking-tight">95<span class="text-lg font-bold text-blue-200 ml-1">mnt</span></p>
                    </div>
                </div>
                <div class="bg-black/10 backdrop-blur-sm border border-white/10 rounded-2xl p-4 hover:bg-black/20 transition-colors">
                    <p class="text-blue-200 text-[10px] font-bold uppercase tracking-wider mb-1">Tingkat Kehadiran</p>
                    <div class="flex items-end gap-2">
                        <p class="text-3xl font-black text-[#FFD600] tracking-tight">100<span class="text-lg font-bold text-blue-200 ml-1">%</span></p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 2: Fisik --}}
        <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)] flex flex-col justify-center relative overflow-hidden group">
            <h4 class="font-extrabold text-slate-800 text-lg mb-1">Pengukuran Fisik</h4>
            <p class="text-xs text-slate-500 font-medium mb-6">Pembaruan terakhir: 25 Mei 2026</p>
            
            <div class="space-y-4 relative z-10">
                <div class="flex justify-between items-center bg-slate-50 p-4 rounded-2xl border border-slate-100 group-hover:border-blue-100 transition-colors">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                            <span class="material-symbols-outlined text-[20px]">monitor_weight</span>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Berat (Dinda)</p>
                            <p class="text-sm font-bold text-slate-800">14.2 kg</p>
                        </div>
                    </div>
                    <span class="text-[11px] font-black text-green-600 bg-green-100 px-2.5 py-1 rounded-lg">+0.4kg</span>
                </div>
                <div class="flex justify-between items-center bg-slate-50 p-4 rounded-2xl border border-slate-100 group-hover:border-blue-100 transition-colors">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                            <span class="material-symbols-outlined text-[20px]">height</span>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Tinggi (Dinda)</p>
                            <p class="text-sm font-bold text-slate-800">98.5 cm</p>
                        </div>
                    </div>
                    <span class="text-[11px] font-black text-green-600 bg-green-100 px-2.5 py-1 rounded-lg">+1.2cm</span>
                </div>
            </div>
        </div>
    </div>

    {{-- DAFTAR LAPORAN --}}
    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)]">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-8 gap-4">
            <div>
                <h3 class="font-extrabold text-slate-800 text-xl">Arsip Laporan Anak</h3>
                <p class="text-sm text-slate-500 font-medium mt-1">Unduh laporan resmi dari pengasuh dan sistem</p>
            </div>
            <div class="flex items-center gap-3 w-full sm:w-auto">
                <div class="relative flex-1 sm:flex-none">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">search</span>
                    <input type="text" placeholder="Cari laporan..." class="pl-10 pr-4 py-3 rounded-xl border border-slate-200 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all w-full sm:w-64 font-medium text-slate-700">
                </div>
                <button class="w-12 h-12 rounded-xl bg-slate-50 border border-slate-200 text-slate-600 flex items-center justify-center hover:bg-blue-50 hover:text-blue-600 hover:border-blue-200 transition-all shrink-0 shadow-sm">
                    <span class="material-symbols-outlined">filter_list</span>
                </button>
            </div>
        </div>
        
        <div class="space-y-4">
            @php
                $reports = [
                    ['name' => 'Laporan Perkembangan Mingguan - Minggu ke-4 Mei 2026', 'child' => 'Dinda', 'date' => '28 Mei 2026', 'size' => '1.4 MB', 'badge' => 'bg-pink-50 text-pink-700'],
                    ['name' => 'Laporan Aktivitas Harian (Auto-Generated)', 'child' => 'Arka', 'date' => '28 Mei 2026', 'size' => '850 KB', 'badge' => 'bg-blue-50 text-blue-700'],
                    ['name' => 'Laporan Perkembangan Bulanan - April 2026', 'child' => 'Semua Anak', 'date' => '30 April 2026', 'size' => '3.2 MB', 'badge' => 'bg-slate-100 text-slate-600'],
                    ['name' => 'Catatan Kesehatan Bulanan', 'child' => 'Arka', 'date' => '15 April 2026', 'size' => '920 KB', 'badge' => 'bg-blue-50 text-blue-700'],
                    ['name' => 'Laporan Perkembangan Mingguan - Minggu ke-1 April 2026', 'child' => 'Dinda', 'date' => '07 April 2026', 'size' => '1.1 MB', 'badge' => 'bg-pink-50 text-pink-700'],
                ];
            @endphp

            @foreach($reports as $report)
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-5 rounded-2xl border border-slate-100 hover:border-blue-200 hover:shadow-[0_8px_30px_rgba(37,99,235,0.08)] transition-all group bg-white">
                <div class="flex items-center gap-5">
                    <div class="w-14 h-14 rounded-2xl bg-red-50 text-red-500 flex items-center justify-center shrink-0 group-hover:bg-red-500 group-hover:text-white transition-colors shadow-sm">
                        <span class="material-symbols-outlined text-[28px]">picture_as_pdf</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1.5">
                            <span class="text-[10px] font-black uppercase {{ $report['badge'] }} px-2.5 py-0.5 rounded-md tracking-widest">{{ $report['child'] }}</span>
                            <p class="text-[10px] font-bold text-slate-400 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">calendar_today</span> {{ $report['date'] }}
                            </p>
                        </div>
                        <p class="text-sm font-extrabold text-slate-800 group-hover:text-blue-600 transition-colors">{{ $report['name'] }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 pl-14 sm:pl-0">
                    <span class="text-[11px] font-black tracking-wider text-slate-400 bg-slate-50 border border-slate-100 px-3 py-1.5 rounded-lg">{{ $report['size'] }}</span>
                    <button class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all shadow-sm">
                        <span class="material-symbols-outlined text-[20px]">download</span>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
