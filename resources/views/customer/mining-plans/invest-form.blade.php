@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-lg">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a href="{{ route('customer.mining-plans.index') }}"
                                    class="back-to"><em class="icon ni ni-arrow-left"></em><span>Back to plan</span></a></div>
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Ready to get started?</h2>
                            </div>
                        </div>
                    </div><!-- nk-block-head -->
                    <div class="nk-block invest-block">
                        <form action="{{ route('customer.mining-plans.invest_form_process', $plan->name) }}" method="POST"
                            class="invest-form">
                            @csrf
                            @error('amount')
                                <div class="alert alert-danger alert-icon alert-dismissible">
                                    <em class="icon ni ni-cross-circle"></em> <strong>{{ $message }}</strong> <button
                                        class="close" data-bs-dismiss="alert"></button>
                                </div>
                            @enderror
                            <div class="row g-gs">
                                <div class="col-12">
                                    <div class="invest-field form-group">
                                        <div class="invest-cc-chosen">
                                            <div class="coin-item">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-offer-fill"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name text-capitalize">{{ $plan->name }} plan</span>
                                                    <span class="coin-text">Invest for {{ $plan->tenure }} days and get
                                                        daily profit {{ $plan->daily_interest }}</span>
                                                </div>
                                            </div>
                                        </div><!-- .dropdown -->
                                    </div><!-- .invest-field -->
                                    <div class="invest-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Or Enter Your Amount</label>
                                        </div>
                                        <div class="form-control-group">
                                            <div class="form-info">USD</div>
                                            <input type="text" class="form-control form-control-amount form-control-lg"
                                                id="custom-amount" placeholder="Enter Amount" name="amount">
                                        </div>
                                        <div class="form-note pt-2">Note: Minimum invest ${{ $plan->min_deposit }} and upto
                                            ${{ $plan->max_deposit }}
                                        </div>
                                    </div><!-- .invest-field -->
                                    <div class="invest-field form-group">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <span>Continue</span>
                                            <em class="icon ni ni-arrow-right"></em>
                                        </button>
                                    </div><!-- .invest-field -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </form>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
