@extends('layouts.admin')

@section('title', 'Ubah Data Pengguna')
@section('header_title', 'Ubah Pengguna')
@section('header_subtitle', 'Perbarui data akun Orang Tua atau Pengasuh')

@section('content')
<div class="max-w-3xl mx-auto w-full space-y-6">

    {{-- ── Modal Password Reset (Opsi B: muncul sekali setelah reset) ── --}}
    @if(session('reset_password'))
    <div id="resetModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm">
        <div class="bg-white rounded-3xl shadow-2xl p-8 max-w-md w-full mx-4 text-center animate-bounce-in">
            <div class="w-16 h-16 bg-amber-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <span class="material-symbols-outlined text-amber-500 text-3xl">lock_reset</span>
            </div>
            <h3 class="text-xl font-extrabold text-slate-800 mb-1">Password Berhasil Direset!</h3>
            <p class="text-sm text-slate-500 mb-6">Catat dan sampaikan password baru berikut kepada <span class="font-bold text-slate-700">{{ session('reset_name') }}</span>. Password ini hanya ditampilkan <span class="font-bold text-red-500">sekali saja</span>.</p>

            <div class="bg-slate-900 text-amber-400 font-mono text-2xl font-extrabold tracking-widest py-4 px-6 rounded-2xl mb-2 select-all">
                {{ session('reset_password') }}
            </div>
            <p class="text-[11px] text-slate-400 mb-6">Klik teks di atas untuk menyalin, lalu tutup jendela ini.</p>

            <button onclick="document.getElementById('resetModal').remove()" class="w-full h-12 bg-amber-400 text-amber-900 rounded-xl font-bold hover:bg-amber-500 transition-all">
                Saya Sudah Mencatat — Tutup
            </button>
        </div>
    </div>
    @endif

    {{-- ── Flash success ── --}}
    @if(session('success'))
    <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded-r-xl flex items-center gap-3">
        <span class="material-symbols-outlined text-green-600">check_circle</span>
        <p class="text-sm font-bold text-green-800">{{ session('success') }}</p>
    </div>
    @endif

    {{-- ── Main Form ── --}}
    <div class="bg-white rounded-[2rem] shadow-sm border border-slate-50 overflow-hidden">
        <div class="p-8 border-b border-slate-100 flex items-center justify-between">
            <div>
                <h3 class="text-xl font-bold text-slate-800">Formulir Pembaruan</h3>
                <p class="text-sm text-slate-400 mt-0.5">Perbarui informasi akun pengguna</p>
            </div>
            <a href="{{ route('admin.users.index') }}" class="text-sm font-bold text-slate-400 hover:text-blue-600 transition-colors flex items-center gap-1">
                <span class="material-symbols-outlined text-[18px]">arrow_back</span> Kembali
            </a>
        </div>

        <div class="p-8">
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

            <form action="{{ route('admin.users.update', $user) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                {{-- Nama & Username --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                            Nama Lengkap <span class="text-red-400">*</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}" required
                            class="w-full h-12 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none @error('name') border-red-300 @enderror">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                            Username <span class="text-slate-300 font-normal">(opsional)</span>
                        </label>
                        <input type="text" name="username" value="{{ old('username', $user->username) }}" placeholder="contoh: budi_santoso"
                            class="w-full h-12 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none @error('username') border-red-300 @enderror">
                    </div>
                </div>

                {{-- Email & Telepon --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                            Alamat Email <span class="text-red-400">*</span>
                        </label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                            class="w-full h-12 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none @error('email') border-red-300 @enderror">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                            Nomor Telepon <span class="text-slate-300 font-normal">(opsional)</span>
                        </label>
                        <input type="tel" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="08xxxxxxxxxx"
                            class="w-full h-12 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none @error('phone') border-red-300 @enderror">
                    </div>
                </div>

                {{-- Peran & Kode Daycare --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                            Peran (Role) <span class="text-red-400">*</span>
                        </label>
                        <div class="relative">
                            <select name="role" required class="w-full h-12 pl-4 pr-10 appearance-none bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none cursor-pointer">
                                <option value="parent" {{ old('role', $user->role) == 'parent' ? 'selected' : '' }}>Orang Tua</option>
                                <option value="caregiver" {{ old('role', $user->role) == 'caregiver' ? 'selected' : '' }}>Pengasuh</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-[20px]">expand_more</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                            Kode Daycare <span class="text-slate-300 font-normal">(opsional)</span>
                        </label>
                        <input type="text" name="daycare_code" value="{{ old('daycare_code', $user->daycare_code) }}"
                            class="w-full h-12 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none @error('daycare_code') border-red-300 @enderror">
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                    <a href="{{ route('admin.users.index') }}" class="h-11 px-6 border border-slate-200 text-slate-600 rounded-xl font-bold text-sm flex items-center hover:bg-slate-50 transition-all">
                        Batal
                    </a>
                    <button type="submit" class="h-11 px-8 bg-amber-400 text-amber-900 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-amber-500 shadow-md shadow-amber-400/30 transition-all">
                        <span class="material-symbols-outlined text-[18px]">update</span> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- ── Zona Berbahaya: Reset Password ── --}}
    <div class="bg-white rounded-[2rem] shadow-sm border border-red-100 overflow-hidden">
        <div class="p-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center text-red-500 flex-shrink-0">
                    <span class="material-symbols-outlined text-2xl">lock_reset</span>
                </div>
                <div>
                    <h4 class="font-bold text-slate-800 text-sm">Reset Password</h4>
                    <p class="text-xs text-slate-400 mt-0.5">Sistem akan membuat password acak baru dan menampilkannya sekali kepada Anda untuk diteruskan ke pengguna.</p>
                </div>
            </div>
            <form action="{{ route('admin.users.resetPassword', $user) }}" method="POST"
                onsubmit="return confirm('Apakah Anda yakin ingin mereset password {{ $user->name }}? Password lama tidak dapat dipulihkan.')">
                @csrf
                <button type="submit" class="flex-shrink-0 h-11 px-6 bg-red-50 text-red-600 border border-red-200 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-red-100 transition-all">
                    <span class="material-symbols-outlined text-[18px]">autorenew</span> Reset Password Sekarang
                </button>
            </form>
        </div>
    </div>

</div>

@section('scripts')
<style>
@keyframes bounce-in {
    0% { transform: scale(0.8); opacity: 0; }
    70% { transform: scale(1.05); opacity: 1; }
    100% { transform: scale(1); }
}
.animate-bounce-in { animation: bounce-in 0.4s ease-out; }
</style>
@endsection
@endsection
