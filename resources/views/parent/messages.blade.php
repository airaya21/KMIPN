@extends('layouts.parent')

@section('title', 'Pesan')
@section('header_title', 'Kotak Pesan')
@section('header_subtitle', 'Hubungi pengasuh atau admin daycare secara langsung')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 h-[calc(100vh-180px)] min-h-[600px] animate-fade-in-up" id="app-container">
    
    {{-- KONTAK (SIDEBAR) --}}
    <div class="bg-white rounded-3xl p-5 border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)] overflow-hidden flex flex-col">
        <div class="flex items-center justify-between mb-5 px-2 mt-2">
            <h3 class="font-extrabold text-slate-800 text-xl">Percakapan</h3>
            <button class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center hover:bg-blue-100 transition-colors">
                <span class="material-symbols-outlined text-[20px]">edit_square</span>
            </button>
        </div>
        
        <div class="relative mb-5 px-1">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-[18px]">search</span>
            <input type="text" placeholder="Cari pesan..." class="w-full pl-11 pr-4 py-3 rounded-2xl bg-slate-50 border border-slate-100 text-sm focus:bg-white focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all font-medium text-slate-700">
        </div>

        <div class="space-y-2 flex-1 overflow-y-auto pr-1 scrollbar-hide">
            @foreach([
                ['name' => 'Bu Sari (Pengasuh)', 'role' => 'Caregiver', 'last' => 'Hari ini Dinda sangat ceria...', 'time' => '15:45', 'unread' => 2, 'active' => true, 'avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'],
                ['name' => 'Pak Ahmad (Admin)', 'role' => 'Administrator', 'last' => 'Pembayaran sudah kami terima.', 'time' => 'Kemarin', 'unread' => 0, 'active' => false, 'avatar' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'],
                ['name' => 'Bu Maria (Gizi)', 'role' => 'Health Specialist', 'last' => 'Menu makan minggu depan...', 'time' => 'Senin', 'unread' => 0, 'active' => false, 'avatar' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'],
            ] as $contact)
            <div class="p-4 rounded-2xl flex items-center gap-4 cursor-pointer transition-all {{ $contact['active'] ? 'bg-blue-50 border border-blue-100 shadow-sm' : 'border border-transparent hover:bg-slate-50' }}">
                <div class="relative">
                    <img src="{{ $contact['avatar'] }}" class="w-12 h-12 rounded-full object-cover border-2 {{ $contact['active'] ? 'border-blue-500' : 'border-slate-200' }}" alt="{{ $contact['name'] }}">
                    @if($contact['active'])
                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-white rounded-full"></span>
                    @endif
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex justify-between items-baseline mb-1">
                        <h4 class="text-sm font-extrabold text-slate-800 truncate">{{ $contact['name'] }}</h4>
                        <span class="text-[10px] font-bold {{ $contact['unread'] > 0 ? 'text-blue-600' : 'text-slate-400' }}">{{ $contact['time'] }}</span>
                    </div>
                    <div class="flex justify-between items-center gap-2">
                        <p class="text-xs font-medium {{ $contact['unread'] > 0 ? 'text-slate-700' : 'text-slate-500' }} truncate">{{ $contact['last'] }}</p>
                        @if($contact['unread'] > 0)
                            <span class="bg-blue-600 text-white text-[10px] font-black w-5 h-5 rounded-full flex items-center justify-center shrink-0 shadow-md shadow-blue-600/30">{{ $contact['unread'] }}</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- CHAT BOX (MAIN) --}}
    <div class="lg:col-span-2 bg-white rounded-3xl border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)] flex flex-col overflow-hidden relative">
        
        {{-- Chat Header --}}
        <div class="p-5 border-b border-slate-100 flex items-center justify-between bg-white z-10">
            <div class="flex items-center gap-4">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="w-12 h-12 rounded-full object-cover border-2 border-slate-100 shadow-sm" alt="Bu Sari">
                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                </div>
                <div>
                    <h4 class="text-base font-extrabold text-slate-800">Bu Sari (Pengasuh)</h4>
                    <p class="text-[11px] font-bold text-slate-400 mt-0.5">Penanggung Jawab Dinda & Arka</p>
                </div>
            </div>
            <div class="flex gap-2">
                <button class="w-10 h-10 rounded-full flex items-center justify-center text-slate-400 hover:bg-slate-50 hover:text-blue-600 transition-colors">
                    <span class="material-symbols-outlined text-[22px]">videocam</span>
                </button>
                <button class="w-10 h-10 rounded-full flex items-center justify-center text-slate-400 hover:bg-slate-50 hover:text-blue-600 transition-colors">
                    <span class="material-symbols-outlined text-[22px]">call</span>
                </button>
                <button class="w-10 h-10 rounded-full flex items-center justify-center text-slate-400 hover:bg-slate-50 hover:text-slate-600 transition-colors">
                    <span class="material-symbols-outlined text-[22px]">more_vert</span>
                </button>
            </div>
        </div>

        {{-- Messages Area --}}
        <div class="flex-1 p-6 overflow-y-auto bg-slate-50/50 space-y-6" id="chat-messages" style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 24px 24px;">
            <div class="flex justify-center">
                <span class="text-[10px] font-black text-slate-400 bg-white px-4 py-1.5 rounded-full uppercase tracking-widest border border-slate-200 shadow-sm">Hari Ini</span>
            </div>
            
            {{-- Received Message --}}
            <div class="flex items-end gap-3 max-w-[85%]">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="w-8 h-8 rounded-full object-cover shrink-0 mb-1" alt="Bu Sari">
                <div class="bg-white p-4 rounded-3xl rounded-bl-none shadow-sm border border-slate-200">
                    <p class="text-sm text-slate-700 font-medium leading-relaxed">Selamat sore Pak Budi. Hari ini Dinda sangat ceria dan aktif bermain. Makannya juga habis. Tidak ada keluhan kesehatan apa pun 😊</p>
                    <span class="text-[10px] text-slate-400 font-bold mt-2 block">15:45</span>
                </div>
            </div>

            {{-- Sent Message --}}
            <div class="flex flex-row-reverse items-end gap-3 max-w-[85%] ml-auto">
                <div class="bg-blue-600 p-4 rounded-3xl rounded-br-none shadow-md shadow-blue-600/20">
                    <p class="text-sm text-white font-medium leading-relaxed">Alhamdulillah, terima kasih banyak informasinya Bu Sari. Nanti sore jam 16:30 Dinda akan dijemput oleh Bundanya ya.</p>
                    <span class="text-[10px] text-blue-200 font-bold mt-2 flex items-center justify-end gap-1">
                        16:02 <span class="material-symbols-outlined text-[14px]">done_all</span>
                    </span>
                </div>
            </div>
        </div>

        {{-- Input Area --}}
        <div class="p-5 border-t border-slate-100 bg-white z-10">
            <div class="flex items-center gap-3">
                <button class="w-11 h-11 rounded-full flex items-center justify-center text-slate-400 hover:bg-slate-100 hover:text-slate-600 transition-colors shrink-0">
                    <span class="material-symbols-outlined text-[24px]">add_circle</span>
                </button>
                <div class="flex-1 relative">
                    <input type="text" placeholder="Tulis pesan..." class="w-full bg-slate-50 border border-slate-200 rounded-full pl-5 pr-12 py-3.5 text-sm font-medium focus:bg-white focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all text-slate-700 shadow-inner">
                    <button class="absolute right-3 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center text-slate-400 hover:text-slate-600">
                        <span class="material-symbols-outlined text-[20px]">sentiment_satisfied</span>
                    </button>
                </div>
                <button class="w-12 h-12 bg-[#FFD600] text-blue-900 rounded-full flex items-center justify-center shadow-lg shadow-[#FFD600]/30 hover:brightness-95 transition-all shrink-0">
                    <span class="material-symbols-outlined text-[20px] translate-x-0.5">send</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
