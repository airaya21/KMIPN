@extends('layouts.parent')

@section('title', 'Data Anak')
@section('header_title', 'Profil & Informasi Anak')
@section('header_subtitle', 'Kelola informasi dasar dan riwayat kesehatan anak Anda')

@section('content')
<div class="space-y-6">
    <div class="flex justify-between items-center">
        <h3 class="font-bold text-slate-800 text-lg">Daftar Anak</h3>
        <button class="bg-amber-600 text-white px-5 py-2.5 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-amber-700 transition-all shadow-md shadow-amber-200">
            <span class="material-symbols-outlined text-lg">add</span> Tambah Anak
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach([
            ['name' => 'Dinda Santoso', 'age' => '3 tahun 2 bulan', 'gender' => 'Perempuan', 'blood' => 'O', 'weight' => '14.5 kg', 'height' => '95 cm'],
            ['name' => 'Arka Santoso', 'age' => '1 tahun 4 bulan', 'gender' => 'Laki-laki', 'blood' => 'O', 'weight' => '10.2 kg', 'height' => '80 cm'],
        ] as $child)
        <div class="card p-6">
            <div class="flex items-start justify-between mb-6">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 rounded-2xl bg-amber-100 flex items-center justify-center text-amber-700 font-black text-xl">
                        {{ substr($child['name'], 0, 1) }}
                    </div>
                    <div>
                        <h4 class="font-black text-slate-800 text-lg">{{ $child['name'] }}</h4>
                        <p class="text-slate-400 text-sm font-semibold">{{ $child['age'] }} • {{ $child['gender'] }}</p>
                    </div>
                </div>
                <button class="text-slate-400 hover:text-amber-600 transition-colors">
                    <span class="material-symbols-outlined">edit</span>
                </button>
            </div>
            
            <div class="grid grid-cols-3 gap-4 border-t border-slate-50 pt-6">
                <div class="text-center">
                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Gol. Darah</p>
                    <p class="text-sm font-black text-slate-700 mt-1">{{ $child['blood'] }}</p>
                </div>
                <div class="text-center border-x border-slate-100">
                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Berat</p>
                    <p class="text-sm font-black text-slate-700 mt-1">{{ $child['weight'] }}</p>
                </div>
                <div class="text-center">
                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Tinggi</p>
                    <p class="text-sm font-black text-slate-700 mt-1">{{ $child['height'] }}</p>
                </div>
            </div>

            <div class="mt-6 flex gap-2">
                <button class="flex-1 py-2 bg-slate-50 text-slate-600 rounded-lg text-xs font-bold hover:bg-slate-100 transition-all">Lihat Detail</button>
                <button class="flex-1 py-2 bg-amber-50 text-amber-700 rounded-lg text-xs font-bold hover:bg-amber-100 transition-all">Laporan Imunisasi</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
