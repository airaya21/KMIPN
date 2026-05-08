@extends('layouts.admin')

@section('title', 'Add New User')

@section('content')
<div class="max-w-2xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.users') }}" class="w-12 h-12 rounded-2xl bg-white border border-slate-100 flex items-center justify-center text-slate-400 hover:text-brand-blue transition-all">
            <span class="material-symbols-outlined">arrow_back</span>
        </a>
        <div>
            <h2 class="text-2xl font-black text-slate-800">Tambah User Baru</h2>
            <p class="text-slate-400 text-sm font-medium">Buat akun untuk Orang Tua atau Pengasuh baru.</p>
        </div>
    </div>

    <div class="bg-white rounded-[2rem] p-10 shadow-sm border border-slate-100/50">
        <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-6">
            @csrf

            <div class="grid grid-cols-2 gap-6">
                <div class="col-span-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3">Pilih Peran</label>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="relative cursor-pointer group">
                            <input type="radio" name="role" value="parent" class="peer sr-only" checked>
                            <div class="p-6 rounded-2xl border-2 border-slate-50 bg-slate-50/50 peer-checked:border-brand-blue peer-checked:bg-blue-50/30 transition-all group-hover:bg-white group-hover:border-slate-200">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center text-amber-500 shadow-sm group-hover:scale-110 transition-transform">
                                        <span class="material-symbols-outlined text-2xl">family_restroom</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-800 text-sm">Orang Tua</p>
                                        <p class="text-[10px] text-slate-400 font-medium uppercase tracking-wider">Akses Monitoring</p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4 w-5 h-5 rounded-full bg-brand-blue text-white flex items-center justify-center opacity-0 peer-checked:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-[14px] font-bold">check</span>
                            </div>
                        </label>

                        <label class="relative cursor-pointer group">
                            <input type="radio" name="role" value="caregiver" class="peer sr-only">
                            <div class="p-6 rounded-2xl border-2 border-slate-50 bg-slate-50/50 peer-checked:border-brand-blue peer-checked:bg-blue-50/30 transition-all group-hover:bg-white group-hover:border-slate-200">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center text-emerald-500 shadow-sm group-hover:scale-110 transition-transform">
                                        <span class="material-symbols-outlined text-2xl">handshake</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-800 text-sm">Pengasuh</p>
                                        <p class="text-[10px] text-slate-400 font-medium uppercase tracking-wider">Akses Pencatatan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4 w-5 h-5 rounded-full bg-brand-blue text-white flex items-center justify-center opacity-0 peer-checked:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-[14px] font-bold">check</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="col-span-2 space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Nama Lengkap</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-5 top-1/2 -translate-y-1/2 text-slate-300">person</span>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan nama lengkap" class="w-full bg-slate-50 border-none rounded-2xl py-4 pl-14 pr-6 text-sm focus:ring-2 focus:ring-brand-blue/20 placeholder:text-slate-300 font-medium">
                    </div>
                    @error('name') <p class="text-red-500 text-[10px] font-bold uppercase tracking-wider px-2">{{ $message }}</p> @enderror
                </div>

                <div class="col-span-2 space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Alamat Email</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-5 top-1/2 -translate-y-1/2 text-slate-300">mail</span>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" class="w-full bg-slate-50 border-none rounded-2xl py-4 pl-14 pr-6 text-sm focus:ring-2 focus:ring-brand-blue/20 placeholder:text-slate-300 font-medium">
                    </div>
                    @error('email') <p class="text-red-500 text-[10px] font-bold uppercase tracking-wider px-2">{{ $message }}</p> @enderror
                </div>

                <div class="col-span-2 space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Kata Sandi</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-5 top-1/2 -translate-y-1/2 text-slate-300">lock</span>
                        <input type="password" name="password" placeholder="Min. 8 karakter" class="w-full bg-slate-50 border-none rounded-2xl py-4 pl-14 pr-6 text-sm focus:ring-2 focus:ring-brand-blue/20 placeholder:text-slate-300 font-medium">
                    </div>
                    @error('password') <p class="text-red-500 text-[10px] font-bold uppercase tracking-wider px-2">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="pt-6">
                <button type="submit" class="w-full bg-brand-blue text-white py-4 rounded-2xl font-bold text-sm shadow-lg shadow-blue-100 hover:bg-primary transition-all active:scale-[0.98]">
                    Simpan User Baru
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
