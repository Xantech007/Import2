<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    // This returns view for deposit form
    public function index()
    {
        return view('customer.deposit.index');
    }

    // This returns view for deposit success
    public function success()
    {
        return view('customer.deposit.success');
    }
}
