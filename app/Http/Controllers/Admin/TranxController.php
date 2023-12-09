<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Crypto;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TranxController extends Controller
{
    // This returns view for transactions list
    public function index()
    {
        $tranx = Transaction::orderByDesc('id')->get();
        return view('admin.transactions.index', compact('tranx'));
    }

    public function approve($id)
    {
        $tranx = Transaction::find($id);
        $tranx->status = 'approved';
        $tranx->save();

        $crypto = Crypto::where('name', $tranx->crypto)->first();

        if($tranx->tranx_type == 'deposit'){
            $user = User::where('id', $tranx->user_id)->first();
            $user->balance = $user->balance + $tranx->value;
            $user->save();
        }

        if($tranx->tranx_type == 'withdrawal'){
            $user = User::where('id', $tranx->user_id)->first();
            $user->balance = $user->balance - $tranx->value;
            $user->save();
        }


        return redirect()->back();
    }

    public function decline($id)
    {
        $tranx = Transaction::find($id);
        $tranx->status = 'declined';
        $tranx->save();

        return redirect()->back();
    }

    public function detail($id)
    {
        $tranx = Transaction::find($id);
        return view('admin.transactions.detail', compact('tranx'));
    }
}
