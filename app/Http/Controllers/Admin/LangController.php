<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LangController extends Controller
{
    // This returns view for languages list
    public function index()
    {
        return view('admin.lang.index');
    }

    // This returns view for language update
    public function edit()
    {
        return view('admin.lang.edit');
    }
}
