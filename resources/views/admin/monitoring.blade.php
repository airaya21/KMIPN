@extends('layouts.admin')

@section('title', 'Live Monitoring')

@section('content')
<div class="grid grid-cols-12 gap-8">
    
    {{-- LEFT SIDE (8 Columns) --}}
    <div class="col-span-12 lg:col-span-8 space-y-8">
        
        {{-- HEADER INFO --}}
        <div class="flex items-center gap-4">
            <h3 class="text-slate-500 font-medium text-sm">Live Monitoring</h3>
            <div class="flex items-center gap-2 bg-green-50 text-green-600 px-3 py-1 rounded-full border border-green-100">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                <span class="text-[10px] font-black uppercase tracking-wider">LIVE - Camera 01 (Toddler Room)</span>
            </div>
        </div>

        {{-- VIDEO FEED --}}
        <div class="bg-white rounded-[2rem] p-6 shadow-sm border border-slate-100/50">
            <div class="relative aspect-video rounded-3xl overflow-hidden bg-slate-900 shadow-inner group">
                <img src="https://images.unsplash.com/photo-1560421683-6856ea585c78?w=1200&fit=crop" class="w-full h-full object-cover opacity-80">
                
                {{-- Overlays --}}
                <div class="absolute inset-0 p-8 pointer-events-none">
                    {{-- Child 1 Marker --}}
                    <div class="absolute top-1/4 left-1/2 -translate-x-1/2">
                        <div class="bg-blue-500/90 backdrop-blur-md text-white px-4 py-2 rounded-full flex items-center gap-2 shadow-lg border border-blue-400/50 transform transition-transform group-hover:scale-105">
                            <span class="material-symbols-outlined text-sm">bed</span>
                            <span class="text-[10px] font-bold">Arka: Posisi Tidur Aman</span>
                        </div>
                        <div class="mt-2 w-24 h-24 border-2 border-dashed border-blue-400 rounded-full mx-auto opacity-40"></div>
                    </div>

                    {{-- Child 2 Marker --}}
                    <div class="absolute bottom-1/4 left-1/3">
                        <div class="bg-green-500/90 backdrop-blur-md text-white px-4 py-2 rounded-full flex items-center gap-2 shadow-lg border border-green-400/50 transform transition-transform group-hover:scale-105">
                            <span class="material-symbols-outlined text-sm">smart_toy</span>
                            <span class="text-[10px] font-bold">Cia: Anak Sedang Bermain</span>
                        </div>
                    </div>
                </div>

                {{-- Camera UI --}}
                <div class="absolute top-6 left-6 text-white/70 text-[9px] font-bold tracking-widest bg-black/20 backdrop-blur px-3 py-1 rounded uppercase">
                    CAM_01 // 24.5°C // 10:45:12 AM
                </div>

                {{-- Controls --}}
                <div class="absolute bottom-6 left-6 right-6 flex items-center justify-between">
                    <div class="flex items-center gap-4 bg-black/30 backdrop-blur-md px-4 py-2 rounded-2xl border border-white/10">
                        <button class="text-white hover:text-green-400"><span class="material-symbols-outlined text-xl">pause_circle</span></button>
                        <button class="text-white hover:text-green-400"><span class="material-symbols-outlined text-xl">volume_up</span></button>
                        <div class="w-px h-4 bg-white/20 mx-1"></div>
                        <p class="text-white text-[10px] font-bold">Bilik Melati - Lantai 2</p>
                    </div>
                    
                    <div class="flex items-center gap-3">
                        <button class="flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-xl border border-white/20 text-[10px] font-bold transition-all">
                            <span class="material-symbols-outlined text-sm">photo_camera</span> Snapshot
                        </button>
                        <button class="flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-xl border border-white/20 text-[10px] font-bold transition-all">
                            <span class="material-symbols-outlined text-sm">radio_button_checked</span> Record
                        </button>
                        <button class="flex items-center gap-2 bg-[#00658D] hover:bg-[#005F8D] text-white px-6 py-2 rounded-xl text-[10px] font-bold transition-all shadow-lg shadow-blue-900/20">
                            <span class="material-symbols-outlined text-sm">fullscreen</span> Fullscreen
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- AI SMART ALERTS --}}
        <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-100/50 relative overflow-hidden">
            <div class="absolute left-0 top-0 w-1.5 h-full bg-amber-400"></div>
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-2xl bg-amber-50 text-amber-500 flex items-center justify-center">
                        <span class="material-symbols-outlined text-xl">warning</span>
                    </div>
                    <h3 class="text-slate-800 font-bold text-base">AI Smart Alerts</h3>
                </div>
                <button class="text-brand-blue text-xs font-bold hover:underline">View All Notifications</button>
            </div>

            <div class="grid grid-cols-2 gap-6">
                {{-- Alert 1 --}}
                <div class="bg-slate-50/50 p-5 rounded-2xl border border-slate-100 flex items-center gap-4 group cursor-pointer hover:bg-white hover:shadow-md transition-all">
                    <div class="w-12 h-12 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0 border-2 border-white shadow-sm">
                        <span class="material-symbols-outlined text-xl">person_alert</span>
                    </div>
                    <div>
                        <h4 class="text-slate-800 font-bold text-sm">Unknown Person Detected</h4>
                        <p class="text-[10px] text-slate-400 font-bold uppercase mt-1">Area: Front Gate (10:30 AM)</p>
                    </div>
                </div>

                {{-- Alert 2 --}}
                <div class="bg-slate-50/50 p-5 rounded-2xl border border-slate-100 flex items-center gap-4 group cursor-pointer hover:bg-white hover:shadow-md transition-all">
                    <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center shrink-0 border-2 border-white shadow-sm">
                        <span class="material-symbols-outlined text-xl">mood_bad</span>
                    </div>
                    <div>
                        <h4 class="text-slate-800 font-bold text-sm">Cia is Crying</h4>
                        <p class="text-[10px] text-slate-400 font-bold uppercase mt-1">Action: Caretaker notified (10:42 AM)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- RIGHT SIDE (4 Columns) --}}
    <div class="col-span-12 lg:col-span-4 space-y-8">
        
        {{-- DAILY TIMELINE --}}
        <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-slate-100/50 flex flex-col h-[680px]">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-slate-800 font-bold text-base">Daily Timeline</h3>
                <button class="text-slate-300 hover:text-slate-500"><span class="material-symbols-outlined">more_vert</span></button>
            </div>

            <div class="flex-1 space-y-8 relative before:content-[''] before:absolute before:left-[19px] before:top-2 before:bottom-2 before:w-0.5 before:bg-slate-50">
                
                {{-- Current Activity --}}
                <div class="relative pl-12">
                    <div class="absolute left-0 top-0 w-10 h-10 bg-white rounded-full flex items-center justify-center text-green-500 border-2 border-green-500 z-10 shadow-sm">
                        <span class="w-2.5 h-2.5 bg-green-500 rounded-full"></span>
                    </div>
                    <div class="bg-[#F0FAF4] p-5 rounded-2xl border border-green-100/50">
                        <h4 class="text-green-800 font-black text-[10px] uppercase tracking-widest mb-2">Currently</h4>
                        <p class="text-green-800/80 text-xs leading-relaxed font-semibold">
                            Nap Time: Bilik Melati<br>
                            <span class="text-green-600/60 font-medium">Ambient temperature optimal at 24°C</span>
                        </p>
                    </div>
                </div>

                {{-- Activity 1 --}}
                <div class="relative pl-12">
                    <div class="absolute left-0 top-2 w-10 h-10 bg-slate-50 rounded-full flex items-center justify-center text-slate-300 border-4 border-white z-10">
                        <span class="w-1.5 h-1.5 bg-slate-300 rounded-full"></span>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-slate-300 uppercase mb-1">10:00 AM</p>
                        <h4 class="text-slate-800 font-bold text-sm">Outdoor Activity: Playground</h4>
                        <p class="text-slate-400 text-xs leading-relaxed mt-1">Engaged in social play for 45 minutes.</p>
                        <div class="mt-3 flex gap-2">
                            <img src="https://images.unsplash.com/photo-1596464716127-f2a82984de30?w=100&h=100&fit=crop" class="w-12 h-12 rounded-lg object-cover shadow-sm">
                            <img src="https://images.unsplash.com/photo-1519238263530-99bdd11df2ea?w=100&h=100&fit=crop" class="w-12 h-12 rounded-lg object-cover shadow-sm">
                        </div>
                    </div>
                </div>

                {{-- Activity 2 --}}
                <div class="relative pl-12">
                    <div class="absolute left-0 top-2 w-10 h-10 bg-slate-50 rounded-full flex items-center justify-center text-slate-300 border-4 border-white z-10">
                        <span class="w-1.5 h-1.5 bg-slate-300 rounded-full"></span>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-slate-300 uppercase mb-1">08:30 AM</p>
                        <h4 class="text-slate-800 font-bold text-sm">Nutritious Breakfast</h4>
                        <p class="text-slate-400 text-xs leading-relaxed mt-1">Menu: Oatmeal with Fresh Bananas.</p>
                        <div class="mt-3 bg-slate-50/80 p-3 rounded-xl border border-slate-100 flex items-center gap-3">
                            <span class="material-symbols-outlined text-blue-500 text-sm">restaurant</span>
                            <span class="text-[10px] font-bold text-slate-500">Consumed 90% of portion</span>
                        </div>
                    </div>
                </div>

                <div class="relative pl-12">
                    <p class="text-[10px] font-black text-slate-300 uppercase">07:45 AM</p>
                </div>
            </div>

            <button class="mt-8 w-full border border-slate-200 text-slate-600 py-3.5 rounded-2xl font-bold text-xs flex items-center justify-center gap-2 hover:bg-slate-50 transition-all">
                <span class="material-symbols-outlined text-sm">download</span>
                Download Full Day Report
            </button>
        </div>

    </div>

</div>
@endsection
