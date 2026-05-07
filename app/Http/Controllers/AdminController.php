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

    public function monitoring()
    {
        return view('admin.monitoring');
    }

    public function history()
    {
        return view('admin.history');
    }

    public function children()
    {
        return view('admin.children');
    }

    public function reports()
    {
        return view('admin.reports');
    }
}
