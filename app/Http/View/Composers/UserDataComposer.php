<?php

namespace App\Http\View\Composers;

use App\Models\Crypto;
use App\Models\Myplan;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserDataComposer
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $crypto = Crypto::where('name', 'bitcoin')->first();
        $plan = Plan::where('name', 'starter')->first();
        $myplan = Myplan::where('user_id', Auth::id())->where('status', 'active')->get();

        $view->with([
            'crypto' => $crypto,
            'plan' => $plan,
            'myplan' => $myplan,
        ]);
    }
}
