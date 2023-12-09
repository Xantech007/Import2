<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Myplan;
use Illuminate\Http\Request;

class ActiveplanController extends Controller
{
    // This returns view for active plans list
    public function index()
    {
        $plan = Myplan::where('status', 'active')->orderByDesc('id')->get();
        return view('admin.active plans.index', compact(['plan']));
    }

    // This returns view for active plan details
    public function detail($id)
    {
        $plan = Myplan::find($id);
        return view('admin.active plans.detail', compact('plan'));
    }
}
