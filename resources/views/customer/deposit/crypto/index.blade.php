@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head text-center">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Crypto Deposit</h2>
                                <div class="nk-block-des">
                                    <p>Deposit a cryptocurrency and start investing.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- nk-block -->
                    <div class="nk-block">
                        @livewire('deposit')
                    </div><!-- nk-block -->
                    <div class="nk-block">
                        <div class="text-center">
                            <a href="{{ route('customer.deposit.index') }}">Back to Deposit Methods</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Content Code -->
    <div class="modal fade" tabindex="-1" id="tips">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Deposit Tips</h5>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>kkk</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
