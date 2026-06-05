@php
    $userRole = auth()->user()->role;
    $layout   = $userRole === 'caregiver' ? 'layouts.caregiver' : 'layouts.parent';
@endphp

@extends($layout)

@section('title', 'Ganti Password')
@section('header_title', 'Ganti Password')
@section('header_subtitle', 'Ubah kata sandi akun Anda')

@section('content')
<div class="max-w-xl mx-auto w-full">
    <div class="bg-white rounded-[2rem] shadow-sm border border-slate-50 overflow-hidden">
        <div class="p-8 border-b border-slate-100">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-amber-100 rounded-2xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 text-2xl">lock_reset</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-slate-800">Ganti Password</h3>
                    <p class="text-sm text-slate-400 mt-0.5">Pastikan password baru Anda kuat dan mudah diingat</p>
                </div>
            </div>
        </div>

        <div class="p-8">
            {{-- Success --}}
            @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-500 rounded-r-xl flex items-center gap-3">
                <span class="material-symbols-outlined text-green-600">check_circle</span>
                <p class="text-sm font-bold text-green-800">{{ session('success') }}</p>
            </div>
            @endif

            {{-- Errors --}}
            @if($errors->any())
            <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-r-xl">
                <p class="text-xs font-bold text-red-700 mb-2 flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">error</span> Terdapat kesalahan:
                </p>
                <ul class="list-disc pl-4 text-xs text-red-600 space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('profile.update-password') }}" method="POST" class="space-y-5">
                @csrf

                {{-- Password Lama --}}
                <div>
                    <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                        Password Saat Ini <span class="text-red-400">*</span>
                    </label>
                    <div class="relative">
                        <input type="password" id="current_password" name="current_password" required
                            placeholder="Masukkan password lama Anda"
                            class="w-full h-12 px-4 pr-12 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-amber-400 focus:ring-2 focus:ring-amber-100 transition-all outline-none @error('current_password') border-red-300 @enderror">
                        <button type="button" onclick="togglePw('current_password','eye1')" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                            <span class="material-symbols-outlined text-xl" id="eye1">visibility_off</span>
                        </button>
                    </div>
                </div>

                {{-- Password Baru --}}
                <div>
                    <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                        Password Baru <span class="text-red-400">*</span>
                    </label>
                    <div class="relative">
                        <input type="password" id="new_password" name="password" required
                            placeholder="Minimal 8 karakter"
                            class="w-full h-12 px-4 pr-12 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-amber-400 focus:ring-2 focus:ring-amber-100 transition-all outline-none @error('password') border-red-300 @enderror">
                        <button type="button" onclick="togglePw('new_password','eye2')" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                            <span class="material-symbols-outlined text-xl" id="eye2">visibility_off</span>
                        </button>
                    </div>
                </div>

                {{-- Konfirmasi Password --}}
                <div>
                    <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                        Konfirmasi Password Baru <span class="text-red-400">*</span>
                    </label>
                    <div class="relative">
                        <input type="password" id="confirm_password" name="password_confirmation" required
                            placeholder="Ulangi password baru"
                            class="w-full h-12 px-4 pr-12 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-amber-400 focus:ring-2 focus:ring-amber-100 transition-all outline-none">
                        <button type="button" onclick="togglePw('confirm_password','eye3')" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                            <span class="material-symbols-outlined text-xl" id="eye3">visibility_off</span>
                        </button>
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center justify-end">
                    <button type="submit" class="h-12 px-8 bg-amber-400 text-amber-900 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-amber-500 shadow-md shadow-amber-400/30 transition-all">
                        <span class="material-symbols-outlined text-[18px]">lock</span> Simpan Password Baru
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Info Box --}}
    <div class="mt-4 p-4 bg-blue-50 border border-blue-100 rounded-2xl flex items-start gap-3">
        <span class="material-symbols-outlined text-blue-400 text-lg flex-shrink-0 mt-0.5">info</span>
        <p class="text-xs text-blue-700 leading-relaxed">
            Setelah password berhasil diganti, password lama Anda tidak dapat digunakan lagi.
            Jika lupa password, hubungi Admin daycare Anda untuk melakukan reset password.
        </p>
    </div>
</div>

@section('scripts')
<script>
function togglePw(inputId, iconId) {
    const input = document.getElementById(inputId);
    const icon = document.getElementById(iconId);
    input.type = input.type === 'password' ? 'text' : 'password';
    icon.textContent = input.type === 'password' ? 'visibility_off' : 'visibility';
}
</script>
@endsection
@endsection
