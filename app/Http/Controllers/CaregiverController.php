<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaregiverController extends Controller
{
    public function dashboard() { return view('caregiver.dashboard'); }
    public function children()  { return view('caregiver.children'); }
    public function activity()  { return view('caregiver.activity'); }
    public function schedule()  { return view('caregiver.schedule'); }
    public function reports()   { return view('caregiver.reports'); }
}
