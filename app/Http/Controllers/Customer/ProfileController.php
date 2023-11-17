<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // This returns view for profile
    public function index()
    {
        return view('customer.profile.index');
    }
}
