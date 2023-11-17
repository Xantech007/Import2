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
                                        <form action="{{ route('customer.withdraw.error') }}">
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