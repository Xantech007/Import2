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
                                <a href="{{ route('admin.cmp.add') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-plus"></em><span>Add Plan</span></a>
                                <a href="{{ route('admin.cmp.add') }}"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-plus"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing">
                                    <div class="pricing-head">
                                        <div class="pricing-title">
                                            <h4 class="card-title title">Starter</h4>
                                            <p class="sub-text">Enjoy entry level of invest &amp; earn.</p>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="h4 fw-500">1.67%</span>
                                                    <span class="sub-text">Daily Interest</span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="h4 fw-500">30</span>
                                                    <span class="sub-text">Term Days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><span class="w-50">Min Deposit</span> - <span class="ms-auto">$250</span>
                                            </li>
                                            <li><span class="w-50">Max Deposit</span> - <span
                                                    class="ms-auto">$1,999</span></li>
                                            <li><span class="w-50">Deposit Return</span> - <span
                                                    class="ms-auto">Yes</span></li>
                                            <li><span class="w-50">Total Return</span> - <span class="ms-auto">125%</span>
                                            </li>
                                        </ul>
                                        <div class="pricing-action">
                                            <a href="{{ route('admin.cmp.edit') }}" class="btn btn-outline-light">Edit this plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing">
                                    <div class="pricing-head">
                                        <div class="pricing-title">
                                            <h4 class="card-title title">Silver</h4>
                                            <p class="sub-text">Best plan for user to investers.</p>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="h4 fw-500">4.76%</span>
                                                    <span class="sub-text">Daily Interest</span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="h4 fw-500">21</span>
                                                    <span class="sub-text">Term Days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><span class="w-50">Min Deposit</span> - <span
                                                    class="ms-auto">$2,000</span></li>
                                            <li><span class="w-50">Max Deposit</span> - <span
                                                    class="ms-auto">$4,999</span></li>
                                            <li><span class="w-50">Deposit Return</span> - <span
                                                    class="ms-auto">Yes</span></li>
                                            <li><span class="w-50">Total Return</span> - <span class="ms-auto">200%</span>
                                            </li>
                                        </ul>
                                        <div class="pricing-action">
                                            <button class="btn btn-outline-light">Edit this plan</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing recommend">
                                    <div class="pricing-head">
                                        <div class="pricing-title">
                                            <h4 class="card-title title">Dimond</h4>
                                            <p class="sub-text">Advance level of invest &amp; earn.</p>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="h4 fw-500">14.29%</span>
                                                    <span class="sub-text">Daily Interest</span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="h4 fw-500">14</span>
                                                    <span class="sub-text">Term Days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><span class="w-50">Min Deposit</span> - <span
                                                    class="ms-auto">$5,000</span></li>
                                            <li><span class="w-50">Max Deposit</span> - <span
                                                    class="ms-auto">$20,000</span></li>
                                            <li><span class="w-50">Deposit Return</span> - <span
                                                    class="ms-auto">Yes</span></li>
                                            <li><span class="w-50">Total Return</span> - <span class="ms-auto">300%</span>
                                            </li>
                                        </ul>
                                        <div class="pricing-action">
                                            <button class="btn btn-outline-light">Edit this plan</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing">
                                    <div class="pricing-head">
                                        <div class="pricing-title">
                                            <h4 class="card-title title">Palitinam</h4>
                                            <p class="sub-text">Just invest money &amp; earn.</p>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="h4 fw-500">21.07%</span>
                                                    <span class="sub-text">Daily Interest</span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="h4 fw-500">7</span>
                                                    <span class="sub-text">Term Days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><span class="w-50">Min Deposit</span> - <span
                                                    class="ms-auto">$10,500</span></li>
                                            <li><span class="w-50">Max Deposit</span> - <span
                                                    class="ms-auto">$50,999</span></li>
                                            <li><span class="w-50">Deposit Return</span> - <span
                                                    class="ms-auto">Yes</span></li>
                                            <li><span class="w-50">Total Return</span> - <span
                                                    class="ms-auto">500%</span></li>
                                        </ul>
                                        <div class="pricing-action">
                                            <button class="btn btn-outline-light">Edit this plan</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
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
                                    <a href="html/user-list-regular.html"
                                        class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                            class="icon ni ni-plus"></em><span>Add Crypto</span></a>
                                    <a href="html/user-list-regular.html"
                                        class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                            class="icon ni ni-plus"></em></a>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="row g-gs">
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing text-center">
                                    <div class="pricing-body">
                                        <div class="pricing-media">
                                            <img src="./images/icons/plan-s1.svg" alt="">
                                        </div>
                                        <div class="pricing-title w-220px mx-auto">
                                            <h5 class="title" style="font-family: Cambria;">Bitcoin</h5>
                                        </div>
                                        <div class="pricing-amount">
                                            <div class="amount">BTC</div>
                                        </div>
                                        <div class="pricing-action">
                                            <a href="#" class="btn btn-primary">Edit Crypto</a>
                                        </div>
                                    </div>
                                </div><!-- .pricing -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing recommend text-center">
                                    <div class="pricing-body">
                                        <div class="pricing-media">
                                            <img src="./images/icons/plan-s2.svg" alt="">
                                        </div>
                                        <div class="pricing-title w-220px mx-auto">
                                            <h5 class="title" style="font-family: Cambria;">Ethereum</h5>
                                        </div>
                                        <div class="pricing-amount">
                                            <div class="amount">ETH</div>
                                        </div>
                                        <div class="pricing-action">
                                            <a href="#" class="btn btn-primary">Edit Crypto</a>
                                        </div>
                                    </div>
                                </div><!-- .pricing -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing text-center">
                                    <div class="pricing-body">
                                        <div class="pricing-media">
                                            <img src="./images/icons/plan-s3.svg" alt="">
                                        </div>
                                        <div class="pricing-title w-220px mx-auto">
                                            <h5 class="title" style="font-family: Cambria;">Tether</h5>
                                        </div>
                                        <div class="pricing-amount">
                                            <div class="amount">USDT</div>
                                        </div>
                                        <div class="pricing-action">
                                            <a href="#" class="btn btn-primary">Edit Crypto</a>
                                        </div>
                                    </div>
                                </div><!-- .pricing -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing text-center">
                                    <div class="pricing-body">
                                        <div class="pricing-media">
                                            <img src="./images/icons/plan-s1.svg" alt="">
                                        </div>
                                        <div class="pricing-title w-220px mx-auto">
                                            <h5 class="title" style="font-family: Cambria;">XRP</h5>
                                        </div>
                                        <div class="pricing-amount">
                                            <div class="amount">XRP</div>
                                        </div>
                                        <div class="pricing-action">
                                            <a href="#" class="btn btn-primary">Edit Crypto</a>
                                        </div>
                                    </div>
                                </div><!-- .pricing -->
                            </div><!-- .col -->
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
