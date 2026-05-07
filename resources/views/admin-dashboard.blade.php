<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed": "#c6e7ff",
                        "surface": "#f7fafe",
                        "on-tertiary-container": "#423500",
                        "on-secondary-fixed": "#062100",
                        "tertiary": "#705d00",
                        "surface-bright": "#f7fafe",
                        "secondary-container": "#99f670",
                        "error": "#ba1a1a",
                        "tertiary-container": "#bc9d00",
                        "surface-tint": "#00658d",
                        "on-tertiary-fixed": "#221b00",
                        "primary-fixed-dim": "#82cfff",
                        "on-primary-fixed": "#001e2d",
                        "inverse-surface": "#2d3134",
                        "on-primary-container": "#003a53",
                        "on-background": "#181c1f",
                        "background": "#f7fafe",
                        "tertiary-fixed-dim": "#e8c426",
                        "secondary": "#246d00",
                        "on-primary": "#ffffff",
                        "surface-container-low": "#f1f4f8",
                        "inverse-primary": "#82cfff",
                        "on-secondary-container": "#267200",
                        "on-surface": "#181c1f",
                        "primary-container": "#4da8da",
                        "on-tertiary": "#ffffff",
                        "error-container": "#ffdad6",
                        "surface-container-lowest": "#ffffff",
                        "on-surface-variant": "#3f484f",
                        "primary": "#00658d",
                        "surface-container-high": "#e5e8ed",
                        "secondary-fixed": "#9cf973",
                        "on-error-container": "#93000a",
                        "surface-container-highest": "#e0e3e7",
                        "on-secondary-fixed-variant": "#195200",
                        "outline": "#6f7880",
                        "on-primary-fixed-variant": "#004c6b",
                        "on-secondary": "#ffffff",
                        "on-error": "#ffffff",
                        "tertiary-fixed": "#ffe173",
                        "surface-dim": "#d7dade",
                        "surface-container": "#ebeef2",
                        "inverse-on-surface": "#eef1f5",
                        "outline-variant": "#bfc8d0",
                        "surface-variant": "#e0e3e7",
                        "secondary-fixed-dim": "#81dc5a",
                        "on-tertiary-fixed-variant": "#554500"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-lg": "48px",
                        "unit": "8px",
                        "stack-md": "24px",
                        "stack-sm": "12px",
                        "gutter": "24px",
                        "container-padding": "32px"
                    },
                    "fontFamily": {
                        "body-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "700"}],
                        "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "600"}],
                        "headline-sm": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "display-lg": ["36px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "700"}]
                    }
                }
            }
        }
    </script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
    </style>
</head>
<body class="bg-surface text-on-background min-h-screen">
<!-- SideNavBar Shell -->
<aside class="fixed left-0 top-0 h-full flex flex-col py-6 h-screen w-64 border-r border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 z-50">
<div class="px-8 mb-10 flex items-center gap-3">
<div class="w-10 h-10 bg-primary-container rounded-xl flex items-center justify-center text-on-primary-container">
<span class="material-symbols-outlined" data-icon="child_care">child_care</span>
</div>
<div>
<h1 class="text-xl font-bold text-slate-800 dark:text-slate-100 font-headline-sm">CERIA</h1>
<p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Admin Portal</p>
</div>
</div>
<nav class="flex-1 space-y-1">
<!-- Active: Dashboard -->
<a class="bg-sky-50 dark:bg-sky-900/20 text-sky-600 dark:text-sky-300 rounded-xl mx-4 my-1 flex items-center gap-3 px-4 py-3 font-['Plus_Jakarta_Sans'] text-[14px] font-semibold transition-all" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span>Dashboard</span>
</a>
<a class="text-slate-500 dark:text-slate-400 mx-4 my-1 flex items-center gap-3 px-4 py-3 font-['Plus_Jakarta_Sans'] text-[14px] font-semibold hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-all" href="#">
<span class="material-symbols-outlined" data-icon="supervisor_account">supervisor_account</span>
<span>Caregivers</span>
</a>
<a class="text-slate-500 dark:text-slate-400 mx-4 my-1 flex items-center gap-3 px-4 py-3 font-['Plus_Jakarta_Sans'] text-[14px] font-semibold hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-all" href="#">
<span class="material-symbols-outlined" data-icon="child_care">child_care</span>
<span>Children</span>
</a>
<a class="text-slate-500 dark:text-slate-400 mx-4 my-1 flex items-center gap-3 px-4 py-3 font-['Plus_Jakarta_Sans'] text-[14px] font-semibold hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-all" href="#">
<span class="material-symbols-outlined" data-icon="assessment">assessment</span>
<span>Reports</span>
</a>
<a class="text-slate-500 dark:text-slate-400 mx-4 my-1 flex items-center gap-3 px-4 py-3 font-['Plus_Jakarta_Sans'] text-[14px] font-semibold hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-all" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span>Settings</span>
</a>
</nav>
<div class="px-4 mt-auto">
<button class="w-full py-3 px-4 bg-error text-on-error rounded-xl font-label-md flex items-center justify-center gap-2 active:scale-95 transition-transform">
<span class="material-symbols-outlined" data-icon="emergency">emergency</span>
<span>Emergency Alert</span>
</button>
</div>
</aside>
<!-- Main Content Area -->
<main class="pl-64 flex flex-col min-h-screen">
<!-- TopNavBar Shell -->
<header class="flex justify-between items-center px-8 h-20 w-full bg-white/90 dark:bg-slate-900/90 backdrop-blur-md sticky top-0 z-40 border-b border-slate-100 dark:border-slate-800 shadow-[0_4px_20px_rgba(0,0,0,0.03)]">
<div class="flex items-center gap-4">
<h2 class="text-slate-800 dark:text-white font-headline-sm">Admin Dashboard</h2>
</div>
<div class="flex items-center gap-6">
<div class="relative flex items-center bg-surface-container-low px-4 py-2 rounded-full border border-outline-variant/30">
<span class="material-symbols-outlined text-slate-400 text-lg mr-2" data-icon="search">search</span>
<input class="bg-transparent border-none focus:ring-0 text-body-sm w-48 text-on-surface" placeholder="Search children, records..." type="text"/>
</div>
<div class="flex items-center gap-3">
<button class="w-10 h-10 flex items-center justify-center text-slate-500 hover:bg-slate-50 rounded-full transition-colors relative">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
<button class="w-10 h-10 flex items-center justify-center text-slate-500 hover:bg-slate-50 rounded-full transition-colors">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
</button>
<div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
<div class="flex items-center gap-3">
<div class="text-right hidden sm:block">
<p class="text-label-md text-on-surface">Sarah Mitchell</p>
<p class="text-[10px] text-slate-400 font-bold uppercase">Super Admin</p>
</div>
<img alt="User profile" class="w-10 h-10 rounded-full object-cover border-2 border-primary-fixed" data-alt="A professional portrait of a female administrator in a bright, modern office setting. She has a friendly and confident expression, wearing a neutral business-casual outfit. The background is softly blurred with hints of greenery and clean white walls, reflecting the safe and transparent CERIA brand aesthetic with soft, natural lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEL1WPmcqwIqKLCvSe3ShEXSWgZx5oMkREp1_jwv6gNt2tR0O-U7y5aB8NTQ3h02KEPDVAg_sJcWdua7NdQZSsyOSGfD95nedhvnIfsWocjYbq8E31bmxr23UgQpk1Uu-G1BYSAnuv3jBIedKuScv9K7O9RZw0x1INP7--hq6RnzCjN-sitLndfqEFwSDmD9IKat74LUp-5Alb-rewyQjeuRuAWbyTmDM0mDkIFB1XhMVfUvhxdEB0MkEshlsTK4g7vr-MlgIczys"/>
</div>
</div>
</div>
</header>
<!-- Page Canvas -->
<div class="p-8 space-y-8 max-w-[1600px] mx-auto w-full">
<!-- Quick Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Stat Card 1 -->
<div class="bg-white p-6 rounded-[24px] shadow-[0_8px_20px_rgba(0,0,0,0.04)] border border-slate-50 flex items-center justify-between">
<div>
<p class="text-slate-400 font-label-md mb-1">Total Children</p>
<h3 class="text-display-lg font-black text-on-surface">124</h3>
<p class="text-secondary text-label-sm flex items-center mt-2">
<span class="material-symbols-outlined text-sm mr-1" data-icon="trending_up">trending_up</span>
                            +12% from last month
                        </p>
</div>
<div class="w-14 h-14 bg-primary-fixed/30 rounded-2xl flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-3xl" data-icon="child_care">child_care</span>
</div>
</div>
<!-- Stat Card 2 -->
<div class="bg-white p-6 rounded-[24px] shadow-[0_8px_20px_rgba(0,0,0,0.04)] border border-slate-50 flex items-center justify-between">
<div>
<p class="text-slate-400 font-label-md mb-1">Total Caregivers</p>
<h3 class="text-display-lg font-black text-on-surface">18</h3>
<p class="text-secondary text-label-sm flex items-center mt-2">
<span class="material-symbols-outlined text-sm mr-1" data-icon="check_circle">check_circle</span>
                            All currently on shift
                        </p>
</div>
<div class="w-14 h-14 bg-secondary-fixed/30 rounded-2xl flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-3xl" data-icon="supervisor_account">supervisor_account</span>
</div>
</div>
<!-- Stat Card 3 -->
<div class="bg-white p-6 rounded-[24px] shadow-[0_8px_20px_rgba(0,0,0,0.04)] border border-slate-50 flex items-center justify-between">
<div>
<p class="text-slate-400 font-label-md mb-1">Active Alerts</p>
<h3 class="text-display-lg font-black text-error">3</h3>
<p class="text-error text-label-sm flex items-center mt-2">
<span class="material-symbols-outlined text-sm mr-1" data-icon="warning">warning</span>
                            Requires immediate review
                        </p>
</div>
<div class="w-14 h-14 bg-error-container/50 rounded-2xl flex items-center justify-center text-error">
<span class="material-symbols-outlined text-3xl" data-icon="notification_important">notification_important</span>
</div>
</div>
</div>
<!-- Bento Layout Content -->
<div class="bento-grid">
<!-- Activity Overview Chart Placeholder -->
<div class="col-span-12 lg:col-span-8 bg-white p-8 rounded-[24px] shadow-[0_8px_20px_rgba(0,0,0,0.04)] border border-slate-50">
<div class="flex justify-between items-center mb-8">
<div>
<h4 class="text-headline-sm text-on-surface">Activity Overview</h4>
<p class="text-body-sm text-slate-400">Real-time interaction &amp; engagement levels</p>
</div>
<div class="flex bg-surface-container-low p-1 rounded-lg">
<button class="px-4 py-1 text-label-sm bg-white rounded-md shadow-sm">Weekly</button>
<button class="px-4 py-1 text-label-sm text-slate-400">Monthly</button>
</div>
</div>
<div class="h-[300px] w-full relative flex items-end justify-between px-4 pb-4">
<!-- Abstract Visualization of a Line Chart using CSS -->
<div class="absolute inset-0 flex items-center justify-center opacity-10">
<span class="material-symbols-outlined text-[120px]" data-icon="show_chart">show_chart</span>
</div>
<div class="w-[8%] bg-primary-fixed h-[40%] rounded-t-xl relative group">
<div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">42%</div>
</div>
<div class="w-[8%] bg-primary-fixed h-[65%] rounded-t-xl"></div>
<div class="w-[8%] bg-primary h-[85%] rounded-t-xl"></div>
<div class="w-[8%] bg-primary-fixed h-[55%] rounded-t-xl"></div>
<div class="w-[8%] bg-primary-fixed h-[70%] rounded-t-xl"></div>
<div class="w-[8%] bg-primary h-[95%] rounded-t-xl"></div>
<div class="w-[8%] bg-primary-fixed h-[60%] rounded-t-xl"></div>
<div class="w-[8%] bg-primary-fixed h-[45%] rounded-t-xl"></div>
<div class="w-[8%] bg-primary-fixed h-[35%] rounded-t-xl"></div>
<div class="w-[8%] bg-primary h-[75%] rounded-t-xl"></div>
<div class="w-[8%] bg-primary-fixed h-[50%] rounded-t-xl"></div>
</div>
<div class="flex justify-between mt-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest px-4">
<span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
</div>
</div>
<!-- Active Sessions/Mood Tracking -->
<div class="col-span-12 lg:col-span-4 bg-white p-8 rounded-[24px] shadow-[0_8px_20px_rgba(0,0,0,0.04)] border border-slate-50">
<h4 class="text-headline-sm text-on-surface mb-6">Mood Distribution</h4>
<div class="space-y-6">
<div class="space-y-2">
<div class="flex justify-between text-label-md">
<span class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-secondary"></span> Happy</span>
<span>68%</span>
</div>
<div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
<div class="h-full bg-secondary w-[68%]"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-label-md">
<span class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-tertiary-fixed-dim"></span> Calm</span>
<span>22%</span>
</div>
<div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
<div class="h-full bg-tertiary-fixed-dim w-[22%]"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-label-md">
<span class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-error"></span> Distressed</span>
<span>10%</span>
</div>
<div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
<div class="h-full bg-error w-[10%]"></div>
</div>
</div>
</div>
<div class="mt-10 p-4 bg-surface-container rounded-2xl flex items-center gap-4">
<div class="w-12 h-12 rounded-full overflow-hidden shrink-0">
<img alt="Featured child" class="w-full h-full object-cover" data-alt="A macro shot of a young child's joyful face with bright, sparkling eyes and a wide smile. The lighting is soft and warm, capturing a moment of pure happiness. The background is a gently blurred indoor playground with soft pastel colors, maintaining the professional and warm tone of the CERIA daycare interface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAs7kIWkN6rrPw3ukqnCYk44-i9LZeGJNUIrhKlQru50VWE0Y5qc_OQQDa2WYRkilBLYqeMsnEgHIR85t0nQvFrWpE4FmsTQcaHjaBVExHRq_eulHis-vBl5d7pCkKaRZlMEw2UASQso6URjL0SDlleQqi-aUUKAGWER9f48_s1H7WMqIcVnIflauqLXzKZgB2Er9WTaRgqMKYf35oJCZQPLnfWazj-kLMPGIHF5lzqY2GeKg_cD--DYaEmjbY6NTh2p72GTbPWj2Q"/>
</div>
<div>
<p class="text-label-sm text-slate-500 uppercase">Alert Summary</p>
<p class="text-body-sm font-semibold">Leo (Room 4) moved to "Safe" status after feeding.</p>
</div>
</div>
</div>
<!-- Latest Alerts Table -->
<div class="col-span-12 bg-white rounded-[24px] shadow-[0_8px_20px_rgba(0,0,0,0.04)] border border-slate-50 overflow-hidden">
<div class="px-8 py-6 border-b border-slate-50 flex justify-between items-center">
<h4 class="text-headline-sm text-on-surface">Latest 5 Alerts</h4>
<button class="text-primary text-label-md hover:underline">View All Records</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-slate-50/50">
<tr>
<th class="px-8 py-4 text-label-sm text-slate-500 uppercase tracking-widest">Child</th>
<th class="px-8 py-4 text-label-sm text-slate-500 uppercase tracking-widest">Event Type</th>
<th class="px-8 py-4 text-label-sm text-slate-500 uppercase tracking-widest">Time</th>
<th class="px-8 py-4 text-label-sm text-slate-500 uppercase tracking-widest">Caregiver</th>
<th class="px-8 py-4 text-label-sm text-slate-500 uppercase tracking-widest">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-50">
<tr class="hover:bg-slate-50/30 transition-colors">
<td class="px-8 py-5 flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary-fixed/20 flex items-center justify-center text-primary font-bold text-xs">EJ</div>
<span class="font-semibold text-body-sm">Ethan James</span>
</td>
<td class="px-8 py-5 text-body-sm">Crying detected (long duration)</td>
<td class="px-8 py-5 text-body-sm text-slate-400">10:42 AM</td>
<td class="px-8 py-5 text-body-sm">Maria S.</td>
<td class="px-8 py-5">
<span class="px-3 py-1 bg-error-container text-error text-[12px] font-bold rounded-full">Danger</span>
</td>
</tr>
<tr class="hover:bg-slate-50/30 transition-colors">
<td class="px-8 py-5 flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-fixed/20 flex items-center justify-center text-secondary font-bold text-xs">ML</div>
<span class="font-semibold text-body-sm">Mia Lopez</span>
</td>
<td class="px-8 py-5 text-body-sm">Sleep cycle finished</td>
<td class="px-8 py-5 text-body-sm text-slate-400">10:35 AM</td>
<td class="px-8 py-5 text-body-sm">Robert K.</td>
<td class="px-8 py-5">
<span class="px-3 py-1 bg-secondary-container text-on-secondary-container text-[12px] font-bold rounded-full">Safe</span>
</td>
</tr>
<tr class="hover:bg-slate-50/30 transition-colors">
<td class="px-8 py-5 flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-tertiary-fixed/20 flex items-center justify-center text-tertiary font-bold text-xs">OW</div>
<span class="font-semibold text-body-sm">Oliver White</span>
</td>
<td class="px-8 py-5 text-body-sm">Temperature spike detected</td>
<td class="px-8 py-5 text-body-sm text-slate-400">10:15 AM</td>
<td class="px-8 py-5 text-body-sm">Maria S.</td>
<td class="px-8 py-5">
<span class="px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed-variant text-[12px] font-bold rounded-full">Warning</span>
</td>
</tr>
<tr class="hover:bg-slate-50/30 transition-colors">
<td class="px-8 py-5 flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary-fixed/20 flex items-center justify-center text-primary font-bold text-xs">SC</div>
<span class="font-semibold text-body-sm">Sophia Chen</span>
</td>
<td class="px-8 py-5 text-body-sm">Check-in recorded</td>
<td class="px-8 py-5 text-body-sm text-slate-400">09:58 AM</td>
<td class="px-8 py-5 text-body-sm">Robert K.</td>
<td class="px-8 py-5">
<span class="px-3 py-1 bg-secondary-container text-on-secondary-container text-[12px] font-bold rounded-full">Safe</span>
</td>
</tr>
<tr class="hover:bg-slate-50/30 transition-colors">
<td class="px-8 py-5 flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-fixed/20 flex items-center justify-center text-secondary font-bold text-xs">LB</div>
<span class="font-semibold text-body-sm">Liam Brown</span>
</td>
<td class="px-8 py-5 text-body-sm">Unusual movement pattern</td>
<td class="px-8 py-5 text-body-sm text-slate-400">09:42 AM</td>
<td class="px-8 py-5 text-body-sm">Maria S.</td>
<td class="px-8 py-5">
<span class="px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed-variant text-[12px] font-bold rounded-full">Warning</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- Footer Shell -->
<footer class="flex flex-col md:flex-row justify-between items-center px-12 py-8 w-full bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800 mt-auto">
<div class="font-['Plus_Jakarta_Sans'] text-xs text-slate-400">
                © 2024 CERIA AI Childcare. Safe &amp; Transparent.
            </div>
<div class="flex gap-8 mt-4 md:mt-0">
<a class="font-['Plus_Jakarta_Sans'] text-xs text-slate-400 hover:text-sky-500 transition-colors" href="#">Privacy Policy</a>
<a class="font-['Plus_Jakarta_Sans'] text-xs text-slate-400 hover:text-sky-500 transition-colors" href="#">Terms of Service</a>
<a class="font-['Plus_Jakarta_Sans'] text-xs text-slate-400 hover:text-sky-500 transition-colors" href="#">Support</a>
</div>
</footer>
</main>
</body></html>