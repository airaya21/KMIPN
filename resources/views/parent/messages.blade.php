@extends('layouts.parent')

@section('title', 'Pesan')
@section('header_title', 'Kotak Pesan')
@section('header_subtitle', 'Hubungi pengasuh atau admin daycare secara langsung')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 h-[calc(100vh-200px)]">
    {{-- KONTAK --}}
    <div class="card p-4 overflow-y-auto">
        <h3 class="font-bold text-slate-800 mb-4 px-2">Percakapan</h3>
        <div class="space-y-1">
            @foreach([
                ['name' => 'Bu Sari (Pengasuh)', 'role' => 'Caregiver', 'last' => 'Hari ini Dinda sangat ceria...', 'time' => '15:45', 'unread' => 2, 'active' => true],
                ['name' => 'Pak Ahmad (Admin)', 'role' => 'Administrator', 'last' => 'Pembayaran sudah kami terima.', 'time' => 'Kemarin', 'unread' => 0, 'active' => false],
                ['name' => 'Bu Maria (Gizi)', 'role' => 'Health Specialist', 'last' => 'Menu makan minggu depan...', 'time' => 'Senin', 'unread' => 0, 'active' => false],
            ] as $contact)
            <div class="p-3 rounded-xl flex items-center gap-3 cursor-pointer transition-all {{ $contact['active'] ? 'bg-amber-50' : 'hover:bg-slate-50' }}">
                <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center shrink-0 border-2 {{ $contact['active'] ? 'border-amber-200' : 'border-transparent' }}">
                    <span class="material-symbols-outlined text-slate-400">person</span>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex justify-between items-baseline">
                        <h4 class="text-sm font-bold text-slate-800 truncate">{{ $contact['name'] }}</h4>
                        <span class="text-[9px] font-bold text-slate-400">{{ $contact['time'] }}</span>
                    </div>
                    <div class="flex justify-between items-center gap-2">
                        <p class="text-xs text-slate-500 truncate">{{ $contact['last'] }}</p>
                        @if($contact['unread'] > 0)
                            <span class="bg-amber-600 text-white text-[9px] font-black w-4 h-4 rounded-full flex items-center justify-center shrink-0">{{ $contact['unread'] }}</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- CHAT BOX --}}
    <div class="lg:col-span-2 card flex flex-col overflow-hidden">
        {{-- Chat Header --}}
        <div class="p-4 border-b border-slate-50 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-amber-700 font-bold text-sm">S</div>
                <div>
                    <h4 class="text-sm font-bold text-slate-800">Bu Sari (Pengasuh)</h4>
                    <p class="text-[10px] text-green-600 font-bold flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Online
                    </p>
                </div>
            </div>
            <button class="text-slate-400 hover:text-amber-600">
                <span class="material-symbols-outlined">more_vert</span>
            </button>
        </div>

        {{-- Messages --}}
        <div class="flex-1 p-6 overflow-y-auto bg-slate-50/50 space-y-4">
            <div class="flex justify-center">
                <span class="text-[10px] font-black text-slate-300 bg-white px-3 py-1 rounded-full uppercase tracking-widest border border-slate-100">Hari Ini</span>
            </div>
            
            {{-- Received --}}
            <div class="flex items-end gap-2 max-w-[80%]">
                <div class="w-6 h-6 rounded-full bg-amber-100 flex items-center justify-center text-[10px] text-amber-700 font-bold shrink-0">S</div>
                <div class="bg-white p-3 rounded-2xl rounded-bl-none shadow-sm border border-slate-100">
                    <p class="text-sm text-slate-700">Selamat sore Pak Budi. Hari ini Dinda sangat ceria dan aktif bermain. Makannya juga habis. Tidak ada keluhan kesehatan.</p>
                    <span class="text-[9px] text-slate-300 font-bold mt-1 block">15:45</span>
                </div>
            </div>

            {{-- Sent --}}
            <div class="flex flex-row-reverse items-end gap-2 max-w-[80%] ml-auto">
                <div class="bg-amber-600 p-3 rounded-2xl rounded-br-none shadow-md shadow-amber-200">
                    <p class="text-sm text-white">Alhamdulillah, terima kasih banyak informasinya Bu Sari. Nanti sore dijemput oleh Bundanya ya.</p>
                    <span class="text-[9px] text-amber-100/70 font-bold mt-1 block text-right">16:02</span>
                </div>
            </div>
        </div>

        {{-- Input --}}
        <div class="p-4 border-t border-slate-50 bg-white">
            <div class="flex gap-2">
                <button class="w-10 h-10 rounded-xl flex items-center justify-center text-slate-400 hover:bg-slate-50">
                    <span class="material-symbols-outlined">add_circle</span>
                </button>
                <input type="text" placeholder="Tulis pesan..." class="flex-1 bg-slate-50 border-none rounded-xl px-4 text-sm focus:ring-1 focus:ring-amber-500">
                <button class="w-10 h-10 bg-amber-600 text-white rounded-xl flex items-center justify-center shadow-md shadow-amber-200 hover:bg-amber-700 transition-all">
                    <span class="material-symbols-outlined">send</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
