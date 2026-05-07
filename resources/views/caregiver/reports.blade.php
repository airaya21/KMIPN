@extends('layouts.caregiver')

@section('title', 'Laporan')
@section('header_title', 'Laporan Harian & Insiden')
@section('header_subtitle', 'Kelola laporan perkembangan harian dan catatan khusus')

@section('content')
<div class="space-y-6">
    {{-- QUICK ACTIONS --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="card p-6 border-l-4 border-l-green-500">
            <div class="flex items-center gap-4 mb-4">
                <div class="w-10 h-10 rounded-xl bg-green-50 text-green-600 flex items-center justify-center">
                    <span class="material-symbols-outlined">summarize</span>
                </div>
                <h3 class="font-bold text-slate-800">Laporan Harian</h3>
            </div>
            <p class="text-xs text-slate-500 mb-6">Ringkasan aktivitas harian untuk seluruh anak asuh Anda. Laporan ini akan dikirimkan ke orang tua di akhir hari.</p>
            <button class="w-full py-3 bg-green-600 text-white rounded-xl text-xs font-bold hover:bg-green-700 transition-all">Buat Laporan Hari Ini</button>
        </div>

        <div class="card p-6 border-l-4 border-l-red-500">
            <div class="flex items-center gap-4 mb-4">
                <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center">
                    <span class="material-symbols-outlined">report_problem</span>
                </div>
                <h3 class="font-bold text-slate-800">Laporan Insiden</h3>
            </div>
            <p class="text-xs text-slate-500 mb-6">Catat kejadian mendadak atau kondisi mendesak (contoh: anak demam tiba-tiba, cedera saat bermain, dll).</p>
            <button class="w-full py-3 bg-red-600 text-white rounded-xl text-xs font-bold hover:bg-red-700 transition-all">Laporkan Insiden</button>
        </div>
    </div>

    {{-- RIWAYAT LAPORAN --}}
    <div class="card p-6">
        <h3 class="font-bold text-slate-800 mb-6">Riwayat Laporan Terkini</h3>
        <div class="space-y-4">
            @foreach([
                ['type' => 'Harian', 'child' => 'Semua Anak', 'date' => 'Kemarin, 17:00', 'status' => 'Terkirim', 'color' => 'green'],
                ['type' => 'Insiden', 'child' => 'Leo Brown', 'date' => '30 April, 10:20', 'status' => 'Review Admin', 'color' => 'amber'],
                ['type' => 'Harian', 'child' => 'Semua Anak', 'date' => '30 April, 17:00', 'status' => 'Terkirim', 'color' => 'green'],
                ['type' => 'Harian', 'child' => 'Semua Anak', 'date' => '29 April, 17:00', 'status' => 'Terkirim', 'color' => 'green'],
            ] as $rep)
            <div class="flex items-center gap-4 p-4 rounded-2xl border border-slate-50 bg-slate-50/30 hover:bg-slate-50 transition-all cursor-pointer">
                <div class="w-12 h-12 rounded-xl bg-white border border-slate-100 flex items-center justify-center text-slate-400">
                    <span class="material-symbols-outlined">{{ $rep['type'] == 'Harian' ? 'assignment' : 'warning' }}</span>
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2">
                        <span class="text-[9px] font-black uppercase text-slate-400 bg-white border border-slate-100 px-1.5 py-0.5 rounded">{{ $rep['type'] }}</span>
                        <h4 class="text-sm font-bold text-slate-700">{{ $rep['child'] }}</h4>
                    </div>
                    <p class="text-[10px] text-slate-400 font-bold uppercase mt-1">{{ $rep['date'] }}</p>
                </div>
                <div class="text-right">
                    <span class="text-[9px] font-black uppercase px-2 py-1 rounded bg-{{ $rep['color'] }}-100 text-{{ $rep['color'] }}-700">{{ $rep['status'] }}</span>
                </div>
                <button class="w-8 h-8 rounded-full flex items-center justify-center text-slate-300 hover:text-green-600 transition-all">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
            @endforeach
        </div>
        <div class="mt-6 pt-6 border-t border-slate-50 text-center">
            <button class="text-xs font-bold text-green-700 hover:underline">Lihat Semua Riwayat Laporan</button>
        </div>
    </div>
</div>
@endsection
