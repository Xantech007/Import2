@extends('admin.layout.master')

@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Users / <strong
                                        class="text-primary small text-capitalize">{{ $user->name }}</strong></h3>
                                <div class="nk-block-des text-soft">
                                    <ul class="list-inline">
                                        <li>User ID: <span class="text-base">#{{ $user->id }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.users.index') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                <a href="{{ route('admin.users.index') }}"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-aside-wrap">
                                <div class="card-content">
                                            <div class="card-inner">
                                                <div class="nk-block">
                                                    <div class="nk-block-head">
                                                        <h5 class="title">Personal Information</h5>
                                                        <p>Basic info, like your name and address, of your users.</p>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Full Name</span>
                                                                <span class="profile-ud-value">{{ $user->name }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Mobile Number</span>
                                                                @if (is_null($user->phone))
                                                                    <span class="profile-ud-value">
                                                                        <i>Not added yet</i>
                                                                    </span>
                                                                @else
                                                                    <span class="profile-ud-value">
                                                                        {{ $user->phone }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Email Address</span>
                                                                <span class="profile-ud-value">{{ $user->email }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Status</span>
                                                                <span class="profile-ud-value text-capitalize @if ($user->status == "active")
                                                                    text-success
                                                                @else
                                                                    text-danger
                                                                @endif">{{ $user->status }}</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">Additional Information
                                                        </h6>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Joining Date</span>
                                                                <span
                                                                    class="profile-ud-value">{{ $user->created_at->toFormattedDateString() }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Reg Method</span>
                                                                <span class="profile-ud-value">Email</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Country</span>
                                                                <span class="profile-ud-value">United State</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Language</span>
                                                                <span class="profile-ud-value">English (US)</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-divider divider md"></div>
                                            </div><!-- .card-inner -->
                                </div><!-- .card-content -->
                                <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl"
                                    data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true"
                                    data-toggle-body="true">
                                    <div class="card-inner-group" data-simplebar>
                                        <div class="card-inner">
                                            <div class="user-card user-card-s2">
                                                <div class="user-avatar lg bg-primary">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <h5 class="text-capitalize">{{ $user->name }}</h5>
                                                    <span class="sub-text">{{ $user->email }}</span>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner card-inner-sm">
                                            <ul class="btn-toolbar justify-center gx-1">
                                                <li><a href="#" class="btn btn-trigger btn-icon"><em
                                                            class="icon ni ni-mail"></em></a></li>
                                                <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em
                                                            class="icon ni ni-na"></em></a></li>
                                            </ul>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <div class="overline-title-alt mb-2">In Account</div>
                                            <div class="profile-balance">
                                                <div class="profile-balance-group gx-4">
                                                    <div class="profile-balance-sub">
                                                        <div class="profile-balance-amount">
                                                            <div class="number">$ {{ number_format($user->balance, 2) }}</div>
                                                        </div>
                                                        <div class="profile-balance-subtitle">Available Balance</div>
                                                    </div>
                                                    <div class="profile-balance-sub">
                                                        <span class="profile-balance-plus text-soft"><em
                                                                class="icon ni ni-minus"></em></span>
                                                        <div class="profile-balance-amount">
                                                            <div class="number">$ {{ number_format($plan->sum('invested_amount'), 2) }}</div>
                                                        </div>
                                                        <div class="profile-balance-subtitle">Invested Amount</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <div class="row text-center">
                                                <div class="col-6">
                                                    <div class="profile-stats">
                                                        <span class="amount">{{ $tranx->count() }}</span>
                                                        <span class="sub-text">Transactions</span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="profile-stats">
                                                        <span class="amount">{{ $plan->count() }}</span>
                                                        <span class="sub-text">Active Plans</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-aside -->
                            </div><!-- .card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
