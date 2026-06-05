@extends('layouts.caregiver')

@section('title', 'Dashboard Caregiver')

@section('header_title', 'Ringkasan Pengawasan Hari Ini')

@section('header_subtitle', 'Pantau aktivitas, keselamatan, dan kondisi anak secara real-time melalui CERIA AI.')

@section('content')
<!-- Statistic Cards (3 kartu: Anak Diasuh, Aktivitas Dicatat, Perlu Perhatian) -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
    <!-- Kartu 1: Anak Diasuh -->
    <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/20 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
        <div class="absolute top-0 right-0 w-24 h-24 bg-primary-container/30 rounded-bl-full -mr-4 -mt-4 opacity-40 group-hover:scale-110 transition-transform"></div>
        <div class="flex items-center gap-5 relative z-10">
            <div class="w-14 h-14 rounded-2xl bg-primary-container flex items-center justify-center text-primary group-hover:rotate-[10deg] transition-transform">
                <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">child_care</span>
            </div>
            <div>
                <p class="text-outline text-xs font-bold uppercase tracking-wider mb-1">Anak Diasuh Hari Ini</p>
                <p class="text-3xl font-black text-on-surface">12</p>
                <p class="text-[11px] text-secondary font-bold mt-1 flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">trending_up</span> +2 minggu ini
                </p>
            </div>
        </div>
    </div>
    
    <!-- Kartu 2: Aktivitas Dicatat -->
    <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/20 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
        <div class="absolute top-0 right-0 w-24 h-24 bg-tertiary-container/30 rounded-bl-full -mr-4 -mt-4 opacity-40 group-hover:scale-110 transition-transform"></div>
        <div class="flex items-center gap-5 relative z-10">
            <div class="w-14 h-14 rounded-2xl bg-tertiary-container flex items-center justify-center text-tertiary group-hover:-rotate-[10deg] transition-transform">
                <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">event_note</span>
            </div>
            <div>
                <p class="text-outline text-xs font-bold uppercase tracking-wider mb-1">Aktivitas Dicatat</p>
                <p class="text-3xl font-black text-on-surface">14</p>
                <p class="text-[11px] text-outline font-bold mt-1 flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">calendar_month</span> Dari 18 terjadwal
                </p>
            </div>
        </div>
    </div>
    
    <!-- Kartu 3: Perlu Perhatian -->
    <div class="bg-surface-container-lowest p-6 rounded-3xl card-shadow border border-outline-variant/20 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
        <div class="absolute top-0 right-0 w-24 h-24 bg-error-container/30 rounded-bl-full -mr-4 -mt-4 opacity-40 group-hover:scale-110 transition-transform"></div>
        <div class="flex items-center gap-5 relative z-10">
            <div class="w-14 h-14 rounded-2xl bg-error-container flex items-center justify-center text-error group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">priority_high</span>
            </div>
            <div>
                <p class="text-outline text-xs font-bold uppercase tracking-wider mb-1">Perlu Perhatian</p>
                <p class="text-3xl font-black text-error">3</p>
                <p class="text-[11px] text-error font-bold mt-1 flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">warning</span> +1 dari kemarin
                </p>
            </div>
        </div>
    </div>
</div>

<!-- RINGKASAN CERIA AI (4 insight cards) -->
<div>
    <div class="flex items-center gap-2 mb-4">
        <span class="material-symbols-outlined text-primary">lightbulb</span>
        <h3 class="text-xl font-bold text-on-surface">Ringkasan Ceria AI</h3>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
        <div class="bg-surface-container-lowest rounded-2xl p-5 border-l-4 border-secondary shadow-sm hover:-translate-y-0.5 transition-all">
            <p class="text-outline text-xs font-semibold">AMAN</p>
            <p class="text-3xl font-black text-on-surface mt-1">8</p>
            <p class="text-xs text-on-surface-variant mt-1">Anak dalam kondisi aman</p>
        </div>
        <div class="bg-surface-container-lowest rounded-2xl p-5 border-l-4 border-tertiary shadow-sm hover:-translate-y-0.5 transition-all">
            <p class="text-outline text-xs font-semibold">OBSERVASI</p>
            <p class="text-3xl font-black text-on-surface mt-1">4</p>
            <p class="text-xs text-on-surface-variant mt-1">Perlu pemantauan ekstra</p>
        </div>
        <div class="bg-surface-container-lowest rounded-2xl p-5 border-l-4 border-error shadow-sm hover:-translate-y-0.5 transition-all">
            <p class="text-outline text-xs font-semibold">PERINGATAN AI</p>
            <p class="text-3xl font-black text-on-surface mt-1">2</p>
            <p class="text-xs text-on-surface-variant mt-1">Insiden terdeteksi</p>
        </div>
        <div class="bg-surface-container-lowest rounded-2xl p-5 border-l-4 border-primary shadow-sm hover:-translate-y-0.5 transition-all">
            <p class="text-outline text-xs font-semibold">AKTIVITAS HARI INI</p>
            <p class="text-3xl font-black text-on-surface mt-1">47</p>
            <p class="text-xs text-on-surface-variant mt-1">Makan, tidur, bermain</p>
        </div>
    </div>
</div>

<!-- 2 KOLOM: STATUS ANAK + INPUT AKTIVITAS HARIAN -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-7">
    <!-- Card Status Anak -->
    <div class="bg-surface-container-lowest rounded-3xl p-6 card-shadow border border-outline-variant/20">
        <div class="flex items-center gap-3 mb-5">
            <div class="w-1.5 h-6 bg-primary rounded-full"></div>
            <h3 class="font-extrabold text-on-surface text-lg tracking-tight">Status Anak Hari Ini</h3>
        </div>
        <div class="space-y-3">
            <div class="flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-low transition-all group cursor-pointer">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-primary-container text-primary flex items-center justify-center font-bold group-hover:scale-105 transition-transform">EJ</div>
                    <div><p class="font-bold text-sm text-on-surface">Ethan James</p><p class="text-xs text-outline">3 tahun</p></div>
                </div>
                <span class="px-3 py-1 rounded-full text-xs font-bold bg-secondary/15 text-secondary">Aman</span>
            </div>
            <div class="flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-low transition-all group cursor-pointer">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-tertiary-container text-tertiary flex items-center justify-center font-bold group-hover:scale-105 transition-transform">ML</div>
                    <div><p class="font-bold text-sm text-on-surface">Mia Lopez</p><p class="text-xs text-outline">2 tahun 8 bln</p></div>
                </div>
                <span class="px-3 py-1 rounded-full text-xs font-bold bg-tertiary/15 text-tertiary">Observasi</span>
            </div>
            <div class="flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-low transition-all group cursor-pointer">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-primary-container text-primary flex items-center justify-center font-bold group-hover:scale-105 transition-transform">OW</div>
                    <div><p class="font-bold text-sm text-on-surface">Oliver White</p><p class="text-xs text-outline">4 tahun</p></div>
                </div>
                <span class="px-3 py-1 rounded-full text-xs font-bold bg-secondary/15 text-secondary">Aman</span>
            </div>
            <div class="flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-low transition-all group cursor-pointer">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-error-container text-error flex items-center justify-center font-bold group-hover:scale-105 transition-transform">SC</div>
                    <div><p class="font-bold text-sm text-on-surface">Sophia Chen</p><p class="text-xs text-outline">3 tahun 2 bln</p></div>
                </div>
                <span class="px-3 py-1 rounded-full text-xs font-bold bg-error/15 text-error">Perlu Perhatian</span>
            </div>
        </div>
        <p class="text-right text-xs text-primary mt-4 font-semibold flex items-center justify-end gap-1">+3 anak lainnya <span class="material-symbols-outlined text-[14px]">arrow_forward</span></p>
    </div>
    
    <!-- Catat Aktivitas Cepat (quick action cards) -->
    <div class="bg-surface-container-lowest rounded-3xl p-6 card-shadow border border-outline-variant/20">
        <div class="flex items-center gap-3 mb-5">
            <div class="w-1.5 h-6 bg-primary rounded-full"></div>
            <h3 class="font-extrabold text-on-surface text-lg tracking-tight">Catat Aktivitas Cepat</h3>
        </div>
        <div class="grid grid-cols-2 gap-3">
            <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all border border-outline-variant/20 text-left group">
                <div class="w-9 h-9 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-sm">restaurant</span></div>
                <span class="text-sm font-semibold text-on-surface">Makan</span>
            </button>
            <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all border border-outline-variant/20 text-left group">
                <div class="w-9 h-9 rounded-full bg-tertiary/10 text-tertiary flex items-center justify-center group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-sm">bedtime</span></div>
                <span class="text-sm font-semibold text-on-surface">Tidur Siang</span>
            </button>
            <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all border border-outline-variant/20 text-left group">
                <div class="w-9 h-9 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-sm">wc</span></div>
                <span class="text-sm font-semibold text-on-surface">Ke Toilet</span>
            </button>
            <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all border border-outline-variant/20 text-left group">
                <div class="w-9 h-9 rounded-full bg-tertiary/10 text-tertiary flex items-center justify-center group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-sm">sports_esports</span></div>
                <span class="text-sm font-semibold text-on-surface">Bermain</span>
            </button>
            <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all border border-outline-variant/20 text-left group">
                <div class="w-9 h-9 rounded-full bg-error/10 text-error flex items-center justify-center group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-sm">medication</span></div>
                <span class="text-sm font-semibold text-on-surface">Obat/Kesehatan</span>
            </button>
            <button class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-all border border-outline-variant/20 text-left group">
                <div class="w-9 h-9 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform"><span class="material-symbols-outlined text-sm">sentiment_satisfied</span></div>
                <span class="text-sm font-semibold text-on-surface">Mood Check</span>
            </button>
        </div>
        <div class="mt-5 pt-4 border-t border-outline-variant/20 flex justify-between text-sm">
            <div><span class="font-bold text-on-surface">Makan:</span> <span class="text-outline">8x</span></div>
            <div><span class="font-bold text-on-surface">Tidur:</span> <span class="text-outline">5x</span></div>
            <div><span class="font-bold text-on-surface">Toilet:</span> <span class="text-outline">11x</span></div>
            <div><span class="font-bold text-on-surface">Bermain:</span> <span class="text-outline">9x</span></div>
        </div>
    </div>
</div>

<!-- DETEKSI CERIA AI HARI INI (progress bars) -->
<div>
    <div class="flex items-center gap-2 mb-4">
        <span class="material-symbols-outlined text-primary">monitor_heart</span>
        <h3 class="text-xl font-bold text-on-surface">Deteksi Ceria AI Hari Ini</h3>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <div class="bg-surface-container-lowest p-5 rounded-2xl card-shadow border border-outline-variant/20">
            <div class="flex justify-between text-sm font-semibold mb-2"><span class="text-on-surface">😢 Tangisan Terdeteksi</span><span class="text-amber-600">24%</span></div>
            <div class="w-full h-2 bg-surface-container-highest rounded-full overflow-hidden"><div class="h-full bg-amber-500 rounded-full" style="width:24%"></div></div>
        </div>
        <div class="bg-surface-container-lowest p-5 rounded-2xl card-shadow border border-outline-variant/20">
            <div class="flex justify-between text-sm font-semibold mb-2"><span class="text-on-surface">⚡ Gerakan Agresif</span><span class="text-amber-600">8%</span></div>
            <div class="w-full h-2 bg-surface-container-highest rounded-full overflow-hidden"><div class="h-full bg-amber-500 rounded-full" style="width:8%"></div></div>
        </div>
        <div class="bg-surface-container-lowest p-5 rounded-2xl card-shadow border border-outline-variant/20">
            <div class="flex justify-between text-sm font-semibold mb-2"><span class="text-on-surface">⚠️ Terjatuh / Tidak Bergerak</span><span class="text-error">3%</span></div>
            <div class="w-full h-2 bg-surface-container-highest rounded-full overflow-hidden"><div class="h-full bg-error rounded-full" style="width:3%"></div></div>
        </div>
        <div class="bg-surface-container-lowest p-5 rounded-2xl card-shadow border border-outline-variant/20">
            <div class="flex justify-between text-sm font-semibold mb-2"><span class="text-on-surface">🤝 Interaksi Tidak Wajar</span><span class="text-orange-600">5%</span></div>
            <div class="w-full h-2 bg-surface-container-highest rounded-full overflow-hidden"><div class="h-full bg-orange-500 rounded-full" style="width:5%"></div></div>
        </div>
    </div>
</div>

<!-- AKTIVITAS TERBARU (timeline) -->
<div class="bg-surface-container-lowest rounded-3xl p-6 card-shadow border border-outline-variant/20">
    <div class="flex items-center gap-3 mb-5">
        <div class="w-1.5 h-6 bg-primary rounded-full"></div>
        <h3 class="font-extrabold text-on-surface text-lg tracking-tight">Aktivitas Terbaru</h3>
    </div>
    <div class="space-y-3">
        <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-surface-container-low transition-all group">
            <span class="text-sm font-bold text-primary min-w-[60px]">08:45</span>
            <div class="flex-1"><span class="font-bold text-on-surface">Ethan James</span> <span class="text-outline">· Sarapan (Nasi tim + telur)</span></div>
            <span class="text-xs px-2 py-1 rounded-full bg-secondary/15 text-secondary">Selesai</span>
        </div>
        <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-surface-container-low transition-all group">
            <span class="text-sm font-bold text-primary min-w-[60px]">09:30</span>
            <div class="flex-1"><span class="font-bold text-on-surface">Sophia Chen</span> <span class="text-outline">· Ke toilet + cuci tangan</span></div>
            <span class="text-xs px-2 py-1 rounded-full bg-error/15 text-error">Perlu perhatian</span>
        </div>
        <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-surface-container-low transition-all group">
            <span class="text-sm font-bold text-primary min-w-[60px]">10:15</span>
            <div class="flex-1"><span class="font-bold text-on-surface">Mia Lopez</span> <span class="text-outline">· Bermain sensori (pasir kinetik)</span></div>
            <span class="text-xs px-2 py-1 rounded-full bg-tertiary/15 text-tertiary">Observasi</span>
        </div>
        <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-surface-container-low transition-all group">
            <span class="text-sm font-bold text-primary min-w-[60px]">11:00</span>
            <div class="flex-1"><span class="font-bold text-on-surface">Oliver White</span> <span class="text-outline">· Tidur siang (durasi 75 menit)</span></div>
            <span class="text-xs px-2 py-1 rounded-full bg-surface-container-highest text-outline">Normal</span>
        </div>
        <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-surface-container-low transition-all group">
            <span class="text-sm font-bold text-primary min-w-[60px]">13:20</span>
            <div class="flex-1"><span class="font-bold text-on-surface">Ethan James</span> <span class="text-outline">· Minum susu + obat (vitamin)</span></div>
            <span class="text-xs px-2 py-1 rounded-full bg-primary/15 text-primary">Kesehatan</span>
        </div>
    </div>
    <div class="mt-4 text-center">
        <button class="text-primary text-sm font-semibold hover:underline flex items-center justify-center gap-1 mx-auto">
            Lihat semua aktivitas <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
        </button>
    </div>
</div>

<!-- Ringkasan Kesehatan & Rekomendasi Ceria AI -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-7">
    <!-- Ringkasan Kesehatan Anak Asuh -->
    <div class="bg-surface-container-lowest rounded-3xl p-6 card-shadow border border-outline-variant/20">
        <div class="flex items-center gap-3 mb-5">
            <span class="material-symbols-outlined text-primary">monitor_heart</span>
            <h3 class="font-bold text-on-surface text-lg">Ringkasan Kesehatan Anak Asuh</h3>
        </div>
        <div class="space-y-4">
            <div class="flex justify-between items-center p-3 rounded-xl bg-surface-container-low">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">vaccines</span>
                    <span class="text-sm font-medium text-on-surface">Imunisasi Terjadwal</span>
                </div>
                <span class="text-sm font-bold text-on-surface">3 anak minggu ini</span>
            </div>
            <div class="flex justify-between items-center p-3 rounded-xl bg-surface-container-low">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">allergy</span>
                    <span class="text-sm font-medium text-on-surface">Alergi / Pantangan</span>
                </div>
                <span class="text-sm font-bold text-on-surface">2 anak (kacang, seafood)</span>
            </div>
            <div class="flex justify-between items-center p-3 rounded-xl bg-surface-container-low">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">medication</span>
                    <span class="text-sm font-medium text-on-surface">Kebutuhan Khusus</span>
                </div>
                <span class="text-sm font-bold text-on-surface">1 anak (asma ringan)</span>
            </div>
        </div>
    </div>
    
    <!-- Rekomendasi Ceria AI (card berwarna primary) -->
    <div class="bg-primary text-on-primary rounded-3xl p-6 card-shadow relative overflow-hidden">
        <div class="absolute -right-20 -top-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
        <div class="relative z-10">
            <div class="flex items-center gap-2 mb-4">
                <span class="material-symbols-outlined">tips_and_updates</span>
                <h3 class="font-bold text-lg">Rekomendasi Ceria AI</h3>
            </div>
            <p class="text-on-primary/80 text-sm mb-5">Berdasarkan pemantauan hari ini, berikut rekomendasi untuk pengasuhan optimal.</p>
            <div class="space-y-3">
                <div class="flex items-start gap-2 p-3 bg-white/10 rounded-xl">
                    <span class="material-symbols-outlined text-sm">group</span>
                    <p class="text-xs">Mia Lopez memerlukan pendampingan ekstra saat sesi bermain kelompok.</p>
                </div>
                <div class="flex items-start gap-2 p-3 bg-white/10 rounded-xl">
                    <span class="material-symbols-outlined text-sm">restaurant</span>
                    <p class="text-xs">Sophia Chen perlu diingatkan untuk menghabiskan porsi makannya.</p>
                </div>
                <div class="flex items-start gap-2 p-3 bg-white/10 rounded-xl">
                    <span class="material-symbols-outlined text-sm">celebration</span>
                    <p class="text-xs">Ethan James menunjukkan perkembangan positif dalam kemandirian.</p>
                </div>
            </div>
            <button class="w-full mt-5 py-2.5 bg-white text-primary rounded-xl font-bold hover:bg-white/90 transition-all">
                Lihat Detail Analisis
            </button>
        </div>
    </div>
</div>
@endsection