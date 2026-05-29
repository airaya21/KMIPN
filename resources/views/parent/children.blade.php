@extends('layouts.parent')

@section('title', 'Anak Saya')
@section('header_title', 'Anak Saya')
@section('header_subtitle', 'Kelola data anak yang terhubung dengan akun Anda')

@section('content')
<div class="space-y-6 animate-fade-in-up" id="app-container">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-2">
        <h3 class="font-extrabold text-slate-800 text-xl tracking-tight">Daftar Anak</h3>
        <button onclick="openModal()" class="bg-blue-600 text-white px-6 py-3 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-blue-700 transition-all shadow-lg shadow-blue-600/30">
            <span class="material-symbols-outlined text-xl">add</span> Tambah Anak
        </button>
    </div>

    @php
        // Dummy data for simulation
        $children = [
            [
                'name' => 'Dinda Putri Ayu', 'nickname' => 'Dinda', 'age' => '3 tahun 2 bulan', 
                'daycare' => 'Daycare Little Bee Banjarmasin', 'status' => 'Aktif', 'photo' => 'images/DINDA.jpg',
                'blood_type' => 'O', 'allergy' => 'Susu Sapi, Debu', 'note' => 'Dinda harus tidur siang minimal 1 jam. Mudah berkeringat.'
            ],
            [
                'name' => 'Arka Bima Sena', 'nickname' => 'Arka', 'age' => '1 tahun 4 bulan', 
                'daycare' => 'Daycare Little Bee Banjarmasin', 'status' => 'Menunggu Verifikasi', 'photo' => 'images/ARKA.jpg',
                'blood_type' => 'A', 'allergy' => 'Tidak ada', 'note' => 'Sedang masa transisi MPASI padat.'
            ],
        ];
        // To test empty state, uncomment this:
        // $children = [];
    @endphp

    @if(count($children) > 0)
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            @foreach($children as $child)
            <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-[0_4px_24px_rgba(0,0,0,0.02)] hover:-translate-y-1 hover:shadow-[0_8px_30px_rgba(0,0,0,0.06)] transition-all duration-300">
                <div class="flex gap-5">
                    <div class="w-20 h-20 rounded-2xl border border-slate-200 flex items-center justify-center shrink-0 overflow-hidden bg-slate-100">
                        <img src="{{ asset($child['photo']) }}" alt="Foto {{ $child['nickname'] }}" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-1">
                            <h4 class="font-extrabold text-slate-800 text-lg">{{ $child['name'] }}</h4>
                            @if($child['status'] == 'Aktif')
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-black uppercase tracking-wider shrink-0">Aktif</span>
                            @elseif($child['status'] == 'Menunggu Verifikasi')
                                <span class="px-3 py-1 bg-[#FFD600]/20 text-[#B29600] rounded-full text-[10px] font-black uppercase tracking-wider shrink-0">Aktif</span>
                            @else
                                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-[10px] font-black uppercase tracking-wider shrink-0">Ditolak</span>
                            @endif
                        </div>
                        <p class="text-slate-500 text-sm font-semibold mb-3">"{{ $child['nickname'] }}" • {{ $child['age'] }}</p>
                        
                        <div class="flex items-center gap-2 text-slate-400 text-xs font-semibold mb-4">
                            <span class="material-symbols-outlined text-[16px]">apartment</span> {{ $child['daycare'] }}
                        </div>

                        <div class="bg-slate-50 border border-slate-100 rounded-xl p-4 mb-5">
                            <div class="grid grid-cols-2 gap-4 mb-3 pb-3 border-b border-slate-200">
                                <div>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Gol. Darah</p>
                                    <p class="text-xs font-bold text-slate-700 flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[14px] text-red-500">water_drop</span> {{ $child['blood_type'] }}
                                    </p>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Alergi</p>
                                    <p class="text-xs font-bold text-slate-700 flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[14px] text-orange-500">coronavirus</span> {{ $child['allergy'] }}
                                    </p>
                                </div>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Catatan Orang Tua</p>
                                <p class="text-xs font-medium text-slate-600 italic">"{{ $child['note'] }}"</p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <button class="flex-1 py-2.5 bg-slate-50 text-slate-600 rounded-xl text-xs font-bold hover:bg-blue-50 hover:text-blue-600 border border-slate-100 transition-colors">Lihat Detail</button>
                            <button class="flex-1 py-2.5 bg-slate-50 text-slate-600 rounded-xl text-xs font-bold hover:bg-[#FFD600]/10 hover:text-[#B29600] border border-slate-100 transition-colors">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        {{-- EMPTY STATE --}}
        <div class="bg-white rounded-3xl p-12 border border-slate-100 shadow-[0_4px_24px_rgba(0,0,0,0.02)] flex flex-col items-center justify-center text-center">
            <div class="w-32 h-32 bg-blue-50 rounded-full flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-blue-300 text-[64px]">child_friendly</span>
            </div>
            <h3 class="font-extrabold text-slate-800 text-xl mb-2">Belum ada anak yang terhubung</h3>
            <p class="text-slate-500 text-sm mb-8 max-w-sm">Anda belum menambahkan data anak ke dalam akun Anda. Tambahkan sekarang untuk memantau aktivitas mereka.</p>
            <button onclick="openModal()" class="bg-blue-600 text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-blue-700 transition-all shadow-lg shadow-blue-600/30">
                Daftarkan Anak
            </button>
        </div>
    @endif
</div>

{{-- MODAL TAMBAH ANAK (MULTI-STEP) --}}
<div id="addModal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm transition-opacity" onclick="closeModal()"></div>
    
    <div class="fixed inset-0 flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-2xl max-h-[90vh] flex flex-col overflow-hidden animate-fade-in-up">
            
            {{-- Modal Header --}}
            <div class="px-8 py-6 border-b border-slate-100 flex justify-between items-center bg-white sticky top-0 z-10">
                <div>
                    <h3 class="font-extrabold text-slate-800 text-xl">Pendaftaran Anak</h3>
                    <p class="text-slate-500 text-xs mt-1 font-semibold" id="step-indicator">Langkah 1 dari 6</p>
                </div>
                <button onclick="closeModal()" class="w-8 h-8 flex items-center justify-center rounded-full text-slate-400 hover:bg-slate-100 hover:text-slate-600 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>
            </div>

            {{-- Modal Body (Scrollable) --}}
            <div class="p-8 overflow-y-auto flex-1 bg-slate-50/50" id="modal-body">
                
                {{-- Step 1: Data Anak --}}
                <div class="step-content block" id="step-1">
                    <h4 class="font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-[#FFD600] text-blue-900 flex items-center justify-center text-xs">1</span> Data Anak
                    </h4>
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center mb-2">
                            <div class="w-20 h-20 rounded-2xl bg-blue-50 border border-dashed border-blue-200 flex flex-col items-center justify-center text-blue-400 cursor-pointer hover:bg-blue-100 transition-colors">
                                <span class="material-symbols-outlined text-[24px]">add_a_photo</span>
                                <span class="text-[10px] font-bold mt-1">Foto</span>
                            </div>
                            <div class="text-xs text-slate-500">Format JPG, PNG (Max. 2MB)</div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Nama Lengkap Anak</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all outline-none text-sm font-medium" placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Nama Panggilan</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all outline-none text-sm font-medium" placeholder="Panggilan akrab">
                        </div>
                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Jenis Kelamin</label>
                                <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all outline-none text-sm font-medium bg-white">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Tanggal Lahir</label>
                                <input type="date" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all outline-none text-sm font-medium text-slate-600">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Step 2: Data Suara Anak --}}
                <div class="step-content hidden" id="step-2">
                    <h4 class="font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-[#FFD600] text-blue-900 flex items-center justify-center text-xs">2</span> Data Suara Anak
                    </h4>
                    <p class="text-xs text-slate-500 mb-6 bg-blue-50 p-4 rounded-xl border border-blue-100 flex gap-3 items-start leading-relaxed">
                        <span class="material-symbols-outlined text-blue-500 text-[18px]">info</span>
                        Data suara digunakan sebagai referensi tambahan untuk analisis AI demi mendeteksi tangisan atau aktivitas anak Anda secara lebih akurat dalam SafeChild Indonesia.
                    </p>
                    
                    <div class="border-2 border-dashed border-slate-200 rounded-2xl p-10 text-center hover:border-blue-400 hover:bg-blue-50/50 transition-colors cursor-pointer bg-white">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 text-blue-600">
                            <span class="material-symbols-outlined text-[32px]">mic</span>
                        </div>
                        <p class="font-bold text-slate-700 text-sm mb-1">Klik atau seret file rekaman suara ke sini</p>
                        <p class="text-xs text-slate-400">Format: MP3, WAV, M4A (Max. 5MB)</p>
                    </div>
                </div>

                {{-- Step 3: Kesehatan --}}
                <div class="step-content hidden" id="step-3">
                    <h4 class="font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-[#FFD600] text-blue-900 flex items-center justify-center text-xs">3</span> Kesehatan
                    </h4>
                    <div class="space-y-5">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Golongan Darah</label>
                            <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all outline-none text-sm font-medium bg-white">
                                <option>Pilih Golongan Darah</option>
                                <option>A</option>
                                <option>B</option>
                                <option>AB</option>
                                <option>O</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Alergi (Opsional)</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all outline-none text-sm font-medium" placeholder="Cth: Kacang, Susu Sapi, dll">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Riwayat Penyakit (Opsional)</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all outline-none text-sm font-medium" placeholder="Cth: Asma">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Kebutuhan Khusus (Opsional)</label>
                            <textarea class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all outline-none text-sm font-medium" rows="3" placeholder="Sebutkan jika ada kebutuhan penanganan khusus..."></textarea>
                        </div>
                    </div>
                </div>

                {{-- Step 4: Dokumen --}}
                <div class="step-content hidden" id="step-4">
                    <h4 class="font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-[#FFD600] text-blue-900 flex items-center justify-center text-xs">4</span> Dokumen Pendukung
                    </h4>
                    
                    <div class="space-y-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-2">Kartu Keluarga (KK)</label>
                            <div class="bg-white border border-slate-200 rounded-xl p-4 flex items-center justify-between hover:bg-slate-50 transition-colors">
                                <div class="flex items-center gap-4">
                                    <span class="material-symbols-outlined text-slate-300 text-[28px]">description</span>
                                    <div>
                                        <p class="text-sm font-bold text-slate-700">Upload Dokumen KK</p>
                                        <p class="text-[10px] text-slate-400">PDF, JPG (Max. 5MB)</p>
                                    </div>
                                </div>
                                <button class="px-5 py-2 bg-blue-50 text-blue-600 rounded-lg text-xs font-bold hover:bg-blue-100 transition-colors">Pilih File</button>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-2">Akta Kelahiran</label>
                            <div class="bg-white border border-slate-200 rounded-xl p-4 flex items-center justify-between hover:bg-slate-50 transition-colors">
                                <div class="flex items-center gap-4">
                                    <span class="material-symbols-outlined text-slate-300 text-[28px]">description</span>
                                    <div>
                                        <p class="text-sm font-bold text-slate-700">Upload Akta Kelahiran</p>
                                        <p class="text-[10px] text-slate-400">PDF, JPG (Max. 5MB)</p>
                                    </div>
                                </div>
                                <button class="px-5 py-2 bg-blue-50 text-blue-600 rounded-lg text-xs font-bold hover:bg-blue-100 transition-colors">Pilih File</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Step 5: Informasi Tambahan --}}
                <div class="step-content hidden" id="step-5">
                    <h4 class="font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-[#FFD600] text-blue-900 flex items-center justify-center text-xs">5</span> Informasi Tambahan
                    </h4>
                    <div class="space-y-5">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Pilih Daycare Tujuan</label>
                            <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all outline-none text-sm font-medium bg-white">
                                <option>Pilih Cabang Daycare</option>
                                <option>CERIA Daycare Pusat (Sudirman)</option>
                                <option>CERIA Daycare Cabang Kemang</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Catatan Orang Tua</label>
                            <textarea class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all outline-none text-sm font-medium" rows="4" placeholder="Tuliskan catatan khusus atau pesan untuk pengasuh..."></textarea>
                        </div>
                    </div>
                </div>

                {{-- Step 6: Review --}}
                <div class="step-content hidden" id="step-6">
                    <h4 class="font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-[#FFD600] text-blue-900 flex items-center justify-center text-xs">6</span> Review Data
                    </h4>
                    <div class="bg-blue-50/50 rounded-2xl p-6 border border-blue-100">
                        <h5 class="text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-3 pb-2 border-b border-slate-200/60">Data Anak</h5>
                        <div class="grid grid-cols-2 gap-y-3 gap-x-4 text-sm mb-6">
                            <div class="text-slate-500">Nama Lengkap</div><div class="font-bold text-slate-800">Dinda Putri Ayu</div>
                            <div class="text-slate-500">Panggilan</div><div class="font-bold text-slate-800">Dinda</div>
                            <div class="text-slate-500">Jenis Kelamin</div><div class="font-bold text-slate-800">Perempuan</div>
                        </div>

                        <h5 class="text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-3 pb-2 border-b border-slate-200/60">Kesehatan & Dokumen</h5>
                        <div class="grid grid-cols-2 gap-y-3 gap-x-4 text-sm mb-6">
                            <div class="text-slate-500">Golongan Darah</div><div class="font-bold text-slate-800">O</div>
                            <div class="text-slate-500">Alergi</div><div class="font-bold text-slate-800">-</div>
                            <div class="text-slate-500">Rekaman Suara</div><div class="font-bold text-green-600 flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">check_circle</span> Terupload</div>
                            <div class="text-slate-500">Dokumen KK</div><div class="font-bold text-green-600 flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">check_circle</span> Terupload</div>
                        </div>
                        
                        <h5 class="text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-3 pb-2 border-b border-slate-200/60">Daycare Pilihan</h5>
                        <div class="text-sm font-bold text-slate-800">CERIA Daycare Pusat (Sudirman)</div>
                    </div>
                </div>

                {{-- Success State --}}
                <div class="step-content hidden text-center py-10" id="step-success">
                    <div class="w-24 h-24 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="material-symbols-outlined text-[48px]">check_circle</span>
                    </div>
                    <h3 class="font-extrabold text-slate-800 text-2xl mb-2">Pendaftaran Berhasil Dikirim</h3>
                    <p class="text-slate-500 text-sm mb-6 max-w-sm mx-auto">Data anak Anda telah kami terima dan sedang dalam proses pengecekan oleh Daycare.</p>
                    <span class="inline-flex items-center px-4 py-2 bg-[#FFD600]/20 text-[#B29600] rounded-full text-xs font-black uppercase tracking-wider mb-8">
                        Menunggu Verifikasi Daycare
                    </span>
                    <div>
                        <button onclick="closeModalAndReset()" class="bg-blue-600 text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-blue-700 transition-all shadow-lg shadow-blue-600/30">
                            Kembali ke Daftar Anak
                        </button>
                    </div>
                </div>

            </div>

            {{-- Modal Footer --}}
            <div class="px-8 py-5 border-t border-slate-100 bg-white flex justify-between items-center" id="modal-footer">
                <button onclick="prevStep()" id="btn-prev" class="hidden px-6 py-2.5 rounded-xl font-bold text-sm text-slate-500 hover:bg-slate-100 transition-colors">
                    Kembali
                </button>
                <div class="flex-1"></div>
                <button onclick="nextStep()" id="btn-next" class="bg-blue-600 text-white px-8 py-2.5 rounded-xl font-bold text-sm hover:bg-blue-700 transition-all shadow-md shadow-blue-600/20">
                    Lanjut
                </button>
                <button onclick="submitForm()" id="btn-submit" class="hidden bg-[#FFD600] text-blue-900 px-8 py-2.5 rounded-xl font-black text-sm hover:brightness-95 transition-all shadow-md shadow-[#FFD600]/30 flex items-center justify-center gap-2">
                    Simpan Data Anak
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    let currentStep = 1;
    const totalSteps = 6;

    function openModal() {
        document.getElementById('addModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden'; 
        showStep(1);
    }

    function closeModal() {
        document.getElementById('addModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    function closeModalAndReset() {
        closeModal();
        setTimeout(() => showStep(1), 300); 
    }

    function showStep(step) {
        currentStep = step;
        
        document.querySelectorAll('.step-content').forEach(el => {
            el.classList.add('hidden');
            el.classList.remove('block');
        });
        
        if (step <= totalSteps) {
            document.getElementById('step-' + step).classList.remove('hidden');
            document.getElementById('step-' + step).classList.add('block');
            document.getElementById('step-indicator').innerText = `Langkah ${step} dari ${totalSteps}`;
            document.getElementById('modal-footer').classList.remove('hidden');
            document.getElementById('modal-footer').classList.add('flex');
        } else {
            document.getElementById('step-success').classList.remove('hidden');
            document.getElementById('step-success').classList.add('block');
            document.getElementById('step-indicator').innerText = `Selesai`;
            document.getElementById('modal-footer').classList.add('hidden');
            document.getElementById('modal-footer').classList.remove('flex');
            return;
        }

        const btnPrev = document.getElementById('btn-prev');
        const btnNext = document.getElementById('btn-next');
        const btnSubmit = document.getElementById('btn-submit');

        if (step === 1) {
            btnPrev.classList.add('hidden');
        } else {
            btnPrev.classList.remove('hidden');
        }

        if (step === totalSteps) {
            btnNext.classList.add('hidden');
            btnSubmit.classList.remove('hidden');
            btnSubmit.classList.add('flex');
        } else {
            btnNext.classList.remove('hidden');
            btnSubmit.classList.add('hidden');
            btnSubmit.classList.remove('flex');
        }
    }

    function nextStep() {
        if (currentStep < totalSteps) {
            showStep(currentStep + 1);
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            showStep(currentStep - 1);
        }
    }

    function submitForm() {
        const btnSubmit = document.getElementById('btn-submit');
        const originalText = btnSubmit.innerHTML;
        btnSubmit.innerHTML = '<span class="material-symbols-outlined animate-spin text-[18px]">progress_activity</span> Menyimpan...';
        btnSubmit.disabled = true;
        
        setTimeout(() => {
            showStep(totalSteps + 1); 
            btnSubmit.innerHTML = originalText;
            btnSubmit.disabled = false;
        }, 1500);
    }
</script>
@endsection
