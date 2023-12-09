@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><span>My Profile</span></div>
                            <h2 class="nk-block-title fw-normal">Account Info</h2>
                            <div class="nk-block-des">
                                <p>You have full control to manage your own account setting.</p>
                            </div>
                        </div>
                    </div>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tranx">Transactions</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="nk-block">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Personal Information</h5>
                                        <div class="nk-block-des">
                                            <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="card card-bordered">
                                    <div class="nk-data data-list">
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Full Name</span>
                                                <span class="data-value text-capitalize">{{ $user->name }}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em
                                                        class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Email</span>
                                                <span class="data-value">{{ $user->email }}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em
                                                        class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Phone Number</span>
                                                <span class="data-value text-soft">
                                                    @if (is_null($user->phone))
                                                        Not added yet
                                                    @else
                                                        {{ $user->phone }}
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em
                                                        class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                    </div><!-- .nk-data -->
                                </div><!-- .card -->
                                <!-- Another Section -->
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Personal Preferences</h5>
                                        <div class="nk-block-des">
                                            <p>Your personalized preference allows you best use.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="card card-bordered">
                                    <div class="nk-data data-list">
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Language</span>
                                                <span class="data-value">English (United State)</span>
                                            </div>
                                            <div class="data-col data-col-end"><a href="#"
                                                    class="link link-primary">Change Language</a></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Dark Mode</span>
                                                <span class="data-value">
                                                    <em class="ni ni-moon-fill"></em>
                                                </span>
                                            </div>
                                            <div class="data-col data-col-end">
                                                @livewire('theme')
                                            </div>
                                        </div>
                                    </div><!-- .nk-data -->
                                </div><!-- .card -->
                            </div>
                        </div>
                        <div class="tab-pane" id="tranx">
                            <div class="nk-block">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h5 class="title">All Transactions</h5>
                                                </div>
                                                <div class="card-tools me-n1">
                                                    <ul class="btn-toolbar gx-1">
                                                        <li>
                                                            <a href="#"
                                                                class="search-toggle toggle-search btn btn-icon"
                                                                data-target="search"><em class="icon ni ni-search"></em></a>
                                                        </li><!-- li -->
                                                        <li class="btn-toolbar-sep"></li><!-- li -->
                                                    </ul><!-- .btn-toolbar -->
                                                </div><!-- .card-tools -->
                                                <div class="card-search search-wrap" data-search="search">
                                                    <div class="search-content">
                                                        <a href="#" class="search-back btn btn-icon toggle-search"
                                                            data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                        <input type="text"
                                                            class="form-control border-transparent form-focus-none"
                                                            placeholder="Quick search by transaction">
                                                        <button class="search-submit btn btn-icon"><em
                                                                class="icon ni ni-search"></em></button>
                                                    </div>
                                                </div><!-- .card-search -->
                                            </div><!-- .card-title-group -->
                                        </div><!-- .card-inner -->
                                        <div class="card-inner p-0">
                                            <div class="nk-tb-list nk-tb-tnx">
                                                <div class="nk-tb-item nk-tb-head">
                                                    <div class="nk-tb-col"><span>Customer</span></div>
                                                    <div class="nk-tb-col tb-col-xxl"><span>Crypto</span></div>
                                                    <div class="nk-tb-col text-end"><span>Amount</span></div>
                                                    <div class="nk-tb-col text-end tb-col-sm"><span>Type</span></div>
                                                    <div class="nk-tb-col nk-tb-col-status"><span
                                                            class="sub-text d-none d-md-block">Status</span></div>
                                                </div><!-- .nk-tb-item -->
                                                @foreach ($tranx as $t)
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="nk-tnx-type">
                                                                <div class="nk-tnx-type-text">
                                                                    <span
                                                                        class="tb-lead text-capitalize">{{ $t->user->name }}</span>
                                                                    <span class="tb-date">{{ $t->user->email }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span
                                                                class="tb-lead-sub text-capitalize">{{ $t->crypto }}</span>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-amount">{{ $t->amount }}
                                                                <span>{{ $t->abbr }}</span></span>
                                                            <span class="tb-amount-sm">1290.49 USD</span>
                                                        </div>
                                                        <div class="nk-tb-col text-end tb-col-sm">
                                                            <span
                                                                class="tb-amount text-capitalize @if ($t->tranx_type == 'deposit') text-primary @else
                                                            text-warning @endif">{{ $t->tranx_type }}</span>
                                                            <span
                                                                class="tb-amount-sm">{{ $t->created_at->toFormattedDateString() }}</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-status">
                                                            <div
                                                                class="dot @if ($t->status == 'approved') dot-success @endif
                                                             @if ($t->status == 'pending') dot-warning @endif
                                                             @if ($t->status == 'declined') dot-danger @endif d-md-none">
                                                            </div>
                                                            <span
                                                                class="badge badge-sm badge-dim @if ($t->status == 'approved') bg-outline-success @endif
                                                                @if ($t->status == 'pending') bg-outline-warning @endif
                                                                @if ($t->status == 'declined') bg-outline-danger @endif
                                                                d-none d-md-inline-flex text-capitalize">{{ $t->status }}</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                @endforeach
                                            </div><!-- .nk-tb-list -->
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><span class="page-link"><em
                                                            class="icon ni ni-more-h"></em></span></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#persona">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#security">Security</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="persona">
                            <form action="{{ route('customer.profile.update') }}" method="POST" id="update-form">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Full Name</label>
                                            <input type="text" name="name" class="form-control form-control-lg" id="full-name"
                                                value="{{ Str::ucfirst($user->name) }}" placeholder="Enter Full name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="display-name">Email Address</label>
                                            <input type="text" name="email" class="form-control form-control-lg" id="display-name"
                                                value="{{ $user->email }}" placeholder="Enter display name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Phone Number</label>
                                            <input type="text" name="phone" class="form-control form-control-lg" id="phone-no"
                                                value="{{ $user?->phone }}" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="security">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Password</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l1"
                                            value="2337 Kildeer Drive">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">New Password</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l2"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-st">Confirm New Password</label>
                                        <input type="text" class="form-control form-control-lg" id="address-st"
                                            value="Kentucky">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Update Password</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
@endsection
@push('script')
    {!! $validator->selector('#update-form') !!}

    
    <script>
        $(document).ready(function() {

            $('#update-form').on('submit', function(e) {

                e.preventDefault();

                form = $(this);

                if (form.valid()) {

                    var f = form.find(':submit');

                    var button = f.html();

                    f.attr("disabled", "disabled")
                        .html(
                            '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span>Loading...</span>'
                        );

                    // $(form).ajaxSubmit();
                    $.ajax({
                        url: form.attr('action'),
                        type: "POST",
                        data: form.serialize(),
                        success: function(result) {

                            console.log(result);

                            f.removeAttr("disabled").html(button);

                            window.location.replace(result.redirect_url);

                        },
                        error: function(xhr, status, error) {

                            f.removeAttr("disabled").html(button);

                            $.each(xhr.responseJSON.errors, function(key, item) {
                                $('input[name = ' + key + ']')
                                    .removeClass('is-valid')
                                    .addClass('is-invalid')
                                    .after('<div class="invalid-feedback">' + item +
                                        '</div>');

                            });

                        }
                    });
                }
            });
        });
        $(document).ready(function() {

            $('#update-profile').on('submit', function(e) {

                e.preventDefault();

                form = $(this);

                if (form.valid()) {

                    var f = form.find(':submit');

                    var button = f.html();

                    f.attr("disabled", "disabled")
                        .html(
                            '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span>Loading...</span>'
                        );

                    // $(form).ajaxSubmit();
                    $.ajax({
                        url: form.attr('action'),
                        type: "POST",
                        data: form.serialize(),
                        success: function(result) {

                            console.log(result);

                            f.removeAttr("disabled").html(button);

                            window.location.replace(result.redirect_url);

                        },
                        error: function(xhr, status, error) {

                            f.removeAttr("disabled").html(button);

                            $.each(xhr.responseJSON.errors, function(key, item) {
                                $('input[name = ' + key + ']')
                                    .removeClass('is-valid')
                                    .addClass('is-invalid')
                                    .after('<div class="invalid-feedback">' + item +
                                        '</div>');

                            });

                        }
                    });
                }
            });
        });
    </script>
@endpush
