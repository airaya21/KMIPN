@extends('layouts.parent')

@section('title', 'Aktivitas Harian')
@section('header_title', 'Linimasa Aktivitas')
@section('header_subtitle', 'Pantau kegiatan harian anak Anda secara real-time')

@section('content')
<div class="max-w-3xl mx-auto space-y-8">
    {{-- FILTER ANAK --}}
    <div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide">
        <button class="bg-amber-600 text-white px-6 py-2.5 rounded-full font-bold text-sm whitespace-nowrap shadow-md shadow-amber-200">Semua Anak</button>
        <button class="bg-white text-slate-500 border border-slate-100 px-6 py-2.5 rounded-full font-bold text-sm whitespace-nowrap hover:bg-slate-50 transition-all">Dinda</button>
        <button class="bg-white text-slate-500 border border-slate-100 px-6 py-2.5 rounded-full font-bold text-sm whitespace-nowrap hover:bg-slate-50 transition-all">Arka</button>
    </div>

    {{-- TIMELINE --}}
    <div class="space-y-8 relative before:content-[''] before:absolute before:left-4 before:top-2 before:bottom-0 before:w-0.5 before:bg-slate-100">
        @foreach([
            ['time' => '15:30', 'child' => 'Dinda', 'title' => 'Bermain di Taman', 'desc' => 'Dinda sangat aktif bermain perosotan dan berinteraksi dengan teman sebaya.', 'icon' => 'sports_soccer', 'color' => 'bg-purple-500'],
            ['time' => '13:00', 'child' => 'Dinda', 'title' => 'Tidur Siang', 'desc' => 'Tidur pulas selama 1 jam 45 menit. Bangun dalam kondisi segar.', 'icon' => 'bedtime', 'color' => 'bg-blue-500'],
            ['time' => '12:15', 'child' => 'Arka', 'title' => 'Makan Siang', 'desc' => 'Bubur tim daging habis 1 porsi. Minum susu 120ml.', 'icon' => 'restaurant', 'color' => 'bg-orange-500'],
            ['time' => '10:00', 'child' => 'Dinda', 'title' => 'Snack Pagi', 'desc' => 'Makan buah potong (pepaya & melon).', 'icon' => 'apple', 'color' => 'bg-red-500'],
            ['time' => '08:30', 'child' => 'Arka', 'title' => 'Tiba di Daycare', 'desc' => 'Check-in berhasil. Suhu tubuh normal (36.5°C).', 'icon' => 'login', 'color' => 'bg-green-500'],
        ] as $activity)
        <div class="relative pl-12 group">
            <div class="absolute left-0 top-1 w-8 h-8 rounded-full {{ $activity['color'] }} flex items-center justify-center text-white shadow-lg shadow-current/20 z-10 transition-transform group-hover:scale-110">
                <span class="material-symbols-outlined text-[18px]">{{ $activity['icon'] }}</span>
            </div>
            <div class="card p-5 group-hover:border-amber-200 transition-all">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <span class="text-[10px] font-black uppercase tracking-widest text-amber-600 bg-amber-50 px-2 py-0.5 rounded">{{ $activity['child'] }}</span>
                        <h4 class="font-bold text-slate-800 mt-1">{{ $activity['title'] }}</h4>
                    </div>
                    <span class="text-xs font-bold text-slate-300">{{ $activity['time'] }}</span>
                </div>
                <p class="text-sm text-slate-500 leading-relaxed">{{ $activity['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
