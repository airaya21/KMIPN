@extends('layouts.parent')

@section('title', 'Penjemputan')
@section('header_title', 'Penjemputan Anak')
@section('header_subtitle', 'Kelola daftar penjemput yang diizinkan untuk menjemput anak Anda')

@section('content')
<div class="space-y-8 animate-fade-in-up" id="app-container">

    {{-- Safe Pickup Verification Banner --}}
    <div class="bg-blue-50 border border-blue-200 rounded-3xl p-6 flex flex-col sm:flex-row items-center gap-6 shadow-sm">
        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center shrink-0 text-white shadow-lg shadow-blue-600/30">
            <span class="material-symbols-outlined text-[32px]">verified_user</span>
        </div>
        <div>
            <h4 class="text-lg font-bold text-blue-900 mb-1">Safe Pickup Verification</h4>
            <p class="text-sm font-medium text-blue-700/80 leading-relaxed max-w-3xl">Sistem CERIA menggunakan data penjemput yang telah didaftarkan oleh orang tua untuk membantu proses verifikasi penjemputan anak dan meningkatkan keamanan daycare.</p>
        </div>
    </div>

    {{-- Penjemputan Hari Ini & Riwayat --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        {{-- Section 3: Penjemputan Hari Ini --}}
        <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)] lg:col-span-1 flex flex-col">
            <h3 class="font-extrabold text-slate-800 text-lg mb-6 flex items-center gap-2">
                <span class="material-symbols-outlined text-[#FFD600]">today</span> Hari Ini
            </h3>
            
            <div class="flex-1 flex flex-col gap-4">
                {{-- Dinda Status --}}
                <div class="bg-slate-50 rounded-2xl p-4 border border-slate-100 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl overflow-hidden shrink-0">
                        <img src="{{ asset('images/DINDA.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Dinda&background=fdf4ff&color=d946ef'" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <p class="text-xs font-bold text-slate-400">Dinda</p>
                        <h4 class="text-sm font-bold text-slate-800">Menunggu Penjemputan</h4>
                    </div>
                </div>

                {{-- Arka Status --}}
                <div class="bg-slate-50 rounded-2xl p-4 border border-slate-100 flex items-center gap-4 relative overflow-hidden">
                    <div class="absolute inset-0 bg-green-50/50"></div>
                    <div class="w-12 h-12 rounded-xl overflow-hidden shrink-0 relative z-10">
                        <img src="{{ asset('images/ARKA.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Arka&background=eff6ff&color=3b82f6'" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 relative z-10">
                        <p class="text-xs font-bold text-slate-400">Arka</p>
                        <h4 class="text-sm font-bold text-slate-800">Dijemput oleh Ibu</h4>
                        <p class="text-xs font-semibold text-green-600 mt-1 flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">check_circle</span> Selesai (16:30 WIB)</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Section 4: Riwayat Penjemputan --}}
        <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)] lg:col-span-2 overflow-hidden flex flex-col">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-extrabold text-slate-800 text-lg flex items-center gap-2">
                    <span class="material-symbols-outlined text-blue-600">history</span> Riwayat Penjemputan
                </h3>
            </div>
            
            <div class="overflow-x-auto flex-1">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b-2 border-slate-100">
                            <th class="pb-3 text-xs font-bold text-slate-400 uppercase tracking-wider">Tanggal</th>
                            <th class="pb-3 text-xs font-bold text-slate-400 uppercase tracking-wider">Anak</th>
                            <th class="pb-3 text-xs font-bold text-slate-400 uppercase tracking-wider">Penjemput</th>
                            <th class="pb-3 text-xs font-bold text-slate-400 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors">
                            <td class="py-4 font-semibold text-slate-600">28 Mei 2026</td>
                            <td class="py-4 font-bold text-slate-800">Dinda & Arka</td>
                            <td class="py-4">
                                <p class="font-bold text-slate-700">Siti Aisyah</p>
                                <p class="text-xs text-slate-400">Ibu</p>
                            </td>
                            <td class="py-4">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-lg text-xs font-bold flex items-center gap-1 w-max"><span class="material-symbols-outlined text-[14px]">check_circle</span> Berhasil</span>
                            </td>
                        </tr>
                        <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors">
                            <td class="py-4 font-semibold text-slate-600">27 Mei 2026</td>
                            <td class="py-4 font-bold text-slate-800">Dinda</td>
                            <td class="py-4">
                                <p class="font-bold text-slate-700">Akbar</p>
                                <p class="text-xs text-slate-400">Ayah</p>
                            </td>
                            <td class="py-4">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-lg text-xs font-bold flex items-center gap-1 w-max"><span class="material-symbols-outlined text-[14px]">check_circle</span> Berhasil</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-4 font-semibold text-slate-600">27 Mei 2026</td>
                            <td class="py-4 font-bold text-slate-800">Arka</td>
                            <td class="py-4">
                                <p class="font-bold text-slate-700">Tidak Dikenal</p>
                                <p class="text-xs text-slate-400">-</p>
                            </td>
                            <td class="py-4">
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-lg text-xs font-bold flex items-center gap-1 w-max"><span class="material-symbols-outlined text-[14px]">cancel</span> Ditolak</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Section 1 & 2: Penjemput Terdaftar & Tambah --}}
    <div>
        <div class="flex items-center justify-between mb-6">
            <h3 class="font-extrabold text-slate-800 text-xl flex items-center gap-2">
                <span class="material-symbols-outlined text-blue-600">group</span> Penjemput Terdaftar
            </h3>
            <button onclick="openModal('modal-add-pickup')" class="bg-blue-600 text-white px-5 py-2.5 rounded-xl text-sm font-bold hover:bg-blue-700 transition-all shadow-lg shadow-blue-600/20 flex items-center gap-2 hover:-translate-y-0.5">
                <span class="material-symbols-outlined text-[18px]">add</span> Tambah Penjemput
            </button>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            {{-- Card Ibu --}}
            <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] transition-all group relative overflow-hidden flex flex-col">
                <div class="absolute top-0 right-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity flex gap-2 z-10">
                    <button class="w-8 h-8 bg-slate-100 text-slate-600 rounded-full flex items-center justify-center hover:bg-blue-100 hover:text-blue-600 transition-colors"><span class="material-symbols-outlined text-[16px]">edit</span></button>
                    <button class="w-8 h-8 bg-slate-100 text-slate-600 rounded-full flex items-center justify-center hover:bg-red-100 hover:text-red-600 transition-colors"><span class="material-symbols-outlined text-[16px]">delete</span></button>
                </div>
                
                <div class="flex flex-col items-center text-center flex-1">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-4 ring-4 ring-slate-50 relative">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Ibu" class="w-full h-full object-cover relative z-0">
                    </div>
                    <h4 class="text-lg font-bold text-slate-800">Siti Aisyah</h4>
                    <p class="text-sm font-medium text-slate-500 mb-4 bg-slate-50 px-3 py-1 rounded-full border border-slate-100 mt-1">Ibu</p>
                    
                    <div class="w-full space-y-3 mt-auto text-left">
                        <div class="flex items-center gap-3 text-sm text-slate-600 bg-slate-50 p-3 rounded-xl border border-slate-100">
                            <span class="material-symbols-outlined text-slate-400">phone_iphone</span> 0812-3456-7890
                        </div>
                        <div class="flex items-center gap-3 text-sm font-bold text-green-600 bg-green-50 p-3 rounded-xl border border-green-100">
                            <span class="material-symbols-outlined">verified</span> Terverifikasi
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card Ayah --}}
            <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] transition-all group relative overflow-hidden flex flex-col">
                <div class="absolute top-0 right-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity flex gap-2 z-10">
                    <button class="w-8 h-8 bg-slate-100 text-slate-600 rounded-full flex items-center justify-center hover:bg-blue-100 hover:text-blue-600 transition-colors"><span class="material-symbols-outlined text-[16px]">edit</span></button>
                    <button class="w-8 h-8 bg-slate-100 text-slate-600 rounded-full flex items-center justify-center hover:bg-red-100 hover:text-red-600 transition-colors"><span class="material-symbols-outlined text-[16px]">delete</span></button>
                </div>
                
                <div class="flex flex-col items-center text-center flex-1">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-4 ring-4 ring-slate-50 relative">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Ayah" class="w-full h-full object-cover relative z-0">
                    </div>
                    <h4 class="text-lg font-bold text-slate-800">Akbar</h4>
                    <p class="text-sm font-medium text-slate-500 mb-4 bg-slate-50 px-3 py-1 rounded-full border border-slate-100 mt-1">Ayah</p>
                    
                    <div class="w-full space-y-3 mt-auto text-left">
                        <div class="flex items-center gap-3 text-sm text-slate-600 bg-slate-50 p-3 rounded-xl border border-slate-100">
                            <span class="material-symbols-outlined text-slate-400">phone_iphone</span> 0812-9876-5432
                        </div>
                        <div class="flex items-center gap-3 text-sm font-bold text-green-600 bg-green-50 p-3 rounded-xl border border-green-100">
                            <span class="material-symbols-outlined">verified</span> Terverifikasi
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card Paman (Pending) --}}
            <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] transition-all group relative overflow-hidden flex flex-col">
                <div class="absolute top-0 right-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity flex gap-2 z-10">
                    <button class="w-8 h-8 bg-slate-100 text-slate-600 rounded-full flex items-center justify-center hover:bg-blue-100 hover:text-blue-600 transition-colors"><span class="material-symbols-outlined text-[16px]">edit</span></button>
                    <button class="w-8 h-8 bg-slate-100 text-slate-600 rounded-full flex items-center justify-center hover:bg-red-100 hover:text-red-600 transition-colors"><span class="material-symbols-outlined text-[16px]">delete</span></button>
                </div>
                
                <div class="flex flex-col items-center text-center flex-1">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-4 ring-4 ring-slate-50 bg-slate-200 flex items-center justify-center">
                        <span class="material-symbols-outlined text-slate-400 text-[40px]">person</span>
                    </div>
                    <h4 class="text-lg font-bold text-slate-800">Ahmad Zaki</h4>
                    <p class="text-sm font-medium text-slate-500 mb-4 bg-slate-50 px-3 py-1 rounded-full border border-slate-100 mt-1">Paman</p>
                    
                    <div class="w-full space-y-3 mt-auto text-left">
                        <div class="flex items-center gap-3 text-sm text-slate-600 bg-slate-50 p-3 rounded-xl border border-slate-100">
                            <span class="material-symbols-outlined text-slate-400">phone_iphone</span> 0813-1122-3344
                        </div>
                        <div class="flex items-center gap-3 text-sm font-bold text-[#FFD600] bg-[#FFD600]/10 p-3 rounded-xl border border-[#FFD600]/20">
                            <span class="material-symbols-outlined">pending_actions</span> Menunggu Verifikasi
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- MODAL TAMBAH PENJEMPUT --}}
<div id="modal-add-pickup" class="fixed inset-0 z-50 hidden opacity-0 transition-opacity duration-300">
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeModal('modal-add-pickup')"></div>
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
        <div class="relative bg-white rounded-[2rem] text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:max-w-md w-full scale-95 opacity-0 duration-300" id="modal-add-pickup-content">
            
            <div class="bg-blue-600 px-6 py-5 flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-extrabold text-white">Tambah Penjemput</h3>
                    <p class="text-blue-100 text-sm font-medium mt-1">Daftarkan orang yang diizinkan</p>
                </div>
                <button onclick="closeModal('modal-add-pickup')" class="text-white/80 hover:text-white hover:bg-white/20 p-2 rounded-full transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            
            <form action="#" method="POST" class="px-6 py-6 space-y-5">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap</label>
                    <input type="text" placeholder="Cth: Anisa" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all font-medium text-slate-700 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Hubungan dengan Anak</label>
                    <div class="relative">
                        <select class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all font-medium text-slate-700 outline-none appearance-none">
                            <option value="">Pilih hubungan...</option>
                            <option value="ayah">Ayah</option>
                            <option value="ibu">Ibu</option>
                            <option value="kakek">Kakek</option>
                            <option value="nenek">Nenek</option>
                            <option value="paman">Paman</option>
                            <option value="bibi">Bibi</option>
                            <option value="wali">Wali</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                        <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400">expand_more</span>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nomor HP Aktif</label>
                    <input type="tel" placeholder="Cth: 081234567890" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all font-medium text-slate-700 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Foto Wajah (Untuk Verifikasi)</label>
                    <div class="border-2 border-dashed border-slate-300 rounded-2xl p-6 text-center hover:bg-slate-50 transition-colors cursor-pointer relative overflow-hidden group">
                        <input type="file" id="photo-upload" class="absolute inset-0 opacity-0 cursor-pointer z-10" accept="image/*" onchange="previewImage(this)">
                        
                        <div id="upload-placeholder" class="space-y-2">
                            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined">add_a_photo</span>
                            </div>
                            <p class="text-sm font-bold text-slate-700">Pilih atau letakkan foto</p>
                            <p class="text-xs font-medium text-slate-400">PNG, JPG up to 5MB</p>
                        </div>
                        
                        <div id="image-preview" class="hidden absolute inset-0 bg-white z-20">
                            <img src="" id="preview-img" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <p class="text-white text-sm font-bold">Ganti Foto</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            <div class="px-6 py-5 bg-slate-50 flex justify-end gap-3 rounded-b-[2rem] border-t border-slate-100">
                <button onclick="closeModal('modal-add-pickup')" class="px-5 py-2.5 rounded-xl text-sm font-bold text-slate-600 hover:bg-slate-200 transition-colors">
                    Batal
                </button>
                <button onclick="closeModal('modal-add-pickup')" class="bg-[#FFD600] text-blue-900 px-6 py-2.5 rounded-xl text-sm font-extrabold hover:bg-yellow-400 transition-all shadow-lg shadow-yellow-400/30">
                    Simpan Data
                </button>
            </div>
            
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Fungsi buka modal
    function openModal(id) {
        const modal = document.getElementById(id);
        const content = document.getElementById(id + '-content');
        
        modal.classList.remove('hidden');
        // Force reflow
        void modal.offsetWidth;
        
        modal.classList.remove('opacity-0');
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }

    // Fungsi tutup modal
    function closeModal(id) {
        const modal = document.getElementById(id);
        const content = document.getElementById(id + '-content');
        
        modal.classList.add('opacity-0');
        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-95', 'opacity-0');
        
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // Wait for transition
    }

    // Image preview
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                document.getElementById('upload-placeholder').classList.add('hidden');
                document.getElementById('image-preview').classList.remove('hidden');
                document.getElementById('preview-img').src = e.target.result;
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
