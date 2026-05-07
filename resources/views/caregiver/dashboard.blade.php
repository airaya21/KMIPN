@extends('layouts.caregiver')

@section('title', 'Dashboard Utama')
@section('header_title', 'Halo, ' . auth()->user()->name . '! 🤝')
@section('header_subtitle', 'Catat dan pantau aktivitas anak asuh Anda hari ini')

@section('content')
    {{-- STATS --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
      <div class="card p-6 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center text-green-600">
          <span class="material-symbols-outlined text-2xl">child_care</span>
        </div>
        <div>
          <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide">Anak Diasuh</p>
          <p class="text-3xl font-black text-slate-800">6</p>
          <p class="text-xs text-green-600 font-semibold mt-0.5">✓ Semua hadir</p>
        </div>
      </div>
      <div class="card p-6 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600">
          <span class="material-symbols-outlined text-2xl">edit_note</span>
        </div>
        <div>
          <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide">Aktivitas Dicatat</p>
          <p class="text-3xl font-black text-slate-800">12</p>
          <p class="text-xs text-slate-400 font-semibold mt-0.5">Dari 18 yang dijadwalkan</p>
        </div>
      </div>
      <div class="card p-6 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-500">
          <span class="material-symbols-outlined text-2xl">warning</span>
        </div>
        <div>
          <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide">Perlu Perhatian</p>
          <p class="text-3xl font-black text-red-600">1</p>
          <p class="text-xs text-red-500 font-semibold mt-0.5">Segera tindak lanjut</p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
      {{-- DAFTAR ANAK --}}
      <div class="lg:col-span-2 card p-6">
        <div class="flex items-center justify-between mb-5">
          <h3 class="font-bold text-slate-800">Anak Asuh Hari Ini</h3>
          <a href="{{ route('caregiver.children') }}" class="text-green-700 text-sm font-semibold hover:underline">Lihat semua</a>
        </div>
        <div class="space-y-3">
          @foreach([
            ['initials'=>'EJ','bg'=>'bg-blue-100','fg'=>'text-blue-700','name'=>'Ethan James','age'=>'3 tahun','mood'=>'😢','status'=>'Perlu perhatian','statusColor'=>'bg-red-100 text-red-700'],
            ['initials'=>'ML','bg'=>'bg-purple-100','fg'=>'text-purple-700','name'=>'Mia Lopez','age'=>'2 tahun 8 bulan','mood'=>'😊','status'=>'Baik','statusColor'=>'bg-green-100 text-green-700'],
            ['initials'=>'OW','bg'=>'bg-orange-100','fg'=>'text-orange-700','name'=>'Oliver White','age'=>'4 tahun','mood'=>'😐','status'=>'Normal','statusColor'=>'bg-yellow-100 text-yellow-700'],
            ['initials'=>'SC','bg'=>'bg-pink-100','fg'=>'text-pink-700','name'=>'Sophia Chen','age'=>'3 tahun 2 bulan','mood'=>'😊','status'=>'Sangat baik','statusColor'=>'bg-green-100 text-green-700'],
          ] as $child)
          <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition-colors">
            <div class="w-10 h-10 rounded-full {{ $child['bg'] }} {{ $child['fg'] }} shrink-0 flex items-center justify-center font-black text-xs">{{ $child['initials'] }}</div>
            <div class="flex-1">
              <p class="font-semibold text-slate-800 text-sm">{{ $child['name'] }}</p>
              <p class="text-slate-400 text-xs">{{ $child['age'] }}</p>
            </div>
            <span class="text-xl">{{ $child['mood'] }}</span>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold {{ $child['statusColor'] }}">{{ $child['status'] }}</span>
          </div>
          @endforeach
        </div>
      </div>

      {{-- CATAT AKTIVITAS CEPAT --}}
      <div class="card p-6">
        <h3 class="font-bold text-slate-800 mb-4">Catat Aktivitas Cepat</h3>
        <div class="space-y-2">
          @foreach([
            ['icon'=>'restaurant','color'=>'bg-orange-50 text-orange-500','label'=>'Makan'],
            ['icon'=>'bedtime','color'=>'bg-blue-50 text-blue-500','label'=>'Tidur Siang'],
            ['icon'=>'wc','color'=>'bg-teal-50 text-teal-500','label'=>'Ke Toilet'],
            ['icon'=>'sports_soccer','color'=>'bg-purple-50 text-purple-500','label'=>'Bermain'],
            ['icon'=>'medication','color'=>'bg-red-50 text-red-500','label'=>'Obat/Kesehatan'],
          ] as $act)
          <button class="w-full flex items-center gap-3 p-3 rounded-xl border border-slate-100 hover:bg-green-50 hover:border-green-200 transition-all text-left group">
            <div class="w-9 h-9 rounded-xl {{ $act['color'] }} flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[18px]">{{ $act['icon'] }}</span>
            </div>
            <span class="text-sm font-semibold text-slate-700">{{ $act['label'] }}</span>
            <span class="material-symbols-outlined text-slate-300 text-[18px] ml-auto group-hover:text-green-600">add_circle</span>
          </button>
          @endforeach
        </div>
      </div>
    </div>
@endsection
