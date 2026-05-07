@extends('layouts.caregiver')

@section('title', 'Catat Aktivitas')
@section('header_title', 'Catat Aktivitas Anak')
@section('header_subtitle', 'Rekam setiap momen dan kegiatan anak asuh Anda')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="card p-8">
        <h3 class="font-black text-slate-800 text-lg mb-6 flex items-center gap-2">
            <span class="material-symbols-outlined text-green-600">edit_square</span> Input Aktivitas Baru
        </h3>
        
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- PILIH ANAK --}}
                <div class="space-y-2">
                    <label class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Pilih Anak</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-slate-100 bg-slate-50 focus:bg-white focus:ring-green-500 focus:border-green-500 transition-all text-sm font-semibold">
                        <option>Pilih anak asuh...</option>
                        <option>Ethan James</option>
                        <option>Mia Lopez</option>
                        <option>Oliver White</option>
                    </select>
                </div>
                {{-- KATEGORI --}}
                <div class="space-y-2">
                    <label class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Kategori Kegiatan</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-slate-100 bg-slate-50 focus:bg-white focus:ring-green-500 focus:border-green-500 transition-all text-sm font-semibold">
                        <option>Makan & Minum</option>
                        <option>Istirahat/Tidur</option>
                        <option>Bermain & Belajar</option>
                        <option>Kesehatan/Medis</option>
                        <option>Ke Toilet</option>
                    </select>
                </div>
            </div>

            {{-- DESKRIPSI --}}
            <div class="space-y-2">
                <label class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Deskripsi Kegiatan</label>
                <textarea rows="4" class="w-full px-4 py-3 rounded-xl border border-slate-100 bg-slate-50 focus:bg-white focus:ring-green-500 focus:border-green-500 transition-all text-sm font-semibold" placeholder="Contoh: Dinda makan siang dengan lahap, menghabiskan 1 porsi bubur daging..."></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- WAKTU --}}
                <div class="space-y-2">
                    <label class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Waktu Kejadian</label>
                    <input type="time" class="w-full px-4 py-3 rounded-xl border border-slate-100 bg-slate-50 focus:bg-white focus:ring-green-500 focus:border-green-500 transition-all text-sm font-semibold" value="{{ date('H:i') }}">
                </div>
                {{-- SUASANA HATI --}}
                <div class="space-y-2">
                    <label class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Suasana Hati</label>
                    <div class="flex gap-2">
                        @foreach(['😊', '😐', '😢', '😴'] as $emoji)
                        <button type="button" class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-lg hover:bg-green-50 hover:border-green-200 transition-all focus:bg-green-100 focus:border-green-400">{{ $emoji }}</button>
                        @endforeach
                    </div>
                </div>
                {{-- ATTACHMENT --}}
                <div class="space-y-2">
                    <label class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Foto (Opsional)</label>
                    <div class="relative">
                        <button type="button" class="w-full px-4 py-3 rounded-xl border border-dashed border-slate-200 bg-slate-50 text-slate-400 text-xs font-bold flex items-center justify-center gap-2 hover:bg-slate-100 transition-all">
                            <span class="material-symbols-outlined text-sm">add_a_photo</span> Unggah Foto
                        </button>
                    </div>
                </div>
            </div>

            <div class="pt-4 flex gap-3">
                <button type="submit" class="flex-1 bg-green-600 text-white px-8 py-4 rounded-2xl font-black text-sm shadow-lg shadow-green-200 hover:bg-green-700 transition-all transform hover:-translate-y-1">Simpan & Kirim ke Orang Tua</button>
                <button type="button" class="px-8 py-4 bg-slate-100 text-slate-500 rounded-2xl font-black text-sm hover:bg-slate-200 transition-all">Batal</button>
            </div>
        </form>
    </div>

    {{-- RECENT ENTRIES --}}
    <div class="card p-6">
        <h4 class="font-bold text-slate-800 mb-4">Catatan Terakhir Anda</h4>
        <div class="space-y-3">
            @foreach([
                ['name' => 'Sophia Chen', 'act' => 'Bermain puzzle bersama Ava', 'time' => '10:30'],
                ['name' => 'Mia Lopez', 'act' => 'Minum susu formula 150ml', 'time' => '10:15'],
            ] as $entry)
            <div class="flex items-center justify-between p-3 rounded-xl border border-slate-50 bg-slate-50/30">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-green-100 text-green-700 flex items-center justify-center text-[10px] font-black">
                        {{ substr($entry['name'], 0, 1) }}
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-700">{{ $entry['name'] }}</p>
                        <p class="text-[10px] text-slate-400 font-semibold">{{ $entry['act'] }}</p>
                    </div>
                </div>
                <span class="text-[10px] font-bold text-slate-300">{{ $entry['time'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
