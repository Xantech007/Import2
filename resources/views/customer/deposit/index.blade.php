@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head text-center">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Crypto Deposit</h2>
                                <div class="nk-block-des">
                                    <p>Deposit a cryptocurrency and start investing.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- nk-block -->
                    <div class="nk-block">
                        <div class="row g-gs justify-content-center">
                            <div class="col-md-7 col-sm-12">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <form action="#">
                                            <div class="form-group">
                                                <label class="form-label">Select Crypto</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2 select2-hidden-accessible"
                                                        data-ui="lg" data-placeholder="Choose A Crypto">
                                                        <option value="">Select a cryptocurrency to deposit</option>
                                                        <option value="bitcoin">Bitcoin</option>
                                                        <option value="etherum">Etherum</option>
                                                        <option value="tether">Tether</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="default-05">Amount</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-text-hint">
                                                        <span class="overline-title">BTC</span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="default-05" placeholder="Enter Crypto Amount">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no">Wallet Address</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="phone-no" placeholder="Enter Wallet Address">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Deposit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- nk-block -->
                    <div class="nk-block">
                        <div class="row g-gs justify-content-center">
                            <div class="col-md-7 col-sm-12">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h5 class="card-title">Complete Your Deposit</h5>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title">Wallet Addresses</h6>
                                        </div>
                                        <div class="shadow p-3">
                                            <div class="d-flex justify-content-between">
                                                <div class="card-text">Bitcoin</div>
                                                <div id="btc">yhskoo37jnnnskoa</div>
                                                <div class="clipboard-init" data-clipboard-target="#btc"
                                                    data-success="Copied" data-text="Copy">
                                                    <em class="clipboard-icon icon ni ni-copy"></em>
                                                    <span class="clipboard-text">Copy</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shadow p-3">
                                            <div class="d-flex justify-content-between">
                                                <div class="card-text">Ethereum</div>
                                                <div id="eth">yhskoo37jnnnskoa</div>
                                                <div class="clipboard-init" data-clipboard-target="#eth"
                                                    data-success="Copied" data-text="Copy">
                                                    <em class="clipboard-icon icon ni ni-copy"></em>
                                                    <span class="clipboard-text">Copy</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body mt-3">
                                            <h6 class="card-title">Tips</h6>
                                        </div>
                                        <ul class=" list-group">
                                            <li class=" list-group-item">Copy the address of the crypto you want to deposit.
                                            </li>
                                            <li class=" list-group-item">Use a Crypto Wallet to deposit the specified amount
                                                to the address.</li>
                                            <li class=" list-group-item">Click the "I Have Paid" button below.</li>
                                            <li class=" list-group-item">We will review your deposit. Once it is approved,
                                                it will be added to your balance.</li>
                                        </ul>
                                        <div class="text-center mt-3">
                                            <a href="{{ route('customer.deposit.success') }}"
                                                class="btn btn-primary btn-block btn-lg">I Have Paid</a>
                                        </div>
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
