<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function dashboard() { return view('parent.dashboard'); }
    public function children()  { return view('parent.children'); }
    public function activity()  { return view('parent.activity'); }
    public function reports()   { return view('parent.reports'); }
    public function messages()  { return view('parent.messages'); }
}
