@extends('layouts.admin')

@section('title', 'System Settings')
@section('header_title', 'System Configuration')

@section('content')
<div class="max-w-[1000px] mx-auto w-full space-y-6">
    <!-- Account Settings -->
    <div class="bg-white rounded-3xl shadow-sm border border-slate-50 p-8">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-primary flex items-center justify-center">
                <span class="material-symbols-outlined text-2xl">manage_accounts</span>
            </div>
            <div>
                <h3 class="text-xl font-bold text-slate-800">Admin Profile</h3>
                <p class="text-sm text-slate-400">Manage your personal account information</p>
            </div>
        </div>
        
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Full Name</label>
                    <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-primary focus:border-primary transition-all text-sm font-medium" value="{{ auth()->user()->name }}">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Email Address</label>
                    <input type="email" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-primary focus:border-primary transition-all text-sm font-medium" value="{{ auth()->user()->email }}">
                </div>
            </div>
            <div class="pt-2">
                <button type="submit" class="bg-primary text-white px-8 py-3 rounded-xl font-bold text-sm shadow-md shadow-primary/20 hover:bg-primary/90 transition-all">
                    Update Profile
                </button>
            </div>
        </form>
    </div>

    <!-- System Configuration -->
    <div class="bg-white rounded-3xl shadow-sm border border-slate-50 p-8">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-12 h-12 rounded-2xl bg-green-50 text-green-600 flex items-center justify-center">
                <span class="material-symbols-outlined text-2xl">settings_applications</span>
            </div>
            <div>
                <h3 class="text-xl font-bold text-slate-800">Daycare Preferences</h3>
                <p class="text-sm text-slate-400">Configure global daycare operating rules</p>
            </div>
        </div>

        <div class="space-y-6">
            @foreach([
                ['label' => 'Enable Emergency SMS Alerts', 'desc' => 'Automatically send SMS to parents during emergency events.', 'checked' => true],
                ['label' => 'Allow Caregiver Self-Enrollment', 'desc' => 'Let new caregivers register using a daycare invite code.', 'checked' => false],
                ['label' => 'Public Visibility', 'desc' => 'Show your daycare in the CERIA public directory.', 'checked' => true],
            ] as $opt)
            <div class="flex items-center justify-between p-4 rounded-2xl border border-slate-50 bg-slate-50/30">
                <div class="max-w-[400px]">
                    <p class="text-sm font-bold text-slate-700">{{ $opt['label'] }}</p>
                    <p class="text-xs text-slate-400 mt-1">{{ $opt['desc'] }}</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer" {{ $opt['checked'] ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                </label>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Danger Zone -->
    <div class="bg-red-50/30 rounded-3xl border border-red-100 p-8">
        <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 rounded-2xl bg-red-100 text-red-600 flex items-center justify-center">
                <span class="material-symbols-outlined text-2xl">dangerous</span>
            </div>
            <div>
                <h3 class="text-xl font-bold text-red-600">Danger Zone</h3>
                <p class="text-sm text-red-400">Irreversible system actions</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="text-xs text-red-500 max-w-[400px] font-medium">Resetting all daycare data will permanently delete all children, caregivers, and reports. This action cannot be undone.</p>
            <button class="bg-red-600 text-white px-6 py-3 rounded-xl font-bold text-xs hover:bg-red-700 transition-all shadow-sm">
                Reset System Data
            </button>
        </div>
    </div>
</div>
@endsection
