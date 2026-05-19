<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeChild · Superadmin Ceria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,400,0,0" />
    <style>
        body {
            background: radial-gradient(circle at 50% 50%, #020617 0%, #0b1329 50%, #020617 100%);
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }
        @keyframes float-blob-1 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(40px, -60px) scale(1.08); }
            66% { transform: translate(-20px, 30px) scale(0.96); }
        }
        @keyframes float-blob-2 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(-30px, 40px) scale(0.92); }
            66% { transform: translate(50px, -20px) scale(1.04); }
        }
        @keyframes float-blob-3 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(-15px, -15px) scale(1.05); }
        }
        .blob-1 {
            position: absolute;
            width: 550px;
            height: 550px;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.12) 0%, rgba(6, 182, 212, 0) 70%);
            top: -15%;
            left: -15%;
            border-radius: 50%;
            z-index: 1;
            filter: blur(95px);
            animation: float-blob-1 25s infinite ease-in-out;
        }
        .blob-2 {
            position: absolute;
            width: 650px;
            height: 650px;
            background: radial-gradient(circle, rgba(245, 158, 11, 0.08) 0%, rgba(245, 158, 11, 0) 70%);
            bottom: -20%;
            right: -15%;
            border-radius: 50%;
            z-index: 1;
            filter: blur(110px);
            animation: float-blob-2 30s infinite ease-in-out;
        }
        .blob-3 {
            position: absolute;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.06) 0%, rgba(6, 182, 212, 0) 70%);
            top: 35%;
            left: 25%;
            border-radius: 50%;
            z-index: 1;
            filter: blur(80px);
            animation: float-blob-3 20s infinite ease-in-out;
        }
        .glass-card {
            background: rgba(10, 15, 30, 0.65);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 2rem;
            box-shadow: 
                0 25px 50px -12px rgba(0, 0, 0, 0.6),
                inset 0 1px 1px rgba(255, 255, 255, 0.05),
                0 0 80px rgba(6, 182, 212, 0.03);
            transition: border-color 0.5s ease, box-shadow 0.5s ease, transform 0.5s ease;
        }
        .glass-card:hover {
            border-color: rgba(245, 158, 11, 0.18);
            transform: translateY(-2px);
            box-shadow: 
                0 30px 60px -12px rgba(0, 0, 0, 0.75),
                inset 0 1px 1px rgba(245, 158, 11, 0.12),
                0 0 100px rgba(245, 158, 11, 0.05);
        }
        .input-field {
            background: rgba(15, 23, 42, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 0.85rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            color: #ffffff;
        }
        .input-field::placeholder {
            color: rgba(148, 163, 184, 0.45);
        }
        .input-field:focus {
            border-color: rgba(59, 130, 246, 0.5);
            background: rgba(9, 15, 30, 0.8);
            box-shadow: 
                0 0 25px rgba(59, 130, 246, 0.15),
                inset 0 1px 1px rgba(255, 255, 255, 0.05);
            outline: none;
        }
        .btn-auth {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.25);
            border-radius: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-auth:hover {
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
            box-shadow: 
                0 6px 25px rgba(59, 130, 246, 0.45),
                0 0 30px rgba(6, 182, 212, 0.2);
            transform: translateY(-2px);
        }
        .btn-auth:active {
            transform: translateY(0);
            scale: 0.98;
        }
        .logo-ceria {
            filter: drop-shadow(0 8px 16px rgba(0, 0, 0, 0.3));
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .logo-ceria:hover {
            transform: scale(1.05) rotate(2deg);
            filter: drop-shadow(0 12px 20px rgba(245, 158, 11, 0.2));
        }
        .badge-admin {
            background: linear-gradient(90deg, rgba(245, 158, 11, 0.12) 0%, rgba(245, 158, 11, 0.03) 100%);
            border: 1px solid rgba(245, 158, 11, 0.35);
            border-radius: 60px;
            padding: 0.25rem 0.9rem;
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.15em;
            color: #f59e0b;
            backdrop-filter: blur(4px);
            box-shadow: 0 0 15px rgba(245, 158, 11, 0.15);
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
        }
        hr {
            border-color: rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body class="relative">

    <!-- FLOATING DECORATIONS -->
    <div class="blob-1"></div>
    <div class="blob-2"></div>
    <div class="blob-3"></div>

    <!-- MAIN CONTAINER -->
    <div class="w-full max-w-[430px] p-6 relative z-10">
        
        <!-- GLASS CARD PANEL -->
        <div class="glass-card p-8 md:p-10">
            
            <!-- LOGO UTAMA -->
            <div class="flex flex-col items-center text-center">
                <img src="/images/logo-CERIA.png" alt="Ceria Logo" class="logo-ceria h-16 w-auto mb-4" onerror="this.src='https://placehold.co/100x100?text=CERIA'">
                
                <!-- BADGE SUPERADMIN -->
                <div class="badge-admin">
                    <span class="material-symbols-outlined text-xs">admin_panel_settings</span>
                    SUPERADMIN ACCESS
                </div>

                <h1 class="text-3xl font-extrabold text-white mt-4 tracking-tight flex items-center gap-2 justify-center">
                    Ceria <span class="text-amber-500 font-medium">Central</span>
                </h1>
            </div>

            <!-- separator tipis -->
            <div class="my-6">
                <hr>
            </div>

            <!-- notifikasi error (dengan sentuhan kuning) -->
            @if ($errors->any())
                <div class="mb-4 p-3.5 bg-red-500/10 border border-red-500/20 rounded-xl text-red-400 text-xs space-y-1">
                    @foreach ($errors->all() as $error)
                        <p class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[14px]">error</span>
                            {{ $error }}
                        </p>
                    @endforeach
                </div>
            @endif

            <!-- FORM LOGIN -->
            <form method="POST" action="{{ route('superadmin.login.process') }}" class="space-y-5">
                @csrf
                
                <!-- email field -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wide mb-1.5 flex items-center gap-1">
                        <span class="material-symbols-outlined text-blue-500 text-sm">alternate_email</span>
                        Alamat Email
                    </label>
                    <div class="relative group">
                        <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-500 transition-colors text-lg">mail</span>
                        <input type="email" name="email" required 
                            class="w-full pl-11 pr-4 py-3 bg-slate-900/50 border border-white/10 rounded-xl text-white placeholder:text-slate-500 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-sm input-field" 
                            placeholder="Masukkan Email" value="{{ old('email') }}">
                    </div>
                </div>

                <!-- password field -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wide mb-1.5 flex items-center gap-1">
                        <span class="material-symbols-outlined text-blue-500 text-sm">fingerprint</span>
                        Security Key
                    </label>
                    <div class="relative group">
                        <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-500 transition-colors text-lg">key</span>
                        <input type="password" name="password" id="password" required 
                            class="w-full pl-11 pr-12 py-3 bg-slate-900/50 border border-white/10 rounded-xl text-white placeholder:text-slate-500 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all text-sm input-field" 
                            placeholder="••••••••">
                        
                        <!-- tambahan toggle kecil (estetik) optional -->
                        <button type="button" id="togglePassword" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-blue-400 transition">
                            <span class="material-symbols-outlined text-lg">visibility</span>
                        </button>
                    </div>
                </div>

                <!-- remember me + aksesoris biru-kuning -->
                <div class="flex items-center justify-between mt-1">
                    <label class="flex items-center gap-2 cursor-pointer group">
                        <input type="checkbox" name="remember" 
                            class="w-4 h-4 rounded border-white/10 bg-slate-800 text-amber-500 focus:ring-amber-500/50 focus:ring-offset-0 focus:ring-2 accent-amber-500">
                        <span class="text-xs text-slate-300 group-hover:text-amber-300 transition">Ingat perangkat ini</span>
                    </label>
                    <a href="#" class="text-xs text-cyan-400 hover:text-amber-400 transition flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">help</span>
                        Lupa akses?
                    </a>
                </div>

                <button type="submit" 
                    class="btn-auth w-full py-3.5 rounded-xl text-white font-bold text-sm shadow-lg flex items-center justify-center gap-2 transition-all active:scale-[0.97] mt-2">
                    <span class="material-symbols-outlined text-base">verified</span>
                    Otentikasi Superadmin
                    <span class="material-symbols-outlined text-base">login</span>
                </button>

            </form>

            <div class="text-center mt-6">
                <span class="text-[10px] tracking-wider font-semibold text-slate-500 uppercase flex items-center justify-center gap-1.5">
                    <span class="material-symbols-outlined text-xs text-cyan-500">gavel</span>
                    AKSES TERBATAS · KEAMANAN TINGGI
                </span>
            </div>

        </div>
    </div>

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            const icon = this.querySelector('span');
            if(type === 'password') {
                icon.textContent = 'visibility';
                this.classList.remove('text-blue-400');
            } else {
                icon.textContent = 'visibility_off';
                this.classList.add('text-blue-400');
            }
        });

        // Fallback logo jika error
        const logo = document.querySelector('.logo-ceria');
        logo.onerror = function() {
            this.src = "https://images.unsplash.com/photo-1544717305-2782549b5136?w=200&auto=format&fit=crop&q=80";
        }
    </script>
</body>
</html>