<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CryptosMiningPlansController extends Controller
{
    // This returns view for cryptos and mining plans list
    public function index()
    {
        return view('admin.cryptos & mining plans.index');
    }

    // This returns form for crypto and mining plan addition
    public function add()
    {
        return view('admin.cryptos & mining plans.add');
    }

    // This returns form for crypto and mining plan update
    public function edit()
    {
        return view('admin.cryptos & mining plans.edit');
    }
}
