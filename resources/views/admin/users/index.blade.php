@extends('layouts.admin')

@section('title', 'Manage Users')

@section('content')
<div class="space-y-8">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-black text-slate-800">Manajemen Pengguna</h2>
            <p class="text-slate-400 text-sm font-medium">Kelola akun Orang Tua dan Pengasuh di sistem CERIA.</p>
        </div>
        <a href="{{ route('admin.users.create') }}" class="bg-brand-blue text-white px-6 py-3 rounded-2xl font-bold text-sm flex items-center gap-2 shadow-lg shadow-blue-100 hover:bg-primary transition-all active:scale-95">
            <span class="material-symbols-outlined text-xl">person_add</span>
            Tambah User Baru
        </a>
    </div>

    @if(session('success'))
    <div class="bg-emerald-50 border border-emerald-100 text-emerald-700 px-6 py-4 rounded-2xl flex items-center gap-3">
        <span class="material-symbols-outlined">check_circle</span>
        <span class="font-bold text-sm">{{ session('success') }}</span>
    </div>
    @endif

    <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100/50 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/50">
                        <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-100">Nama Pengguna</th>
                        <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-100">Email</th>
                        <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-100">Peran</th>
                        <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-100">Tanggal Terdaftar</th>
                        <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-100 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($users as $user)
                    <tr class="hover:bg-slate-50/50 transition-colors group">
                        <td class="px-8 py-5">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 font-bold overflow-hidden">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=random&color=fff" alt="{{ $user->name }}">
                                </div>
                                <span class="font-bold text-slate-800 text-sm">{{ $user->name }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-5">
                            <span class="text-slate-500 text-sm">{{ $user->email }}</span>
                        </td>
                        <td class="px-8 py-5">
                            @if($user->role === 'parent')
                            <span class="px-3 py-1 rounded-full bg-amber-50 text-amber-600 text-[10px] font-black uppercase tracking-wider">Orang Tua</span>
                            @else
                            <span class="px-3 py-1 rounded-full bg-emerald-50 text-emerald-600 text-[10px] font-black uppercase tracking-wider">Pengasuh</span>
                            @endif
                        </td>
                        <td class="px-8 py-5 text-slate-400 text-sm">
                            {{ $user->created_at->format('d M Y') }}
                        </td>
                        <td class="px-8 py-5 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <form action="{{ route('admin.users.delete', $user) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-9 h-9 rounded-xl bg-red-50 text-red-500 flex items-center justify-center hover:bg-red-500 hover:text-white transition-all">
                                        <span class="material-symbols-outlined text-xl">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-8 py-20 text-center">
                            <div class="flex flex-col items-center gap-4">
                                <div class="w-16 h-16 rounded-full bg-slate-50 flex items-center justify-center text-slate-200">
                                    <span class="material-symbols-outlined text-4xl">group_off</span>
                                </div>
                                <p class="text-slate-400 font-bold">Belum ada data pengguna.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
