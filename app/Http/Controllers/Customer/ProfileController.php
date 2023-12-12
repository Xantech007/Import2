<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public $p_rules;

    public function __construct()
    {
        $this->p_rules = [
            'current_password' => ['required', function ($field, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('Incorrect password');
                }
            }],
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required'
        ];
    }

    // This returns view for profile
    public function index()
    {
        $user = Auth::user();
        $tranx = Transaction::where('user_id', Auth::id())->orderByDesc('id')->get();
        $validator = JsValidatorFacade::make($this->rules);
        $validator2 = JsValidatorFacade::make($this->p_rules);
        return view('customer.profile.index', compact(['user', 'tranx', 'validator', 'validator2']));
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
                'redirect_url' => route('customer.profile.index')
            ], 200);
        }
    }

    public function change_password(Request $request)
    {
        $validated = Validator::make($request->all(), $this->p_rules);

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
            $user->password = Hash::make($request['password']);
            $user->save();

            return Response::json([
                'status' => true,
                'redirect_url' => route('customer.profile.index')
            ], 200);
        }
    }
}
