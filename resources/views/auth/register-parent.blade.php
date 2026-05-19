<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeChild · Daftar Orang Tua</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,400,0,0" />
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
        .step-hidden { display: none; }
        .glass-card { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.5); }
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
            <h1 class="text-2xl sm:text-3xl font-extrabold text-primary-900 mb-2">Registrasi Orang Tua</h1>
            <p class="text-sm text-slate-500">Mari hubungkan Anda dengan si buah hati di SafeChild</p>
        </div>

        <div class="glass-card rounded-3xl shadow-xl p-6 sm:p-10 border border-white">
            
            <!-- Progress Bar -->
            <div class="mb-8 relative">
                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded-full bg-primary-100">
                    <div id="progress-bar" style="width: 25%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-500 transition-all duration-500"></div>
                </div>
                <div class="flex justify-between text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                    <span id="label-step-1" class="text-primary-600">Akun</span>
                    <span id="label-step-2">Verifikasi OTP</span>
                    <span id="label-step-3">Anak</span>
                    <span id="label-step-4">Selesai</span>
                </div>
            </div>

            <form id="registerForm" action="{{ route('register.process') }}" method="POST">
                @csrf
                <input type="hidden" name="role" value="parent">

                <!-- STEP 1: Akun -->
                <div id="step-1" class="step-content">
                    <h3 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary-500">person</span> Informasi Akun
                    </h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Nama Lengkap</label>
                            <input type="text" name="name" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Email</label>
                                <input type="email" name="email" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Nomor HP</label>
                                <input type="tel" name="phone" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Password</label>
                                <input type="password" name="password" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex justify-end">
                        <button type="button" onclick="nextStep()" class="px-6 py-2.5 bg-primary-600 hover:bg-primary-700 text-white font-bold rounded-xl text-sm flex items-center gap-2 transition">
                            Lanjut <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 2: OTP -->
                <div id="step-2" class="step-content step-hidden text-center py-6">
                    <div class="w-16 h-16 bg-primary-50 text-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="material-symbols-outlined text-3xl">mark_email_read</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Verifikasi Email Anda</h3>
                    <p class="text-sm text-slate-500 mb-6">Kami telah mengirimkan 4 digit kode OTP ke email Anda.</p>
                    
                    <div class="flex justify-center gap-3 mb-6">
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-bold bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:border-primary-500">
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-bold bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:border-primary-500">
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-bold bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:border-primary-500">
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-bold bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:border-primary-500">
                    </div>
                    
                    <p class="text-xs text-slate-500 mb-8">Kirim ulang kode dalam <span class="font-bold text-primary-600" id="countdown">00:59</span></p>

                    <div class="flex justify-between items-center">
                        <button type="button" onclick="prevStep()" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold rounded-xl text-sm transition">Kembali</button>
                        <button type="button" onclick="nextStep()" class="px-6 py-2.5 bg-primary-600 hover:bg-primary-700 text-white font-bold rounded-xl text-sm transition">Verifikasi</button>
                    </div>
                </div>

                <!-- STEP 3: Hubungkan Anak -->
                <div id="step-3" class="step-content step-hidden">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary-500">family_restroom</span> Hubungkan Anak
                    </h3>
                    <p class="text-sm text-slate-500 mb-6">Masukkan Child Code yang diberikan oleh daycare untuk memantau anak Anda.</p>
                    
                    <div id="child-container" class="space-y-4 mb-4">
                        <div class="flex items-end gap-3 p-4 bg-slate-50 border border-slate-200 rounded-xl relative">
                            <div class="flex-1 space-y-3">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1">Child Code</label>
                                    <div class="flex gap-2">
                                        <input type="text" name="child_code[]" placeholder="Contoh: ANK-29318" class="flex-1 px-4 py-2 bg-white border border-slate-200 rounded-lg text-sm uppercase focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                                        <button type="button" class="px-3 bg-slate-800 text-white rounded-lg flex items-center justify-center hover:bg-slate-700 transition" title="Scan QR">
                                            <span class="material-symbols-outlined text-sm">qr_code_scanner</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1">Hubungan</label>
                                    <select name="relation[]" class="w-full px-4 py-2 bg-white border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500/20">
                                        <option value="ayah">Ayah</option>
                                        <option value="ibu">Ibu</option>
                                        <option value="wali">Wali</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" onclick="addChild()" class="text-xs font-bold text-primary-600 flex items-center gap-1 hover:text-primary-700 mb-8 transition">
                        <span class="material-symbols-outlined text-sm">add_circle</span> Tambah Anak
                    </button>

                    <div class="flex justify-between items-center">
                        <button type="button" onclick="prevStep()" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold rounded-xl text-sm transition">Kembali</button>
                        <button type="button" onclick="nextStep()" class="px-6 py-2.5 bg-primary-600 hover:bg-primary-700 text-white font-bold rounded-xl text-sm flex items-center gap-2 transition">
                            Lanjut <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 4: Success/Waiting Approval -->
                <div id="step-4" class="step-content step-hidden text-center py-6">
                    <div class="w-20 h-20 bg-green-50 text-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="material-symbols-outlined text-4xl">check_circle</span>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-800 mb-2">Registrasi Berhasil!</h3>
                    <p class="text-sm text-slate-500 mb-6">Akun Anda sedang diverifikasi oleh admin daycare. Mohon tunggu notifikasi melalui email.</p>
                    
                    <div class="bg-blue-50 border border-blue-100 p-4 rounded-xl inline-block text-left mb-8">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-blue-500 animate-spin">hourglass_empty</span>
                            <div>
                                <p class="text-xs font-bold text-slate-800">Status Verifikasi</p>
                                <p class="text-[10px] text-slate-500">Menunggu Approval Admin</p>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="w-full px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-bold rounded-xl text-sm shadow-lg shadow-primary-600/30 transition">
                        Selesaikan & Kembali ke Login
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center text-xs text-slate-500">
                Sudah punya akun? <a href="{{ route('login') }}" class="font-bold text-primary-600 hover:underline">Masuk di sini</a>
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

        function addChild() {
            const container = document.getElementById('child-container');
            const newChild = document.createElement('div');
            newChild.className = "flex items-end gap-3 p-4 bg-slate-50 border border-slate-200 rounded-xl relative mt-4";
            newChild.innerHTML = `
                <div class="flex-1 space-y-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Child Code</label>
                        <input type="text" name="child_code[]" placeholder="Contoh: ANK-29318" class="w-full px-4 py-2 bg-white border border-slate-200 rounded-lg text-sm uppercase focus:ring-2 focus:ring-primary-500/20 focus:border-primary-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Hubungan</label>
                        <select name="relation[]" class="w-full px-4 py-2 bg-white border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500/20">
                            <option value="ayah">Ayah</option>
                            <option value="ibu">Ibu</option>
                            <option value="wali">Wali</option>
                        </select>
                    </div>
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="absolute top-2 right-2 text-slate-400 hover:text-red-500 transition">
                    <span class="material-symbols-outlined text-sm">close</span>
                </button>
            `;
            container.appendChild(newChild);
        }
    </script>
</body>
</html>
