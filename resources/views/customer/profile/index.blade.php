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
                            <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
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
                                            <span class="data-value">Abu Bin Ishtiyak</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Email</span>
                                            <span class="data-value">info@softnio.com</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                    </div>
                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Phone Number</span>
                                            <span class="data-value text-soft">Not add yet</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div>
                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Date of Birth</span>
                                            <span class="data-value">29 Feb, 1986</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div>
                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                        <div class="data-col">
                                            <span class="data-label">Address</span>
                                            <span class="data-value">2337 Kildeer Drive,<br>Kentucky, Canada</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
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
                                        <div class="data-col data-col-end"><a href="#" class="link link-primary">Change Language</a></div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Date Format</span>
                                            <span class="data-value">M d, YYYY</span>
                                        </div>
                                        <div class="data-col data-col-end"><a href="#" class="link link-primary">Change</a></div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Timezone</span>
                                            <span class="data-value">Bangladesh (GMT +6)</span>
                                        </div>
                                        <div class="data-col data-col-end"><a href="#" class="link link-primary">Change</a></div>
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
                                                <h5 class="title">All Orders</h5>
                                            </div>
                                            <div class="card-tools me-n1">
                                                <ul class="btn-toolbar gx-1">
                                                    <li>
                                                        <a href="#" class="search-toggle toggle-search btn btn-icon"
                                                            data-target="search"><em class="icon ni ni-search"></em></a>
                                                    </li><!-- li -->
                                                    <li class="btn-toolbar-sep"></li><!-- li -->
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-trigger btn-icon dropdown-toggle"
                                                                data-bs-toggle="dropdown">
                                                                <div class="badge badge-circle bg-primary">4</div>
                                                                <em class="icon ni ni-filter-alt"></em>
                                                            </a>
                                                            <div
                                                                class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                <div class="dropdown-head">
                                                                    <span class="sub-title dropdown-title">Advance Filter</span>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="link link-light">
                                                                            <em class="icon ni ni-more-h"></em>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-body dropdown-body-rg">
                                                                    <div class="row gx-6 gy-4">
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="overline-title overline-title-alt">Type</label>
                                                                                <select class="form-select js-select2">
                                                                                    <option value="any">Any Type</option>
                                                                                    <option value="deposit">Deposit</option>
                                                                                    <option value="buy">Buy Coin</option>
                                                                                    <option value="sell">Sell Coin</option>
                                                                                    <option value="transfer">Transfer</option>
                                                                                    <option value="withdraw">Withdraw</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="overline-title overline-title-alt">Status</label>
                                                                                <select class="form-select js-select2">
                                                                                    <option value="any">Any Status</option>
                                                                                    <option value="pending">Pending</option>
                                                                                    <option value="cancel">Cancel</option>
                                                                                    <option value="process">Process</option>
                                                                                    <option value="completed">Completed</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="overline-title overline-title-alt">Pay
                                                                                    Currency</label>
                                                                                <select class="form-select js-select2">
                                                                                    <option value="any">Any Coin</option>
                                                                                    <option value="bitcoin">Bitcoin</option>
                                                                                    <option value="ethereum">Ethereum</option>
                                                                                    <option value="litecoin">Litecoin</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="overline-title overline-title-alt">Method</label>
                                                                                <select class="form-select js-select2">
                                                                                    <option value="any">Any Method</option>
                                                                                    <option value="paypal">PayPal</option>
                                                                                    <option value="bank">Bank</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <div
                                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="includeDel">
                                                                                    <label class="custom-control-label"
                                                                                        for="includeDel"> Including
                                                                                        Deleted</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary">Filter</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-foot between">
                                                                    <a class="clickable" href="#">Reset Filter</a>
                                                                    <a href="#savedFilter" data-bs-toggle="modal">Save
                                                                        Filter</a>
                                                                </div>
                                                            </div><!-- .filter-wg -->
                                                        </div><!-- .dropdown -->
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-trigger btn-icon dropdown-toggle"
                                                                data-bs-toggle="dropdown">
                                                                <em class="icon ni ni-setting"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                <ul class="link-check">
                                                                    <li><span>Show</span></li>
                                                                    <li class="active"><a href="#">10</a></li>
                                                                    <li><a href="#">20</a></li>
                                                                    <li><a href="#">50</a></li>
                                                                </ul>
                                                                <ul class="link-check">
                                                                    <li><span>Order</span></li>
                                                                    <li class="active"><a href="#">DESC</a></li>
                                                                    <li><a href="#">ASC</a></li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- .dropdown -->
                                                    </li><!-- li -->
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
                                                <div class="nk-tb-col"><span>Details</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span>Source</span></div>
                                                <div class="nk-tb-col tb-col-lg"><span>Order</span></div>
                                                <div class="nk-tb-col text-end"><span>Amount</span></div>
                                                <div class="nk-tb-col text-end tb-col-sm"><span>Balance</span></div>
                                                <div class="nk-tb-col nk-tb-col-status"><span
                                                        class="sub-text d-none d-md-block">Status</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools"></div>
                                            </div><!-- .nk-tb-item -->
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <div class="nk-tnx-type">
                                                        <div class="nk-tnx-type-icon bg-success-dim text-success">
                                                            <em class="icon ni ni-arrow-up-right"></em>
                                                        </div>
                                                        <div class="nk-tnx-type-text">
                                                            <span class="tb-lead">Deposited Funds</span>
                                                            <span class="tb-date">18/10/2019 12:04 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="tb-lead-sub">Using PayPal Account</span>
                                                    <span class="tb-sub">mypay*****com</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-lead-sub">YWLX52JG73</span>
                                                    <span class="badge badge-dot bg-success">Deposit</span>
                                                </div>
                                                <div class="nk-tb-col text-end">
                                                    <span class="tb-amount">+ 0.010201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">1290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col text-end tb-col-sm">
                                                    <span class="tb-amount">1.30910201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">101290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-status">
                                                    <div class="dot dot-success d-md-none"></div>
                                                    <span
                                                        class="badge badge-sm badge-dim bg-outline-success d-none d-md-inline-flex">Completed</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-2">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#"
                                                                class="bg-white btn btn-sm btn-outline-light btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Approve"><em class="icon ni ni-done"></em></a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#tranxDetails" data-bs-toggle="modal"
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
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-done"></em><span>Approve</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-cross-round"></em><span>Reject</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-repeat"></em><span>Check</span></a>
                                                                        </li>
                                                                        <li><a href="#tranxDetails" data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <div class="nk-tnx-type">
                                                        <div class="nk-tnx-type-icon bg-warning-dim text-warning">
                                                            <em class="icon ni ni-arrow-up-right"></em>
                                                        </div>
                                                        <div class="nk-tnx-type-text">
                                                            <span class="tb-lead">Withdrawal Funds</span>
                                                            <span class="tb-date">18/10/2019 12:04 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="tb-lead-sub">Using PayPal Account</span>
                                                    <span class="tb-sub">mypay*****com</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-lead-sub">YWLX52JG73</span>
                                                    <span class="badge badge-dot bg-warning">Withdrawal</span>
                                                </div>
                                                <div class="nk-tb-col text-end">
                                                    <span class="tb-amount">+ 0.010201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">1290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col text-end tb-col-sm">
                                                    <span class="tb-amount">1.30910201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">101290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-status">
                                                    <div class="dot dot-success d-md-none"></div>
                                                    <span
                                                        class="badge badge-sm badge-dim bg-outline-warning d-none d-md-inline-flex">Upcoming</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-2">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#"
                                                                class="bg-white btn btn-sm btn-outline-light btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Approve"><em class="icon ni ni-done"></em></a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#tranxDetails" data-bs-toggle="modal"
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
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-done"></em><span>Approve</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-cross-round"></em><span>Reject</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-repeat"></em><span>Check</span></a>
                                                                        </li>
                                                                        <li><a href="#tranxDetails" data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <div class="nk-tnx-type">
                                                        <div class="nk-tnx-type-icon bg-info-dim text-info">
                                                            <em class="icon ni ni-arrow-up-right"></em>
                                                        </div>
                                                        <div class="nk-tnx-type-text">
                                                            <span class="tb-lead">Credited Profits</span>
                                                            <span class="tb-date">18/10/2019 12:04 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="tb-lead-sub">Using PayPal Account</span>
                                                    <span class="tb-sub">mypay*****com</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-lead-sub">YWLX52JG73</span>
                                                    <span class="badge badge-dot bg-info">Profit</span>
                                                </div>
                                                <div class="nk-tb-col text-end">
                                                    <span class="tb-amount">+ 0.010201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">1290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col text-end tb-col-sm">
                                                    <span class="tb-amount">1.30910201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">101290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-status">
                                                    <div class="dot dot-info d-md-none"></div>
                                                    <span
                                                        class="badge badge-sm badge-dim bg-outline-info d-none d-md-inline-flex">Pending</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-2">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#"
                                                                class="bg-white btn btn-sm btn-outline-light btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Approve"><em class="icon ni ni-done"></em></a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#tranxDetails" data-bs-toggle="modal"
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
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-done"></em><span>Approve</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-cross-round"></em><span>Reject</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-repeat"></em><span>Check</span></a>
                                                                        </li>
                                                                        <li><a href="#tranxDetails" data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <div class="nk-tnx-type">
                                                        <div class="nk-tnx-type-icon bg-danger-dim text-danger">
                                                            <em class="icon ni ni-arrow-up-right"></em>
                                                        </div>
                                                        <div class="nk-tnx-type-text">
                                                            <span class="tb-lead">Withdrawal Funds</span>
                                                            <span class="tb-date">18/10/2019 12:04 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="tb-lead-sub">Using PayPal Account</span>
                                                    <span class="tb-sub">mypay*****com</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-lead-sub">YWLX52JG73</span>
                                                    <span class="badge badge-dot bg-danger">Withdrawal</span>
                                                </div>
                                                <div class="nk-tb-col text-end">
                                                    <span class="tb-amount">+ 0.010201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">1290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col text-end tb-col-sm">
                                                    <span class="tb-amount">1.30910201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">101290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-status">
                                                    <div class="dot dot-success d-md-none"></div>
                                                    <span
                                                        class="badge badge-sm badge-dim bg-outline-danger d-none d-md-inline-flex">Rejected</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-2">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#"
                                                                class="bg-white btn btn-sm btn-outline-light btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Approve"><em class="icon ni ni-done"></em></a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#tranxDetails" data-bs-toggle="modal"
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
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-done"></em><span>Approve</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-cross-round"></em><span>Reject</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-repeat"></em><span>Check</span></a>
                                                                        </li>
                                                                        <li><a href="#tranxDetails" data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <div class="nk-tnx-type">
                                                        <div class="nk-tnx-type-icon bg-warning-dim text-warning">
                                                            <em class="icon ni ni-arrow-up-right"></em>
                                                        </div>
                                                        <div class="nk-tnx-type-text">
                                                            <span class="tb-lead">Deposited Funds</span>
                                                            <span class="tb-date">18/10/2019 12:04 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="tb-lead-sub">Using PayPal Account</span>
                                                    <span class="tb-sub">mypay*****com</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-lead-sub">YWLX52JG73</span>
                                                    <span class="badge badge-dot bg-warning">Deposit</span>
                                                </div>
                                                <div class="nk-tb-col text-end">
                                                    <span class="tb-amount">+ 0.010201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">1290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col text-end tb-col-sm">
                                                    <span class="tb-amount">1.30910201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">101290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-status">
                                                    <div class="dot dot-warning d-md-none"></div>
                                                    <span
                                                        class="badge badge-sm badge-dim bg-outline-warning d-none d-md-inline-flex">Pending</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-2">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#"
                                                                class="bg-white btn btn-sm btn-outline-light btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Approve"><em class="icon ni ni-done"></em></a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#tranxDetails" data-bs-toggle="modal"
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
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-done"></em><span>Approve</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-cross-round"></em><span>Reject</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-repeat"></em><span>Check</span></a>
                                                                        </li>
                                                                        <li><a href="#tranxDetails" data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <div class="nk-tnx-type">
                                                        <div class="nk-tnx-type-icon bg-warning-dim text-warning">
                                                            <em class="icon ni ni-arrow-up-right"></em>
                                                        </div>
                                                        <div class="nk-tnx-type-text">
                                                            <span class="tb-lead">Withdrawal Funds</span>
                                                            <span class="tb-date">18/10/2019 12:04 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="tb-lead-sub">Using PayPal Account</span>
                                                    <span class="tb-sub">mypay*****com</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-lead-sub">YWLX52JG73</span>
                                                    <span class="badge badge-dot bg-warning">Withdrawal</span>
                                                </div>
                                                <div class="nk-tb-col text-end">
                                                    <span class="tb-amount">+ 0.010201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">1290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col text-end tb-col-sm">
                                                    <span class="tb-amount">1.30910201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">101290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-status">
                                                    <div class="dot dot-success d-md-none"></div>
                                                    <span
                                                        class="badge badge-sm badge-dim bg-outline-warning d-none d-md-inline-flex">Upcoming</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-2">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#"
                                                                class="bg-white btn btn-sm btn-outline-light btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Approve"><em class="icon ni ni-done"></em></a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#tranxDetails" data-bs-toggle="modal"
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
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-done"></em><span>Approve</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-cross-round"></em><span>Reject</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-repeat"></em><span>Check</span></a>
                                                                        </li>
                                                                        <li><a href="#tranxDetails" data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <div class="nk-tnx-type">
                                                        <div class="nk-tnx-type-icon bg-info-dim text-info">
                                                            <em class="icon ni ni-arrow-up-right"></em>
                                                        </div>
                                                        <div class="nk-tnx-type-text">
                                                            <span class="tb-lead">Credited Profits</span>
                                                            <span class="tb-date">18/10/2019 12:04 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="tb-lead-sub">Using PayPal Account</span>
                                                    <span class="tb-sub">mypay*****com</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-lead-sub">YWLX52JG73</span>
                                                    <span class="badge badge-dot bg-info">Profit</span>
                                                </div>
                                                <div class="nk-tb-col text-end">
                                                    <span class="tb-amount">+ 0.010201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">1290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col text-end tb-col-sm">
                                                    <span class="tb-amount">1.30910201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">101290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-status">
                                                    <div class="dot dot-info d-md-none"></div>
                                                    <span
                                                        class="badge badge-sm badge-dim bg-outline-info d-none d-md-inline-flex">Pending</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-2">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#"
                                                                class="bg-white btn btn-sm btn-outline-light btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Approve"><em class="icon ni ni-done"></em></a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#tranxDetails" data-bs-toggle="modal"
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
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-done"></em><span>Approve</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-cross-round"></em><span>Reject</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-repeat"></em><span>Check</span></a>
                                                                        </li>
                                                                        <li><a href="#tranxDetails" data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <div class="nk-tnx-type">
                                                        <div class="nk-tnx-type-icon bg-danger-dim text-danger">
                                                            <em class="icon ni ni-arrow-up-right"></em>
                                                        </div>
                                                        <div class="nk-tnx-type-text">
                                                            <span class="tb-lead">Withdrawal Funds</span>
                                                            <span class="tb-date">18/10/2019 12:04 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="tb-lead-sub">Using PayPal Account</span>
                                                    <span class="tb-sub">mypay*****com</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-lead-sub">YWLX52JG73</span>
                                                    <span class="badge badge-dot bg-danger">Withdrawal</span>
                                                </div>
                                                <div class="nk-tb-col text-end">
                                                    <span class="tb-amount">+ 0.010201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">1290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col text-end tb-col-sm">
                                                    <span class="tb-amount">1.30910201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">101290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-status">
                                                    <div class="dot dot-success d-md-none"></div>
                                                    <span
                                                        class="badge badge-sm badge-dim bg-outline-danger d-none d-md-inline-flex">Rejected</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-2">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#"
                                                                class="bg-white btn btn-sm btn-outline-light btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Approve"><em class="icon ni ni-done"></em></a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#tranxDetails" data-bs-toggle="modal"
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
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-done"></em><span>Approve</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-cross-round"></em><span>Reject</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-repeat"></em><span>Check</span></a>
                                                                        </li>
                                                                        <li><a href="#tranxDetails" data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <div class="nk-tnx-type">
                                                        <div class="nk-tnx-type-icon bg-warning-dim text-warning">
                                                            <em class="icon ni ni-arrow-up-right"></em>
                                                        </div>
                                                        <div class="nk-tnx-type-text">
                                                            <span class="tb-lead">Deposited Funds</span>
                                                            <span class="tb-date">18/10/2019 12:04 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="tb-lead-sub">Using PayPal Account</span>
                                                    <span class="tb-sub">mypay*****com</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-lead-sub">YWLX52JG73</span>
                                                    <span class="badge badge-dot bg-warning">Deposit</span>
                                                </div>
                                                <div class="nk-tb-col text-end">
                                                    <span class="tb-amount">+ 0.010201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">1290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col text-end tb-col-sm">
                                                    <span class="tb-amount">1.30910201 <span>BTC</span></span>
                                                    <span class="tb-amount-sm">101290.49 USD</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-status">
                                                    <div class="dot dot-warning d-md-none"></div>
                                                    <span
                                                        class="badge badge-sm badge-dim bg-outline-warning d-none d-md-inline-flex">Pending</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-2">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#"
                                                                class="bg-white btn btn-sm btn-outline-light btn-icon"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Approve"><em class="icon ni ni-done"></em></a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#tranxDetails" data-bs-toggle="modal"
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
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-done"></em><span>Approve</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-cross-round"></em><span>Reject</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-repeat"></em><span>Check</span></a>
                                                                        </li>
                                                                        <li><a href="#tranxDetails" data-bs-toggle="modal"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .nk-tb-item -->
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
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#address">Security</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" value="Abu Bin Ishtiyak" placeholder="Enter Full name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Email Address</label>
                                        <input type="text" class="form-control form-control-lg" id="display-name" value="Ishtiyak" placeholder="Enter display name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" value="+880" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth</label>
                                        <input type="text" class="form-control form-control-lg date-picker" id="birth-day" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Update Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="address">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Password</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l1" value="2337 Kildeer Drive">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">New Password</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l2" value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-st">Confirm New Password</label>
                                        <input type="text" class="form-control form-control-lg" id="address-st" value="Kentucky">
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