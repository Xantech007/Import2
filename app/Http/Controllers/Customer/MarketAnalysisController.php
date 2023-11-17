<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketAnalysisController extends Controller
{
    // This returns view for market analysis
    public function index()
    {
        return view('customer.market-analysis.index');
    }
}
