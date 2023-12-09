@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head text-center">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Crypto Withdrawal</h2>
                                <div class="nk-block-des">
                                    <p>Withdraw your crypto and enjoy your earnings.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- nk-block -->
                    <div class="nk-block">
                        <div class="row g-gs justify-content-center">
                            <div class="col-md-7 col-sm-12">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <form action="{{ route('customer.withdraw.process') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label class="form-label">Select Crypto</label>
                                                <div class="form-control-wrap">
                                                    <select name="crypto" class="form-select js-select2 select2-hidden-accessible"
                                                        data-ui="xl" data-placeholder="Choose A Conversion Crypto" data-search="on">
                                                        <option value="">Select a cryptocurrency to deposit</option>
                                                        @foreach ($crypto as $c)
                                                        <option value="{{ $c->name }}">{{ Str::ucfirst($c->name) }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('crypto')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label class="form-label" for="default-05">Amount</label>
                                                </div>
                                                <div class="form-control-group">
                                                    <div class="form-info">USD</div>
                                                    <input type="text" name="amount" class="form-control form-control-xl"
                                                        id="default-05" placeholder="Enter Amount" value="{{ old('name') }}">
                                                </div>
                                                <div class="form-note">Withdrawal Threshold: $ 200</div>
                                                @error('amount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no">Wallet Address</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="address" class="form-control form-control-xl"
                                                        id="phone-no" placeholder="Enter Wallet Address" value="{{ old('address') }}">
                                                </div>
                                                @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Withdraw</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection