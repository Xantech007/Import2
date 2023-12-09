@extends('auth.master')

@section('content')
    <div class="nk-content ">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45" id="scroll">
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="html/index.html" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="./images/logo.png"
                                srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png"
                                srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Register</h5>
                            <div class="nk-block-des">
                                <p>Create New Meedbrink Account</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="name" class="form-control form-control-lg" id="name"
                                    placeholder="Enter your name">
                            </div>
                            @error('name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <div class="form-control-wrap">
                                <input type="text" name="email" class="form-control form-control-lg" id="email"
                                    placeholder="Enter your email address or username">
                            </div>
                            @error('email')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password</label>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg"
                                    data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" name="password" class="form-control form-control-lg" id="password"
                                    placeholder="Enter your passcode">
                            </div>
                            @error('password')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password-confirm">Re-Enter Password</label>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg"
                                    data-target="password-confirm">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" name="password_confirmation" class="form-control form-control-lg" id="password-confirm"
                                    placeholder="Enter your passcode">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-control-xs custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox">
                                <label class="custom-control-label" for="checkbox">I agree to Dashlite <a tabindex="-1"
                                        href="#">Privacy Policy</a> &amp; <a tabindex="-1" href="#">
                                        Terms.</a></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
                        </div>
                    </form><!-- form -->
                    <div class="form-note-s2 pt-4"> Already have an account ? <a
                            href="{{ route('login') }}"><strong>Sign in instead</strong></a>
                    </div>
                    <div class="text-center pt-4 pb-3">
                        <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                    </div>
                    <ul class="nav justify-center gx-8">
                        <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                    </ul>
                </div><!-- .nk-block -->
                @include('auth.footer')
            </div><!-- nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-abstract"></div><!-- nk-split-content -->
        </div><!-- nk-split -->
    </div>
@endsection
