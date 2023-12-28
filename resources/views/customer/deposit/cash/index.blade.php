@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head text-center">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Card Deposit</h2>
                                <div class="nk-block-des">
                                    <p>Deposit with your debit card and start investing.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- nk-block -->
                    <div class="nk-block">
                        <div class="card card-bordered h-100 w-100 p-4">
                            <form action="{{ route('customer.deposit.card-deposit.process') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Amount</label>
                                    <div class="form-control-wrap">
                                        <div class="form-text-hint pt-3">
                                            <span>USD</span>
                                        </div>
                                        <input type="number" class="form-control form-control-xl" name="amount"
                                            placeholder="0.00">
                                    </div>
                                    @error('amount')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Deposit</button>
                                </div>
                            </form>
                        </div>
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
@endsection
