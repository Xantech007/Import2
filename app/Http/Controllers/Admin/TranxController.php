<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TranxController extends Controller
{
    // This returns view for transactions list
    public function index()
    {
        return view('admin.transactions.index');
    }
}
