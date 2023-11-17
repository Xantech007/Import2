@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Market Analysis</h3>
                                <div class="nk-block-des text-soft">
                                    <p>A glance at the crypto and stock market.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner">
                                <ul class="nav nav-tabs nav-tabs-s2">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1">Crypto Market</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem2">Stock Market</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabItem1">
                                        <p>content</p>
                                    </div>
                                    <div class="tab-pane" id="tabItem2">
                                        <p>content</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- Tranx Detail Modal -->
    <div class="modal fade" tabindex="-1" id="tranxDetails">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <div class="nk-modal-head mb-3 mb-sm-5">
                        <h4 class="nk-modal-title title">Transaction <small class="text-primary">#TNX67234</small></h4>
                    </div>
                    <div class="nk-tnx-details">
                        <div class="nk-block-between flex-wrap g-3">
                            <div class="nk-tnx-type">
                                <div class="nk-tnx-type-icon bg-warning text-white">
                                    <em class="icon ni ni-arrow-up-right"></em>
                                </div>
                                <div class="nk-tnx-type-text">
                                    <h5 class="title">+ 0.004560 BTC</h5>
                                    <span class="sub-text mt-n1">15 Oct, 2019 09:45 PM</span>
                                </div>
                            </div>
                            <ul class="align-center flex-wrap gx-3">
                                <li>
                                    <span class="badge badge-sm bg-success">Completed</span>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                            <h5 class="title">Transaction Info</h5>
                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <span class="sub-text">Order ID</span>
                                <span class="caption-text">YWLX52JG73</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Reference ID</span>
                                <span class="caption-text text-break">NIY9TB2JG73YWLXPYM2U8HR</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Transaction Fee</span>
                                <span class="caption-text">0.000002 BTC</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Amount</span>
                                <span class="caption-text">0.004560 BTC</span>
                            </div>
                        </div><!-- .row -->
                        <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                            <h5 class="title">Transaction Details</h5>
                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <span class="sub-text">Transaction Type</span>
                                <span class="caption-text">Deposit</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Payment Gateway</span>
                                <span class="caption-text align-center">CoinPayments <span
                                        class="badge bg-primary ms-2 text-white">Online Gateway</span></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Payment From</span>
                                <span class="caption-text text-break">1xA058106537340385c87d264f93</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Payment To</span>
                                <span class="caption-text text-break">1x0385c87d264A05810653734f93</span>
                            </div>
                            <div class="col-lg-12">
                                <span class="sub-text">Transaction Hash</span>
                                <span
                                    class="caption-text text-break">Tx156d3342d5c87d264f9359200xa058106537340385c87d264f93</span>
                            </div>
                            <div class="col-lg-12">
                                <span class="sub-text">Details</span>
                                <span class="caption-text">Deposit Fund for Investment</span>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .nk-tnx-details -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
@endsection
