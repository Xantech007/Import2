<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // This returns view for dashboard
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
