@extends('layouts.parent')

@section('title', 'Laporan Perkembangan')
@section('header_title', 'Laporan Berkala')
@section('header_subtitle', 'Tinjau perkembangan mingguan dan bulanan anak Anda')

@section('content')
<div class="space-y-8">
    {{-- RINGKASAN --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="card p-8 bg-gradient-to-br from-amber-500 to-amber-600 text-white relative overflow-hidden">
            <div class="relative z-10">
                <p class="text-amber-100 text-[10px] font-bold uppercase tracking-widest mb-1">Status Gizi (Bulan Ini)</p>
                <h3 class="text-2xl font-black mb-4">Sangat Baik</h3>
                <div class="flex gap-4">
                    <div class="bg-white/20 backdrop-blur-sm p-3 rounded-xl flex-1">
                        <p class="text-[10px] font-bold uppercase opacity-80">Berat Badan</p>
                        <p class="text-lg font-black">+0.4kg</p>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm p-3 rounded-xl flex-1">
                        <p class="text-[10px] font-bold uppercase opacity-80">Tinggi Badan</p>
                        <p class="text-lg font-black">+1.2cm</p>
                    </div>
                </div>
            </div>
            <span class="material-symbols-outlined absolute -right-6 -bottom-6 text-[180px] opacity-10">monitoring</span>
        </div>

        <div class="card p-8 flex flex-col justify-center">
            <h4 class="font-bold text-slate-800 mb-2">Pencapaian Milestone</h4>
            <p class="text-sm text-slate-400 mb-6">Dinda telah mencapai 4 dari 5 target perkembangan bulan ini.</p>
            <div class="w-full bg-slate-50 h-3 rounded-full overflow-hidden">
                <div class="h-full bg-green-500 rounded-full" style="width: 80%"></div>
            </div>
            <p class="text-[10px] font-bold text-slate-400 mt-3 text-right">80% SELESAI</p>
        </div>
    </div>

    {{-- DAFTAR LAPORAN --}}
    <div class="card p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="font-bold text-slate-800">Riwayat Laporan PDF</h3>
            <button class="text-amber-600 text-sm font-bold flex items-center gap-1 hover:underline">
                <span class="material-symbols-outlined text-lg">filter_list</span> Filter
            </button>
        </div>
        
        <div class="space-y-3">
            @foreach([
                ['name' => 'Laporan Mingguan - Minggu ke-4 April 2024', 'child' => 'Dinda', 'date' => '28 April 2024', 'size' => '1.4 MB'],
                ['name' => 'Laporan Perkembangan Bulanan - Maret 2024', 'child' => 'Semua Anak', 'date' => '31 Maret 2024', 'size' => '3.2 MB'],
                ['name' => 'Hasil Pemeriksaan Kesehatan Berkala', 'child' => 'Arka', 'date' => '15 Maret 2024', 'size' => '890 KB'],
                ['name' => 'Laporan Mingguan - Minggu ke-1 Maret 2024', 'child' => 'Dinda', 'date' => '07 Maret 2024', 'size' => '1.1 MB'],
            ] as $report)
            <div class="flex items-center gap-4 p-4 rounded-2xl border border-slate-50 hover:bg-slate-50 transition-all cursor-pointer group">
                <div class="w-12 h-12 rounded-xl bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined">picture_as_pdf</span>
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2">
                        <span class="text-[9px] font-black uppercase bg-slate-100 text-slate-500 px-1.5 py-0.5 rounded">{{ $report['child'] }}</span>
                        <p class="text-sm font-bold text-slate-700 group-hover:text-amber-600 transition-colors">{{ $report['name'] }}</p>
                    </div>
                    <p class="text-[10px] text-slate-400 font-bold uppercase mt-0.5">{{ $report['date'] }} • {{ $report['size'] }}</p>
                </div>
                <button class="w-10 h-10 rounded-full flex items-center justify-center text-slate-400 hover:bg-amber-50 hover:text-amber-600 transition-all">
                    <span class="material-symbols-outlined">download</span>
                </button>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
