@extends('admin.layout.master')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Add Language</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt">
                                            <a href="#" class="btn btn-icon btn-light d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                            <a href="#" class="btn btn-light d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <form action="{{ route('admin.lang.add_process') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Language Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="name" class="form-control form-control-lg" id="full-name-1" placeholder="English">
                                            </div>
                                            @error('name')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="email-address-1">Language Code</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="code" class="form-control form-control-lg" id="email-address-1" placeholder="en">
                                            </div>
                                            @error('code')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no-1">Language Flag</label>
                                            <div class="form-control-wrap">
                                                <input type="file" name="flag" class="form-control form-control-lg form-control-file" id="phone-no-1">
                                            </div>
                                            @error('flag')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Add Language</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection