@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head text-center">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Deposit Method</h2>
                                <div class="nk-block-des">
                                    <p>Choose a payment method below.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- nk-block -->
                    <div class="nk-block">
                        <div class="card card-bordered h-100 w-100 p-4">
                            <div class="row g-4">
                                <div class="col-md-6 col-sm-12">
                                    <a href="{{ route('customer.deposit.card-deposit.index') }}">
                                        <div class="card card-bordered h-100 p-4 choose">
                                            <div class="text-center">
                                                <img src="{{ asset('images/icons/card-debit.svg') }}" alt=""
                                                    width="200">
                                            </div>
                                            <div class="text-center mt-2">
                                                <h4 style="font-family: Cambria;">Debit Card</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <a href="{{ route('customer.deposit.crypto-deposit.index') }}">
                                        <div class="card card-bordered h-100 p-4 choose">
                                            <div class="text-center">
                                                <img src="{{ asset('images/coins/eth.svg') }}" alt=""
                                                    width="190">
                                            </div>
                                            <div class="text-center mt-4">
                                                <h4 style="font-family: Cambria;">Cryptocurrency</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
