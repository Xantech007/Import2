<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // This returns view for users list
    public function index()
    {
        return view('admin.users.index');
    }

    // This returns view for user details
    public function detail()
    {
        return view('admin.users.detail');
    }
}
