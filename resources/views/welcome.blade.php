<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>CERIA · Cerdas Evaluasi & Respons Interaksi Anak</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f7ff',
                            100: '#e0edff',
                            200: '#cce1ff',
                            300: '#a8cdff',
                            400: '#7cb2ff',
                            500: '#5291ff',
                            600: '#3370ff',
                            700: '#1f55f0',
                            800: '#1d45c3',
                            900: '#005da7', // Base brand color
                            950: '#142c65',
                        },
                        accent: {
                            DEFAULT: '#FFD600',
                            hover: '#e6c100',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #005da7 0%, #3370ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-pattern {
            background-color: #f8fafc;
            background-image: radial-gradient(#e2e8f0 1px, transparent 1px);
            background-size: 32px 32px;
        }

        /* Scrollspy Active Link */
        .nav-link { position: relative; }
        .nav-link::after {
            content: ''; position: absolute; bottom: -4px; left: 0; width: 0%; height: 2px; background: #005da7; border-radius: 2px; transition: width 0.3s;
        }
        .nav-link:hover::after { width: 100%; }
        .nav-link.active { color: #005da7 !important; font-weight: 700; }
        .nav-link.active::after { width: 100%; }
    </style>
</head>
<body class="font-sans antialiased text-slate-800 bg-slate-50 selection:bg-primary-200 selection:text-primary-900 overflow-x-hidden">

    <!-- Decorative Blobs -->
    <div class="fixed inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 -left-4 w-72 h-72 bg-primary-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 transition-all duration-300 glass-panel border-b border-slate-300/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer group">
                    <div class="w-10 h-10 rounded-xl bg-white shadow-sm border border-slate-100 flex items-center justify-center overflow-hidden transition-transform group-hover:scale-105">
                        <img src="/images/logo-CERIA.png" alt="CERIA" class="w-8 h-8 object-contain" onerror="this.src='https://ui-avatars.com/api/?name=Ceria&background=005da7&color=fff&rounded=true'">
                    </div>
                    <span class="font-extrabold text-xl tracking-tight text-[#FFD600]">
                        CERIA<span class="text-accent"></span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8" id="desktop-menu">
                    <a href="#fitur" class="nav-link text-slate-600 hover:text-primary-600 font-medium transition-colors text-sm">Fitur</a>
                    <a href="#cara-kerja" class="nav-link text-slate-600 hover:text-primary-600 font-medium transition-colors text-sm">Cara Kerja</a>
                    <a href="#keunggulan" class="nav-link text-slate-600 hover:text-primary-600 font-medium transition-colors text-sm">Keunggulan</a>
                    <a href="#testimoni" class="nav-link text-slate-600 hover:text-primary-600 font-medium transition-colors text-sm">Testimoni</a>
                </div>

                <!-- Action Button -->
                <div class="flex items-center gap-3">
                    <a href="/login" class="hidden sm:inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white bg-primary-900 rounded-full hover:bg-primary-800 hover:shadow-lg hover:shadow-primary-900/30 transition-all duration-200 active:scale-95">
                        Masuk Portal
                    </a>
                    
                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg bg-slate-100 text-slate-600 hover:bg-slate-200 hover:text-primary-900 transition-colors">
                        <span class="material-symbols-outlined" id="menu-icon">menu</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-xl border-b border-slate-200 absolute w-full left-0 top-[80px] shadow-xl overflow-hidden transition-all duration-300 transform origin-top" style="max-height: 0; opacity: 0;">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a href="#fitur" class="nav-link-mobile block px-4 py-3 rounded-xl text-base font-medium text-slate-600 hover:text-primary-600 hover:bg-primary-50 transition-colors">Fitur</a>
                <a href="#cara-kerja" class="nav-link-mobile block px-4 py-3 rounded-xl text-base font-medium text-slate-600 hover:text-primary-600 hover:bg-primary-50 transition-colors">Cara Kerja</a>
                <a href="#keunggulan" class="nav-link-mobile block px-4 py-3 rounded-xl text-base font-medium text-slate-600 hover:text-primary-600 hover:bg-primary-50 transition-colors">Keunggulan</a>
                <a href="#testimoni" class="nav-link-mobile block px-4 py-3 rounded-xl text-base font-medium text-slate-600 hover:text-primary-600 hover:bg-primary-50 transition-colors">Testimoni</a>
                <a href="/login" class="block mt-4 px-4 py-3 text-center rounded-xl text-base font-bold text-white bg-primary-900 hover:bg-primary-800 transition-colors sm:hidden">Masuk Portal</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="relative z-10">
        <!-- Hero Section -->
        <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden hero-pattern">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">
                    
                    <!-- Hero Content -->
                    <div class="max-w-2xl text-center lg:text-left mx-auto lg:mx-0">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/70 backdrop-blur-sm border border-[#a4c9ff]/40 text-[#005da7] text-sm font-semibold mb-6 shadow-sm hover:shadow-md transition-all cursor-default">
                    <!-- Dot ping -->
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#006d36] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#006d36]"></span>
                    </span>
                    <!-- Text -->
                    <span class="uppercase tracking-wide">
                        Smart Daycare System · Cerdas · Aman · Terintegrasi
                    </span>

                    </div>
                        
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 mb-6 leading-[2]">
                            Masa Depan Daycare yang Lebih Aman dengan 
                            <span class="text-[#FFD600] font-bold">CERIA</span>
                        </h1>
                        
                        <p class="text-lg sm:text-xl text-slate-600 mb-10 leading-relaxed font-light">
                            Sistem monitoring dan keamanan anak yang membantu meningkatkan transparansi dan kualitas pengasuhan di daycare.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <a href="/login" class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-white bg-primary-900 rounded-full hover:bg-primary-800 hover:shadow-xl hover:shadow-primary-900/30 transition-all duration-200 group">
                                Mulai Sekarang
                                <span class="material-symbols-outlined ml-2 text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>

                        <!-- Trust Metrics -->
                        <div class="mt-12 pt-8 border-t border-slate-200/60 flex flex-col sm:flex-row items-center gap-6 justify-center lg:justify-start">
                            <div class="flex -space-x-3">
                                <img class="w-10 h-10 rounded-full border-2 border-white object-cover" src="https://i.pravatar.cc/100?img=1" alt="User">
                                <img class="w-10 h-10 rounded-full border-2 border-white object-cover" src="https://i.pravatar.cc/100?img=2" alt="User">
                                <img class="w-10 h-10 rounded-full border-2 border-white object-cover" src="https://i.pravatar.cc/100?img=3" alt="User">
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-primary-50 flex items-center justify-center text-xs font-bold text-primary-700">+99</div>
                            </div>
                            <div class="text-sm text-slate-600">
                                Dipercaya oleh <strong class="text-slate-900">500+</strong> orang tua di seluruh Indonesia
                            </div>
                        </div>
                    </div>

                    <!-- Hero Visual -->
                    <div class="relative lg:ml-10 mt-10 lg:mt-0 animate-float">
                        <!-- Main Image Card -->
                        <div class="relative z-10 bg-white p-2 rounded-[2rem] shadow-2xl border border-slate-100 transform rotate-1 hover:rotate-0 transition-transform duration-500">
                            <div class="rounded-[1.5rem] overflow-hidden relative">
                                <img src="/images/welcomeCERIA.png" alt="Daycare monitoring" class="w-full h-auto object-cover aspect-[4/3]">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                            </div>
                        </div>
                        
                        <!-- Floating Badges -->
                        <div class="absolute -bottom-6 -left-6 z-20 glass-panel px-6 py-4 rounded-2xl shadow-xl flex items-center gap-4 animate-bounce" style="animation-duration: 3s;">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600">
                                <span class="material-symbols-outlined">verified_user</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-0.5">Keamanan Aktif</p>
                                <p class="text-sm font-bold text-slate-800">AI Monitor 24/7</p>
                            </div>
                        </div>

                        <div class="absolute -top-6 -right-6 z-20 glass-panel px-6 py-4 rounded-2xl shadow-xl flex items-center gap-4 animate-bounce" style="animation-duration: 4s; animation-delay: 1s;">
                            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center text-primary-600">
                                <span class="material-symbols-outlined">notifications_active</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-0.5">Notifikasi Real-time</p>
                                <p class="text-sm font-bold text-slate-800">Laporan Langsung</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="fitur" class="py-24 bg-white relative">
            <!-- Decorative Yellow Blob -->
            <div class="absolute top-1/2 left-0 w-96 h-96 bg-accent/20 rounded-full blur-[100px] pointer-events-none z-0"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="inline-block px-4 py-1.5 rounded-full bg-accent/20 text-[#b39500] font-bold tracking-wide uppercase text-xs mb-4 border border-accent/30">Fitur Cerdas</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Teknologi Terdepan untuk Perlindungan Anak</h3>
                    <p class="text-slate-600 text-lg">Satu sistem yang membantu orang tua memantau dan menjaga anak dengan lebih mudah dan tenang.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Feature 1 -->
                    <div class="bg-slate-50 rounded-3xl p-8 hover:bg-white hover:shadow-xl hover:shadow-accent/10 hover:-translate-y-2 transition-all duration-300 border border-slate-100 hover:border-accent/40 group">
                        <div class="w-14 h-14 bg-white rounded-2xl shadow-sm flex items-center justify-center text-primary-600 mb-6 group-hover:scale-110 group-hover:bg-accent group-hover:text-primary-900 transition-all duration-300">
                            <span class="material-symbols-outlined text-2xl">videocam</span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-primary-700 transition-colors">Live Monitoring</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">Pantau aktivitas anak secara langsung melalui video secara real-time di lingkungan daycare.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-slate-50 rounded-3xl p-8 hover:bg-white hover:shadow-xl hover:shadow-accent/10 hover:-translate-y-2 transition-all duration-300 border border-slate-100 hover:border-accent/40 group">
                        <div class="w-14 h-14 bg-white rounded-2xl shadow-sm flex items-center justify-center text-amber-500 mb-6 group-hover:scale-110 group-hover:bg-accent group-hover:text-primary-900 transition-all duration-300">
                            <span class="material-symbols-outlined text-2xl">psychology</span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-primary-700 transition-colors">Deteksi Perilaku AI</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">Sistem cerdas mendeteksi pola tidak wajar eperti jatuh, menangis berlebihan, atau interaksi berisiko.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-slate-50 rounded-3xl p-8 hover:bg-white hover:shadow-xl hover:shadow-accent/10 hover:-translate-y-2 transition-all duration-300 border border-slate-100 hover:border-accent/40 group">
                        <div class="w-14 h-14 bg-white rounded-2xl shadow-sm flex items-center justify-center text-emerald-500 mb-6 group-hover:scale-110 group-hover:bg-accent group-hover:text-primary-900 transition-all duration-300">
                            <span class="material-symbols-outlined text-2xl">bolt</span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-primary-700 transition-colors">Notifikasi Instan</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">Peringatan otomatis dikirim ke orang tua dan pengelola saat terdeteksi potensi bahaya.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-slate-50 rounded-3xl p-8 hover:bg-white hover:shadow-xl hover:shadow-accent/10 hover:-translate-y-2 transition-all duration-300 border border-slate-100 hover:border-accent/40 group">
                        <div class="w-14 h-14 bg-white rounded-2xl shadow-sm flex items-center justify-center text-purple-500 mb-6 group-hover:scale-110 group-hover:bg-accent group-hover:text-primary-900 transition-all duration-300">
                            <span class="material-symbols-outlined text-2xl">insights</span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-primary-700 transition-colors">Laporan Analitik</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">Lihat laporan aktivitas anak, histori kejadian, dan analisis interaksi secara lengkap.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How it Works Section -->
        <section id="cara-kerja" class="py-24 bg-slate-50 relative">
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-accent/10 rounded-full blur-[120px] pointer-events-none z-0"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="inline-block px-4 py-1.5 rounded-full bg-accent/20 text-[#b39500] font-bold tracking-wide uppercase text-xs mb-4 border border-accent/30">LANGKAH CERIA</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Cara Kerja CERIA</h3>
                    <p class="text-slate-600 text-lg">Sistem CERIA bekerja secara otomatis untuk memantau, menganalisis, dan memberikan informasi aktivitas anak di daycare.</p>
                </div>

                <div class="relative">
                    <!-- Connecting line -->
                    <div class="hidden md:block absolute top-12 left-12 right-12 h-0.5 bg-gradient-to-r from-primary-100 via-accent/50 to-primary-100 z-0"></div>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 relative z-10">
                        <!-- Step 1 -->
                        <div class="text-center group cursor-default">
                            <div class="w-24 h-24 mx-auto bg-white rounded-full shadow-lg border-4 border-slate-50 flex items-center justify-center text-2xl font-bold text-primary-600 mb-6 transition-all duration-300 group-hover:scale-110 group-hover:border-accent group-hover:shadow-accent/30 group-hover:text-accent">
                                01
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-primary-600 transition-colors">Gabung ke Daycare</h4>
                            <p class="text-sm text-slate-600">Orang tua dan caregiver mendaftar dan terhubung ke daycare menggunakan kode unik.</p>
                        </div>

                        <!-- Step 2 -->
                        <div class="text-center group cursor-default">
                            <div class="w-24 h-24 mx-auto bg-white rounded-full shadow-lg border-4 border-slate-50 flex items-center justify-center text-2xl font-bold text-primary-600 mb-6 transition-all duration-300 group-hover:scale-110 group-hover:border-accent group-hover:shadow-accent/30 group-hover:text-accent">
                                02
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-primary-600 transition-colors">Sistem Mulai Memantau</h4>
                            <p class="text-sm text-slate-600">Kamera dan perangkat mulai merekam aktivitas anak secara real-time di lingkungan daycare.</p>
                        </div>

                        <!-- Step 3 -->
                        <div class="text-center group cursor-default">
                            <div class="w-24 h-24 mx-auto bg-white rounded-full shadow-lg border-4 border-slate-50 flex items-center justify-center text-2xl font-bold text-primary-600 mb-6 transition-all duration-300 group-hover:scale-110 group-hover:border-accent group-hover:shadow-accent/30 group-hover:text-accent">
                                03
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-primary-600 transition-colors">AI Menganalisis Aktivitas</h4>
                            <p class="text-sm text-slate-600">Sistem cerdas mendeteksi perilaku normal dan potensi risiko secara otomatis.</p>
                        </div>

                        <!-- Step 4 -->
                        <div class="text-center group cursor-default">
                            <div class="w-24 h-24 mx-auto bg-primary-600 rounded-full shadow-lg border-4 border-primary-100 flex items-center justify-center text-2xl font-bold text-white mb-6 transition-all duration-300 shadow-primary-600/40 group-hover:scale-110 group-hover:bg-accent group-hover:border-accent/30 group-hover:text-primary-900 group-hover:shadow-accent/40">
                                04
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-primary-600 transition-colors">Notifikasi & Monitoring</h4>
                            <p class="text-sm text-slate-600">Orang tua dan pengelola menerima notifikasi serta dapat memantau aktivitas melalui dashboard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Advantages Section -->
        <section id="keunggulan" class="py-24 bg-white overflow-hidden relative">
            <div class="absolute top-0 right-1/4 w-[600px] h-[600px] bg-accent/15 rounded-full blur-[100px] pointer-events-none z-0"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <!-- Image -->
                    <div class="relative order-2 lg:order-1">
                        <div class="absolute -inset-4 bg-gradient-to-r from-primary-100 to-accent/40 rounded-[3rem] transform -rotate-3 scale-105 opacity-50 blur-lg"></div>
                        <div class="relative rounded-[2rem] overflow-hidden shadow-2xl border border-slate-100 group">
                            <img src="/images/keunggulan.jpg" alt="Anak bermain dengan aman" class="w-full h-auto object-cover aspect-[4/5] group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-accent/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 mix-blend-overlay"></div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="order-1 lg:order-2">
                        <h2 class="inline-block px-4 py-1.5 rounded-full bg-accent/20 text-[#b39500] font-bold tracking-wide uppercase text-xs mb-4 border border-accent/30">Nilai Lebih Kami</h2>
                        <h3 class="text-3xl md:text-4xl font-bold text-slate-900 mb-8 leading-tight">Menciptakan Lingkungan Pengasuhan yang Transparan</h3>
                        
                        <div class="space-y-8">
                            <!-- Item 1 -->
                            <div class="flex gap-5 group cursor-default p-4 -ml-4 rounded-2xl hover:bg-slate-50 transition-colors">
                                <div class="flex-shrink-0 w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600 group-hover:bg-accent group-hover:text-primary-900 transition-all group-hover:scale-110 group-hover:shadow-md group-hover:shadow-accent/20">
                                    <span class="material-symbols-outlined">health_and_safety</span>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-primary-700 transition-colors">Deteksi Dini Risiko</h4>
                                    <p class="text-slate-600">Sistem CERIA membantu mendeteksi potensi bahaya sejak awal sehingga anak tetap aman dan terpantau.</p>
                                </div>
                            </div>
                            
                            <!-- Item 2 -->
                            <div class="flex gap-5 group cursor-default p-4 -ml-4 rounded-2xl hover:bg-slate-50 transition-colors">
                                <div class="flex-shrink-0 w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 group-hover:bg-accent group-hover:text-primary-900 transition-all group-hover:scale-110 group-hover:shadow-md group-hover:shadow-accent/20">
                                    <span class="material-symbols-outlined">lock</span>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-primary-700 transition-colors">Privasi Terjamin</h4>
                                    <p class="text-slate-600">Data visual dienkripsi dengan standar tinggi. Hanya orang tua dan admin berwenang yang dapat mengakses streaming.</p>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="flex gap-5 group cursor-default p-4 -ml-4 rounded-2xl hover:bg-slate-50 transition-colors">
                                <div class="flex-shrink-0 w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 group-hover:bg-accent group-hover:text-primary-900 transition-all group-hover:scale-110 group-hover:shadow-md group-hover:shadow-accent/20">
                                    <span class="material-symbols-outlined">favorite</span>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-primary-700 transition-colors">Ketenangan Batin</h4>
                                    <p class="text-slate-600">Bekerja tanpa rasa cemas dengan jaminan transparansi penuh antara pihak daycare dan orang tua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section id="testimoni" class="py-24 bg-slate-50 relative">
            <div class="absolute bottom-1/2 left-0 w-[400px] h-[400px] bg-accent/20 rounded-full blur-[100px] pointer-events-none z-0"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="inline-block px-4 py-1.5 rounded-full bg-accent/20 text-[#b39500] font-bold tracking-wide uppercase text-xs mb-4 border border-accent/30">Testimoni</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Dipercaya Orang Tua & Pengelola</h3>
                    <p class="text-slate-600 text-lg">Simak pengalaman mereka yang telah menggunakan CERIA.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Testi 1 -->
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-accent/15 transition-all duration-300 relative hover:-translate-y-2 hover:border-accent/50 group">
                        <div class="absolute top-8 right-8 text-slate-100 group-hover:text-accent/30 transition-colors">
                            <span class="material-symbols-outlined text-5xl">format_quote</span>
                        </div>
                        <div class="flex items-center gap-4 mb-6 relative z-10">
                            <img src="/images/yaya.jpeg" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-primary-100 group-hover:border-accent transition-colors">
                            <div>
                                <h4 class="font-bold text-slate-900 group-hover:text-primary-700 transition-colors">Siti Humaira Azzahra</h4>
                                <p class="text-sm text-slate-500">Orang Tua dari Arka (4 tahun)</p>
                            </div>
                        </div>
                        <p class="text-slate-600 italic relative z-10">"Sangat membantu! Saya bisa mengecek kondisi anak saya kapanpun di sela-sela waktu kerja. Notifikasinya sangat akurat saat anak menangis."</p>
                        <div class="mt-6 flex text-accent relative z-10">
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star</span>
                        </div>
                    </div>

                    <!-- Testi 2 -->
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-accent/15 transition-all duration-300 relative hover:-translate-y-2 hover:border-accent/50 group">
                        <div class="absolute top-8 right-8 text-slate-100 group-hover:text-accent/30 transition-colors">
                            <span class="material-symbols-outlined text-5xl">format_quote</span>
                        </div>
                        <div class="flex items-center gap-4 mb-6 relative z-10">
                            <img src="/images/yunita.jpeg" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-primary-100 group-hover:border-accent transition-colors">
                            <div>
                                <h4 class="font-bold text-slate-900 group-hover:text-primary-700 transition-colors">Yunita Rahmah</h4>
                                <p class="text-sm text-slate-500">Orang Tua dari Zayn (3 tahun)</p>
                            </div>
                        </div>
                        <p class="text-slate-600 italic relative z-10">"Saya suka karena sistemnya langsung kasih notifikasi kalau anak saya menangis atau butuh perhatian. Jadi walaupun saya tidak di daycare, saya tetap merasa dekat dan tahu kondisi anak."</p>
                        <div class="mt-6 flex text-accent relative z-10">
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star</span>
                        </div>
                    </div>

                    <!-- Testi 3 -->
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-accent/15 transition-all duration-300 relative hover:-translate-y-2 hover:border-accent/50 group">
                        <div class="absolute top-8 right-8 text-slate-100 group-hover:text-accent/30 transition-colors">
                            <span class="material-symbols-outlined text-5xl">format_quote</span>
                        </div>
                        <div class="flex items-center gap-4 mb-6 relative z-10">
                            <img src="/images/wawa.jpeg" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-primary-100 group-hover:border-accent transition-colors">
                            <div>
                                <h4 class="font-bold text-slate-900 group-hover:text-primary-700 transition-colors">Najwa Khadijah</h4>
                                <p class="text-sm text-slate-500">Orang Tua dari Elvano (5 tahun)</p>
                            </div>
                        </div>
                        <p class="text-slate-600 italic relative z-10">"Desain dashboardnya sangat mudah dipahami. Saya suka bagian rekap laporan harian yang membuat saya merasa selalu hadir untuk anak."</p>
                        <div class="mt-6 flex text-accent relative z-10">
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            <span class="material-symbols-outlined text-[18px]">star_half</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    <!-- Footer -->
    <footer class="bg-slate-900 pt-20 pb-10 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">
                <!-- Brand -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center backdrop-blur-sm border border-white/20">
                            <img src="/images/logo-CERIA.png" alt="CERIA" class="w-7 h-7 object-contain brightness-0 invert" onerror="this.src='https://ui-avatars.com/api/?name=Ceria&background=random&color=fff&rounded=true'">
                        </div>
                        <span class="font-bold text-2xl tracking-tight text-white">
                            CERIA<span class="text-accent"></span>
                        </span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-sm mb-6">
                        Cerdas Evaluasi & Respons Interaksi Anak. Membantu orang tua memantau dan menjaga keamanan anak dengan lebih mudah.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-primary-600 hover:text-white transition-colors">
                            <span class="text-lg font-bold">in</span>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-primary-600 hover:text-white transition-colors">
                            <span class="text-lg font-bold">ig</span>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-primary-600 hover:text-white transition-colors">
                            <span class="text-lg font-bold">tw</span>
                        </a>
                    </div>
                </div>

                <!-- Links -->
                <div>
                    <h4 class="text-white font-semibold mb-6">Produk</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Fitur Utama</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Sistem AI</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Harga</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Studi Kasus</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-6">Perusahaan</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Tentang Kami</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Karir</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Blog</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-6">Bantuan</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Pusat Bantuan</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Panduan Instalasi</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors text-sm">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-sm text-center md:text-left">
                    &copy; 2026 CERIA Smart Daycare System. All rights reserved.
                </p>
                <div class="flex items-center gap-2 text-slate-500 text-sm">
                    Dibuat dengan <span class="material-symbols-outlined text-red-500 text-[18px]">favorite</span> di Indonesia
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu & ScrollSpy -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const navLinks = document.querySelectorAll('.nav-link, .nav-link-mobile');
            const sections = document.querySelectorAll('section[id]');
            let isMenuOpen = false;

            // Mobile Menu Toggle
            mobileBtn.addEventListener('click', () => {
                isMenuOpen = !isMenuOpen;
                if (isMenuOpen) {
                    mobileMenu.classList.remove('hidden');
                    // Small delay to allow display:block to apply before animating height/opacity
                    setTimeout(() => {
                        mobileMenu.style.maxHeight = '400px';
                        mobileMenu.style.opacity = '1';
                        menuIcon.innerText = 'close';
                    }, 10);
                } else {
                    mobileMenu.style.maxHeight = '0';
                    mobileMenu.style.opacity = '0';
                    menuIcon.innerText = 'menu';
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                    }, 300);
                }
            });

            // Close mobile menu when clicking a link
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (isMenuOpen) {
                        mobileBtn.click();
                    }
                });
            });

            // ScrollSpy
            window.addEventListener('scroll', () => {
                let current = '';
                const scrollY = window.pageYOffset;

                sections.forEach(section => {
                    const sectionHeight = section.offsetHeight;
                    // Subtract a bit more than navbar height to trigger earlier
                    const sectionTop = section.offsetTop - 150; 
                    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.classList.contains('nav-link-mobile')) {
                        link.classList.remove('text-primary-900', 'bg-primary-50');
                    }
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                        if(link.classList.contains('nav-link-mobile')) {
                            link.classList.add('text-primary-900', 'bg-primary-50');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>