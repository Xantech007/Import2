@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-between-md g-3">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><span>Welcome!</span></div>
                                <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                    <div>
                                        <h2 class="nk-block-title fw-normal text-capitalize">{{ Auth::user()->name }}</h2>
                                    </div>
                                    <div><a href="{{ route('customer.myplan.index') }}" class="btn btn-white btn-light">My
                                            Plans <em class="icon ni ni-arrow-long-right ms-2"></em></a></div>
                                </div>
                                <div class="nk-block-des">
                                    <p>At a glance summary of your investment account. Have fun!</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content d-none d-md-block">
                                <div class="nk-slider nk-slider-s1">
                                    <div class="slider-init" data-slick='{"dots": true, "arrows": false, "fade": true}'>
                                        @foreach ($plan as $p)
                                            <div class="slider-item">
                                                <div class="nk-iv-wg1">
                                                    <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                                    <h6 class="nk-iv-wg1-info title">{{ Str::ucfirst($p->plan_name) }} - $
                                                        {{ number_format($p->daily_profit, 2) }} for {{ $p->tenure }}
                                                        Days</h6>
                                                    <a href="{{ route('customer.myplan.detail', $p->id) }}"
                                                        class="nk-iv-wg1-link link link-light"><em
                                                            class="icon ni ni-trend-up"></em> <span>Check
                                                            Details</span></a>
                                                    <div class="nk-iv-wg1-progress">
                                                        <div class="progress-bar bg-primary"
                                                            data-progress="{{ ($p->profit_earned / $p->total_return) * 100 }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .slider-item -->
                                        @endforeach
                                    </div>
                                    <div class="slider-dots"></div>
                                </div><!-- .nk-slider -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row gy-gs">
                            <div class="col-12">
                                <div class="nk-wg-card is-dark card card-bordered">
                                    <div class="card-inner">
                                        <div class="nk-iv-wg2">
                                            <div class="nk-iv-wg2-title">
                                                <h6 class="title">Available Balance In USD</h6>
                                            </div>
                                            <div class="nk-iv-wg2-text">
                                                <div class="nk-iv-wg2-amount">
                                                    <span>{{ number_format(Auth::user()->balance, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                    <div class="nk-block">
                        <div class="row gy-gs">
                            <div class="col-md-6 col-lg-6">
                                <div class="nk-wg-card card card-bordered h-100">
                                    <div class="card-inner h-100">
                                        <div class="nk-iv-wg2">
                                            <div class="nk-iv-wg2-title">
                                                <h6 class="title">Balance in Account</h6>
                                            </div>
                                            <div class="nk-iv-wg2-text">
                                                <div class="nk-iv-wg2-amount ui-v2">$
                                                    {{ number_format(Auth::user()->balance + $plan->sum('invested_amount'), 2) }}
                                                </div>
                                                <ul class="nk-iv-wg2-list">
                                                    <li>
                                                        <span class="item-label">Available Funds</span>
                                                        <span class="item-value">$
                                                            {{ number_format(Auth::user()->balance, 2) }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="item-label">Invested Funds</span>
                                                        <span class="item-value">$
                                                            {{ number_format($plan->sum('invested_amount'), 2) }}</span>
                                                    </li>
                                                    <li class="total">
                                                        <span class="item-label">Total</span>
                                                        <span class="item-value">$
                                                            {{ number_format(Auth::user()->balance + $plan->sum('invested_amount'), 2) }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-iv-wg2-cta">
                                                <a href="{{ route('customer.withdraw.index') }}"
                                                    class="btn btn-primary btn-lg btn-block">Withdraw
                                                    Funds</a>
                                                <a href="{{ route('customer.deposit.index') }}"
                                                    class="btn btn-light btn-lg btn-block mt-2">Deposit
                                                    Funds</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-12 col-lg-6">
                                <div class="nk-wg-card card card-bordered h-100">
                                    <div class="card-inner h-100">
                                        <div class="nk-iv-wg2">
                                            <div class="nk-iv-wg2-title">
                                                <h6 class="title">My Investment</h6>
                                            </div>
                                            <div class="nk-iv-wg2-text">
                                                <div class="nk-iv-wg2-amount ui-v2">{{ $plan->count() }}
                                                    Active</div>
                                                <ul class="nk-iv-wg2-list">
                                                    @foreach ($plan as $p)
                                                        <li>
                                                            <span class="item-label text-capitalize"><a
                                                                    href="#">{{ $p->plan_name }}</a>
                                                                <small>- ${{ number_format($p->daily_profit, 2) }} for
                                                                    {{ $p->tenure }} Days</small></span>
                                                            <span class="item-value">$
                                                                {{ number_format($p->invested_amount, 2) }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="nk-iv-wg2-cta">
                                                <a href="{{ route('customer.myplan.index') }}"
                                                    class="btn btn-light btn-lg btn-block">See
                                                    all Investment</a>
                                                <a href="{{ route('customer.mining-plans.index') }}"
                                                    class="btn btn-primary btn-lg btn-block mt-2">Invest &
                                                    Earn</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="nk-refwg">
                                <div class="nk-refwg-invite card-inner">
                                    <div class="nk-refwg-head g-3">
                                        <div class="nk-refwg-title">
                                            <h5 class="title">Refer Us & Earn</h5>
                                            <div class="title-sub">Use the bellow link to invite your friends.
                                            </div>
                                        </div>
                                        <div class="nk-refwg-action">
                                            <a href="#" class="btn btn-primary">Invite</a>
                                        </div>
                                    </div>
                                    <div class="nk-refwg-url">
                                        <div class="form-control-wrap">
                                            <div class="form-clip clipboard-init" data-clipboard-target="#refUrl"
                                                data-success="Copied" data-text="Copy Link"><em
                                                    class="clipboard-icon icon ni ni-copy"></em> <span
                                                    class="clipboard-text">Copy Link</span></div>
                                            <div class="form-icon">
                                                <em class="icon ni ni-link-alt"></em>
                                            </div>
                                            <input type="text" class="form-control copy-text" id="refUrl"
                                                value="https://dashlite.net/?ref=4945KD48">
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-refwg-stats card-inner bg-lighter">
                                    <div class="nk-refwg-group g-3">
                                        <div class="nk-refwg-name">
                                            <h6 class="title">My Referral <em class="icon ni ni-info"
                                                    data-bs-toggle="tooltip" data-bs-placement="right"
                                                    title="Referral Informations"></em></h6>
                                        </div>
                                        <div class="nk-refwg-info g-3">
                                            <div class="nk-refwg-sub">
                                                <div class="title">394</div>
                                                <div class="sub-text">Total Joined</div>
                                            </div>
                                            <div class="nk-refwg-sub">
                                                <div class="title">548.49</div>
                                                <div class="sub-text">Referral Earn</div>
                                            </div>
                                        </div>
                                        <div class="nk-refwg-more dropdown mt-n1 me-n1">
                                            <a href="#" class="btn btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                <ul class="link-list-plain sm">
                                                    <li><a href="#">7 days</a></li>
                                                    <li><a href="#">15 Days</a></li>
                                                    <li><a href="#">30 Days</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-refwg-ck">
                                        <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
