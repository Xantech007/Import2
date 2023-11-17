<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // This returns view for dashboard
    public function index()
    {
        return view('customer.dashboard.index');
    }
}
