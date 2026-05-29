@extends('layouts.admin')

@section('title', 'Monitoring Hub')

@section('content')
<div class="space-y-6">

    {{-- HEADER --}}
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
            <h2 class="text-xl font-black text-slate-800">Monitoring Hub</h2>
            <span class="flex items-center gap-1.5 bg-red-50 text-red-500 border border-red-100 px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider">
                <span class="w-1.5 h-1.5 bg-red-500 rounded-full animate-pulse"></span>
                LIVE NOW
            </span>
        </div>
        <div class="flex items-center gap-3">
            <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-300 text-sm">search</span>
                <input type="text" placeholder="Search children or staff..." class="bg-white border border-slate-200 rounded-full py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500 placeholder:text-slate-300 w-56 transition-all">
            </div>
        </div>
    </div>

    {{-- STATS BAR --}}
    <div class="grid grid-cols-4 gap-4">
        {{-- Total Children --}}
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100/50 flex items-center gap-4">
            <div class="w-11 h-11 rounded-xl bg-primary-50 text-primary-600 flex items-center justify-center">
                <span class="material-symbols-outlined text-xl">child_care</span>
            </div>
            <div>
                <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Total Children</p>
                <p class="text-3xl font-black text-slate-800 leading-none mt-1">24</p>
            </div>
        </div>

        {{-- Active Alerts --}}
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100/50 flex items-center gap-4">
            <div class="w-11 h-11 rounded-xl bg-red-50 text-red-500 flex items-center justify-center">
                <span class="material-symbols-outlined text-xl">notifications_active</span>
            </div>
            <div>
                <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Active Alerts</p>
                <p class="text-3xl font-black text-red-500 leading-none mt-1">03</p>
            </div>
        </div>

        {{-- CCTV Status --}}
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100/50 flex items-center gap-4">
            <div class="w-11 h-11 rounded-xl bg-amber-50 text-amber-500 flex items-center justify-center">
                <span class="material-symbols-outlined text-xl">videocam</span>
            </div>
            <div>
                <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">CCTV Status</p>
                <p class="text-3xl font-black text-slate-800 leading-none mt-1">12<span class="text-base text-slate-300 font-bold">/12</span></p>
                <p class="text-[10px] text-green-500 font-bold mt-0.5">Online</p>
            </div>
        </div>

        {{-- Staff Active --}}
        <div class="bg-accent rounded-2xl p-5 shadow-[0_8px_18px_rgba(255,214,0,0.35)] flex items-center gap-4">
            <div class="w-11 h-11 rounded-xl bg-black/10 text-primary-900 flex items-center justify-center">
                <span class="material-symbols-outlined text-xl">badge</span>
            </div>
            <div>
                <p class="text-[10px] text-primary-900/60 font-bold uppercase tracking-wider">Staff Active</p>
                <p class="text-3xl font-black text-primary-900 leading-none mt-1">08</p>
            </div>
        </div>
    </div>

    {{-- MAIN CONTENT --}}
    <div class="grid grid-cols-12 gap-6">

        {{-- CAMERA GRID (left 8 cols) --}}
        <div class="col-span-12 lg:col-span-8">
            <div class="grid grid-cols-2 gap-4">

                {{-- CAM 04 - Arka Raditya --}}
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100/50 overflow-hidden">
                    <div class="relative aspect-video bg-slate-900 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?w=600&fit=crop" class="w-full h-full object-cover">
                        <div class="absolute top-3 left-3 bg-black/40 backdrop-blur text-white text-[9px] font-black uppercase tracking-widest px-2 py-1 rounded">CAM-04 (Play Area)</div>
                        <div class="absolute top-3 right-3 flex items-center gap-1 bg-red-500/90 text-white text-[9px] font-black px-2 py-1 rounded-md">
                            <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse"></span> LIVE
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Arka+Raditya&background=005da7&color=fff&size=40" class="w-10 h-10 rounded-full">
                                <div>
                                    <h4 class="text-slate-800 font-bold text-sm">Arka Raditya</h4>
                                    <p class="text-slate-400 text-xs">Parent: Ibu Sari Widya</p>
                                </div>
                            </div>
                            <span class="flex items-center gap-1 bg-primary-50 text-primary-700 border border-primary-100 px-2 py-1 rounded-full text-[10px] font-black">
                                <span class="material-symbols-outlined text-sm">extension</span> Playing with Blocks
                            </span>
                        </div>
                        <div class="flex items-center justify-between border-t border-slate-50 pt-3">
                            <div class="flex items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Kak+Mia&background=10b981&color=fff&size=28" class="w-7 h-7 rounded-full">
                                <span class="text-slate-500 text-xs font-medium">Caregiver: Kak Mia</span>
                            </div>
                            <button class="text-primary-700 text-[10px] font-black hover:underline">View History</button>
                        </div>
                    </div>
                </div>

                {{-- CAM 01 - Luna Aisyah --}}
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100/50 overflow-hidden">
                    <div class="relative aspect-video bg-slate-900 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560421683-6856ea585c78?w=600&fit=crop" class="w-full h-full object-cover opacity-60">
                        <div class="absolute top-3 left-3 bg-black/40 backdrop-blur text-white text-[9px] font-black uppercase tracking-widest px-2 py-1 rounded">CAM-01 (Quiet Room)</div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-white/10 backdrop-blur flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-2xl">bedtime</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Luna+Aisyah&background=f59e0b&color=fff&size=40" class="w-10 h-10 rounded-full">
                                <div>
                                    <h4 class="text-slate-800 font-bold text-sm">Luna Aisyah</h4>
                                    <p class="text-slate-400 text-xs">Parent: Bp. Doni Setiawan</p>
                                </div>
                            </div>
                            <span class="flex items-center gap-1 bg-purple-50 text-purple-600 border border-purple-100 px-2 py-1 rounded-full text-[10px] font-black">
                                <span class="material-symbols-outlined text-sm">bedtime</span> Napping
                            </span>
                        </div>
                        <div class="flex items-center justify-between border-t border-slate-50 pt-3">
                            <div class="flex items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Kak+Rian&background=8b5cf6&color=fff&size=28" class="w-7 h-7 rounded-full">
                                <span class="text-slate-500 text-xs font-medium">Caregiver: Kak Rian</span>
                            </div>
                            <button class="text-primary-700 text-[10px] font-black hover:underline">View History</button>
                        </div>
                    </div>
                </div>

                {{-- CAM 07 - Kenzo Alfatih --}}
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100/50 overflow-hidden">
                    <div class="relative aspect-video bg-slate-900 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=600&fit=crop" class="w-full h-full object-cover">
                        <div class="absolute top-3 left-3 bg-black/40 backdrop-blur text-white text-[9px] font-black uppercase tracking-widest px-2 py-1 rounded">CAM-07 (Dining)</div>
                        <div class="absolute top-3 right-3 flex items-center gap-1 bg-red-500/90 text-white text-[9px] font-black px-2 py-1 rounded-md">
                            <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse"></span> LIVE
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Kenzo+Alfatih&background=ec4899&color=fff&size=40" class="w-10 h-10 rounded-full">
                                <div>
                                    <h4 class="text-slate-800 font-bold text-sm">Kenzo Alfatih</h4>
                                    <p class="text-slate-400 text-xs">Parent: Ibu Maya Putri</p>
                                </div>
                            </div>
                            <span class="flex items-center gap-1 bg-green-50 text-green-600 border border-green-100 px-2 py-1 rounded-full text-[10px] font-black">
                                <span class="material-symbols-outlined text-sm">restaurant</span> Eating
                            </span>
                        </div>
                        <div class="flex items-center justify-between border-t border-slate-50 pt-3">
                            <div class="flex items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Kak+Sari&background=f97316&color=fff&size=28" class="w-7 h-7 rounded-full">
                                <span class="text-slate-500 text-xs font-medium">Caregiver: Kak Sari</span>
                            </div>
                            <button class="text-primary-700 text-[10px] font-black hover:underline">View History</button>
                        </div>
                    </div>
                </div>

                {{-- Add Monitor View --}}
                <div class="bg-slate-50/80 rounded-2xl border-2 border-dashed border-slate-200 flex flex-col items-center justify-center gap-3 min-h-[200px] cursor-pointer hover:bg-primary-50/40 hover:border-primary-400 transition-all group">
                    <div class="w-14 h-14 rounded-full bg-white shadow-sm flex items-center justify-center text-slate-300 group-hover:text-primary-600 transition-colors">
                        <span class="material-symbols-outlined text-3xl">add_a_photo</span>
                    </div>
                    <p class="text-slate-400 font-bold text-sm group-hover:text-primary-700 transition-colors">Add Monitor View</p>
                </div>

            </div>
        </div>

        {{-- ACTIVE ALERTS PANEL (right 4 cols) --}}
        <div class="col-span-12 lg:col-span-4">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100/50 p-6 space-y-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <h3 class="text-slate-800 font-bold text-base">Active Alerts</h3>
                        <span class="w-6 h-6 rounded-full bg-red-500 text-white text-[10px] font-black flex items-center justify-center">3</span>
                    </div>
                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Real-time</span>
                </div>

                {{-- Alert 1 - Critical --}}
                <div class="bg-red-50 border border-red-100 rounded-2xl p-4 space-y-3">
                    <div class="flex items-start gap-3">
                        <div class="w-9 h-9 rounded-full bg-red-100 text-red-500 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-lg">warning</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <h4 class="text-red-700 font-black text-sm">Child Crying Detected</h4>
                                <span class="text-red-400 text-[10px] font-bold">2m ago</span>
                            </div>
                            <p class="text-red-500/70 text-xs mt-0.5">Area: Quiet Room (CAM-01)</p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button class="flex-1 bg-red-500 hover:bg-red-600 text-white text-[10px] font-black py-2 rounded-xl transition-all">Lihat Detail</button>
                        <button class="flex-1 bg-white border border-red-200 text-red-500 hover:bg-red-50 text-[10px] font-black py-2 rounded-xl transition-all">Hubungi Pengasuh</button>
                    </div>
                </div>

                {{-- Alert 2 - Warning --}}
                <div class="bg-amber-50 border border-amber-100 rounded-2xl p-4 space-y-3">
                    <div class="flex items-start gap-3">
                        <div class="w-9 h-9 rounded-full bg-amber-100 text-amber-500 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-lg">alarm</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <h4 class="text-amber-700 font-black text-sm">Sudah Bangun</h4>
                                <span class="text-amber-400 text-[10px] font-bold">5m ago</span>
                            </div>
                            <p class="text-amber-500/70 text-xs mt-0.5">Arka Raditya – Quiet Room</p>
                        </div>
                    </div>
                    <button class="w-full bg-amber-500 hover:bg-amber-600 text-white text-[10px] font-black py-2 rounded-xl transition-all">Assign Task</button>
                </div>

                {{-- Alert 3 - Info --}}
                <div class="bg-primary-50 border border-primary-100 rounded-2xl p-4 space-y-3">
                    <div class="flex items-start gap-3">
                        <div class="w-9 h-9 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-lg">check_circle</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <h4 class="text-primary-800 font-black text-sm">Meal Finished</h4>
                                <span class="text-primary-400 text-[10px] font-bold">12m ago</span>
                            </div>
                            <p class="text-primary-500/70 text-xs mt-0.5">Luna Aisyah – Dining Room</p>
                        </div>
                    </div>
                    <button class="w-full bg-white border border-primary-200 text-primary-700 hover:bg-primary-50 text-[10px] font-black py-2 rounded-xl transition-all">Dismiss</button>
                </div>

                {{-- Accent divider info --}}
                <div class="flex items-center gap-2 bg-accent/10 border border-accent/30 rounded-xl px-4 py-2.5">
                    <span class="material-symbols-outlined text-sm text-amber-600">info</span>
                    <p class="text-[10px] text-amber-700 font-bold">AI sedang menganalisis feed kamera secara real-time.</p>
                </div>

                <button class="w-full text-center text-primary-700 text-xs font-black hover:underline pt-1">View Alert History</button>
            </div>
        </div>

    </div>
</div>
@endsection
