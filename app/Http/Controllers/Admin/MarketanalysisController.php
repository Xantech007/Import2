<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketanalysisController extends Controller
{
    // This returns view for market analysis
    public function index()
    {
        return view('admin.market analysis.index');
    }
}
