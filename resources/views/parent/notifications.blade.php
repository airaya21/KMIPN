@extends('layouts.parent')

@section('title', 'Notifikasi')
@section('header_title', 'Notifikasi Anda')
@section('header_subtitle', 'Pemberitahuan, peringatan AI, dan pesan penting')

@section('content')
<div class="space-y-6 animate-fade-in-up" id="app-container">
    
    <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)]">
        <div class="flex items-center justify-between mb-8">
            <h3 class="font-extrabold text-slate-800 text-xl">Hari Ini</h3>
            <button class="text-blue-600 text-sm font-bold hover:text-blue-700 transition-colors flex items-center gap-2 bg-blue-50 hover:bg-blue-100 px-4 py-2 rounded-xl">
                <span class="material-symbols-outlined text-[18px]">done_all</span> Tandai semua dibaca
            </button>
        </div>

        <div class="space-y-4">
            {{-- Alert --}}
            <div class="relative p-5 rounded-2xl bg-red-50 border border-red-100 flex items-start gap-4 transition-all hover:shadow-md hover:border-red-200 group cursor-pointer">
                <span class="absolute top-1/2 -translate-y-1/2 left-0 w-1 h-12 bg-red-500 rounded-r-full"></span>
                <div class="w-12 h-12 rounded-full bg-white text-red-600 flex items-center justify-center shrink-0 shadow-sm border border-red-100 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-[24px]">crisis_alert</span>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h4 class="text-base font-extrabold text-slate-800">Peringatan: Insiden Terdeteksi AI</h4>
                        <span class="text-[10px] font-bold text-slate-400 bg-white px-2 py-1 rounded-md">14:05</span>
                    </div>
                    <p class="text-sm font-medium text-slate-600 leading-relaxed">Sistem Audio & CCTV mendeteksi Dinda menangis karena terjatuh di Ruang Bermain. Segera pantau CCTV atau hubungi pengasuh.</p>
                </div>
                <div class="w-2 h-2 rounded-full bg-red-500 mt-2"></div>
            </div>

            {{-- Info / Invoice --}}
            <div class="relative p-5 rounded-2xl bg-white border border-slate-100 flex items-start gap-4 transition-all hover:shadow-md hover:border-slate-200 group cursor-pointer">
                <div class="w-12 h-12 rounded-full bg-[#FFD600]/20 text-[#FFD600] flex items-center justify-center shrink-0 shadow-sm border border-[#FFD600]/30 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-[24px]">receipt_long</span>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h4 class="text-base font-extrabold text-slate-800">Tagihan SPP Mendatang</h4>
                        <span class="text-[10px] font-bold text-slate-400 bg-slate-50 px-2 py-1 rounded-md">10:30</span>
                    </div>
                    <p class="text-sm font-medium text-slate-500 leading-relaxed">Pemberitahuan: Tagihan SPP bulan Juni untuk Dinda dan Arka akan jatuh tempo dalam 3 hari.</p>
                </div>
                <div class="w-2 h-2 rounded-full bg-blue-500 mt-2"></div>
            </div>

            {{-- Message --}}
            <div class="relative p-5 rounded-2xl bg-white border border-slate-100 flex items-start gap-4 transition-all hover:shadow-md hover:border-slate-200 group cursor-pointer">
                <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 shadow-sm border border-blue-100 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-[24px]">forum</span>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h4 class="text-base font-bold text-slate-700">Pesan dari Bu Sari</h4>
                        <span class="text-[10px] font-bold text-slate-400 bg-slate-50 px-2 py-1 rounded-md">08:45</span>
                    </div>
                    <p class="text-sm font-medium text-slate-500 leading-relaxed">"Selamat pagi Pak, Dinda dan Arka sudah tiba di daycare. Pengukuran suhu normal."</p>
                </div>
                <div class="w-2 h-2 rounded-full bg-transparent mt-2"></div>
            </div>
        </div>

        <h3 class="font-extrabold text-slate-800 text-lg mt-10 mb-6">Kemarin</h3>
        
        <div class="space-y-4">
            {{-- Document --}}
            <div class="relative p-5 rounded-2xl bg-white border border-slate-100 flex items-start gap-4 transition-all hover:shadow-md hover:border-slate-200 group cursor-pointer opacity-75 hover:opacity-100">
                <div class="w-12 h-12 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center shrink-0 shadow-sm border border-slate-200 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-[24px]">description</span>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h4 class="text-base font-bold text-slate-700">Laporan Perkembangan Mingguan</h4>
                        <span class="text-[10px] font-bold text-slate-400 bg-slate-50 px-2 py-1 rounded-md">28 Mei</span>
                    </div>
                    <p class="text-sm font-medium text-slate-500 leading-relaxed">Laporan mingguan anak Anda sudah siap diunduh dalam format PDF.</p>
                </div>
            </div>

            {{-- System --}}
            <div class="relative p-5 rounded-2xl bg-white border border-slate-100 flex items-start gap-4 transition-all hover:shadow-md hover:border-slate-200 group cursor-pointer opacity-75 hover:opacity-100">
                <div class="w-12 h-12 rounded-full bg-green-50 text-green-600 flex items-center justify-center shrink-0 shadow-sm border border-green-100 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-[24px]">how_to_reg</span>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h4 class="text-base font-bold text-slate-700">Verifikasi Dokumen Berhasil</h4>
                        <span class="text-[10px] font-bold text-slate-400 bg-slate-50 px-2 py-1 rounded-md">28 Mei</span>
                    </div>
                    <p class="text-sm font-medium text-slate-500 leading-relaxed">Dokumen identitas (Kartu Keluarga) yang Anda unggah telah diverifikasi oleh admin.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
