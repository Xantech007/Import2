@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a href="{{ route('customer.myplan.index') }}"
                                    class="text-soft back-to"><em class="icon ni ni-arrow-left"> </em><span>My
                                        Plans</span></a></div>
                            <div class="nk-block-between-md g-4">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">{{ Str::ucfirst($plan->plan_name) }} - Daily $
                                        {{ $plan->daily_profit }} for {{ $plan->tenure }} Days</h2>
                                    <div class="nk-block-des">
                                        <p>INV-{{ $plan->invest_id }} <span
                                                class="badge bg-outline bg-success">Active</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="row gy-gs">
                                    <div class="col-md-6">
                                        <div class="nk-iv-wg3">
                                            <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                                                <div class="nk-iv-wg3-sub">
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number">$ {{ number_format($plan->invested_amount) }}
                                                        </div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">Invested Amount</div>
                                                </div>
                                                <div class="nk-iv-wg3-sub">
                                                    <span class="nk-iv-wg3-plus text-soft"><em
                                                            class="icon ni ni-plus"></em></span>
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number">$ {{ number_format($plan->profit_earned, 2) }}
                                                        </div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">Profit Earned</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-6 col-lg-4 offset-lg-2">
                                        <div class="nk-iv-wg3 ps-md-3">
                                            <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                                                <div class="nk-iv-wg3-sub">
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number">$ {{ number_format($plan->total_return) }}</div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">Total Expected Return</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div>
                            <div id="schemeDetails" class="nk-iv-scheme-details">
                                <ul class="nk-iv-wg3-list">
                                    <li>
                                        <div class="sub-text">Term</div>
                                        <div class="lead-text">{{ $plan->tenure }} Days</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Daily profit</div>
                                        <div class="lead-text">$ {{ number_format($plan->daily_profit, 2) }}</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Total return</div>
                                        <div class="lead-text"><span class="currency currency-usd">USD</span>
                                            {{ number_format($plan->total_return, 2) }}</div>
                                    </li>
                                </ul><!-- .nk-iv-wg3-list -->
                                <ul class="nk-iv-wg3-list">
                                    <li>
                                        <div class="sub-text">Plan start at</div>
                                        <div class="lead-text">{{ $plan->start_date }}</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Captial invested</div>
                                        <div class="lead-text"><span class="currency currency-usd">USD</span>
                                            {{ number_format($plan->invested_amount, 2) }}</div>
                                    </li>
                                </ul><!-- .nk-iv-wg3-list -->
                                <ul class="nk-iv-wg3-list">
                                    <li>
                                        <div class="sub-text">Plan end at</div>
                                        <div class="lead-text">{{ $plan->end_date }}</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Net profit</div>
                                        <div class="lead-text"><span class="currency currency-usd">USD</span>
                                            {{ number_format($plan->total_return - $plan->invested_amount, 2) }}</div>
                                    </li>
                                </ul><!-- .nk-iv-wg3-list -->
                            </div><!-- .nk-iv-scheme-details -->
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
