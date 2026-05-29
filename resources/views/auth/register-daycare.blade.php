<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceria · Daftar Daycare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,400,0,0" />
    <style>
        body { font-family: 'Inter', sans-serif; }
        .step-hidden { display: none; }
        .glass-card { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.5); }
        .dashed-box { background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='12' ry='12' stroke='%23CBD5E1' stroke-width='2' stroke-dasharray='8%2c 8' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e"); border-radius: 12px; }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        'ceria-blue': {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        },
                        'ceria-yellow': {
                            50: '#fffbeb',
                            100: '#fef3c7',
                            200: '#fde68a',
                            300: '#fcd34d',
                            400: '#fbbf24',
                            500: '#f59e0b',
                            600: '#d97706',
                            700: '#FFD600',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased min-h-screen flex items-center justify-center p-4 bg-gradient-to-tr from-slate-50 via-blue-50/20 to-white relative overflow-hidden">
    <!-- Premium background glowing mesh circles and dot grid -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] bg-[size:24px_24px] opacity-40"></div>
        <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-blue-200/30 rounded-full blur-[100px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-amber-100/20 rounded-full blur-[100px]"></div>
    </div>
    
    <div class="w-full max-w-2xl relative z-10 my-8">
        <div class="text-center mb-8">
            <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-800 mb-2">Registrasi Daycare</h1>
            <p class="text-sm text-slate-500">Tingkatkan keamanan & kredibilitas daycare Anda bersama <span class="font-bold text-ceria-yellow-600">CERIA</span></p>
        </div>

        <div class="glass-card rounded-3xl shadow-[0_20px_40px_rgba(15,23,42,0.04)] border border-white/60 p-6 sm:p-10">
            
            <!-- Progress Bar -->
            <div class="mb-8 relative">
                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded-full bg-ceria-blue-100">
                    <div id="progress-bar" style="width: 25%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-ceria-blue-500 transition-all duration-500"></div>
                </div>
                <div class="flex justify-between text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                    <span id="label-step-1" class="text-ceria-blue-600">Info Daycare</span>
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
                        <span class="material-symbols-outlined text-ceria-blue-500">storefront</span> Informasi Daycare
                    </h3>
                    
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Nama Daycare</label>
                                <input type="text" name="daycare_name" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-ceria-blue-500/20 focus:border-ceria-blue-500">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Nama Pemilik</label>
                                <input type="text" name="owner_name" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-ceria-blue-500/20 focus:border-ceria-blue-500">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Email Daycare</label>
                                <input type="email" name="daycare_email" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-ceria-blue-500/20 focus:border-ceria-blue-500">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Nomor Telepon</label>
                                <input type="tel" name="daycare_phone" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-ceria-blue-500/20 focus:border-ceria-blue-500">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Alamat Lengkap</label>
                            <textarea name="address" rows="2" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-ceria-blue-500/20 focus:border-ceria-blue-500"></textarea>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Kota/Provinsi</label>
                                <input type="text" name="city" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-ceria-blue-500/20 focus:border-ceria-blue-500">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Kapasitas Anak</label>
                                <input type="number" name="capacity" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-ceria-blue-500/20 focus:border-ceria-blue-500">
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex justify-end">
                        <button type="button" onclick="nextStep()" class="px-6 py-2.5 bg-ceria-blue-600 hover:bg-ceria-blue-700 text-white font-bold rounded-xl text-sm flex items-center gap-2 transition shadow-[0_8px_18px_rgba(37,99,235,0.2)]">
                            Lanjut <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 2: Dokumen -->
                <div id="step-2" class="step-content step-hidden">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-ceria-blue-500">folder_open</span> Upload Dokumen
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
                        <button type="button" onclick="prevStep()" class="px-6 py-2.5 bg-white border border-slate-200 hover:bg-slate-50 text-slate-600 font-bold rounded-xl text-sm transition">Kembali</button>
                        <button type="button" onclick="nextStep()" class="px-6 py-2.5 bg-ceria-blue-600 hover:bg-ceria-blue-700 text-white font-bold rounded-xl text-sm flex items-center gap-2 transition shadow-[0_8px_18px_rgba(37,99,235,0.2)]">
                            Lanjut <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 3: Akun Admin -->
                <div id="step-3" class="step-content step-hidden">
                    <h3 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-ceria-blue-500">manage_accounts</span> Buat Akun Admin
                    </h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Nama Admin</label>
                            <input type="text" name="name" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-ceria-blue-500/20 focus:border-ceria-blue-500">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Email Login</label>
                            <input type="email" name="email" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-ceria-blue-500/20 focus:border-ceria-blue-500">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Password</label>
                            <input type="password" name="password" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-ceria-blue-500/20 focus:border-ceria-blue-500">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-ceria-blue-500/20 focus:border-ceria-blue-500">
                        </div>
                    </div>

                    <div class="flex justify-between items-center mt-8">
                        <button type="button" onclick="prevStep()" class="px-6 py-2.5 bg-white border border-slate-200 hover:bg-slate-50 text-slate-600 font-bold rounded-xl text-sm transition">Kembali</button>
                        <button type="button" onclick="nextStep()" class="px-6 py-2.5 bg-ceria-blue-600 hover:bg-ceria-blue-700 text-white font-bold rounded-xl text-sm flex items-center gap-2 transition shadow-[0_8px_18px_rgba(37,99,235,0.2)]">
                            Lanjut <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 4: Waiting Verification -->
                <div id="step-4" class="step-content step-hidden text-center py-6">
                    <div class="w-20 h-20 bg-blue-50 text-blue-500 rounded-full flex items-center justify-center mx-auto mb-6 border border-blue-100">
                        <span class="material-symbols-outlined text-4xl">verified_user</span>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-800 mb-2">Permintaan Diterima!</h3>
                    <p class="text-sm text-slate-500 mb-6">Daycare Anda sedang diverifikasi oleh tim CERIA Indonesia. Proses ini memakan waktu maksimal 1x24 jam.</p>
                    
                    <div class="bg-ceria-blue-50 border border-ceria-blue-100 p-4 rounded-xl inline-block text-left mb-8 w-full max-w-sm">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-ceria-blue-500 animate-spin">sync</span>
                            <div>
                                <p class="text-xs font-bold text-slate-800">Status Verifikasi Sistem</p>
                                <p class="text-[10px] text-slate-500">Menunggu Review Dokumen</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('login') }}" class="w-full inline-block text-center px-6 py-3 bg-ceria-blue-600 hover:bg-ceria-blue-700 text-white font-bold rounded-xl text-sm shadow-[0_8px_18px_rgba(37,99,235,0.2)] transition">
                        Selesaikan & Kembali ke Login
                    </a>
                </div>
            </form>

            <div class="mt-6 text-center text-xs text-slate-500">
                Sudah terdaftar? <a href="{{ route('login') }}" class="font-bold text-ceria-blue-600 hover:text-ceria-blue-800 transition hover:underline">Masuk di sini</a>
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
                    label.classList.add('text-ceria-blue-600');
                    label.classList.remove('text-slate-400');
                } else {
                    label.classList.remove('text-ceria-blue-600');
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
