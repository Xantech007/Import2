@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head text-center">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><span>Choose an Option</span></div>
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Investment Plans</h2>
                                <div class="nk-block-des">
                                    <p>Choose your mining plan and start earning.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- nk-block -->
                    <div class="nk-block">
                        <form action="{{ route('customer.mining-plans.invest_plan') }}" method="POST" class="plan-iv">
                            @csrf
                            <div class="row g-3">
                                @error('plan')
                                <div class="col-12">
                                    <div class="alert alert-danger alert-icon alert-dismissible">
                                        <em class="icon ni ni-cross-circle"></em> <strong>{{ $message }}</strong> <button class="close" data-bs-dismiss="alert"></button>
                                    </div>
                                </div>
                                @enderror
                            </div>
                            <div class="plan-iv-list nk-slider nk-slider-s2">
                                <ul class="plan-list slider-init"
                                    data-slick='{"slidesToShow": 3, 
                                    "slidesToScroll": 1, 
                                    "infinite":false, 
                                    "responsive":[
                                    {"breakpoint": 992,
                                    "settings":{"slidesToShow": 2}},
                                    {"breakpoint": 768,
                                    "settings":{"slidesToShow": 1}}
                                ]}'>
                                    @foreach ($plan as $p)
                                        <li class="plan-item">
                                            <input type="radio" id="{{ $p->name }}" value="{{ $p->name }}" name="plan"
                                                class="plan-control" @if ($p->name == 'starter')
                                                    checked
                                                @endif>
                                            <div class="plan-item-card">
                                                <div class="plan-item-head">
                                                    <div class="plan-item-heading">
                                                        <h4 class="plan-item-title card-title title text-capitalize">{{ $p->name }}
                                                        </h4>
                                                    </div>
                                                    <div class="plan-item-summary card-text">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="lead-text">{{ $p->daily_interest }}</span>
                                                                <span class="sub-text">Daily Interest</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="lead-text">{{ $p->tenure }}</span>
                                                                <span class="sub-text">Term Days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="plan-item-body">
                                                    <div class="plan-item-desc card-text">
                                                        <ul class="plan-item-desc-list">
                                                            <li><span class="desc-label">Min Deposit</span> - <span
                                                                    class="desc-data">${{ $p->min_deposit }}</span></li>
                                                            <li><span class="desc-label">Max Deposit</span> - <span
                                                                    class="desc-data">${{ $p->max_deposit }}</span></li>
                                                            <li><span class="desc-label">Deposit Return</span> - <span
                                                                    class="desc-data">Yes</span></li>
                                                            <li><span class="desc-label">Total Return</span> - <span
                                                                    class="desc-data">{{ $p->total_return }}%</span></li>
                                                        </ul>
                                                        <div class="plan-item-action">
                                                            <label for="{{ $p->name }}" class="plan-label">
                                                                <span class="plan-label-base">Choose this plan</span>
                                                                <span class="plan-label-selected">Plan Selected</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- .plan-item -->
                                    @endforeach
                                </ul><!-- .plan-list -->
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <span>Continue to Invest</span>
                                    <em class="icon ni ni-arrow-right"></em>
                                </button>
                            </div>
                        </form>
                    </div><!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
