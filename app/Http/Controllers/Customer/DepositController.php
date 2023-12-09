<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Crypto;
use Illuminate\Http\Request;
use BayAreaWebPro\MultiStepForms\MultiStepForm as Form;

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
        $crypto = Crypto::where('name', session()->get('crypto'))->first();
        return view('customer.deposit.success', compact('crypto'));
    }

}
