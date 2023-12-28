<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Crypto;
use App\Models\Currency;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use KingFlamez\Rave\Facades\Rave as Flutterwave;

class DepositController extends Controller
{
    // This returns view for deposit method
    public function index()
    {
        return view('customer.deposit.index');
    }

    // This returns view for cash deposit
    public function cash_index()
    {
        return view('customer.deposit.cash.index');
    }

    // This processes the card deposit
    public function cash_process(Request $request)
    {
        $rules = [
            'amount' => 'required'
        ];

        $messages = [
            'amount.required' => 'Please enter a valid amount'
        ];

        $validated = $request->validate($rules, $messages);

        /* Get users local currency @s*/
        $ip = '41.242.79.255';
        $geoData = geoip($ip);
        $currency = $geoData['currency'];
        /* @e */

        /* Match user's local currency to database data
        and store the returned currency's exchange rate
        in a "rate" variable */
        $cun = Currency::where('code', $currency)->first();
        if (!is_null($cun)) {
            $rate = $cun->exchange_rate;
        } else {
            $rate = 1;
        }
        /* @e */

        //This generates a payment reference
        $reference = Flutterwave::generateReference();

        /* Flutterwave integration @s */
        // Enter the details of the payment for Flutterwave payment gateway
        $data = [
            'payment_options' => 'card',
            'amount' => $validated['amount'] * $rate,
            'email' => Auth::user()->email,
            'tx_ref' => $reference,
            'currency' => $currency,
            'redirect_url' => route('customer.deposit.card-deposit.success'),
            'customer' => [
                'email' => Auth::user()->email,
                "phone_number" => Auth::user()?->phone,
                "name" => Auth::user()->name
            ],
        ];

        $payment = Flutterwave::initializePayment($data);
        /* @e */

        session()->put('amount', $validated['amount']);

        return redirect($payment['data']['link']);
    }

    // This returns view for cash deposit success
    public function cash_success()
    {
        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {

            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);

            $user = User::where('id', Auth::id())->first();
            $user->balance = $user->balance + session()->get('amount');

            $tranx = new Transaction();
            $tranx->user_id = Auth::id();
            $tranx->amount = session()->get('amount');
            $tranx->tranx_type = "card deposit";
            $tranx->save();
            
        } elseif ($status ==  'cancelled') {
            return redirect()
                ->back()
                ->with('warning', 'Transaction has been cancelled, please try again later');
        } else {
            return redirect()
                ->back()
                ->with('danger', 'Transaction failed');
        }

        return view('customer.deposit.cash.success');
    }

    // This returns view for crypto deposit
    public function crypto_index()
    {
        return view('customer.deposit.crypto.index');
    }

    // This returns view for crypto deposit success
    public function crypto_success()
    {
        $crypto = Crypto::where('name', session()->get('crypto'))->first();
        return view('customer.deposit.crypto.success', compact('crypto'));
    }
}
