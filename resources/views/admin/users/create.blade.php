@extends('layouts.admin')

@section('title', 'Tambah Pengguna Baru')
@section('header_title', 'Tambah Pengguna')
@section('header_subtitle', 'Daftarkan Orang Tua atau Pengasuh baru')

@section('content')
<div class="max-w-3xl mx-auto w-full">
    <div class="bg-white rounded-[2rem] shadow-sm border border-slate-50 overflow-hidden">
        <div class="p-8 border-b border-slate-100 flex items-center justify-between">
            <div>
                <h3 class="text-xl font-bold text-slate-800">Formulir Pendaftaran</h3>
                <p class="text-sm text-slate-400 mt-0.5">Isi data di bawah untuk mendaftarkan pengguna baru</p>
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

            <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-5">
                @csrf

                {{-- Nama & Username --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                            Nama Lengkap <span class="text-red-400">*</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}" required placeholder="Masukkan nama lengkap"
                            class="w-full h-12 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none @error('name') border-red-300 @enderror">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                            Username <span class="text-slate-300 font-normal">(opsional)</span>
                        </label>
                        <input type="text" name="username" value="{{ old('username') }}" placeholder="contoh: budi_santoso"
                            class="w-full h-12 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none @error('username') border-red-300 @enderror">
                        <p class="text-[10px] text-slate-400 mt-1">Untuk login alternatif selain email. Gunakan huruf, angka, atau _</p>
                    </div>
                </div>

                {{-- Email & Nomor Telepon --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                            Alamat Email <span class="text-red-400">*</span>
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}" required placeholder="contoh@email.com"
                            class="w-full h-12 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none @error('email') border-red-300 @enderror">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                            Nomor Telepon <span class="text-slate-300 font-normal">(opsional)</span>
                        </label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx"
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
                            <select name="role" required class="w-full h-12 pl-4 pr-10 appearance-none bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none cursor-pointer @error('role') border-red-300 @enderror">
                                <option value="">-- Pilih Peran --</option>
                                <option value="parent" {{ old('role') == 'parent' ? 'selected' : '' }}>Orang Tua</option>
                                <option value="caregiver" {{ old('role') == 'caregiver' ? 'selected' : '' }}>Pengasuh</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-[20px]">expand_more</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                            Kode Daycare <span class="text-slate-300 font-normal">(opsional)</span>
                        </label>
                        <input type="text" name="daycare_code" value="{{ old('daycare_code') }}" placeholder="Kode akses daycare"
                            class="w-full h-12 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none @error('daycare_code') border-red-300 @enderror">
                    </div>
                </div>

                {{-- Password --}}
                <div>
                    <label class="block text-xs font-bold text-slate-600 mb-2 uppercase tracking-wider">
                        Password Awal <span class="text-red-400">*</span>
                    </label>
                    <div class="relative">
                        <input type="password" id="password_input" name="password" required placeholder="Minimal 8 karakter"
                            class="w-full h-12 px-4 pr-12 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none @error('password') border-red-300 @enderror">
                        <button type="button" onclick="togglePw('password_input','eye_icon')" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                            <span class="material-symbols-outlined text-xl" id="eye_icon">visibility_off</span>
                        </button>
                    </div>
                    <p class="text-[10px] text-slate-400 mt-1">Password akan diberikan kepada pengguna untuk login pertama kali. Pengguna dapat menggantinya sendiri setelah login.</p>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                    <a href="{{ route('admin.users.index') }}" class="h-11 px-6 border border-slate-200 text-slate-600 rounded-xl font-bold text-sm flex items-center hover:bg-slate-50 transition-all">
                        Batal
                    </a>
                    <button type="submit" class="h-11 px-8 bg-amber-400 text-amber-900 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-amber-500 shadow-md shadow-amber-400/30 transition-all">
                        <span class="material-symbols-outlined text-[18px]">person_add</span> Daftarkan Pengguna
                    </button>
                </div>
            </form>
        </div>
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
