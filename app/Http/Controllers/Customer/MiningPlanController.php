<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MiningPlanController extends Controller
{
    // This returns view for mining plans
    public function index()
    {
        return view('customer.mining-plans.index');
    }

    // This returns view for mining plans invest form
    public function invest_form()
    {
        return view('customer.mining-plans.invest-form');
    }

    // This returns view for mining plans invest success
    public function success()
    {
        return view('customer.mining-plans.success');
    }
}
