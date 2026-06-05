@extends('layouts.admin')

@section('title', 'Catatan Riwayat')

@section('content')
<div class="space-y-6">
    {{-- HEADER --}}
    <div>
        <h2 class="text-2xl font-black text-slate-800">Catatan Riwayat</h2>
        <p class="text-slate-400 text-sm font-medium">Tinjau aktivitas dan wawasan keamanan</p>
    </div>

    {{-- FILTERS & ACTIONS --}}
    <div class="bg-white rounded-[2rem] p-6 shadow-sm border border-slate-100/50 flex flex-wrap items-center gap-4">
        <div class="relative flex-1 min-w-[300px]">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-300">search</span>
            <input type="text" placeholder="Cari nama anak atau aktivitas..." class="w-full bg-[#F8F9FB] border-none rounded-2xl py-3 pl-12 pr-4 text-sm focus:ring-2 focus:ring-brand-blue/20 placeholder:text-slate-400">
        </div>
        
        <div class="flex items-center gap-3">
            <select class="bg-[#F8F9FB] border-none rounded-2xl py-3 px-6 text-sm font-bold text-slate-600 focus:ring-2 focus:ring-brand-blue/20">
                <option>7 Hari Terakhir</option>
                <option>30 Hari Terakhir</option>
                <option>Rentang Khusus</option>
            </select>
            <select class="bg-[#F8F9FB] border-none rounded-2xl py-3 px-6 text-sm font-bold text-slate-600 focus:ring-2 focus:ring-brand-blue/20">
                <option>Semua Status</option>
                <option>Aman</option>
                <option>Hati-hati</option>
                <option>Bahaya</option>
            </select>
        </div>

        <div class="flex items-center gap-3 ml-auto">
            <button class="px-6 py-3 border border-amber-400 text-amber-700 rounded-2xl font-bold text-sm hover:bg-amber-50 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">download</span> Ekspor CSV
            </button>
            <button class="px-6 py-3 bg-amber-400 text-amber-900 rounded-2xl font-bold text-sm hover:bg-amber-500 transition-all flex items-center gap-2 shadow-lg shadow-amber-400/30">
                <span class="material-symbols-outlined text-lg">picture_as_pdf</span> Ekspor PDF
            </button>
        </div>
    </div>

    {{-- TABLE --}}
    <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100/50 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-slate-50">
                    <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Waktu</th>
                    <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Nama Anak</th>
                    <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Aktivitas</th>
                    <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Status</th>
                    <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                @foreach([
                    ['time'=>'14:20','date'=>'24 Okt 2024','child'=>'Arka Laksmana','initials'=>'AL','color'=>'bg-blue-100 text-blue-600','act'=>'Memasuki Area Bermain','loc'=>'Aula Utama','status'=>'Aman','statusColor'=>'bg-green-500'],
                    ['time'=>'13:45','date'=>'24 Okt 2024','child'=>'Siti Putri','initials'=>'SP','color'=>'bg-amber-100 text-amber-600','act'=>'Terdeteksi memanjat furnitur','loc'=>'Pojok Baca','status'=>'Hati-hati','statusColor'=>'bg-amber-500'],
                    ['time'=>'11:12','date'=>'24 Okt 2024','child'=>'Rian Danu','initials'=>'RD','color'=>'bg-red-100 text-red-600','act'=>'Upaya Keluar Tanpa Izin','loc'=>'Gerbang Depan','status'=>'Bahaya','statusColor'=>'bg-red-500'],
                    ['time'=>'10:05','date'=>'24 Okt 2024','child'=>'Beni Bagaskara','initials'=>'BB','color'=>'bg-cyan-100 text-cyan-600','act'=>'Tidur - Waktu tidur siang','loc'=>'Ruang Istirahat','status'=>'Aman','statusColor'=>'bg-green-500'],
                    ['time'=>'09:30','date'=>'24 Okt 2024','child'=>'Kiara Azura','initials'=>'KA','color'=>'bg-purple-100 text-purple-600','act'=>'Aktivitas Kelompok: Melukis','loc'=>'Pojok Seni','status'=>'Aman','statusColor'=>'bg-green-500'],
                ] as $log)
                <tr class="hover:bg-slate-50/50 transition-all group">
                    <td class="px-8 py-6">
                        <p class="text-sm font-bold text-slate-800">{{ $log['time'] }}</p>
                        <p class="text-[10px] text-slate-400 font-bold uppercase mt-0.5">{{ $log['date'] }}</p>
                    </td>
                    <td class="px-8 py-6">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full {{ $log['color'] }} flex items-center justify-center text-[10px] font-black">{{ $log['initials'] }}</div>
                            <span class="text-sm font-bold text-slate-700">{{ $log['child'] }}</span>
                        </div>
                    </td>
                    <td class="px-8 py-6">
                        <p class="text-sm font-bold text-slate-700">{{ $log['act'] }}</p>
                        <p class="text-[10px] text-slate-400 font-bold uppercase mt-1 flex items-center gap-1">
                            <span class="material-symbols-outlined text-[12px]">location_on</span> {{ $log['loc'] }}
                        </p>
                    </td>
                    <td class="px-8 py-6">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full {{ $log['statusColor'] }}"></span>
                            <span class="text-[11px] font-black text-slate-700">{{ $log['status'] }}</span>
                        </div>
                    </td>
                    <td class="px-8 py-6">
                        <button class="w-8 h-8 rounded-full flex items-center justify-center text-slate-300 hover:bg-brand-blue/10 hover:text-brand-blue transition-all">
                            <span class="material-symbols-outlined text-xl">more_horiz</span>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- PAGINATION --}}
        <div class="px-8 py-6 border-t border-slate-50 flex items-center justify-between bg-[#FDFDFE]">
            <p class="text-xs font-bold text-slate-400">Menampilkan <span class="text-slate-800">5</span> dari <span class="text-slate-800">128</span> aktivitas</p>
            <div class="flex items-center gap-2">
                <button class="w-8 h-8 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-slate-50 transition-all">
                    <span class="material-symbols-outlined text-lg">chevron_left</span>
                </button>
                <button class="w-8 h-8 rounded-lg bg-brand-blue text-white flex items-center justify-center text-xs font-black">1</button>
                <button class="w-8 h-8 rounded-lg border border-slate-200 flex items-center justify-center text-xs font-bold text-slate-400 hover:bg-slate-50 transition-all">2</button>
                <button class="w-8 h-8 rounded-lg border border-slate-200 flex items-center justify-center text-xs font-bold text-slate-400 hover:bg-slate-50 transition-all">3</button>
                <button class="w-8 h-8 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-slate-50 transition-all">
                    <span class="material-symbols-outlined text-lg">chevron_right</span>
                </button>
            </div>
        </div>
    </div>

    {{-- FOOTER --}}
    <footer class="pt-8 pb-4 flex flex-col md:flex-row items-center justify-between border-t border-slate-100 gap-4">
        <p class="text-[10px] font-bold text-slate-300 uppercase tracking-widest">© 2024 CERIA AI Childcare. Aman & Transparan.</p>
        <div class="flex items-center gap-6">
            <a href="#" class="text-[10px] font-bold text-slate-300 uppercase hover:text-brand-blue">Kebijakan Privasi</a>
            <a href="#" class="text-[10px] font-bold text-slate-300 uppercase hover:text-brand-blue">Ketentuan Layanan</a>
            <a href="#" class="text-[10px] font-bold text-slate-300 uppercase hover:text-brand-blue">Dukungan</a>
        </div>
    </footer>
</div>
@endsection
