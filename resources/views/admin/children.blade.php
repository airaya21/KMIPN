@extends('layouts.admin')

@section('title', 'Manage Children')
@section('header_title', 'Children Records')

@section('content')
<div class="space-y-6 max-w-[1600px] mx-auto w-full">
    <!-- Header Actions -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white p-6 rounded-3xl shadow-sm border border-slate-50">
        <div>
            <h3 class="text-xl font-bold text-slate-800">Enrollment List</h3>
            <p class="text-sm text-slate-400">Manage all children registered in the system</p>
        </div>
        <div class="flex gap-3 w-full md:w-auto">
            <button class="flex-1 md:flex-none border border-slate-200 text-slate-600 px-6 py-3 rounded-xl font-bold text-sm flex items-center justify-center gap-2 hover:bg-slate-50 transition-all">
                <span class="material-symbols-outlined text-lg">filter_list</span>
                Filters
            </button>
            <button class="flex-1 md:flex-none bg-primary text-white px-6 py-3 rounded-xl font-bold text-sm flex items-center justify-center gap-2 hover:bg-primary/90 transition-all shadow-md shadow-primary/20">
                <span class="material-symbols-outlined text-lg">add</span>
                Enroll New Child
            </button>
        </div>
    </div>

    <!-- Children Grid/Table -->
    <div class="bg-white rounded-3xl shadow-sm border border-slate-50 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50/50">
                    <tr>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Child Name</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Age</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Assigned Caregiver</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold">Health Status</th>
                        <th class="px-8 py-4 text-[10px] text-slate-400 uppercase tracking-widest font-bold text-right">Profile</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @foreach([
                        ['name' => 'Ethan James', 'age' => '3 years', 'cg' => 'Maria S.', 'status' => 'Perfect', 'color' => 'green'],
                        ['name' => 'Mia Lopez', 'age' => '2 years 8 months', 'cg' => 'Robert K.', 'status' => 'Good', 'color' => 'blue'],
                        ['name' => 'Oliver White', 'age' => '4 years', 'cg' => 'Maria S.', 'status' => 'Reviewing', 'color' => 'yellow'],
                        ['name' => 'Sophia Chen', 'age' => '3 years 2 months', 'cg' => 'Robert K.', 'status' => 'Perfect', 'color' => 'green'],
                        ['name' => 'Leo Brown', 'age' => '2 years 1 month', 'cg' => 'Maria S.', 'status' => 'Needs Attention', 'color' => 'red'],
                        ['name' => 'Ava Wilson', 'age' => '3 years 6 months', 'cg' => 'Sarah P.', 'status' => 'Perfect', 'color' => 'green'],
                    ] as $child)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-8 py-5 flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-600 font-bold">
                                {{ substr($child['name'], 0, 1) }}{{ substr(strrchr($child['name'], ' '), 1, 1) }}
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">{{ $child['name'] }}</p>
                                <p class="text-[10px] text-slate-400 font-bold uppercase">ID: CERIA-{{ rand(1000, 9999) }}</p>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-slate-600 font-medium">{{ $child['age'] }}</td>
                        <td class="px-8 py-5 text-sm text-slate-600">{{ $child['cg'] }}</td>
                        <td class="px-8 py-5">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-{{ $child['color'] }}-500"></span>
                                <span class="text-sm font-bold text-slate-700">{{ $child['status'] }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-right">
                            <button class="text-primary font-bold text-xs hover:underline">View Details</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="px-8 py-4 bg-slate-50 border-t border-slate-100 flex justify-between items-center">
            <p class="text-[10px] text-slate-400 font-bold uppercase">Showing 6 of 124 Children</p>
            <div class="flex gap-2">
                <button class="w-8 h-8 rounded-lg bg-white border border-slate-200 flex items-center justify-center text-slate-400 hover:text-primary transition-all">
                    <span class="material-symbols-outlined text-lg">chevron_left</span>
                </button>
                <button class="w-8 h-8 rounded-lg bg-white border border-slate-200 flex items-center justify-center text-slate-400 hover:text-primary transition-all">
                    <span class="material-symbols-outlined text-lg">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
