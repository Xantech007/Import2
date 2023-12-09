@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block text-center">
                        <div class="nk-modal shadow p-5">
                            <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-warning"></em>
                            <h4 class="nk-modal-title">Withdrawal Pending!</h4>
                            <div class="nk-modal-text">
                                <p class="sub-text">Your withdrawal request of {{ $tranx['amount'] }} {{ $tranx['abbr'] }} (${{ number_format($tranx['value'], 2) }}) has been submitted successfully. Once it is approved, it will be sent to your wallet address.</p>
                            </div>
                            <div class="nk-modal-action-lg">
                                <ul class="btn-group flex-wrap justify-center g-4">
                                    <li><a href="{{ route('customer.dashboard') }}"
                                            class="btn btn-lg btn-mw btn-primary">Return To Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </center>
                    </div><!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
