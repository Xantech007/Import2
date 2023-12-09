@extends('admin.layout.master')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Active Plans</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total {{ $plan->count() }} active plans.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col"><span class="sub-text">Customer</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Plan</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Amount</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Tenure</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Daily Profit</span></div>
                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Total Return</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Date</span></div>
                                        <div class="nk-tb-col text-end"><span class="sub-text">Actions</span></div>
                                    </div><!-- .nk-tb-item -->
                                    @foreach ($plan as $p)
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">
                                            <a href="{{ route('admin.users.detail', $p->user->id) }}">
                                                <div class="user-card">
                                                    <div class="user-name">
                                                        <span class="tb-lead">{{ $p->user->name }} <span class="dot dot-success d-lg-none ms-1"></span></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="sub-text text-capitalize">{{ $p->plan_name }}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="sub-text">$ {{ number_format($p->invested_amount, 2) }}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="sub-text">{{ $p->tenure }} Days</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                                <span class="sub-text">$ {{ number_format($p->daily_profit, 2) }}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="sub-text">$ {{ number_format($p->total_return, 2) }}</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span class="sub-text">{{ $p->created_at->toFormattedDateString() }}</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="{{ route('admin.active-plan.detail', $p->id) }}" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Details" data-bs-original-title="Details">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="{{ route('admin.active-plan.detail', $p->id) }}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    @endforeach
                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul><!-- .pagination -->
                                    </div>
                                    <div class="g">
                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                            <div>Page</div>
                                            <div>
                                                <select class="form-select js-select2 select2-hidden-accessible" data-search="on" data-dropdown="xs center" data-select2-id="10" tabindex="-1" aria-hidden="true">
                                                    <option value="page-1" data-select2-id="12">1</option>
                                                    <option value="page-2">2</option>
                                                    <option value="page-4">4</option>
                                                    <option value="page-5">5</option>
                                                    <option value="page-6">6</option>
                                                    <option value="page-7">7</option>
                                                    <option value="page-8">8</option>
                                                    <option value="page-9">9</option>
                                                    <option value="page-10">10</option>
                                                    <option value="page-11">11</option>
                                                    <option value="page-12">12</option>
                                                    <option value="page-13">13</option>
                                                    <option value="page-14">14</option>
                                                    <option value="page-15">15</option>
                                                    <option value="page-16">16</option>
                                                    <option value="page-17">17</option>
                                                    <option value="page-18">18</option>
                                                    <option value="page-19">19</option>
                                                    <option value="page-20">20</option>
                                                </select>
                                            </div>
                                            <div>OF 102</div>
                                        </div>
                                    </div><!-- .pagination-goto -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection