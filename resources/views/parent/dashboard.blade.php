@extends('layouts.parent')

@section('title', 'Dashboard Utama')
@section('header_title', 'Selamat datang, ' . auth()->user()->name . '! 👋')
@section('header_subtitle', 'Pantau tumbuh kembang anak Anda hari ini')

@section('content')
    {{-- STATS --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
      <div class="card p-6 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600">
          <span class="material-symbols-outlined text-2xl">child_care</span>
        </div>
        <div>
          <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide">Jumlah Anak</p>
          <p class="text-3xl font-black text-slate-800">2</p>
          <p class="text-xs text-green-600 font-semibold mt-0.5">✓ Semua aktif</p>
        </div>
      </div>
      <div class="card p-6 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600">
          <span class="material-symbols-outlined text-2xl">calendar_month</span>
        </div>
        <div>
          <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide">Aktivitas Hari Ini</p>
          <p class="text-3xl font-black text-slate-800">5</p>
          <p class="text-xs text-slate-400 font-semibold mt-0.5">Diperbarui 10 menit lalu</p>
        </div>
      </div>
      <div class="card p-6 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center text-green-600">
          <span class="material-symbols-outlined text-2xl">mood</span>
        </div>
        <div>
          <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide">Suasana Hati</p>
          <p class="text-3xl font-black text-slate-800">😊</p>
          <p class="text-xs text-green-600 font-semibold mt-0.5">Ceria & aktif</p>
        </div>
      </div>
    </div>

    {{-- AKTIVITAS TERBARU --}}
    <div class="card p-6 mb-5">
      <div class="flex items-center justify-between mb-5">
        <h3 class="font-bold text-slate-800">Aktivitas Terbaru Anak</h3>
        <a href="{{ route('parent.activity') }}" class="text-amber-600 text-sm font-semibold hover:underline">Lihat semua</a>
      </div>
      <div class="space-y-4">
        @foreach([
          ['icon'=>'restaurant','color'=>'bg-orange-50 text-orange-500','title'=>'Makan Siang','desc'=>'Habis 1 porsi penuh — porsi baik!','time'=>'12:30','badge'=>'Baik','badgeColor'=>'bg-green-100 text-green-700'],
          ['icon'=>'bedtime','color'=>'bg-blue-50 text-blue-500','title'=>'Tidur Siang','desc'=>'Durasi tidur: 1 jam 45 menit','time'=>'13:00','badge'=>'Normal','badgeColor'=>'bg-blue-100 text-blue-700'],
          ['icon'=>'sports_soccer','color'=>'bg-purple-50 text-purple-500','title'=>'Bermain Luar','desc'=>'Aktif bermain bersama teman-teman','time'=>'15:30','badge'=>'Aktif','badgeColor'=>'bg-purple-100 text-purple-700'],
        ] as $item)
        <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition-colors">
          <div class="w-11 h-11 rounded-xl {{ $item['color'] }} flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-xl">{{ $item['icon'] }}</span>
          </div>
          <div class="flex-1">
            <p class="font-semibold text-slate-800 text-sm">{{ $item['title'] }}</p>
            <p class="text-slate-400 text-xs">{{ $item['desc'] }}</p>
          </div>
          <div class="text-right">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold {{ $item['badgeColor'] }}">{{ $item['badge'] }}</span>
            <p class="text-slate-300 text-xs mt-1">{{ $item['time'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{-- PESAN PENGASUH --}}
    <div class="card p-6">
      <h3 class="font-bold text-slate-800 mb-4">Pesan dari Pengasuh</h3>
      <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex gap-3">
        <div class="w-9 h-9 bg-amber-100 rounded-full flex items-center justify-center shrink-0">
          <span class="material-symbols-outlined text-amber-700 text-[18px]">person</span>
        </div>
        <div>
          <p class="font-semibold text-sm text-slate-800">Bu Sari (Pengasuh)</p>
          <p class="text-slate-600 text-sm mt-1">"Hari ini Dinda sangat ceria dan aktif bermain. Makannya juga habis. Tidak ada keluhan kesehatan."</p>
          <p class="text-slate-400 text-xs mt-2">Hari ini, 15:45</p>
        </div>
      </div>
    </div>
@endsection
