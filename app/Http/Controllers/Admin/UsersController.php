<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Myplan;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    // This returns view for users list
    public function index()
    {
        $users = User::where('email', '!=', 'admin@admin.com')->orderBy('name')->get();
        return view('admin.users.index', compact('users'));
    }

    // This returns view for user details
    public function detail($id)
    {
        $user = User::find($id);
        $tranx = Transaction::where('user_id', $user->id)->get();
        $plan = Myplan::where('user_id', $user->id)->where('status', 'active')->get();
        return view('admin.users.detail', compact(['user', 'tranx', 'plan']));
    }
}
