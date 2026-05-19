<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Ceria · Smart Monitoring Daycare | Biru & Aksen Kuning</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,400,0,0" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        // Palet CERIA: Biru dominan, kuning hanya sebagai aksen minor
                        'ceria-blue': {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',  // biru segar utama
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
                            500: '#f59e0b',  // kuning hangat (hanya aksen)
                            600: '#d97706',
                            700: '#FFD600',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background: #FFFFFF;
        }
        .card-ceria {
            background: #ffffff;
            border-radius: 2rem;
            box-shadow: 0 20px 35px -12px rgba(59,130,246,0.12), 0 1px 3px rgba(0,0,0,0.02);
            border: 1px solid #eef2ff;
            transition: all 0.2s ease;
        }
        /* Tombol login utama: biru solid, bukan kuning */
        .btn-login-blue {
            background-color: #2563eb; /* biru tegas */
            transition: all 0.2s ease;
        }
        .btn-login-blue:hover {
            background-color: #1d4ed8;
            transform: translateY(-1px);
            box-shadow: 0 8px 18px rgba(37,99,235,0.2);
        }
        .btn-outline-blue {
            border: 1px solid #bfdbfe;
            background: white;
            transition: 0.2s;
        }
        .btn-outline-blue:hover {
            background-color: #eff6ff;
            border-color: #60a5fa;
        }
        /* Aksen kuning hanya pada elemen minor seperti badge, hover link */
        .badge-blue-soft {
            background: #eff6ff;
            color: #1e40af;
        }
        .badge-yellow-minor {
            background: #fef3c7;
            color: #b45309;
        }
        .input-focus-ring:focus {
            outline: none;
            border-color: #60a5fa;
            box-shadow: 0 0 0 3px rgba(59,130,246,0.2);
        }
        hr.ceria-divider {
            border-color: #e2e8f0;
        }
        .mockup-container {
            background: #F8FAFE;
            border-radius: 1.5rem;
            border: 1px solid #dbeafe;
        }
        .link-blue-solid {
            color: #2563eb;
            font-weight: 500;
        }
        .link-blue-solid:hover {
            color: #1e40af;
            text-decoration: underline;
        }
        /* elemen kuning hanya sebagai aksen halus */
        .accent-yellow-dot {
            background-color: #f59e0b;
        }
    </style>
</head>
<body class="font-sans antialiased bg-white text-slate-800">

    <!-- LAYOUT FLEX: kiri (branding biru dominan + sedikit kuning) & kanan (form) -->
    <div class="flex flex-col lg:flex-row min-h-screen">
        
        <!-- SISI KIRI: Desain Rapi Sesuai Mockup Gambar -->
        <div class="hidden lg:flex flex-col justify-center w-full lg:w-1/2 bg-gradient-to-tr from-slate-50 via-blue-50/20 to-white relative p-10 lg:p-14 overflow-hidden">
            <style>
                @keyframes float {
                    0%, 100% { transform: translateY(0px) rotate(0deg); }
                    50% { transform: translateY(-10px) rotate(1deg); }
                }
                .animate-float {
                    animation: float 6s ease-in-out infinite;
                }
            </style>

            <!-- Premium background glowing mesh circles and dot grid -->
            <div class="absolute inset-0 z-0 pointer-events-none">
                <!-- Dot Grid Pattern -->
                <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] bg-[size:24px_24px] opacity-40"></div>
                
                <!-- Top Left Blue Glow -->
                <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-blue-200/30 rounded-full blur-[100px]"></div>
                <!-- Bottom Right Amber Glow -->
                <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-amber-100/20 rounded-full blur-[100px]"></div>
                <!-- Middle Soft Pink Glow -->
                <div class="absolute top-[30%] right-[10%] w-[300px] h-[300px] bg-purple-100/20 rounded-full blur-[80px]"></div>
            </div>
            
            <!-- Kontainer Utama Terpusat -->
            <div class="relative z-10 w-full max-w-2xl mx-auto flex flex-col justify-between h-full gap-8">
                
                <!-- Teks dan Gambar (Side-by-side aman dengan Grid) -->
                <div class="grid grid-cols-5 gap-6 xl:gap-8 items-center mt-auto mb-auto">
                    
                    <!-- Kolom Teks (Kiri) -->
                    <div class="col-span-3 flex flex-col justify-center pr-4">
                        
                        <h1 class="text-[38px] xl:text-[46px] font-black tracking-tight text-slate-800 leading-[1.15] mb-5">
                            Pantau <span class="text-ceria-yellow-700">Keamanan &amp; Keceriaan</span><br>
                            Anak dalam Genggaman.
                        </h1>
                        
                        <p class="text-slate-500 text-[14px] xl:text-[16px] leading-relaxed max-w-md font-medium">
                            Platform monitoring daycare terbaik dengan sistem visual AI cerdas dan notifikasi real-time untuk ketenangan hati Anda.
                        </p>
                    </div>
                    
                    <!-- Kolom Gambar (Kanan) -->
                    <div class="col-span-2 flex justify-center items-center relative animate-float">
                        <!-- Glowing background decorative circle -->
                        <div class="absolute w-[200px] h-[200px] bg-blue-400/20 rounded-full blur-2xl z-0"></div>
                        
                        <!-- Premium glassmorphic card framing the illustration -->
                        <div class="relative z-10 p-3 bg-white/40 backdrop-blur-xl border border-white/60 rounded-3xl shadow-[0_20px_50px_rgba(8,112,184,0.12)] hover:shadow-[0_20px_50px_rgba(8,112,184,0.18)] transition-all duration-500 hover:-translate-y-1 group">
                            <!-- Floating badge on top of the image -->
                            <div class="absolute -top-3 -right-3 px-3 py-1 bg-emerald-500 text-white rounded-full text-[10px] font-black tracking-widest uppercase shadow-lg border-2 border-white flex items-center gap-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                                <span>Secured</span>
                            </div>
                            
                            <div class="overflow-hidden rounded-2xl border border-slate-100 bg-gradient-to-b from-slate-50 to-white">
                                <img src="{{ asset('images/shield_illustration.png') }}" 
                                     alt="Ilustrasi Ceria" 
                                     class="w-full max-w-[240px] xl:max-w-[280px] h-auto object-contain transition-transform duration-700 group-hover:scale-105">
                            </div>
                            
                            <!-- Subtle glass reflection overlay -->
                            <div class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-transparent via-white/10 to-transparent pointer-events-none"></div>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Card Fitur di Bagian Bawah -->
                <div class="w-full bg-white/40 backdrop-blur-xl rounded-2xl shadow-[0_20px_40px_rgba(15,23,42,0.04)] border border-white/60 p-6 mt-auto">
                    <div class="grid grid-cols-3 gap-4 divide-x divide-slate-200/50">
                        <!-- Fitur 1: Keamanan Terjamin -->
                        <div class="flex flex-col items-center text-center px-2 group cursor-pointer">
                            <div class="w-12 h-12 rounded-2xl bg-blue-500/10 text-blue-600 flex items-center justify-center mb-3 border border-blue-500/20 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm group-hover:scale-110">
                                <span class="material-symbols-outlined text-[24px]">verified_user</span>
                            </div>
                            <h3 class="text-xs xl:text-sm font-bold text-slate-800 mb-1 leading-tight group-hover:text-blue-600 transition-colors">Keamanan Terjamin</h3>
                            <p class="text-[10px] xl:text-xs text-slate-500 leading-tight">AI Monitor 24/7 &amp; Aman</p>
                        </div>
                        
                        <!-- Fitur 2: Notifikasi Real-time -->
                        <div class="flex flex-col items-center text-center px-2 group cursor-pointer">
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-3 border border-amber-500/20 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300 shadow-sm group-hover:scale-110">
                                <span class="material-symbols-outlined text-[24px]">notifications_active</span>
                            </div>
                            <h3 class="text-xs xl:text-sm font-bold text-slate-800 mb-1 leading-tight group-hover:text-amber-600 transition-colors">Notifikasi Instan</h3>
                            <p class="text-[10px] xl:text-xs text-slate-500 leading-tight">Informasi Langsung di Perangkat Anda</p>
                        </div>
                        
                        <!-- Fitur 3: Monitoring Cerdas -->
                        <div class="flex flex-col items-center text-center px-2 group cursor-pointer">
                            <div class="w-12 h-12 rounded-2xl bg-indigo-500/10 text-indigo-600 flex items-center justify-center mb-3 border border-indigo-500/20 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300 shadow-sm group-hover:scale-110">
                                <span class="material-symbols-outlined text-[24px]">insights</span>
                            </div>
                            <h3 class="text-xs xl:text-sm font-bold text-slate-800 mb-1 leading-tight group-hover:text-indigo-600 transition-colors">Analitik Cerdas</h3>
                            <p class="text-[10px] xl:text-xs text-slate-500 leading-tight">Laporan &amp; Rekap</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- SISI KANAN: FORM LOGIN (biru dominan, kuning hanya sebagai aksen minor) -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-8 bg-white relative">
            <div class="w-full max-w-md">
                <!-- Logo CERIA dengan fallback gambar -->
                <div class="text-center mb-6">
                    <div class="flex justify-center mb-2">
                        <img src="/images/logo-CERIA.png" alt="Logo CERIA" class="h-14 w-auto object-contain" onerror="this.onerror=null;this.src='https://placehold.co/280x80/dbeafe/2563eb?text=CERIA+Daycare';">
                    </div>
                    <div class="inline-flex items-center gap-2 bg-ceria-blue-50 px-4 py-1 rounded-full border border-ceria-blue-200">
                        <span class="material-symbols-outlined text-ceria-blue-500 text-sm">auto_awesome</span>
                        <span class="text-[11px] font-bold text-ceria-blue-700 uppercase tracking-wider">POWERED BY CERIA+SAFE AI</span>
                    </div>
                    <h2 class="text-2xl font-extrabold text-slate-800 mt-4">Masuk ke Akun <span class="text-ceria-yellow-700">CERIA</span></h2>
                    <p class="text-sm text-slate-500 mt-1">Akses dashboard pantau si kecil dengan aman</p>
                </div>

                <!-- Card login solid dengan border halus biru -->
                <div class="card-ceria p-6 sm:p-8">
                    @if ($errors->any())
                        <div class="mb-5 p-3 bg-red-50 border-l-4 border-ceria-blue-500 rounded-lg text-slate-700 text-xs font-medium flex gap-2 items-start">
                            <span class="material-symbols-outlined text-ceria-blue-500 text-base">error</span>
                            <span>{{ $errors->first() }}</span>
                        </div>
                    @endif

                    <form action="{{ route('login.process') }}" method="POST" class="space-y-5">
                        @csrf
                        <!-- Email field -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1 flex items-center gap-1">
                                <span class="material-symbols-outlined text-ceria-blue-500 text-base">mail</span> Alamat Email
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}" required placeholder="Masukkan Email" 
                                class="w-full px-4 py-3 border border-ceria-blue-200 rounded-xl text-sm bg-white focus:border-ceria-blue-400 focus:ring-2 focus:ring-ceria-blue-200/50 transition-all">
                        </div>

                        <!-- Password field -->
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <label class="block text-xs font-semibold text-slate-700 flex items-center gap-1">
                                    <span class="material-symbols-outlined text-ceria-blue-500 text-base">lock</span> Kata Sandi
                                </label>
                                <a href="#" class="text-[11px] font-medium text-ceria-blue-600 hover:text-ceria-blue-800 transition">Lupa sandi?</a>
                            </div>
                            <div class="relative">
                                <input type="password" id="password" name="password" required placeholder="Masukkan password" 
                                    class="w-full px-4 py-3 border border-ceria-blue-200 rounded-xl text-sm bg-white focus:border-ceria-blue-400 focus:ring-2 focus:ring-ceria-blue-200/50 transition-all pr-10">
                                <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-3 flex items-center text-ceria-blue-400 hover:text-ceria-blue-600">
                                    <span class="material-symbols-outlined text-xl" id="pw-icon">visibility_off</span>
                                </button>
                            </div>
                        </div>

                        <!-- Remember me -->
                        <div class="flex items-center gap-2">
                            <input type="checkbox" name="remember" id="remember" class="w-4 h-4 rounded border-ceria-blue-300 text-ceria-blue-500 focus:ring-ceria-blue-300">
                            <label for="remember" class="text-xs text-slate-500 select-none">Ingat saya di perangkat ini</label>
                        </div>

                        <!-- Tombol login: BIRU solid (bukan kuning) sesuai permintaan dominasi biru -->
                        <button type="submit" class="btn-login-blue w-full py-3.5 text-white font-bold rounded-xl shadow-md flex items-center justify-center gap-2 transition text-sm">
                            <span class="material-symbols-outlined text-base">login</span> Masuk ke Dashboard CERIA
                        </button>

                        <!-- Divider -->
                        <div class="relative flex items-center my-3">
                            <div class="flex-grow border-t border-slate-200"></div>
                            <span class="flex-shrink mx-3 text-[10px] font-semibold text-slate-400">ATAU MASUK DENGAN</span>
                            <div class="flex-grow border-t border-slate-200"></div>
                        </div>

                        <!-- Tombol Google (biru garis) -->
                        <button type="button" class="btn-outline-blue w-full py-3 rounded-xl text-slate-700 font-medium flex items-center justify-center gap-3 transition-all text-sm">
                            <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google">
                            <span>Lanjutkan dengan Google</span>
                        </button>
                    </form>
                </div>

                <!-- Daftar akun: didominasi biru, hanya badge kuning minor -->
                <div class="mt-8 text-center">
                    <div class="flex flex-col sm:flex-row gap-3 justify-center">
                        <a href="{{ route('register.parent') }}" class="flex items-center justify-center gap-2 bg-white border border-ceria-blue-300 text-ceria-blue-700 font-bold px-5 py-2.5 rounded-full shadow-sm hover:bg-ceria-blue-50 transition-all text-sm">
                            <span class="material-symbols-outlined text-ceria-blue-500 text-base">family_history</span> Daftar Orang Tua
                        </a>
                        <a href="{{ route('register.daycare') }}" class="flex items-center justify-center gap-2 bg-white border border-ceria-blue-300 text-ceria-blue-700 font-bold px-5 py-2.5 rounded-full shadow-sm hover:bg-ceria-blue-50 transition-all text-sm">
                            <span class="material-symbols-outlined text-ceria-blue-500 text-base">apartment</span> Daftar Daycare
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const icon = document.getElementById('pw-icon');
            if (input.type === 'password') {
                input.type = 'text';
                icon.innerText = 'visibility';
            } else {
                input.type = 'password';
                icon.innerText = 'visibility_off';
            }
        }
    </script>
</body>
</html>