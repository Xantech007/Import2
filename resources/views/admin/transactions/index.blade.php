@extends('admin.layout.master')

@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Crypto Transaction</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total {{ $tranx->count() }} transactions.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
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
                                                    <a href="#" class="search-toggle toggle-search btn btn-icon"
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
                                            <div class="nk-tb-col nk-tb-col-tools"></div>
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
                                                    <span class="tb-lead-sub text-capitalize">{{ $t->crypto }}</span>
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
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-2">
                                                        @if ($t->status == 'pending')
                                                            <li class="nk-tb-action-hidden">
                                                                <a href="{{ route('admin.tranx.approve', $t->id) }}"
                                                                    class="bg-white btn btn-sm btn-outline-light btn-icon"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Approve"><em class="icon ni ni-done"></em></a>
                                                            </li>
                                                        @endif
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="{{ route('admin.tranx.detail', $t->id) }}"
                                                                class="bg-white btn btn-sm btn-outline-light btn-icon btn-tooltip"
                                                                title="Details"><em class="icon ni ni-eye"></em></a>
                                                        </li>
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="#"
                                                                    class="dropdown-toggle bg-white btn btn-sm btn-outline-light btn-icon"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt">
                                                                        @if ($t->status == 'pending')
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-done"></em><span>Approve</span></a>
                                                                            </li>
                                                                        @endif
                                                                        @if ($t->status == 'pending')
                                                                            <li><a
                                                                                    href="{{ route('admin.tranx.decline', $t->id) }}"><em
                                                                                        class="icon ni ni-cross-round"></em><span>Reject</span></a>
                                                                            </li>
                                                                        @endif
                                                                        <li><a href="{{ route('admin.tranx.detail', $t->id) }}"
                                                                                data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
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
@endsection
