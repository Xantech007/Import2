<?php

namespace App\Livewire;

use App\Models\Crypto;
use App\Models\Deposit as ModelsDeposit;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Deposit extends Component
{

    use WithFileUploads;

    public $crypto;
    public $amount;
    public $address;
    public $proof;

    public $totalSteps = 3;
    public $currentStep = 1;


    public function mount()
    {
        $this->currentStep = 1;
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function validateData()
    {

        if ($this->currentStep == 1) {
            $this->validate([
                'crypto' => 'required',
                'amount' => 'required|integer',
                'address' => 'required',
            ]);
        } elseif ($this->currentStep == 2) {
        }
    }

    public function deposit()
    {
        $this->resetErrorBag();
        if ($this->currentStep == 3) {
            $this->validate([
                'proof' => 'required|max:1024'
            ]);
        }

        $path = Storage::disk('mydisk')->put('proofs', $this->proof);
        $crypto = Crypto::where('name', $this->crypto)->first();

        if ($path) {
            $values = array(
                'user_id' => Auth::id(),
                'crypto' => $this->crypto,
                'amount' => $this->amount,
                'value' => $this->amount * $crypto->value,
                'address' => $this->address,
                'tranx_type' => 'deposit',
                'abbr' => $crypto->abbr,
                'proof' => $path,
            );

            Transaction::create($values);

            $user = User::where('id', Auth::id())->first();
            $user->balance = $user->balance + $this->amount * $crypto->value;
            $user->save();

            session()->put('amount', $this->amount);
            session()->put('crypto', $this->crypto);
            //   $this->reset();
            //   $this->currentStep = 1;
            return redirect()->route('customer.deposit.crypto-deposit.success');
        }
    }

    public function render()
    {
        return view('livewire.deposit');
    }
}
