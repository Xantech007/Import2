@extends('admin.layout.master')

@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Investment Plans</h3>
                                <div class="nk-block-des text-soft">
                                    <p>List of available investment plans.</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.cmp.add', 'plan') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-plus"></em><span>Add Plan</span></a>
                                <a href="{{ route('admin.cmp.add', 'plan') }}"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-plus"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            @foreach ($plan as $p)
                                <div class="col-md-6 col-xxl-3">
                                    <div class="card card-bordered pricing">
                                        <div class="pricing-head">
                                            <div class="pricing-title">
                                                <h4 class="card-title title text-capitalize">{{ $p->name }}</h4>
                                            </div>
                                            <div class="card-text">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="h4 fw-500">{{ $p->daily_interest }}</span>
                                                        <span class="sub-text">Daily Interest</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span class="h4 fw-500">{{ $p->tenure }}</span>
                                                        <span
                                                            class="sub-text text-capitalize">Days Tenure</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li>
                                                    <span class="w-50">Min Deposit</span>
                                                    -
                                                    <span class="ms-auto">{{ $p->min_deposit }}</span>
                                                </li>
                                                <li>
                                                    <span class="w-50">Max Deposit</span>
                                                    -
                                                    <span class="ms-auto">{{ $p->max_deposit }}</span>
                                                </li>
                                                <li>
                                                    <span class="w-50">Deposit Return</span>
                                                    -
                                                    <span class="ms-auto">{{ $p->deposit_return }}</span>
                                                </li>
                                                <li>
                                                    <span class="w-50">Total Return</span>
                                                    -
                                                    <span class="ms-auto">{{ $p->total_return }}</span>
                                                </li>
                                            </ul>
                                            <div class="pricing-action">
                                                <a href="{{ route('admin.cmp.edit', [$p->id, 'plan']) }}" class="btn btn-outline-light">Edit
                                                    this plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                            @endforeach
                        </div>
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Cryptocurrencies</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>List of available cryptocurrencies</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="{{ route('admin.cmp.add', 'crypto') }}"
                                        class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                            class="icon ni ni-plus"></em><span>Add Crypto</span></a>
                                    <a href="{{ route('admin.cmp.add', 'crypto') }}"
                                        class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                            class="icon ni ni-plus"></em></a>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="row g-gs">
                            @foreach ($crypto as $c)
                            <div class="col-md-6 col-xxl-4">
                                <div class="card card-bordered pricing text-center">
                                    <div class="pricing-body">
                                        <div class="pricing-media">
                                            <img src="{{ asset('uploads/'.$c->img) }}" alt="">
                                        </div>
                                        <div class="pricing-title w-220px mx-auto">
                                            <h5 class="title text-capitalize" style="font-family: Cambria;">{{ $c->name }}</h5>
                                        </div>
                                        <div class="pricing-amount">
                                            <div class="amount">{{ $c->abbr }}</div>
                                        </div>
                                        <div class="pricing-action">
                                            <a href="{{ route('admin.cmp.edit', [$c->id, 'crypto']) }}" class="btn btn-primary">Edit Crypto</a>
                                        </div>
                                    </div>
                                </div><!-- .pricing -->
                            </div><!-- .col -->
                            @endforeach
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
