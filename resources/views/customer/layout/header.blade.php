<div class="nk-header nk-header-fluid nk-header-fixed is-theme">
    <div class="container-xl wide-lg">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger me-sm-2 d-lg-none">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em
                        class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}" srcset="./images/logo2x.png 2x"
                        alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('images/logo-dark.png') }}" srcset="./images/logo-dark2x.png 2x"
                        alt="logo-dark">
                    <span class="nio-version">Invest</span>
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-menu" data-content="headerNav">
                <div class="nk-header-mobile">
                    <div class="nk-header-brand">
                        <a href="html/index.html" class="logo-link">
                            <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x"
                                alt="logo">
                            <img class="logo-dark logo-img" src="./images/logo-dark.png"
                                srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            <span class="nio-version">Invest</span>
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em
                                class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <!-- Menu -->
                <ul class="nk-menu nk-menu-main ui-s2">
                    <li class="nk-menu-item">
                        <a href="{{ route('customer.dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('customer.myplan.index') }}" class="nk-menu-link">
                            <span class="nk-menu-text">My Plans</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('customer.mining-plans.index') }}" class="nk-menu-link">
                            <span class="nk-menu-text">Invest</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('customer.market-analysis') }}" class="nk-menu-link">
                            <span class="nk-menu-text">Market Analysis</span>
                        </a>
                    </li>
                </ul>
            </div><!-- .nk-header-menu -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown notification-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="#">Mark All as Read</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to
                                                <span>Widthdrawl</span>
                                            </div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed
                                            </div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to
                                                <span>Widthdrawl</span>
                                            </div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed
                                            </div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to
                                                <span>Widthdrawl</span>
                                            </div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed
                                            </div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                </div><!-- .nk-notification -->
                            </div><!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li><!-- .dropdown -->
                    <li class="dropdown language-dropdown d-none d-sm-flex me-n1">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="quick-icon">
                                <img class="icon" src="./images/flags/english-sq.png" alt="">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                            <ul class="language-list">
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="./images/flags/english.png" alt="" class="language-flag">
                                        <span class="language-name">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                        <span class="language-name">Español</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="./images/flags/french.png" alt="" class="language-flag">
                                        <span class="language-name">Français</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                        <span class="language-name">Türkçe</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li><!-- .dropdown -->
                    <li class="hide-mb-sm">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="nk-quick-nav-icon" data-bs-toggle="tooltip" title="Sign out">
                            <em class="icon ni ni-signout"></em>
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <li class="dropdown user-dropdown order-sm-first">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status @if (Auth::user()->status == 'active')
                                        user-status-verified
                                    @else
                                    user-status-unverified
                                    @endif text-capitalize">{{ Auth::user()->status }}</div>
                                    <div class="user-name dropdown-indicator text-capitalize">{{ Auth::user()->name }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ Auth::user()->name }}</span>
                                        <span class="sub-text">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner user-account-info">
                                <h6 class="overline-title-alt">Account Balance</h6>
                                <div class="user-balance">{{ number_format(Auth::user()->balance, 2) }} <small class="currency currency-usd">USD</small>
                                </div>
                                <div class="user-balance-sub">Invested <span>{{ number_format($myplan->sum('invested_amount'), 2) }} <span
                                            class="currency currency-usd">USD</span></span></div>
                                <a href="#" class="link"><span>Withdraw Balance</span> <em
                                        class="icon ni ni-wallet-out"></em></a>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('customer.profile.index') }}"><em
                                                class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li class="d-flex justify-content-between"><div><a href="#"><em
                                                class="icon ni ni-moon"></em><span>Dark Mode</span>
                                            </a></div><div class="mt-1">@livewire('theme')</div></li>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .dropdown -->
                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
