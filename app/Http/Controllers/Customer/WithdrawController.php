<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Crypto;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    // This returns view for withdraw form
    public function index()
    {
        $crypto = Crypto::all();
        return view('customer.withdraw.index', compact('crypto'));
    }

    // This processes the withdrawal form
    public function withdraw(Request $request)
    {
        $rules = [
            'crypto' => 'required',
            'amount' => ['required', function ($field, $value, $fail) {
                if ($value > Auth::user()->balance) {
                    $fail('Insufficient Account Balance');
                } elseif (Auth::user()->balance < 200) {
                    $fail('Balance Is Below The Withdrawal Threshold');
                }
            }],
            'address' => 'required'
        ];

        $messages = [
            'crypto.required' => 'Select A Crypto For Conversion',
            'amount.required' => 'Enter An Amount',
            'address.required' => 'Enter Crypto Wallet Address'
        ];

        $validated = $request->validate($rules, $messages);
        $crypto = Crypto::where('name', $validated['crypto'])->first();

        $data = [
            'user_id' => Auth::id(),
            'crypto' => $validated['crypto'],
            'abbr' => $crypto->abbr,
            'amount' => $crypto->value / $validated['amount'],
            'address' => $validated['address'],
            'tranx_type' => 'withdrawal',
            'value' => $validated['amount'],
            'status' => 'pending'
        ];

        Transaction::create($data);

        session()->put('tranx', [
            'amount' => $crypto->value / $validated['amount'],
            'value' => $validated['amount'],
            'abbr' =>  $crypto->abbr,
        ]);

        return redirect()->route('customer.withdraw.success');
    }

    // This returns view for withdraw success
    public function success()
    {
        $tranx = session('tranx');
        return view('customer.withdraw.success', compact('tranx'));
    }

    public function error()
    {
        return view('customer.withdraw.error');
    }
}
