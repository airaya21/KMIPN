<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function caregivers()
    {
        // Get all caregivers
        $caregivers = User::where('role', 'caregiver')->get();
        return view('admin.caregivers', compact('caregivers'));
    }

    public function children()
    {
        return view('admin.children');
    }

    public function reports()
    {
        return view('admin.reports');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
