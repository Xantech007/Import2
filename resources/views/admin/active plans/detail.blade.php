@extends('admin.layout.master')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Plan Details</h3>
                            <div class="nk-block-des text-soft">
                                <ul class="list-inline">
                                    <li>Created At: <span class="text-base">{{ $plan->created_at->toFormattedDateString() }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="{{ route('admin.active-plan.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="{{ route('admin.active-plan.index') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="invoice">
                        <div class="invoice-wrap">
                            <div class="invoice-brand text-center">
                                <img src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="">
                            </div>
                            <div class="invoice-head">
                                <div class="invoice-contact">
                                    <span class="overline-title">Customer</span>
                                    <div class="invoice-contact-info">
                                        <h4 class="title text-capitalize">{{ $plan->user->name }}</h4>
                                    </div>
                                </div>
                            </div><!-- .invoice-head -->
                            <div class="invoice-bills">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Plan</th>
                                                <th>Amount</th>
                                                <th>Daily Profit</th>
                                                <th>Total Return</th>
                                                <th>Net Profit</th>
                                                <th>Term</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ Str::ucfirst($plan->plan_name) }}</td>
                                                <td>$ {{ number_format($plan->invested_amount, 2) }}</td>
                                                <td>$ {{ number_format($plan->daily_profit, 2) }}</td>
                                                <td>$ {{ number_format($plan->total_return, 2) }}</td>
                                                <td>$ {{ number_format($plan->total_return - $plan->invested_amount, 2) }}</td>
                                                <td>{{ $plan->tenure }} Days</td>
                                            </tr>
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Status</th>
                                                <th>Invest ID</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $plan->start_date }}</td>
                                                <td>$ {{ $plan->end_at }}</td>
                                                <td>$ {{ $plan->status }}</td>
                                                <td>$ {{ $plan->invest_id }}</td>
                                                <td>{{ $plan->created_at }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- .invoice-bills -->
                        </div><!-- .invoice-wrap -->
                    </div><!-- .invoice -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection