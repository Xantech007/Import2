<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Proengsoft\JsValidation\Facades\JsValidatorFacade;

class ProfileController extends Controller
{
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'nullable'
    ];

    // This returns view for profile
    public function index()
    {
        $user = Auth::user();
        $tranx = Transaction::where('user_id', Auth::id())->orderByDesc('id')->get();
        $validator = JsValidatorFacade::make($this->rules);
        return view('customer.profile.index', compact(['user', 'tranx', 'validator']));
    }

    // This updates user personal information
    public function update(Request $request)
    {
        $validated = Validator::make($request->all(), $this->rules);

        if ($validated->fails()) {
            return Response::json(
                array(
                    'status' => false,
                    'errors' => $validated->getMessageBag()->toArray()
                ),
                400
                //400 being the HTTP code for an invalid request.
            );
        }

        if ($validated->passes()) {
            $user = User::where('id', Auth::id())->first();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phone = $request['phone'];
            $user->save();

            return Response::json([
                'status' => true,
                'redirect_url' => route('customer.profile')
            ], 200);
        }
    }
}
