@extends('layouts.admin')

@section('title', 'Dashboard')
@section('header_title', 'Dashboard Admin')
@section('header_subtitle', 'Ringkasan aktivitas daycare hari ini')

@section('content')
<div class="grid grid-cols-12 gap-8">
    
    {{-- LEFT SIDE (8 Columns) --}}
    <div class="col-span-12 lg:col-span-8 space-y-8">
        
        {{-- TOP STATS BAR --}}
        <div class="flex items-center gap-6">
            {{-- Child Profile --}}
            <div class="bg-white rounded-3xl p-4 flex items-center gap-4 flex-1 shadow-sm border border-slate-100/50">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1519238263530-99bdd11df2ea?w=100&h=100&fit=crop" class="w-14 h-14 rounded-full object-cover">
                    <div class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 border-2 border-white rounded-full flex items-center justify-center">
                        <span class="material-symbols-outlined text-white text-[10px] font-bold">check</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-slate-800 font-bold text-sm">Budi Santoso</h3>
                    <p class="text-slate-400 text-xs flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">location_on</span>
                        Ruang Bermain B • 10:45
                    </p>
                </div>
            </div>

            {{-- Status Card --}}
            <div class="bg-[#ECF9F1] rounded-3xl p-4 flex items-center justify-between flex-[1.5] shadow-sm border border-green-100">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white">
                        <span class="material-symbols-outlined text-xl">verified_user</span>
                    </div>
                    <div>
                        <h3 class="text-green-800 font-bold text-lg leading-tight">Aman</h3>
                        <p class="text-green-600/70 text-[10px] font-medium">AI memverifikasi aktivitas normal</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-green-600/50 text-[10px] font-bold uppercase tracking-wider">Detak Jantung</p>
                    <p class="text-green-800 font-black text-xl">84 BPM</p>
                </div>
            </div>

            {{-- Message Button --}}
            <button class="bg-[#005F8D] text-white px-8 py-4 rounded-3xl font-bold text-sm flex items-center gap-3 shadow-lg shadow-blue-100 active:scale-95 transition-all">
                <span class="material-symbols-outlined text-xl">mail</span>
                Pesan Pengajar
            </button>
        </div>

        {{-- LIVE MONITORING --}}
        <div class="bg-white rounded-[2rem] p-6 shadow-sm border border-slate-100/50">
            <div class="flex items-center justify-between mb-4 px-2">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                    <h3 class="text-slate-800 font-bold text-sm">Pemantauan Langsung</h3>
                </div>
                <div class="flex items-center gap-4 text-slate-400">
                    <button class="hover:text-brand-blue"><span class="material-symbols-outlined text-xl">search</span></button>
                    <button class="hover:text-brand-blue"><span class="material-symbols-outlined text-xl">volume_up</span></button>
                    <button class="hover:text-brand-blue"><span class="material-symbols-outlined text-xl">fullscreen</span></button>
                </div>
            </div>
            
            <div class="relative aspect-video rounded-3xl overflow-hidden bg-slate-100">
                <img src="https://images.unsplash.com/photo-1560421683-6856ea585c78?w=1200&fit=crop" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/5 flex items-center justify-center group cursor-pointer">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white scale-100 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-4xl fill-1">play_arrow</span>
                    </div>
                </div>
                <div class="absolute bottom-6 left-6 px-3 py-1.5 bg-black/40 backdrop-blur-md rounded-lg">
                    <p class="text-white text-[10px] font-bold tracking-widest uppercase">KAM 02 - Area Bermain Utama</p>
                </div>
            </div>
        </div>

        {{-- SUMMARY CARDS --}}
        <div class="grid grid-cols-3 gap-6">
            {{-- Sleep --}}
            <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100/50 relative overflow-hidden group hover:border-blue-200 transition-all">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-2xl bg-blue-50 text-blue-500 flex items-center justify-center">
                        <span class="material-symbols-outlined text-xl">bedtime</span>
                    </div>
                    <span class="text-slate-400 font-bold text-sm">Tidur</span>
                </div>
                <h4 class="text-2xl font-black text-slate-800 mb-1">1j 20m</h4>
                <p class="text-[10px] text-slate-300 font-bold uppercase">Terakhir: 12:30 - 13:50</p>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-500/10">
                    <div class="h-full bg-blue-500 w-[60%]"></div>
                </div>
            </div>

            {{-- Eat --}}
            <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100/50 relative overflow-hidden group hover:border-green-200 transition-all">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-2xl bg-green-50 text-green-500 flex items-center justify-center">
                        <span class="material-symbols-outlined text-xl">restaurant</span>
                    </div>
                    <span class="text-slate-400 font-bold text-sm">Makan</span>
                </div>
                <h4 class="text-2xl font-black text-slate-800 mb-1">Selesai</h4>
                <p class="text-[10px] text-slate-300 font-bold uppercase">Makan Siang: Nasi Ayam</p>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-green-500/10">
                    <div class="h-full bg-green-500 w-full"></div>
                </div>
            </div>

            {{-- Play --}}
            <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100/50 relative overflow-hidden group hover:border-amber-200 transition-all">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-2xl bg-amber-50 text-amber-500 flex items-center justify-center">
                        <span class="material-symbols-outlined text-xl">smart_toy</span>
                    </div>
                    <span class="text-slate-400 font-bold text-sm">Bermain</span>
                </div>
                <h4 class="text-2xl font-black text-slate-800 mb-1">Aktif</h4>
                <p class="text-[10px] text-slate-300 font-bold uppercase">Fokus: Bermain Lego</p>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-amber-500/10">
                    <div class="h-full bg-amber-500 w-[85%]"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- RIGHT SIDE (4 Columns) --}}
    <div class="col-span-12 lg:col-span-4 space-y-8">
        
        {{-- RECENT ACTIVITY --}}
        <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-slate-100/50 flex flex-col h-[520px]">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-slate-800 font-bold text-base">Aktivitas Terbaru</h3>
                <button class="text-brand-blue text-xs font-bold hover:underline">Lihat Semua</button>
            </div>

            <div class="flex-1 space-y-8 relative before:content-[''] before:absolute before:left-[19px] before:top-2 before:bottom-2 before:w-0.5 before:bg-slate-50">
                {{-- Item 1 --}}
                <div class="relative pl-12">
                    <div class="absolute left-0 top-0 w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-500 border-4 border-white z-10">
                        <span class="material-symbols-outlined text-xl">restaurant</span>
                    </div>
                    <div>
                        <h4 class="text-slate-800 font-bold text-sm">Makan Siang Selesai</h4>
                        <p class="text-slate-400 text-xs leading-relaxed mt-1">Budi menghabiskan porsi bubur ayam dan potongan melon.</p>
                        <span class="text-[10px] font-bold text-slate-300 mt-2 block uppercase">12:15</span>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="relative pl-12">
                    <div class="absolute left-0 top-0 w-10 h-10 bg-green-50 rounded-full flex items-center justify-center text-green-500 border-4 border-white z-10">
                        <span class="material-symbols-outlined text-xl">photo_library</span>
                    </div>
                    <div>
                        <h4 class="text-slate-800 font-bold text-sm">Pembaruan Foto</h4>
                        <p class="text-slate-400 text-xs leading-relaxed mt-1">Pengajar Ibu Ani membagikan foto Budi bermain balok.</p>
                        <div class="mt-3 aspect-video rounded-2xl bg-slate-100 overflow-hidden border border-slate-50">
                            <img src="https://images.unsplash.com/photo-1587654780291-39c9404d746b?w=400&fit=crop" class="w-full h-full object-cover">
                        </div>
                        <span class="text-[10px] font-bold text-slate-300 mt-2 block uppercase">11:30</span>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="relative pl-12">
                    <div class="absolute left-0 top-0 w-10 h-10 bg-amber-50 rounded-full flex items-center justify-center text-amber-500 border-4 border-white z-10">
                        <span class="material-symbols-outlined text-xl">mood</span>
                    </div>
                    <div>
                        <h4 class="text-slate-800 font-bold text-sm">Pemeriksaan Suasana Hati: Senang</h4>
                        <p class="text-slate-400 text-xs leading-relaxed mt-1">Budi sangat sosial hari ini, tertawa dengan teman sekelasnya selama waktu berkumpul.</p>
                        <span class="text-[10px] font-bold text-slate-300 mt-2 block uppercase">10:00</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- DAILY AI INSIGHTS --}}
        <div class="bg-[#F8F9FB] rounded-[2rem] p-8 border border-slate-100 shadow-sm relative overflow-hidden">
            <div class="relative z-10">
                <h3 class="text-slate-400 font-bold text-[10px] uppercase tracking-widest mb-4">Wawasan AI Harian</h3>
                <p class="text-slate-600 text-sm leading-relaxed font-medium">
                    Tingkat konsentrasi Budi <span class="text-brand-blue font-bold">15% lebih tinggi</span> dari biasanya hari ini. Dia menghabiskan 45 menit terlibat dalam satu tugas, yang sangat baik untuk kelompok usianya.
                </p>
            </div>
            <div class="absolute -right-8 -bottom-8 opacity-[0.03]">
                <span class="material-symbols-outlined text-[160px]">psychology</span>
            </div>
        </div>

    </div>

</div>
@endsection