<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Crypto;
use App\Models\Myplan;
use App\Models\Plan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class MiningPlanController extends Controller
{
    public $plan;

    // This returns view for mining plans
    public function index()
    {
        $plan = Plan::all();
        return view('customer.mining-plans.index', compact(['plan']));
    }

    // This returns view for mining plans invest form
    public function invest_form($param)
    {
        $plan = Plan::where('name', $param)->first();
        return view('customer.mining-plans.invest-form', compact(['plan']));
    }


    // This returns view for mining plans invest success
    public function success($param)
    {
        $plan = Plan::where('name', $param)->first();
        return view('customer.mining-plans.success', compact('plan'));
    }

    // This processes the request sent
    public function invest_process(Request $request)
    {
        $rules = [
            'plan' => 'required'
        ];

        $message = [
            'plan.required' => 'Please Select An Investment Plan'
        ];

        $validated = $request->validate($rules, $message);

        $plan = Str::slug($validated['plan'], '-');

        return redirect()->route('customer.mining-plans.invest-form', $plan);
    }

    public function invest_form_process(Request $request, $param)
    {
        $this->plan = Plan::where('name', $param)->first();
        $rules = [
            'amount' => ['required', function ($field, $value, $fail) {
                if ($value < $this->plan->min_deposit) {
                    $fail('Minimum invest amount for this plan is $' . $this->plan->min_deposit);
                } elseif ($value > $this->plan->max_deposit) {
                    $fail('Maximum invest amount for this plan is $' . $this->plan->max_deposit);
                }
            }]
        ];

        $message = [
            'amount.required' => 'Please enter an amount'
        ];

        $validated = $request->validate($rules, $message);

        $daily_profit = $validated['amount'] * $this->plan->daily_interest / 100;

        $total_return = $validated['amount'] * $this->plan->total_return / 100;

        $now = Carbon::now()->toFormattedDateString();

        $end = Carbon::now()->addDays($this->plan->tenure)->toFormattedDateString();

        $commission = $validated['amount'] * 0.5 / 100;

        session()->put('amount', $validated['amount']);
        session()->put('daily_profit', $daily_profit);
        session()->put('total_return', $total_return);
        session()->put('now', $now);
        session()->put('end', $end);
        session()->put('commission', $commission);

        return redirect()->route('customer.mining-plans.confirm', [$param]);
    }

    public function confirm($param)
    {
        $plan = Plan::where('name', $param)->first();
        return view('customer.mining-plans.confirm', compact(['plan']));
    }

    public function confirm_process(Request $request)
    {

        $data = array(
            'user_id' => Auth::id(),
            'invest_id' => rand(00000, 99999),
            'plan_name' => $request->name,
            'invested_amount' => $request->invest_amount,
            'profit_earned' => $request->daily_interest,
            'daily_profit' => $request->daily_interest,
            'total_return' => $request->total_return,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'active',
            'tenure' => $request->tenure
        );

        Myplan::create($data);

        $user = User::where('id', Auth::id())->first();
        $user->balance = $user->balance - $request->invested_amount - session('commission');
        $user->save();

        $user = User::where('id', Auth::id())->first();
        $user->balance = $user->balance + $request->daily_interest;
        $user->save();

        return redirect()->route('customer.mining-plans.success', $request->name);
    }
}
