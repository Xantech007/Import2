<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Myplan;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // This returns view for dashboard
    public function index()
    {
        $plan = Myplan::where('user_id', Auth::id())->where('status', 'active')->orderByDesc('id')->get();
        return view('customer.dashboard.index', compact(['plan']));
    }
}
