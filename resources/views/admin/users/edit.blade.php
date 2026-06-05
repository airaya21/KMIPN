@extends('layouts.admin')

@section('title', 'Ubah Data Pengguna')
@section('header_title', 'Ubah Pengguna')
@section('header_subtitle', 'Perbarui data akun Orang Tua atau Pengasuh')

@section('content')
<div class="max-w-3xl mx-auto w-full">
    <div class="bg-white rounded-[2rem] shadow-sm border border-slate-50 overflow-hidden">
        <div class="p-8 border-b border-slate-50 flex items-center justify-between">
            <h3 class="text-xl font-bold text-slate-800">Formulir Pembaruan</h3>
            <a href="{{ route('admin.users.index') }}" class="text-sm font-bold text-slate-400 hover:text-blue-600 transition-colors flex items-center gap-1">
                <span class="material-symbols-outlined text-[18px]">arrow_back</span> Kembali
            </a>
        </div>

        <div class="p-8">
            @if($errors->any())
            <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-r-xl">
                <ul class="list-disc pl-4 text-xs font-medium text-red-700">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('admin.users.update', $user) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <!-- Nama Lengkap -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-2 uppercase tracking-wider">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" required 
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-2 uppercase tracking-wider">Alamat Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" required 
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none">
                </div>

                <!-- Peran -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-2 uppercase tracking-wider">Peran (Role)</label>
                    <select name="role" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none appearance-none">
                        <option value="parent" {{ old('role', $user->role) == 'parent' ? 'selected' : '' }}>Orang Tua</option>
                        <option value="caregiver" {{ old('role', $user->role) == 'caregiver' ? 'selected' : '' }}>Pengasuh</option>
                    </select>
                </div>

                <!-- Kode Daycare -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-2 uppercase tracking-wider">Kode Daycare (Opsional)</label>
                    <input type="text" name="daycare_code" value="{{ old('daycare_code', $user->daycare_code) }}" 
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 transition-all outline-none">
                </div>

                <!-- Kata Sandi -->
                <div class="bg-amber-50/50 p-4 rounded-xl border border-amber-100/50">
                    <label class="block text-xs font-bold text-amber-800 mb-2 uppercase tracking-wider flex items-center gap-2">
                        <span class="material-symbols-outlined text-[16px]">lock_reset</span> Ubah Kata Sandi
                    </label>
                    <input type="password" name="password" placeholder="Kosongkan jika tidak ingin mengubah kata sandi" 
                        class="w-full px-4 py-3 bg-white border border-amber-200 rounded-xl text-sm focus:border-amber-400 focus:ring-2 focus:ring-amber-100 transition-all outline-none">
                    <p class="text-[10px] font-medium text-amber-600 mt-2">Isi kolom ini HANYA jika Anda ingin mengganti kata sandi pengguna tersebut.</p>
                </div>

                <div class="pt-4 border-t border-slate-50 flex items-center justify-end gap-3">
                    <a href="{{ route('admin.users.index') }}" class="px-6 py-3 border border-slate-200 text-slate-600 rounded-xl font-bold text-sm hover:bg-slate-50 transition-all">
                        Batal
                    </a>
                    <button type="submit" class="bg-[#005F8D] text-white px-8 py-3 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-[#004F75] shadow-md shadow-blue-900/20 transition-all">
                        <span class="material-symbols-outlined text-[18px]">update</span> Perbarui Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
