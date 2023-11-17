@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <center>
                        <div class="nk-modal shadow p-5">
                            <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                            <h4 class="nk-modal-title">Successfully sent payment!</h4>
                            <div class="nk-modal-text">
                                <p class="sub-text">You have successfully order the Investment Plan of ‘Silver’ with amount of
                                    <strong>$250.00</strong> using your <strong>NioWallet</strong>.</p>
                            </div>
                            <div class="nk-modal-action-lg">
                                <ul class="btn-group flex-wrap justify-center g-4">
                                    <li><a href="{{ route('customer.mining-plans.index') }}" class="btn btn-lg btn-mw btn-primary">More Invest</a>
                                    </li>
                                    <li><a href="{{ route('customer.myplan.detail') }}"
                                            class="btn btn-lg btn-mw btn-dim btn-primary"><em
                                                class="icon ni ni-reports"></em><span>See the plan</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
