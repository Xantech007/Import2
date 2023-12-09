<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Myplan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyplanController extends Controller
{
    //This returns view for my plans
    public function index()
    {
        $plan = Myplan::where('user_id', Auth::id())->where('status', 'active')->orderByDesc('id')->get();
        $ex_plan = Myplan::where('user_id', Auth::id())->where('status', 'complete')->orderByDesc('id')->get();
        return view('customer.myplan.index', compact(['plan', 'ex_plan']));
    }

    // This returns view for my plans details
    public function detail($id)
    {
        $plan = Myplan::find($id);
        return view('customer.myplan.detail', compact('plan'));
    }
}
