<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeChild · Daftar Daycare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,400,0,0" />
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
        .step-hidden { display: none; }
        .glass-card { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.5); }
        .dashed-box { background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='12' ry='12' stroke='%23CBD5E1' stroke-width='2' stroke-dasharray='8%2c 8' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e"); border-radius: 12px; }
    </style>
    <script>
        tailwind.config = {
            theme: { extend: { colors: { primary: { 50: '#f0f9ff', 100: '#e0f2fe', 500: '#0ea5e9', 600: '#0284c7', 900: '#0c4a6e' } } } }
        }
    </script>
</head>
<body class="min-h-screen flex items-center justify-center p-4 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] relative">
    <div class="absolute inset-0 bg-primary-50/90 z-0"></div>
    
    <div class="w-full max-w-2xl relative z-10 my-8">
        <div class="text-center mb-8">
            <h1 class="text-2xl sm:text-3xl font-extrabold text-primary-900 mb-2">Registrasi Daycare</h1>
            <p class="text-sm text-slate-500">Tingkatkan keamanan & kredibilitas daycare Anda bersama SafeChild</p>
        </div>

        <div class="glass-card rounded-3xl shadow-xl p-6 sm:p-10 border border-white">
            
            <!-- Progress Bar -->
            <div class="mb-8 relative">
                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded-full bg-primary-100">
                    <div id="progress-bar" style="width: 25%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-500 transition-all duration-500"></div>
                </div>
                <div class="flex justify-between text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                    <span id="label-step-1" class="text-primary-600">Info Daycare</span>
                    <span id="label-step-2">Dokumen</span>
                    <span id="label-step-3">Akun Admin</span>
                    <span id="label-step-4">Selesai</span>
                </div>
            </div>

            <form id="registerForm" action="{{ route('register.process') }}" method="POST">
                @csrf
                <input type="hidden" name="role" value="admin">

                <!-- STEP 1: Info Daycare -->
                <div id="step-1" class="step-content">
                    <h3 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary-500">storefront</span> Informasi Daycare
                    </h3>
                    
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Nama Daycare</label>
                                <input type="text" name="daycare_name" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Nama Pemilik</label>
                                <input type="text" name="owner_name" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Email Daycare</label>
                                <input type="email" name="daycare_email" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Nomor Telepon</label>
                                <input type="tel" name="daycare_phone" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Alamat Lengkap</label>
                            <textarea name="address" rows="2" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500"></textarea>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Kota/Provinsi</label>
                                <input type="text" name="city" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Kapasitas Anak</label>
                                <input type="number" name="capacity" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex justify-end">
                        <button type="button" onclick="nextStep()" class="px-6 py-2.5 bg-primary-600 hover:bg-primary-700 text-white font-bold rounded-xl text-sm flex items-center gap-2 transition">
                            Lanjut <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 2: Dokumen -->
                <div id="step-2" class="step-content step-hidden">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary-500">folder_open</span> Upload Dokumen
                    </h3>
                    <p class="text-sm text-slate-500 mb-6">Kami memerlukan dokumen untuk verifikasi legalitas daycare Anda.</p>
                    
                    <div class="space-y-4">
                        <div class="dashed-box p-6 flex flex-col items-center justify-center cursor-pointer hover:bg-slate-50 transition">
                            <span class="material-symbols-outlined text-3xl text-slate-400 mb-2">upload_file</span>
                            <p class="text-sm font-bold text-slate-700">Surat Izin Usaha / NIB</p>
                            <p class="text-[10px] text-slate-400">PDF, JPG, PNG up to 5MB</p>
                            <input type="file" class="hidden">
                        </div>
                        
                        <div class="dashed-box p-6 flex flex-col items-center justify-center cursor-pointer hover:bg-slate-50 transition">
                            <span class="material-symbols-outlined text-3xl text-slate-400 mb-2">add_photo_alternate</span>
                            <p class="text-sm font-bold text-slate-700">Foto Tampak Depan Daycare</p>
                            <p class="text-[10px] text-slate-400">JPG, PNG up to 5MB</p>
                            <input type="file" class="hidden">
                        </div>

                        <div class="dashed-box p-6 flex flex-col items-center justify-center cursor-pointer hover:bg-slate-50 transition">
                            <span class="material-symbols-outlined text-3xl text-slate-400 mb-2">badge</span>
                            <p class="text-sm font-bold text-slate-700">KTP / Identitas Pemilik</p>
                            <p class="text-[10px] text-slate-400">JPG, PNG up to 2MB</p>
                            <input type="file" class="hidden">
                        </div>
                    </div>

                    <div class="flex justify-between items-center mt-8">
                        <button type="button" onclick="prevStep()" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold rounded-xl text-sm transition">Kembali</button>
                        <button type="button" onclick="nextStep()" class="px-6 py-2.5 bg-primary-600 hover:bg-primary-700 text-white font-bold rounded-xl text-sm flex items-center gap-2 transition">
                            Lanjut <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 3: Akun Admin -->
                <div id="step-3" class="step-content step-hidden">
                    <h3 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary-500">manage_accounts</span> Buat Akun Admin
                    </h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Nama Admin</label>
                            <input type="text" name="name" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Email Login</label>
                            <input type="email" name="email" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Password</label>
                            <input type="password" name="password" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                        </div>
                    </div>

                    <div class="flex justify-between items-center mt-8">
                        <button type="button" onclick="prevStep()" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold rounded-xl text-sm transition">Kembali</button>
                        <button type="button" onclick="nextStep()" class="px-6 py-2.5 bg-primary-600 hover:bg-primary-700 text-white font-bold rounded-xl text-sm flex items-center gap-2 transition">
                            Lanjut <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 4: Waiting Verification -->
                <div id="step-4" class="step-content step-hidden text-center py-6">
                    <div class="w-20 h-20 bg-blue-50 text-blue-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="material-symbols-outlined text-4xl">verified_user</span>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-800 mb-2">Permintaan Diterima!</h3>
                    <p class="text-sm text-slate-500 mb-6">Daycare Anda sedang diverifikasi oleh tim SafeChild Indonesia. Proses ini memakan waktu maksimal 1x24 jam.</p>
                    
                    <div class="bg-primary-50 border border-primary-100 p-4 rounded-xl inline-block text-left mb-8 w-full max-w-sm">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary-500 animate-spin">sync</span>
                            <div>
                                <p class="text-xs font-bold text-slate-800">Status Verifikasi Sistem</p>
                                <p class="text-[10px] text-slate-500">Menunggu Review Dokumen</p>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="w-full px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-bold rounded-xl text-sm shadow-lg shadow-primary-600/30 transition">
                        Selesaikan & Kembali ke Beranda
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center text-xs text-slate-500">
                Sudah terdaftar? <a href="{{ route('login') }}" class="font-bold text-primary-600 hover:underline">Masuk di sini</a>
            </div>
        </div>
    </div>

    <script>
        let currentStep = 1;

        function updateUI() {
            document.querySelectorAll('.step-content').forEach(el => el.classList.add('step-hidden'));
            document.getElementById(`step-${currentStep}`).classList.remove('step-hidden');
            
            document.getElementById('progress-bar').style.width = `${currentStep * 25}%`;
            
            for(let i=1; i<=4; i++) {
                const label = document.getElementById(`label-step-${i}`);
                if (i <= currentStep) {
                    label.classList.add('text-primary-600');
                    label.classList.remove('text-slate-400');
                } else {
                    label.classList.remove('text-primary-600');
                    label.classList.add('text-slate-400');
                }
            }
        }

        function nextStep() {
            if(currentStep < 4) {
                currentStep++;
                updateUI();
            }
        }

        function prevStep() {
            if(currentStep > 1) {
                currentStep--;
                updateUI();
            }
        }
    </script>
</body>
</html>
