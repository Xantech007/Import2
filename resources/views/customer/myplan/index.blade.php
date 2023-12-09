@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><span>My Plan</span></div>
                            <div class="nk-block-between-md g-4">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">Invested Schemes</h2>
                                    <div class="nk-block-des">
                                        <p>Here is your current balance and your active investement plans.</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                        <li><a href="#" class="btn btn-primary"><span>Withdraw</span> <em
                                                    class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a>
                                        </li>
                                        <li><a href="{{ route('customer.mining-plans.index') }}"
                                                class="btn btn-white btn-light"><span>Invest More</span> <em
                                                    class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a>
                                        </li>
                                    </ul>
                                </div><!-- .nk-block-head-content -->
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="row gy-gs">
                                        <div class="col-lg-5">
                                            <div class="nk-iv-wg3">
                                                <div class="nk-iv-wg3-title">Total Balance</div>
                                                <div class="nk-iv-wg3-group  flex-lg-nowrap gx-4">
                                                    <div class="nk-iv-wg3-sub">
                                                        <div class="nk-iv-wg3-amount">
                                                            <div class="number">$ {{ number_format(Auth::user()->balance, 2) }}
                                                            </div>
                                                        </div>
                                                        <div class="nk-iv-wg3-subtitle">Available Balance</div>
                                                    </div>
                                                    <div class="nk-iv-wg3-sub">
                                                        <span class="nk-iv-wg3-plus text-soft"><em
                                                                class="icon ni ni-plus"></em></span>
                                                        <div class="nk-iv-wg3-amount">
                                                            <div class="number-sm">
                                                                $ {{ number_format($plan->sum('invested_amount'), 2) }}</div>
                                                        </div>
                                                        <div class="nk-iv-wg3-subtitle">Total Invested </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                        <div class="col-lg-7">
                                            <div class="nk-iv-wg3">
                                                <div class="nk-iv-wg3-title">Plan Overview</div>
                                                <div class="nk-iv-wg3-group flex-md-nowrap g-4">
                                                    <div class="nk-iv-wg3-sub-group gx-4">
                                                        <div class="nk-iv-wg3-sub">
                                                            <div class="nk-iv-wg3-amount">
                                                                <div class="number">$ {{ number_format($plan->sum('profit_earned'), 2) }}</div>
                                                            </div>
                                                            <div class="nk-iv-wg3-subtitle">Total Profit</div>
                                                        </div>
                                                        <div class="nk-iv-wg3-sub">
                                                            <span class="nk-iv-wg3-plus text-soft"><em
                                                                    class="icon ni ni-plus"></em></span>
                                                            <div class="nk-iv-wg3-amount">
                                                                <div class="number-sm">1,50.05</div>
                                                            </div>
                                                            <div class="nk-iv-wg3-subtitle">Today Profit</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-iv-wg3-sub flex-grow-1 ms-md-3">
                                                        <div class="nk-iv-wg3-ck">
                                                            <canvas class="chart-profit" id="profitCM"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head-sm">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Active Plan <span
                                        class="count text-base">({{ $plan->count() }})</span></h5>
                            </div>
                        </div>
                        <div class="nk-iv-scheme-list">
                            @if ($plan->count() > 0)
                                @foreach ($plan as $p)
                                    <div class="nk-iv-scheme-item">
                                        <div class="nk-iv-scheme-icon is-running">
                                            <em
                                                class="icon ni 
                                        @if ($p->plan_name == 'starter') ni-spark @endif
                                        @if ($p->plan_name == 'silver') ni-star @endif
                                        @if ($p->plan_name == 'diamond') ni-sign-waves @endif
                                        @if ($p->plan_name == 'platinum') ni-centos @endif">
                                            </em>
                                        </div>
                                        <div class="nk-iv-scheme-info">
                                            <div class="nk-iv-scheme-name">{{ Str::ucfirst($p->plan_name) }} - Daily $
                                                {{ number_format($p->daily_profit) }} for {{ $p->tenure }} Days</div>
                                            <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$
                                                    {{ number_format($p->invested_amount) }}</span></div>
                                        </div>
                                        <div class="nk-iv-scheme-term">
                                            <div class="nk-iv-scheme-start nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">Start Date</span>
                                                <span class="nk-iv-scheme-value date">{{ $p->start_date }}</span>
                                            </div>
                                            <div class="nk-iv-scheme-end nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">End Date</span>
                                                <span class="nk-iv-scheme-value date">{{ $p->end_date }}</span>
                                            </div>
                                        </div>
                                        <div class="nk-iv-scheme-amount">
                                            <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">Total Return</span>
                                                <span class="nk-iv-scheme-value amount">$
                                                    {{ number_format($p->total_return) }}</span>
                                            </div>
                                            <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">Total Net Profit</span>
                                                <span class="nk-iv-scheme-value amount">$
                                                    {{ number_format($p->total_return - $p->invested_amount) }}</span>
                                            </div>
                                        </div>
                                        <div class="nk-iv-scheme-more">
                                            <a class="btn btn-icon btn-lg btn-round btn-trans"
                                                href="{{ route('customer.myplan.detail', $p->id) }}"><em
                                                    class="icon ni ni-forward-ios"></em></a>
                                        </div>
                                        <div class="nk-iv-scheme-progress">
                                            <div class="progress-bar" data-progress="25"></div>
                                        </div>
                                    </div><!-- .nk-iv-scheme-item -->
                                @endforeach
                            @else
                                @foreach ($plan as $p)
                                    <div class="p-4">
                                        <center>
                                            <h5 style="font-family: Cambria; font-style: italic;">No Active Plan</h5>
                                        </center>
                                    </div><!-- .nk-iv-scheme-item -->
                                @endforeach
                            @endif
                        </div><!-- .nk-iv-scheme-list -->
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Recently End <span
                                            class="count text-base">({{ $ex_plan->count() }})</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="nk-iv-scheme-list">
                            @if ($ex_plan->count() > 0)
                                @foreach ($ex_plan as $p)
                                    <div class="nk-iv-scheme-item">
                                        <div class="nk-iv-scheme-icon is-running">
                                            <em
                                                class="icon ni 
                                        @if ($p->plan_name == 'starter') ni-spark @endif
                                        @if ($p->plan_name == 'silver') ni-star @endif
                                        @if ($p->plan_name == 'diamond') ni-sign-waves @endif
                                        @if ($p->plan_name == 'platinum') ni-centos @endif">
                                            </em>
                                        </div>
                                        <div class="nk-iv-scheme-info">
                                            <div class="nk-iv-scheme-name">{{ Str::ucfirst($p->plan_name) }} - Daily $
                                                {{ number_format($p->daily_profit) }} for {{ $p->tenure }} Days</div>
                                            <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$
                                                    {{ number_format($p->invested_amount) }}</span></div>
                                        </div>
                                        <div class="nk-iv-scheme-term">
                                            <div class="nk-iv-scheme-start nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">Start Date</span>
                                                <span class="nk-iv-scheme-value date">{{ $p->start_date }}</span>
                                            </div>
                                            <div class="nk-iv-scheme-end nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">End Date</span>
                                                <span class="nk-iv-scheme-value date">{{ $p->end_date }}</span>
                                            </div>
                                        </div>
                                        <div class="nk-iv-scheme-amount">
                                            <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">Total Return</span>
                                                <span class="nk-iv-scheme-value amount">$
                                                    {{ number_format($p->total_return) }}</span>
                                            </div>
                                            <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">Total Net Profit</span>
                                                <span class="nk-iv-scheme-value amount">$
                                                    {{ number_format($p->total_return - $p->invested_amount) }}</span>
                                            </div>
                                        </div>
                                        <div class="nk-iv-scheme-more">
                                            <a class="btn btn-icon btn-lg btn-round btn-trans"
                                                href="{{ route('customer.myplan.detail', $p->id) }}"><em
                                                    class="icon ni ni-forward-ios"></em></a>
                                        </div>
                                        <div class="nk-iv-scheme-progress">
                                            <div class="progress-bar" data-progress="25"></div>
                                        </div>
                                    </div><!-- .nk-iv-scheme-item -->
                                @endforeach
                            @else
                                <div class="p-4">
                                    <center>
                                        <h5 style="font-family: Cambria; font-style: italic;">No Recently Ended Plan</h5>
                                    </center>
                                </div><!-- .nk-iv-scheme-item -->
                            @endif
                        </div><!-- .nk-iv-scheme-list -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
