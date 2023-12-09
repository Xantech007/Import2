@extends('admin.layout.master')

@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Edit Language</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="#" class="btn btn-icon btn-light d-md-none"><em
                                                        class="icon ni ni-arrow-left"></em></a>
                                                <a href="#" class="btn btn-light d-none d-md-inline-flex"><em
                                                        class="icon ni ni-arrow-left"></em><span>Back</span></a>
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
                                <form action="{{ route('admin.lang.edit_process', $lang->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name-1">Language Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="full-name-1" name="name" placeholder="English" value="{{ $lang->name }}">
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
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="email-address-1" name="code" placeholder="en" value="{{ $lang->code }}">
                                                </div>
                                                @error('code')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Language Flag</label>
                                                <div class="form-control-wrap">
                                                    <input type="file"
                                                        class="form-control form-control-lg form-control-file"
                                                        id="phone-no-1" name="flag">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="mt-4">
                                                <img src="{{ asset('uploads/' . $lang->flag) }}" alt="flag"
                                                    width="70">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Update
                                                    Language</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct"
                        data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">New Product</h5>
                                <div class="nk-block-des">
                                    <p>Add information and add new product.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="product-title">Product Title</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="product-title">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="regular-price">Regular Price</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" id="regular-price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="sale-price">Sale Price</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" id="sale-price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="stock">Stock</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="stock">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="SKU">SKU</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="SKU">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="category">Category</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="category">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tags">Tags</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="tags">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="upload-zone small bg-lighter my-2">
                                        <div class="dz-message">
                                            <span class="dz-message-text">Drag and drop file</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                            New</span></button>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
