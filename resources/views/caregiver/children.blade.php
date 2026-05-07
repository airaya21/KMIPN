@extends('layouts.caregiver')

@section('title', 'Anak Asuh')
@section('header_title', 'Daftar Anak Asuh')
@section('header_subtitle', 'Kelola informasi dan status kehadiran anak asuh Anda hari ini')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white p-6 rounded-3xl shadow-sm border border-slate-50">
        <div>
            <h3 class="font-bold text-slate-800">Kehadiran Hari Ini</h3>
            <p class="text-sm text-slate-400">Total 6 anak dalam tanggung jawab Anda</p>
        </div>
        <div class="flex gap-2">
            <span class="inline-flex items-center px-3 py-1 bg-green-50 text-green-700 text-xs font-bold rounded-full border border-green-100">
                <span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span> 6 Hadir
            </span>
            <span class="inline-flex items-center px-3 py-1 bg-slate-50 text-slate-400 text-xs font-bold rounded-full border border-slate-100">
                <span class="w-2 h-2 rounded-full bg-slate-300 mr-2"></span> 0 Izin
            </span>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach([
            ['name' => 'Ethan James', 'parent' => 'Bpk. James', 'mood' => 'Sedih', 'moodIcon' => 'sentiment_dissatisfied', 'moodColor' => 'text-red-500', 'lastAct' => 'Tiba di daycare (08:30)'],
            ['name' => 'Mia Lopez', 'parent' => 'Ibu Lopez', 'mood' => 'Ceria', 'moodIcon' => 'sentiment_very_satisfied', 'moodColor' => 'text-green-500', 'lastAct' => 'Bermain puzzle (10:15)'],
            ['name' => 'Oliver White', 'parent' => 'Ibu White', 'mood' => 'Biasa', 'moodIcon' => 'sentiment_neutral', 'moodColor' => 'text-blue-500', 'lastAct' => 'Snack pagi (09:45)'],
            ['name' => 'Sophia Chen', 'parent' => 'Bpk. Chen', 'mood' => 'Ceria', 'moodIcon' => 'sentiment_very_satisfied', 'moodColor' => 'text-green-500', 'lastAct' => 'Mewarnai (10:30)'],
            ['name' => 'Leo Brown', 'parent' => 'Ibu Brown', 'mood' => 'Mengantuk', 'moodIcon' => 'bedtime', 'moodColor' => 'text-amber-500', 'lastAct' => 'Minum susu (09:00)'],
            ['name' => 'Ava Wilson', 'parent' => 'Bpk. Wilson', 'mood' => 'Ceria', 'moodIcon' => 'sentiment_very_satisfied', 'moodColor' => 'text-green-500', 'lastAct' => 'Bermain balok (10:00)'],
        ] as $child)
        <div class="card p-5 group hover:border-green-200 transition-all">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-2xl bg-slate-100 flex items-center justify-center text-slate-600 font-black">
                        {{ substr($child['name'], 0, 1) }}{{ substr(strrchr($child['name'], ' '), 1, 1) }}
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-800 text-sm group-hover:text-green-700 transition-colors">{{ $child['name'] }}</h4>
                        <p class="text-[10px] text-slate-400 font-bold uppercase">{{ $child['parent'] }}</p>
                    </div>
                </div>
                <div class="flex flex-col items-end">
                    <span class="material-symbols-outlined {{ $child['moodColor'] }}">{{ $child['moodIcon'] }}</span>
                    <span class="text-[9px] font-bold text-slate-400 mt-0.5">{{ $child['mood'] }}</span>
                </div>
            </div>
            
            <div class="bg-slate-50 p-3 rounded-xl mb-4">
                <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider mb-1">Aktivitas Terakhir</p>
                <p class="text-xs font-semibold text-slate-600">{{ $child['lastAct'] }}</p>
            </div>

            <div class="flex gap-2">
                <button class="flex-1 py-2 bg-green-600 text-white rounded-xl text-[10px] font-bold hover:bg-green-700 transition-all shadow-sm shadow-green-200">Catat Aktivitas</button>
                <button class="px-3 py-2 bg-white border border-slate-100 text-slate-400 rounded-xl hover:text-green-600 transition-all">
                    <span class="material-symbols-outlined text-sm">visibility</span>
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
