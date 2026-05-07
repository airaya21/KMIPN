@extends('layouts.admin')

@section('title', 'Reports & Analytics')
@section('header_title', 'Insights & Reports')

@section('content')
<div class="space-y-6 max-w-[1600px] mx-auto w-full">
    <!-- Reports Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        @foreach([
            ['label' => 'Total Reports', 'val' => '1,284', 'icon' => 'description', 'color' => 'blue'],
            ['label' => 'Incidents', 'val' => '12', 'icon' => 'warning', 'color' => 'red'],
            ['label' => 'Growth Check', 'val' => '94%', 'icon' => 'trending_up', 'color' => 'green'],
            ['label' => 'Parent Feedback', 'val' => '4.8/5', 'icon' => 'star', 'color' => 'amber'],
        ] as $stat)
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-{{ $stat['color'] }}-50 text-{{ $stat['color'] }}-600 flex items-center justify-center">
                    <span class="material-symbols-outlined text-xl">{{ $stat['icon'] }}</span>
                </div>
                <div>
                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">{{ $stat['label'] }}</p>
                    <p class="text-xl font-black text-slate-800">{{ $stat['val'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Main Reports Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Monthly Growth Chart -->
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-50">
            <div class="flex justify-between items-center mb-6">
                <h4 class="font-bold text-slate-800">Monthly Growth Trends</h4>
                <button class="text-xs font-bold text-primary hover:underline">Export Data</button>
            </div>
            <div class="h-48 flex items-end justify-between gap-2 px-2">
                @for($i=0; $i<12; $i++)
                <div class="flex-1 bg-blue-100 rounded-t-lg transition-all hover:bg-primary group relative" style="height: {{ rand(40, 90) }}%">
                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[8px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                        {{ rand(100, 200) }}
                    </div>
                </div>
                @endfor
            </div>
            <div class="flex justify-between mt-3 text-[8px] font-bold text-slate-400 uppercase tracking-widest px-2">
                <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span><span>Jul</span><span>Aug</span><span>Sep</span><span>Oct</span><span>Nov</span><span>Dec</span>
            </div>
        </div>

        <!-- Recent Export History -->
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-50 flex flex-col">
            <h4 class="font-bold text-slate-800 mb-6">Recent Exports</h4>
            <div class="space-y-4 flex-1 overflow-y-auto">
                @foreach([
                    ['name' => 'Monthly_Financial_April.pdf', 'date' => '2 hours ago', 'size' => '1.2 MB'],
                    ['name' => 'Children_Health_Summary_Q1.xlsx', 'date' => 'Yesterday', 'size' => '845 KB'],
                    ['name' => 'Caregiver_Performance_Index.pdf', 'date' => 'April 28, 2024', 'size' => '2.1 MB'],
                    ['name' => 'Parent_Survey_Results.csv', 'date' => 'April 25, 2024', 'size' => '120 KB'],
                ] as $file)
                <div class="flex items-center gap-4 p-3 rounded-xl border border-slate-50 hover:bg-slate-50 transition-all cursor-pointer">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-400">
                        <span class="material-symbols-outlined text-lg">insert_drive_file</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-bold text-slate-700">{{ $file['name'] }}</p>
                        <p class="text-[10px] text-slate-400 font-bold uppercase">{{ $file['date'] }} • {{ $file['size'] }}</p>
                    </div>
                    <button class="w-8 h-8 rounded-lg text-primary hover:bg-blue-50 flex items-center justify-center">
                        <span class="material-symbols-outlined text-xl">download</span>
                    </button>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Available Reports Types -->
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-50">
        <h4 class="font-bold text-slate-800 mb-6">Generated Report Templates</h4>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['title' => 'Daily Attendance', 'desc' => 'Detailed check-in/out records for all children.', 'icon' => 'today'],
                ['title' => 'Health & Safety', 'desc' => 'Aggregated health alerts and medication logs.', 'icon' => 'health_and_safety'],
                ['title' => 'Educational Progress', 'desc' => 'Skill acquisition and milestone tracking reports.', 'icon' => 'school'],
            ] as $tpl)
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 flex flex-col items-start gap-4 hover:border-primary/30 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-white flex items-center justify-center text-primary shadow-sm">
                    <span class="material-symbols-outlined text-2xl">{{ $tpl['icon'] }}</span>
                </div>
                <div>
                    <h5 class="font-bold text-slate-800 text-sm">{{ $tpl['title'] }}</h5>
                    <p class="text-xs text-slate-400 mt-1">{{ $tpl['desc'] }}</p>
                </div>
                <button class="mt-2 text-primary text-xs font-bold flex items-center gap-1 hover:gap-2 transition-all">
                    Generate Report <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </button>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
