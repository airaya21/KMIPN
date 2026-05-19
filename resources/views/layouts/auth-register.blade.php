<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SafeChild · Registrasi')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,400,0,0" />
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
        .step-hidden { display: none; }
        .glass-card { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.5); }
        @yield('styles')
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
            <h1 class="text-2xl sm:text-3xl font-extrabold text-primary-900 mb-2">@yield('header_title')</h1>
            <p class="text-sm text-slate-500">@yield('header_subtitle')</p>
        </div>

        <div class="glass-card rounded-3xl shadow-xl p-6 sm:p-10 border border-white">
            
            <!-- Progress Bar -->
            <div class="mb-8 relative">
                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded-full bg-primary-100">
                    <div id="progress-bar" style="width: 25%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-500 transition-all duration-500"></div>
                </div>
                <div class="flex justify-between text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                    @yield('progress_steps')
                </div>
            </div>

            <form id="registerForm" action="{{ route('register.process') }}" method="POST">
                @csrf
                <input type="hidden" name="role" value="@yield('role')">
                
                @yield('form_steps')
                
            </form>
            
            <div class="mt-6 text-center text-xs text-slate-500">
                @yield('footer_text') <a href="{{ route('login') }}" class="font-bold text-primary-600 hover:underline">Masuk di sini</a>
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
                if (label) {
                    if (i <= currentStep) {
                        label.classList.add('text-primary-600');
                        label.classList.remove('text-slate-400');
                    } else {
                        label.classList.remove('text-primary-600');
                        label.classList.add('text-slate-400');
                    }
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
    
    @yield('extra_scripts')
</body>
</html>
