<form wire:submit.prevent='deposit'>
    <div class="card card-bordered h-100 w-100 p-4">

        {{-- Step 1 --}}
        @if ($currentStep == 1)
            <div class="row g-gs justify-content-center">
                <div class="col-md-7 col-sm-12">
                    <div class="card-inner">
                        <div class="form-group">
                            <label class="form-label">Select Crypto</label>
                            <div class="form-control-wrap">
                                <ul class="custom-control-group">
                                    <li>
                                        <div class="custom-control custom-control-sm custom-radio custom-control-pro">
                                            <input type="radio" class="custom-control-input" wire:model="crypto" id="btnRadio1" value="bitcoin" checked>
                                            <label class="custom-control-label" for="btnRadio1">Bitcoin</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-control-sm custom-radio custom-control-pro">
                                            <input type="radio" class="custom-control-input" wire:model="crypto" id="btnRadio5" value="ethereum">
                                            <label class="custom-control-label" for="btnRadio5">Ethereum</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-control-sm custom-radio custom-control-pro">
                                            <input type="radio" class="custom-control-input" wire:model="crypto" id="btnRadio6" value="tether">
                                            <label class="custom-control-label" for="btnRadio6">Tether</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @error('crypto')
                                <i class="text-danger">{{ $message }}</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="default-05">Amount</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg" id="default-05"
                                    wire:model='amount' placeholder="Enter Crypto Amount">
                            </div>
                            @error('amount')
                                <i class="text-danger">{{ $message }}</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone-no">Wallet Address</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg" id="phone-no"
                                    wire:model='address' placeholder="Enter Wallet Address">
                            </div>
                            @error('address')
                                <i class="text-danger">{{ $message }}</i>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Step 2 --}}
        @if ($currentStep == 2)
            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-12">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">Complete Your Deposit</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span>
                                    <h6 class="card-title">Wallet Addresses</h6>
                                </span>
                                <span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#tips">Tips</span>
                            </div>

                        </div>
                        <div class="shadow p-4">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">Bitcoin</div>
                                <div id="btc">yhskoo37jnnnskoa</div>
                                <div class="clipboard-init" data-clipboard-target="#btc" data-success="Copied"
                                    data-text="Copy">
                                    <em class="clipboard-icon icon ni ni-copy"></em>
                                    <span class="clipboard-text">Copy</span>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-4">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">Ethereum</div>
                                <div id="eth">yhskoo37jnnnskoa</div>
                                <div class="clipboard-init" data-clipboard-target="#eth" data-success="Copied"
                                    data-text="Copy">
                                    <em class="clipboard-icon icon ni ni-copy"></em>
                                    <span class="clipboard-text">Copy</span>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-4">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">Tether</div>
                                <div id="usdt">yhskoo37jnnnskoa</div>
                                <div class="clipboard-init" data-clipboard-target="#usdt" data-success="Copied"
                                    data-text="Copy">
                                    <em class="clipboard-icon icon ni ni-copy"></em>
                                    <span class="clipboard-text">Copy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Step 3 --}}
        @if ($currentStep == 3)
            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-12">
                    <div class="card-inner">
                        <div class="form-group">
                            <label class="form-label" for="default-05">Upload Proof</label>
                            <div class="form-control-wrap">
                                <input type="file" class="form-control form-control-file form-control-lg"
                                    id="default-05" wire:model='proof' value="{{ old('proof') }}">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endif
        <div class="row mt-3">
            @if ($currentStep == 1)
                <div class="col-6"></div>
            @endif
            @if ($currentStep == 2 || $currentStep == 3)
                <div class="col-6">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-lg"
                            wire:click="decreaseStep()">Back</button>
                    </div>
                </div>
            @endif
            @if ($currentStep == 1 || $currentStep == 2)
                <div class="col-6">
                    <div class="form-group float-end">
                        <button type="button" class="btn btn-lg btn-primary"
                            wire:click='increaseStep()'>Next</button>
                    </div>
                </div>
            @endif
            @if ($currentStep == 3)
                <div class="col-6">
                    <div class="form-group float-end">
                        <button type="submit" class="btn btn-lg btn-primary">Deposit</button>
                    </div>
                </div>
            @endif
        </div>
    </div>
</form>
