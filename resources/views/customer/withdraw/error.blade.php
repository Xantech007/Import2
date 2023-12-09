@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block text-center">
                        <div class="nk-modal shadow p-5">
                            <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                            <h4 class="nk-modal-title">Internal Error 504!</h4>
                            <div class="nk-modal-text">
                                <p class="sub-text">Sorry, an error occurred while processing your withdrawal request. Try
                                    again later, while we fix the issue.</p>
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