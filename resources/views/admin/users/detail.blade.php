@extends('admin.layout.master')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Users / <strong class="text-primary small">Abu Bin Ishtiyak</strong></h3>
                            <div class="nk-block-des text-soft">
                                <ul class="list-inline">
                                    <li>User ID: <span class="text-base">UD003054</span></li>
                                    <li>Last Login: <span class="text-base">15 Feb, 2019 01:02 PM</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="html/user-list-regular.html" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="html/user-list-regular.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-content">
                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#personal"><em class="icon ni ni-user-circle"></em><span>Personal</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#transactions"><em class="icon ni ni-repeat"></em><span>Transactions</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#active-plans"><em class="icon ni ni-loader"></em><span>Active Plans</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#wallets"><em class="icon ni ni-wallet-alt"></em><span>Wallets</span></a>
                                    </li>
                                    <li class="nav-item nav-item-trigger d-xxl-none">
                                        <a href="#" class="toggle btn btn-icon btn-trigger" data-target="userAside"><em class="icon ni ni-user-list-fill"></em></a>
                                    </li>
                                </ul><!-- .nav-tabs -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="personal">
                                        <div class="card-inner">
                                            <div class="nk-block">
                                                <div class="nk-block-head">
                                                    <h5 class="title">Personal Information</h5>
                                                    <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                                </div><!-- .nk-block-head -->
                                                <div class="profile-ud-list">
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Full Name</span>
                                                            <span class="profile-ud-value">Abu Bin Ishtiyak</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Date of Birth</span>
                                                            <span class="profile-ud-value">10 Aug, 1980</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Mobile Number</span>
                                                            <span class="profile-ud-value">01713040400</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Email Address</span>
                                                            <span class="profile-ud-value">info@softnio.com</span>
                                                        </div>
                                                    </div>
                                                </div><!-- .profile-ud-list -->
                                            </div><!-- .nk-block -->
                                            <div class="nk-block">
                                                <div class="nk-block-head nk-block-head-line">
                                                    <h6 class="title overline-title text-base">Additional Information</h6>
                                                </div><!-- .nk-block-head -->
                                                <div class="profile-ud-list">
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Joining Date</span>
                                                            <span class="profile-ud-value">08-16-2018 09:04PM</span>
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
                                    </div>
                                    <div class="tab-pane" id="transactions">
                                        <div class="card-inner">
                                            <div class="nk-block">
                                                <div class="card card-bordered card-stretch">
                                                    <div class="card-inner-group">
                                                        <div class="card-inner p-0" id="scroll">
                                                            <table class="table table-tranx">
                                                                <thead>
                                                                    <tr class="tb-tnx-head">
                                                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                                                        <th class="tb-tnx-info">
                                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                                <span>Bill For</span>
                                                                            </span>
                                                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                                                <span class="d-md-none">Date</span>
                                                                                <span class="d-none d-md-block">
                                                                                    <span>Issue Date</span>
                                                                                    <span>Due Date</span>
                                                                                </span>
                                                                            </span>
                                                                        </th>
                                                                        <th class="tb-tnx-amount is-alt">
                                                                            <span class="tb-tnx-total">Total</span>
                                                                            <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                                                        </th>
                                                                        <th class="tb-tnx-action">
                                                                            <span>&nbsp;</span>
                                                                        </th>
                                                                    </tr><!-- tb-tnx-item -->
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4947</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Enterprize Year Subscrition</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">10-05-2019</span>
                                                                                <span class="date">10-13-2019</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$599.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status">
                                                                                <span class="badge badge-dot bg-warning">Due</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4904</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Maintenance Year Subscription</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">06-19-2019</span>
                                                                                <span class="date">06-26-2019</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4829</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Enterprize Year Subscrition</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">10-04-2018</span>
                                                                                <span class="date">10-12-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$599.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4830</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Enterprize Anniversary Subscription</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-04-2018</span>
                                                                                <span class="date">14-12-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$399.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4840</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Enterprize Coverage Subscription</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-danger">Cancel</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4844</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Manual Subscription Adjustments</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4847</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Automatic Subscription Adjustments</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4748</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Tiered Subscription</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4748</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Tiered Subscription</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4748</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Flexible Subscription Plan</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                </tbody>
                                                            </table>
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card-inner-group -->
                                                </div><!-- .card -->
                                            </div><!-- .nk-block -->
                                        </div><!-- .card-inner -->
                                    </div>
                                    <div class="tab-pane" id="active-plans">
                                        <div class="card-inner">
                                            <div class="nk-block">
                                                <div class="card card-bordered card-stretch">
                                                    <div class="card-inner-group">
                                                        <div class="card-inner p-0" id="scroll">
                                                            <table class="table table-tranx">
                                                                <thead>
                                                                    <tr class="tb-tnx-head">
                                                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                                                        <th class="tb-tnx-info">
                                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                                <span>Bill For</span>
                                                                            </span>
                                                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                                                <span class="d-md-none">Date</span>
                                                                                <span class="d-none d-md-block">
                                                                                    <span>Issue Date</span>
                                                                                    <span>Due Date</span>
                                                                                </span>
                                                                            </span>
                                                                        </th>
                                                                        <th class="tb-tnx-amount is-alt">
                                                                            <span class="tb-tnx-total">Total</span>
                                                                            <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                                                        </th>
                                                                        <th class="tb-tnx-action">
                                                                            <span>&nbsp;</span>
                                                                        </th>
                                                                    </tr><!-- tb-tnx-item -->
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4947</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Enterprize Year Subscrition</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">10-05-2019</span>
                                                                                <span class="date">10-13-2019</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$599.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status">
                                                                                <span class="badge badge-dot bg-warning">Due</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4904</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Maintenance Year Subscription</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">06-19-2019</span>
                                                                                <span class="date">06-26-2019</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4829</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Enterprize Year Subscrition</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">10-04-2018</span>
                                                                                <span class="date">10-12-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$599.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4830</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Enterprize Anniversary Subscription</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-04-2018</span>
                                                                                <span class="date">14-12-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$399.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4840</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Enterprize Coverage Subscription</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-danger">Cancel</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4844</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Manual Subscription Adjustments</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4847</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Automatic Subscription Adjustments</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4748</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Tiered Subscription</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4748</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Tiered Subscription</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4748</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Flexible Subscription Plan</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">12-08-2018</span>
                                                                                <span class="date">13-22-2018</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount is-alt">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">$99.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                                        </td>
                                                                        <td class="tb-tnx-action">
                                                                            <div class="dropdown">
                                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                    <ul class="link-list-plain">
                                                                                        <li><a href="#">View</a></li>
                                                                                        <li><a href="#">Edit</a></li>
                                                                                        <li><a href="#">Remove</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- tb-tnx-item -->
                                                                </tbody>
                                                            </table>
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card-inner-group -->
                                                </div><!-- .card -->
                                            </div><!-- .nk-block -->
                                        </div><!-- .card-inner -->
                                    </div>
                                    <div class="tab-pane" id="wallets">
                                        <div class="card-inner">
                                            <div class="nk-block">
                                                <div class="nk-wg-card is-dark card card-bordered">
                                                    <div class="card-inner">
                                                        <div class="nk-iv-wg2">
                                                            <div class="user-card">
                                                                <div class="user-avatar">
                                                                    <img src="./images/avatar/a-sm.jpg" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="lead-text">Bitcoin Wallet</span>
                                                                </div>
                                                            </div>
                                                            <div class="nk-iv-wg2-text mt-3">
                                                                <div class="nk-iv-wg2-amount"> <span>50,600.48 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-block -->
                                        </div><!-- .card-inner -->
                                    </div>
                                </div>
                            </div><!-- .card-content -->
                            <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl" data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true" data-toggle-body="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card user-card-s2">
                                            <div class="user-avatar lg bg-primary">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <h5>Abu Bin Ishtiyak</h5>
                                                <span class="sub-text">info@softnio.com</span>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner card-inner-sm">
                                        <ul class="btn-toolbar justify-center gx-1">
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-download-cloud"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em class="icon ni ni-na"></em></a></li>
                                        </ul>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="overline-title-alt mb-2">In Account</div>
                                        <div class="profile-balance">
                                            <div class="profile-balance-group gx-4">
                                                <div class="profile-balance-sub">
                                                    <div class="profile-balance-amount">
                                                        <div class="number">2,500.00 <small class="currency currency-usd">USD</small></div>
                                                    </div>
                                                    <div class="profile-balance-subtitle">Invested Amount</div>
                                                </div>
                                                <div class="profile-balance-sub">
                                                    <span class="profile-balance-plus text-soft"><em class="icon ni ni-plus"></em></span>
                                                    <div class="profile-balance-amount">
                                                        <div class="number">1,643.76</div>
                                                    </div>
                                                    <div class="profile-balance-subtitle">Profit Earned</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">23</span>
                                                    <span class="sub-text">Total Order</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">20</span>
                                                    <span class="sub-text">Complete</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">3</span>
                                                    <span class="sub-text">Progress</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <h6 class="overline-title-alt mb-2">Additional</h6>
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <span class="sub-text">User ID:</span>
                                                <span>UD003054</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Status:</span>
                                                <span class="lead-text text-success">Active</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Register At:</span>
                                                <span>Nov 24, 2019</span>
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