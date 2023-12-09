@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-lg">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a href="{{ route('customer.mining-plans.index') }}"
                                    class="back-to"><em class="icon ni ni-arrow-left"></em><span>Back to investment
                                        form</span></a></div>
                        </div>
                    </div><!-- nk-block-head -->
                    <div class="nk-block invest-block">
                        <form action="{{ route('customer.mining-plans.confirm-process') }}" method="POST" class="invest-form">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-12">
                                    <div class="card card-bordered ms-lg-4 ms-xl-0">
                                        <div class="nk-iv-wg4">
                                            <div class="nk-iv-wg4-sub">
                                                <h6 class="nk-iv-wg4-title title">Your Investment Details</h6>
                                                <ul class="nk-iv-wg4-overview g-2">
                                                    <li>
                                                        <div class="sub-text">Name of plan</div>
                                                        <div class="lead-text text-capitalize">{{ $plan->name }} plan</div>
                                                        <input type="hidden" name="name" value="{{ $plan->name }}">
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Term of the plan</div>
                                                        <div class="lead-text">{{ $plan->tenure }} days</div>
                                                        <input type="hidden" name="tenure" value="{{ $plan->tenure }}">
                                                        
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Daily profit</div>
                                                        <div class="lead-text">${{ session()->get('daily_profit') }}</div>
                                                        <input type="hidden" name="daily_interest" value="{{ session()->get('daily_profit') }}">
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Daily profit %</div>
                                                        <div class="lead-text">{{ $plan->daily_interest }}%</div>
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Total return</div>
                                                        <div class="lead-text">${{ session()->get('total_return') }}</div>
                                                        <input type="hidden" name="total_return" value="{{ session()->get('total_return') }}">
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Total return %</div>
                                                        <div class="lead-text">{{ $plan->total_return }}%</div>
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Term start at</div>
                                                        <div class="lead-text">Today ({{ session('now') }})</div>
                                                        <input type="hidden" name="start_date" value="{{ session('now') }}">
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Term end at</div>
                                                        <div class="lead-text">{{ session('end') }}</div>
                                                        <input type="hidden" name="end_date" value="{{ session('end') }}">
                                                    </li>
                                                </ul>
                                            </div><!-- .nk-iv-wg4-sub -->
                                            <div class="nk-iv-wg4-sub">
                                                <ul class="nk-iv-wg4-list">
                                                    <li>
                                                        <div class="sub-text">Amount to invest</div>
                                                        <div class="lead-text">${{ session('amount') }}</div>
                                                        <input type="hidden" name="invest_amount" value="{{ session('amount') }}">
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Commission Fee <span>(0.5%)</span></div>
                                                        <div class="lead-text">${{ session('commission') }}</div>
                                                    </li>
                                                </ul>
                                            </div><!-- .nk-iv-wg4-sub -->
                                            <div class="nk-iv-wg4-sub">
                                                <ul class="nk-iv-wg4-list">
                                                    <li>
                                                        <div class="lead-text">Total Charge</div>
                                                        <div class="caption-text text-primary">${{ session('amount') + session('commission') }}</div>
                                                    </li>
                                                </ul>
                                            </div><!-- .nk-iv-wg4-sub -->
                                            <div class="nk-iv-wg4-sub text-center bg-lighter">
                                                <button type="submit" class="btn btn-lg btn-primary"
                                                    >Confirm &amp; invest</button>
                                            </div><!-- .nk-iv-wg4-sub -->
                                        </div><!-- .nk-iv-wg4 -->
                                    </div><!-- .card -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </form>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
