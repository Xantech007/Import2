<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Crypto;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CryptosMiningPlansController extends Controller
{
    // This returns view for cryptos and mining plans list
    public function index()
    {
        $plan = Plan::all();
        $crypto = Crypto::all();
        return view('admin.cryptos & mining plans.index', compact(['plan', 'crypto']));
    }

    // This returns form for crypto and mining plan addition
    public function add($name)
    {
        return view('admin.cryptos & mining plans.add', compact('name'));
    }

    // This returns form for crypto and mining plan update
    public function edit($id, $name)
    {
        if ($name == "plan") {
            $plan = Plan::find($id);
        } elseif ($name == "crypto") {
            $plan = Crypto::find($id);
        }
        return view('admin.cryptos & mining plans.edit', compact(['plan', 'name']));
    }

    public function add_process(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'daily_interest' => 'required',
            'tenure' => 'required',
            'min_deposit' =>  'required',
            'max_deposit' => 'required',
            'total_return' => 'required'
        ];

        $validated = $request->validate($rules);

        $data = [
            'name' => $validated['name'],
            'daily_interest' => $validated['daily_interest'],
            'tenure' => $validated['tenure'],
            'min_deposit' => $validated['min_deposit'],
            'max_deposit' => $validated['max_deposit'],
            'deposit_return' => 'Yes',
            'total_return' => $validated['total_return'],
        ];

        Plan::create($data);

        return redirect()->route('admin.cmp.index');
    }

    public function edit_process(Request $request, $id)
    {
        $rules = [
            'name' => 'required|string',
            'daily_interest' => 'required',
            'tenure' => 'required',
            'min_deposit' =>  'required',
            'max_deposit' => 'required',
            'total_return' => 'required'
        ];

        $validated = $request->validate($rules);

        $data = [
            'name' => $validated['name'],
            'daily_interest' => $validated['daily_interest'],
            'tenure' => $validated['tenure'],
            'min_deposit' => $validated['min_deposit'],
            'max_deposit' => $validated['max_deposit'],
            'deposit_return' => 'Yes',
            'total_return' => $validated['total_return'],
        ];

        Plan::find($id)->update($data);

        return redirect()->route('admin.cmp.index');
    }

    public function add_crypto(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'abbr' => 'required',
            'value' => 'required',
            'address' =>  'required',
            'img' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->has('img')) {
            $path = Storage::disk('mydisk')->put('crypto', $request->img);
        }

        $data = [
            'name' => $validated['name'],
            'abbr' => $validated['abbr'],
            'value' => $validated['value'],
            'address' => $validated['address'],
            'img' => $path,
        ];

        Crypto::create($data);

        return redirect()->route('admin.cmp.index');
    }

    public function edit_crypto(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'abbr' => 'required',
            'value' => 'required',
            'address' => 'required'
        ];

        $validated = $request->validate($rules);

        $crypto = Crypto::find($id);
        $crypto->name = $validated['name'];
        $crypto->abbr = $validated['abbr'];
        $crypto->value = $validated['value'];
        $crypto->address = $validated['address'];

        if ($request->has('img') && !is_null($request->img)) {
            $path = Storage::disk('mydisk')->put('crypto', $request->img);
            $crypto->img = $path;
        }

        $crypto->save();

        return redirect()->route('admin.cmp.index');
    }
}
