@extends('admin.layout.master')

@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Crypto Transaction Detail</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.tranx.index') }}" class="btn btn-primary">
                                    <em class="ni ni-arrow-left"></em>
                                    Back
                                </a>
                            </div>
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner">
                                <div class="nk-modal-head mb-3 mb-sm-5">
                                    <h4 class="nk-modal-title title">Transaction <small
                                            class="text-primary">#{{ $tranx->id }}</small></h4>
                                </div>
                                <div class="nk-tnx-details">
                                    <div class="nk-block-between flex-wrap g-3">
                                        <div class="nk-tnx-type">
                                            @if ($tranx->tranx_type == 'withdrawal')
                                            <div class="nk-tnx-type-icon bg-primary text-white">
                                                <em class="icon ni ni-arrow-down-left"></em>
                                            </div>
                                            @else
                                            <div class="nk-tnx-type-icon bg-primary text-white">
                                                <em class="icon ni ni-arrow-up-right"></em>
                                            </div>
                                            @endif
                                            <div class="nk-tnx-type-text">
                                                <h5 class="title">+ {{ $tranx->amount }} {{ $tranx->abbr }}</h5>
                                                <span
                                                    class="sub-text mt-n1">{{ $tranx->created_at->toFormattedDateString() }}</span>
                                            </div>
                                        </div>
                                        <ul class="align-center flex-wrap gx-3">
                                            <li>
                                                <span
                                                    class="badge badge-sm text-capitalize @if ($tranx->status == 'approved') bg-success @endif
                                                @if ($tranx->status == 'pending') bg-warning @endif
                                                @if ($tranx->status == 'declined')  @endif">{{ $tranx->status }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                                        <h5 class="title">Transaction Info</h5>
                                    </div>
                                    <div class="row gy-3">
                                        <div class="col-lg-6">
                                            <span class="sub-text">Transaction Amount</span>
                                            <span class="caption-text">{{ $tranx->amount }} {{ $tranx->abbr }}</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="sub-text">Amount Value</span>
                                            <span class="caption-text">${{ number_format($tranx->value) }}</span>
                                        </div>
                                    </div><!-- .row -->
                                    <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                                        <h5 class="title">Transaction Details</h5>
                                    </div>
                                    <div class="row gy-3">
                                        <div class="col-lg-6">
                                            <span class="sub-text">Transaction Type</span>
                                            <span class="caption-text text-capitalize">{{ $tranx->tranx_type }}</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="sub-text">Wallet Address</span>
                                            <span class="caption-text align-center">{{ $tranx->address }}</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="sub-text">Customer</span>
                                            <span
                                                class="caption-text text-break text-capitalize">{{ $tranx->user->name }}</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="sub-text">Customer's Email</span>
                                            <span class="caption-text text-break">{{ $tranx->user->email }}</span>
                                        </div>
                                        <div class="col-lg-12">
                                            @if ($tranx->tranx_type == 'deposit')
                                                <a href="{{ asset('uploads/' . $tranx->proof) }}" target="_blank"
                                                    rel="noopener noreferrer">
                                                    <img src="{{ asset('uploads/' . $tranx->proof) }}"
                                                        alt="transaction proof" width="100">
                                                </a>
                                            @else
                                                <span class="sub-text">Details</span>
                                                <span class="caption-text">Fund Withdrawal</span>
                                            @endif
                                        </div>
                                    </div><!-- .row -->
                                </div><!-- .nk-tnx-details -->
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
