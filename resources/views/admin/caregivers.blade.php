@extends('layouts.admin')

@section('title', 'Manage Caregivers')
@section('header_title', 'Caregivers Management')

@section('content')
<div class="space-y-6 max-w-[1600px] mx-auto w-full">
    <!-- Header Actions -->
    <div class="flex justify-between items-center bg-white p-6 rounded-3xl shadow-sm border border-slate-50">
        <div>
            <h3 class="text-xl font-bold text-slate-800">Caregivers List</h3>
            <p class="text-sm text-slate-400">Total {{ $caregivers->count() }} active staff members</p>
        </div>
        <button class="bg-primary text-white px-6 py-3 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-primary/90 transition-all shadow-md shadow-primary/20">
            <span class="material-symbols-outlined">person_add</span>
            Add New Caregiver
        </button>
    </div>

    <!-- Caregivers Table -->
    <div class="bg-white rounded-3xl shadow-sm border border-slate-50 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50/50">
                    <tr>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Staff Member</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Email Address</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Assigned Children</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Status</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($caregivers as $cg)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-8 py-5 flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-primary font-bold">
                                {{ strtoupper(substr($cg->name, 0, 1)) }}
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">{{ $cg->name }}</p>
                                <p class="text-[10px] text-slate-400 font-bold uppercase">Caregiver</p>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-slate-600 font-medium">{{ $cg->email }}</td>
                        <td class="px-8 py-5 text-sm text-slate-500">{{ rand(2, 8) }} children</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded-full">Active</span>
                        </td>
                        <td class="px-8 py-5 text-right">
                            <div class="flex justify-end gap-2">
                                <button class="w-8 h-8 rounded-lg border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-blue-50 hover:text-primary transition-all">
                                    <span class="material-symbols-outlined text-lg">edit</span>
                                </button>
                                <button class="w-8 h-8 rounded-lg border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-red-50 hover:text-red-500 transition-all">
                                    <span class="material-symbols-outlined text-lg">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-8 py-12 text-center">
                            <div class="flex flex-col items-center gap-3">
                                <span class="material-symbols-outlined text-5xl text-slate-200">supervisor_account</span>
                                <p class="text-slate-400 font-bold">No caregivers found</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-50">
            <h4 class="font-bold text-slate-800 mb-4">Workload Overview</h4>
            <div class="space-y-4">
                @foreach($caregivers->take(3) as $cg)
                <div class="space-y-2">
                    <div class="flex justify-between text-xs font-bold">
                        <span class="text-slate-600">{{ $cg->name }}</span>
                        <span class="text-slate-400">{{ rand(70, 95) }}% Capacity</span>
                    </div>
                    <div class="h-1.5 w-full bg-slate-50 rounded-full overflow-hidden">
                        <div class="h-full bg-primary" style="width: {{ rand(70, 95) }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-50 flex flex-col justify-center items-center text-center">
            <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center mb-3">
                <span class="material-symbols-outlined">priority_high</span>
            </div>
            <h4 class="font-bold text-slate-800">Need More Staff?</h4>
            <p class="text-xs text-slate-400 mt-1 max-w-[240px]">Current child-to-caregiver ratio is 6.8, which is slightly above the recommended 5.0.</p>
            <button class="mt-4 text-primary text-xs font-bold hover:underline">View Staffing Analytics</button>
        </div>
    </div>
</div>
@endsection
