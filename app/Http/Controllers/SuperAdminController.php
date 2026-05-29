<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        return view('superadmin.dashboard');
    }

    public function daycares()
    {
        return view('superadmin.daycares');
    }

    public function verifications()
    {
        return view('superadmin.verifications');
    }

    public function suspended()
    {
        return view('superadmin.suspended');
    }

    public function liveAlerts()
    {
        return view('superadmin.live-alerts');
    }

    public function aiMonitoring()
    {
        return view('superadmin.ai-monitoring');
    }

    public function emergencyCenter()
    {
        return view('superadmin.emergency-center');
    }

    public function parentReports()
    {
        return view('superadmin.parent-reports');
    }

    public function investigations()
    {
        return view('superadmin.investigations');
    }

    public function parents()
    {
        return view('superadmin.parents');
    }

    public function caregivers()
    {
        return view('superadmin.caregivers');
    }

    public function admins()
    {
        return view('superadmin.admins');
    }

    public function safetyScore()
    {
        return view('superadmin.safety-score');
    }

    public function alertTrends()
    {
        return view('superadmin.alert-trends');
    }

    public function reports()
    {
        return view('superadmin.reports');
    }

    public function subscriptions()
    {
        return view('superadmin.subscriptions');
    }
}