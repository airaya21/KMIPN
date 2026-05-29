@extends('layouts.parent')

@section('title', 'Aktivitas & Live CCTV')
@section('header_title', 'Aktivitas & Pemantauan')
@section('header_subtitle', 'Pantau kegiatan harian anak Anda secara real-time melalui CCTV')

@section('content')
<div class="space-y-8 animate-fade-in-up" id="app-container">
    
    {{-- FILTER ANAK (TABS) --}}
    <div class="flex gap-4 border-b border-slate-200 pb-px overflow-x-auto scrollbar-hide">
        <button onclick="setFilter('semua')" id="tab-semua" class="tab-btn pb-4 px-2 text-sm font-extrabold text-blue-600 border-b-4 border-[#FFD600] transition-all whitespace-nowrap">Semua Anak</button>
        <button onclick="setFilter('dinda')" id="tab-dinda" class="tab-btn pb-4 px-2 text-sm font-bold text-slate-400 border-b-4 border-transparent hover:text-pink-500 transition-all whitespace-nowrap">Dinda Putri Ayu</button>
        <button onclick="setFilter('arka')" id="tab-arka" class="tab-btn pb-4 px-2 text-sm font-bold text-slate-400 border-b-4 border-transparent hover:text-blue-500 transition-all whitespace-nowrap">Arka Bima Sena</button>
    </div>

    {{-- LIVE CCTV VIEWER --}}
    <div class="bg-slate-900 rounded-3xl overflow-hidden shadow-2xl relative group border-4 border-slate-800 h-[300px] sm:h-[450px] flex flex-col justify-between">
        {{-- Video Placeholder / Background --}}
        <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Live CCTV" class="absolute inset-0 w-full h-full object-cover opacity-60" id="cctv-feed-img">
        
        {{-- Overlay Top --}}
        <div class="relative z-10 p-5 flex justify-between items-start bg-gradient-to-b from-black/70 to-transparent">
            <div class="flex items-center gap-3">
                <span class="flex items-center gap-1.5 px-3 py-1 bg-red-500 text-white rounded-full text-[10px] font-black uppercase tracking-widest animate-pulse shadow-lg shadow-red-500/30">
                    <span class="w-1.5 h-1.5 bg-white rounded-full"></span> LIVE
                </span>
                <span class="text-white font-semibold text-xs bg-black/40 px-3 py-1.5 rounded-full backdrop-blur-sm border border-white/10" id="cctv-room-name">CCTV 1 - Ruang Bermain Utama</span>
            </div>
            <div class="flex gap-2">
                <button class="w-9 h-9 rounded-full bg-black/40 text-white flex items-center justify-center backdrop-blur-sm border border-white/10 hover:bg-black/60 transition-all">
                    <span class="material-symbols-outlined text-[20px]">fullscreen</span>
                </button>
            </div>
        </div>
        
        {{-- Overlay Bottom --}}
        <div class="relative z-10 p-5 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex justify-between items-end">
            <div>
                <p class="text-white/70 text-xs font-semibold mb-1" id="cctv-timestamp">29 May 2026 • 13:24:10</p>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-green-400"></span>
                    <p class="text-white font-bold text-sm">Status Koneksi: Sangat Baik</p>
                </div>
            </div>
            <div class="flex gap-2">
                <button class="bg-[#FFD600] text-blue-900 px-5 py-2.5 rounded-xl text-xs font-extrabold hover:brightness-95 transition-all shadow-lg flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">photo_camera</span> Tangkap Layar
                </button>
            </div>
        </div>
    </div>

    {{-- TIMELINE AKTIVITAS BERDASARKAN CCTV --}}
    <div class="mt-8">
        <div class="flex items-center gap-3 mb-6">
            <div class="w-2 h-6 bg-[#FFD600] rounded-full"></div>
            <h3 class="font-extrabold text-slate-800 text-lg tracking-tight">Laporan Aktivitas (Auto-Capture)</h3>
        </div>

        {{-- ALERT BANNER KONDISI BAHAYA --}}
        <div class="bg-red-50 border-2 border-red-200 rounded-3xl p-5 mb-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-[0_8px_30px_rgba(239,68,68,0.15)] relative overflow-hidden animate-fade-in-up">
            <div class="absolute -right-4 -top-4 w-24 h-24 bg-red-100 rounded-full blur-2xl opacity-50"></div>
            <div class="flex items-start gap-4 relative z-10">
                <div class="w-12 h-12 rounded-2xl bg-red-600 text-white flex items-center justify-center shrink-0 shadow-lg shadow-red-600/30 animate-pulse">
                    <span class="material-symbols-outlined text-[28px]">crisis_alert</span>
                </div>
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <h4 class="text-base font-extrabold text-red-700">Peringatan: Insiden Terdeteksi AI</h4>
                        <span class="bg-red-600 text-white text-[9px] font-black uppercase tracking-widest px-2 py-0.5 rounded-full animate-pulse">Live Action</span>
                    </div>
                    <p class="text-sm font-medium text-red-600/90 leading-relaxed max-w-2xl">Sistem Audio & CCTV secara *real-time* mendeteksi <b>Dinda</b> menangis karena terjatuh pada pukul 14:05. Segera pantau rekaman CCTV atau hubungi pengasuh.</p>
                </div>
            </div>
            <div class="flex items-center gap-2 w-full sm:w-auto relative z-10">
                <button class="flex-1 sm:flex-none bg-white text-red-600 border border-red-200 px-4 py-3 rounded-xl text-sm font-bold hover:bg-red-50 transition-colors shrink-0 shadow-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">call</span> Hubungi
                </button>
                <button onclick="playIncidentReplay('dinda')" class="flex-1 sm:flex-none bg-red-600 text-white px-6 py-3 rounded-xl text-sm font-bold hover:bg-red-700 transition-colors shrink-0 shadow-lg shadow-red-600/20 flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">replay</span> Putar Ulang CCTV
                </button>
            </div>
        </div>

        <div class="space-y-6 relative before:content-[''] before:absolute before:left-6 before:top-2 before:bottom-0 before:w-0.5 before:bg-slate-200">
            @php
                $activities = [
                    ['child_id' => 'dinda', 'time' => '14:05', 'child' => 'Dinda', 'title' => 'Peringatan: Menangis Karena Terjatuh', 'desc' => 'Terdeteksi insiden Dinda terjatuh di Ruang Bermain Utama yang diikuti dengan suara tangisan. Sistem sedang memantau penanganan oleh pengasuh.', 'icon' => 'warning', 'color' => 'bg-red-100 text-red-600 border-red-300 animate-pulse', 'badge' => 'text-red-700 bg-red-100 border border-red-200', 'gradient' => 'from-red-500 to-red-600', 'bg_icon' => 'mood_bad', 'is_alert' => true],
                    ['child_id' => 'dinda', 'time' => '13:15', 'child' => 'Dinda', 'title' => 'Tidur Siang', 'desc' => 'Dinda terpantau sedang tidur siang di Ruang Tidur A. Posisi aman, pernapasan teratur.', 'icon' => 'bedtime', 'color' => 'bg-pink-100 text-pink-600 border-pink-200', 'badge' => 'text-pink-700 bg-pink-50', 'gradient' => 'from-pink-400 to-pink-500', 'bg_icon' => 'bedtime'],
                    ['child_id' => 'arka', 'time' => '12:30', 'child' => 'Arka', 'title' => 'Makan Siang (MPASI)', 'desc' => 'Arka terpantau sedang disuapi makan siang oleh pengasuh di Ruang Makan. Porsi habis.', 'icon' => 'restaurant', 'color' => 'bg-blue-100 text-blue-600 border-blue-200', 'badge' => 'text-blue-700 bg-blue-50', 'gradient' => 'from-blue-400 to-blue-500', 'bg_icon' => 'restaurant'],
                    ['child_id' => 'dinda', 'time' => '10:45', 'child' => 'Dinda', 'title' => 'Bermain Kelompok', 'desc' => 'Terdeteksi aktivitas bermain bersama teman-teman di Ruang Bermain Utama. Interaksi sosial sangat baik.', 'icon' => 'diversity_1', 'color' => 'bg-pink-100 text-pink-600 border-pink-200', 'badge' => 'text-pink-700 bg-pink-50', 'gradient' => 'from-purple-400 to-pink-400', 'bg_icon' => 'toys'],
                    ['child_id' => 'arka', 'time' => '09:00', 'child' => 'Arka', 'title' => 'Aktivitas Motorik', 'desc' => 'Arka sedang berlatih motorik kasar dan bermain balok susun di Area Motorik.', 'icon' => 'extension', 'color' => 'bg-blue-100 text-blue-600 border-blue-200', 'badge' => 'text-blue-700 bg-blue-50', 'gradient' => 'from-cyan-400 to-blue-500', 'bg_icon' => 'extension'],
                    ['child_id' => 'dinda', 'time' => '08:30', 'child' => 'Dinda', 'title' => 'Kedatangan', 'desc' => 'Dinda telah tiba di Daycare dan disambut oleh pengasuh di Pintu Utama.', 'icon' => 'login', 'color' => 'bg-pink-100 text-pink-600 border-pink-200', 'badge' => 'text-pink-700 bg-pink-50', 'gradient' => 'from-rose-400 to-orange-400', 'bg_icon' => 'waving_hand'],
                    ['child_id' => 'arka', 'time' => '08:15', 'child' => 'Arka', 'title' => 'Kedatangan', 'desc' => 'Arka telah tiba di Daycare dengan keadaan sehat (Suhu: 36.5°C).', 'icon' => 'login', 'color' => 'bg-blue-100 text-blue-600 border-blue-200', 'badge' => 'text-blue-700 bg-blue-50', 'gradient' => 'from-sky-400 to-indigo-500', 'bg_icon' => 'waving_hand'],
                ];
            @endphp

            @foreach($activities as $activity)
            <div class="relative pl-16 group activity-card transition-all duration-500 origin-top" data-child="{{ $activity['child_id'] }}">
                <div class="absolute left-1.5 top-1 w-10 h-10 rounded-2xl bg-white border-2 {{ $activity['color'] }} flex items-center justify-center shadow-sm z-10 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">{{ $activity['icon'] }}</span>
                </div>
                
                <div class="bg-white rounded-2xl p-5 border {{ isset($activity['is_alert']) && $activity['is_alert'] ? 'border-red-400 shadow-[0_8px_30px_rgba(239,68,68,0.12)] bg-red-50/20' : 'border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.02)] group-hover:shadow-[0_8px_30px_rgba(0,0,0,0.06)] group-hover:border-blue-100' }} transition-all flex flex-col sm:flex-row gap-5">
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <span class="text-[10px] font-black uppercase tracking-widest px-2.5 py-1 rounded-full {{ $activity['badge'] }}">{{ $activity['child'] }}</span>
                                <h4 class="font-bold {{ isset($activity['is_alert']) && $activity['is_alert'] ? 'text-red-700' : 'text-slate-800' }} mt-2 text-base">{{ $activity['title'] }}</h4>
                            </div>
                            <span class="text-xs font-bold text-slate-400 bg-slate-50 px-2 py-1 rounded-lg border border-slate-100">{{ $activity['time'] }}</span>
                        </div>
                        <p class="text-sm font-medium leading-relaxed {{ isset($activity['is_alert']) && $activity['is_alert'] ? 'text-red-600/90' : 'text-slate-500' }}">{{ $activity['desc'] }}</p>
                    </div>
                    
                    @if(isset($activity['gradient']))
                    <div class="sm:w-48 h-32 rounded-2xl overflow-hidden shrink-0 relative group/img cursor-pointer bg-gradient-to-br {{ $activity['gradient'] }} flex items-center justify-center shadow-inner">
                        {{-- Background Pattern --}}
                        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:12px_12px]"></div>
                        
                        {{-- Big Icon --}}
                        <span class="material-symbols-outlined text-white text-[64px] opacity-90 drop-shadow-lg group-hover/img:scale-110 group-hover/img:rotate-6 transition-transform duration-500" style="font-variation-settings: 'FILL' 1;">{{ $activity['bg_icon'] }}</span>
                        
                        {{-- Hover Overlay --}}
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover/img:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                            <span class="text-white font-bold text-xs tracking-widest uppercase bg-black/40 px-3 py-1.5 rounded-lg border border-white/20">Lihat Log</span>
                        </div>
                        
                        {{-- Label Auto-Cap --}}
                        <div class="absolute bottom-2 right-2 {{ isset($activity['is_alert']) && $activity['is_alert'] ? 'bg-red-600' : 'bg-black/30' }} backdrop-blur-md text-white text-[9px] px-2 py-1 rounded-lg flex items-center gap-1 font-mono tracking-wider font-bold shadow-lg border border-white/10">
                            <span class="material-symbols-outlined text-[12px] text-white {{ isset($activity['is_alert']) && $activity['is_alert'] ? 'animate-pulse' : '' }}">auto_awesome</span> {{ isset($activity['is_alert']) && $activity['is_alert'] ? 'AI-ALERT' : 'AI-LOG' }}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function setFilter(childId) {
        // Update tabs styling
        const tabs = ['semua', 'dinda', 'arka'];
        tabs.forEach(tab => {
            const btn = document.getElementById('tab-' + tab);
            if (tab === childId) {
                btn.classList.remove('text-slate-400', 'border-transparent', 'font-bold');
                btn.classList.add('text-blue-600', 'border-[#FFD600]', 'font-extrabold');
            } else {
                btn.classList.remove('text-blue-600', 'border-[#FFD600]', 'font-extrabold');
                btn.classList.add('text-slate-400', 'border-transparent', 'font-bold');
            }
        });

        // Filter activities
        const activities = document.querySelectorAll('.activity-card');
        activities.forEach(card => {
            if (childId === 'semua' || card.dataset.child === childId) {
                card.style.display = 'block';
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'scaleY(1)';
                }, 10);
            } else {
                card.style.opacity = '0';
                card.style.transform = 'scaleY(0.8)';
                setTimeout(() => {
                    card.style.display = 'none';
                }, 300);
            }
        });

        // Update CCTV Room Name & Background based on filter
        const roomName = document.getElementById('cctv-room-name');
        const cctvImg = document.getElementById('cctv-feed-img');
        
        if (childId === 'dinda') {
            roomName.innerText = 'CCTV 2 - Ruang Tidur A';
            cctvImg.src = 'https://images.unsplash.com/photo-1555252187-5730a9117a3a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80';
        } else if (childId === 'arka') {
            roomName.innerText = 'CCTV 3 - Area Makan / MPASI';
            cctvImg.src = 'https://images.unsplash.com/photo-1607525381831-f1eb9cba911c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80';
        } else {
            roomName.innerText = 'CCTV 1 - Ruang Bermain Utama';
            cctvImg.src = 'https://images.unsplash.com/photo-1516627145497-ae6968895b74?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80';
        }
    }

    // Live clock for CCTV
    setInterval(() => {
        const now = new Date();
        const timeString = now.toLocaleTimeString('id-ID', { hour12: false });
        const dateString = now.toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' });
        document.getElementById('cctv-timestamp').innerText = `${dateString} • ${timeString}`;
    }, 1000);

    function playIncidentReplay(childId) {
        // 1. Gulir perlahan ke bagian CCTV
        window.scrollTo({top: 0, behavior: 'smooth'});
        
        // 2. Set filter ke anak yang bersangkutan
        setFilter(childId);

        // 3. Simulasikan pemutaran ulang CCTV (Ganti Feed sementara)
        const roomName = document.getElementById('cctv-room-name');
        const cctvImg = document.getElementById('cctv-feed-img');
        
        // Tambahkan badge merah besar "REKAMAN INSIDEN"
        const oldBadge = document.getElementById('replay-badge');
        if (oldBadge) oldBadge.remove();
        
        const badgeSpan = document.createElement('div');
        badgeSpan.className = "absolute top-6 left-1/2 -translate-x-1/2 bg-red-600 text-white px-6 py-2.5 rounded-full text-xs font-black tracking-widest uppercase animate-pulse border-2 border-white z-50 flex items-center gap-2 shadow-2xl shadow-red-500/50";
        badgeSpan.id = "replay-badge";
        badgeSpan.innerHTML = '<span class="material-symbols-outlined text-[20px]">replay</span> REKAMAN CCTV: 14:05';
        
        document.querySelector('.group.relative.border-4').appendChild(badgeSpan);
        
        // Ganti gambar dengan momen insiden (Anak menangis)
        cctvImg.src = 'https://images.unsplash.com/photo-1588079590623-289552d43dbb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80';
        
        // Ubah styling nama ruangan
        roomName.innerText = 'CCTV 1 - Ruang Bermain Utama (REPLAY)';
        roomName.classList.add('bg-red-600/90', 'text-white', 'border-red-400');
        
        // 4. Kembalikan ke Live Feed normal setelah 6 detik
        setTimeout(() => {
            badgeSpan.remove();
            roomName.classList.remove('bg-red-600/90', 'text-white', 'border-red-400');
            setFilter(childId); // Kembalikan CCTV normal sesuai tab aktif
        }, 6000);
    }
</script>
@endsection
