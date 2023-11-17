<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    // This returns view for withdraw form
    public function index()
    {
        return view('customer.withdraw.index');
    }

    // This returns view for withdraw server error
    public function error()
    {
        return view('customer.withdraw.success');
    }
}
