@extends('layouts.caregiver')

@section('title', 'Jadwal')
@section('header_title', 'Jadwal Harian')
@section('header_subtitle', 'Agenda kegiatan rutin untuk anak-anak hari ini')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    {{-- KALENDER MINI & SUMMARY --}}
    <div class="space-y-6">
        <div class="card p-6 bg-green-600 text-white shadow-lg shadow-green-200">
            <h3 class="text-3xl font-black mb-1">{{ date('d') }}</h3>
            <p class="text-green-100 text-sm font-bold uppercase tracking-widest mb-6">{{ date('F Y') }}</p>
            <div class="space-y-4">
                <div class="flex justify-between items-center text-xs font-bold border-b border-green-500/30 pb-3">
                    <span class="opacity-80">Total Agenda</span>
                    <span>8 Kegiatan</span>
                </div>
                <div class="flex justify-between items-center text-xs font-bold border-b border-green-500/30 pb-3">
                    <span class="opacity-80">Selesai</span>
                    <span>3 Kegiatan</span>
                </div>
                <div class="flex justify-between items-center text-xs font-bold">
                    <span class="opacity-80">Mendatang</span>
                    <span>5 Kegiatan</span>
                </div>
            </div>
        </div>

        <div class="card p-6">
            <h4 class="font-bold text-slate-800 mb-4 text-sm">Petugas Lainnya</h4>
            <div class="space-y-4">
                @foreach([
                    ['name' => 'Maria S.', 'role' => 'Caregiver', 'status' => 'On Duty'],
                    ['name' => 'Robert K.', 'role' => 'Caregiver', 'status' => 'On Duty'],
                ] as $staff)
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-700">{{ $staff['name'] }}</p>
                        <p class="text-[10px] text-green-600 font-bold uppercase">{{ $staff['status'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- LIST JADWAL --}}
    <div class="lg:col-span-2 space-y-4">
        @foreach([
            ['time' => '08:00 - 08:30', 'title' => 'Penyambutan Anak', 'desc' => 'Menerima anak dari orang tua & cek kesehatan dasar.', 'status' => 'Completed'],
            ['time' => '09:00 - 09:30', 'title' => 'Snack Pagi & Vitamin', 'desc' => 'Pemberian buah-buahan segar dan vitamin rutin.', 'status' => 'Completed'],
            ['time' => '10:00 - 11:30', 'title' => 'Bermain Bebas / Terstruktur', 'desc' => 'Aktivitas motorik di area bermain.', 'status' => 'In Progress'],
            ['time' => '12:00 - 13:00', 'title' => 'Makan Siang', 'desc' => 'Menu: Nasi, Sup Ayam, dan Sayuran.', 'status' => 'Upcoming'],
            ['time' => '13:00 - 15:00', 'title' => 'Tidur Siang', 'desc' => 'Istirahat total di ruang tidur ber-AC.', 'status' => 'Upcoming'],
            ['time' => '15:30 - 16:30', 'title' => 'Bermain Sore & Persiapan Pulang', 'desc' => 'Aktivitas ringan dan pembersihan diri.', 'status' => 'Upcoming'],
        ] as $item)
        <div class="card p-5 flex gap-6 items-start {{ $item['status'] == 'In Progress' ? 'border-green-400 ring-2 ring-green-50' : '' }}">
            <div class="shrink-0 text-center w-24">
                <p class="text-xs font-black text-slate-800">{{ explode(' - ', $item['time'])[0] }}</p>
                <div class="h-8 w-px bg-slate-100 mx-auto my-1"></div>
                <p class="text-[10px] font-bold text-slate-400 uppercase">{{ explode(' - ', $item['time'])[1] }}</p>
            </div>
            
            <div class="flex-1">
                <div class="flex justify-between items-start mb-1">
                    <h4 class="font-bold text-slate-800 text-sm">{{ $item['title'] }}</h4>
                    <span class="text-[9px] font-black uppercase px-2 py-0.5 rounded {{ $item['status'] == 'Completed' ? 'bg-slate-100 text-slate-400' : ($item['status'] == 'In Progress' ? 'bg-green-500 text-white' : 'bg-green-50 text-green-600') }}">
                        {{ $item['status'] }}
                    </span>
                </div>
                <p class="text-xs text-slate-500">{{ $item['desc'] }}</p>
                @if($item['status'] == 'Upcoming')
                    <button class="mt-3 text-[10px] font-black text-green-600 flex items-center gap-1 hover:gap-2 transition-all">
                        MULAI KEGIATAN <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
