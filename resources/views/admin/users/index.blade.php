@extends('layouts.admin')

@section('title', 'Kelola Pengguna')
@section('header_title', 'Kelola Pengguna')
@section('header_subtitle', 'Kelola akun Orang Tua dan Pengasuh')

@section('content')
<div class="space-y-6 max-w-[1600px] mx-auto w-full">
    @if(session('success'))
    <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded-r-xl shadow-sm">
        <p class="text-sm font-bold text-green-800">{{ session('success') }}</p>
    </div>
    @endif

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white p-6 rounded-3xl shadow-sm border border-slate-50">
        <div>
            <h3 class="text-xl font-bold text-slate-800">Daftar Pengguna</h3>
            <p class="text-sm text-slate-400">Daftar semua orang tua dan pengasuh yang terdaftar</p>
        </div>
        <div class="flex flex-col lg:flex-row gap-3 w-full md:w-auto items-center">
            <form action="{{ route('admin.users.index') }}" method="GET" class="flex flex-col sm:flex-row w-full lg:w-auto gap-3">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama/email..." class="h-12 px-4 border border-slate-200 rounded-xl text-sm focus:border-blue-400 focus:ring-2 focus:ring-blue-100 outline-none w-full sm:w-64">
                <div class="relative w-full sm:w-48">
                    <select name="role" class="w-full h-12 pl-4 pr-10 appearance-none border border-slate-200 rounded-xl text-sm focus:border-blue-400 focus:ring-2 focus:ring-blue-100 outline-none bg-white cursor-pointer">
                        <option value="">Semua Peran</option>
                        <option value="parent" {{ request('role') == 'parent' ? 'selected' : '' }}>Orang Tua</option>
                        <option value="caregiver" {{ request('role') == 'caregiver' ? 'selected' : '' }}>Pengasuh</option>
                    </select>
                    <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-[20px]">expand_more</span>
                </div>
                <button type="submit" class="h-12 px-5 border border-slate-200 text-slate-600 rounded-xl font-bold hover:bg-slate-50 transition-all flex items-center justify-center">
                    <span class="material-symbols-outlined text-lg">search</span>
                </button>
            </form>
            <a href="{{ route('admin.users.create') }}" class="h-12 px-6 w-full lg:w-auto bg-amber-400 text-amber-900 rounded-xl font-bold text-sm flex items-center justify-center gap-2 hover:bg-amber-500 transition-all shadow-md shadow-amber-400/30">
                <span class="material-symbols-outlined text-lg">add</span>
                Tambah Pengguna
            </a>
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-3xl shadow-sm border border-slate-50 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50/50">
                    <tr>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Nama</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Email</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Peran</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Kode Daycare</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($users as $user)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-8 py-5 flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl {{ $user->role === 'parent' ? 'bg-amber-100 text-amber-700' : 'bg-blue-100 text-blue-700' }} flex items-center justify-center font-bold">
                                {{ strtoupper(substr($user->name, 0, 1)) }}
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">{{ $user->name }}</p>
                                <p class="text-[10px] text-slate-400 font-bold uppercase">Terdaftar: {{ $user->created_at->format('d M Y') }}</p>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-slate-600 font-medium">{{ $user->email }}</td>
                        <td class="px-8 py-5">
                            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold border {{ $user->role === 'parent' ? 'bg-amber-50 border-amber-200 text-amber-700' : 'bg-blue-50 border-blue-200 text-blue-700' }}">
                                <span class="material-symbols-outlined text-[14px]">
                                    {{ $user->role === 'parent' ? 'family_restroom' : 'child_care' }}
                                </span>
                                {{ $user->role === 'parent' ? 'Orang Tua' : 'Pengasuh' }}
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-slate-600 font-medium">
                            {{ $user->daycare_code ?? '-' }}
                        </td>
                        <td class="px-8 py-5 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.users.edit', $user) }}" class="w-8 h-8 rounded-lg bg-slate-50 text-slate-500 hover:text-amber-500 hover:bg-amber-50 flex items-center justify-center transition-all">
                                    <span class="material-symbols-outlined text-[18px]">edit</span>
                                </a>
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-8 h-8 rounded-lg bg-slate-50 text-slate-500 hover:text-red-500 hover:bg-red-50 flex items-center justify-center transition-all">
                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-8 py-10 text-center text-slate-400 font-medium">
                            Tidak ada data pengguna yang ditemukan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-8 py-4 bg-slate-50 border-t border-slate-100 flex justify-between items-center">
            <div class="text-[10px] text-slate-400 font-bold uppercase w-full">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
