<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyplanController extends Controller
{
    //This returns view for my plans
    public function index()
    {
        return view('customer.myplan.index');
    }

    // This returns view for my plans details
    public function detail()
    {
        return view('customer.myplan.detail');
    }
}
