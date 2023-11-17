<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActiveplanController extends Controller
{
    // This returns view for active plans list
    public function index()
    {
        return view('admin.active plans.index');
    }

    // This returns view for active plan details
    public function detail()
    {
        return view('admin.active plans.detail');
    }
}
