@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <center>
                        <div class="nk-modal shadow p-5">
                            <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                            <h4 class="nk-modal-title">You Successfully Invested!</h4>
                            <div class="nk-modal-text">
                                <p class="sub-text">You have successfully Invested on the {{ Str::ucfirst($plan->name) }} Plan with amount of
                                    <strong>${{ number_format(session('amount'), 2) }} and ${{ number_format(session('commission'), 2) }} fee. ${{ session('daily_profit') }} has been added to your account balance.</p>
                            </div>
                            <div class="nk-modal-action-lg">
                                <ul class="btn-group flex-wrap justify-center g-4">
                                    <li><a href="{{ route('customer.mining-plans.index') }}" class="btn btn-lg btn-mw btn-primary">More Invest</a>
                                    </li>
                                    <li><a href="{{ route('customer.myplan.index')}}"
                                            class="btn btn-lg btn-mw btn-dim btn-primary"><em
                                                class="icon ni ni-reports"></em><span>See Plans</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
