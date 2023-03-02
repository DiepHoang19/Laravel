@extends('admin.layout.master')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Edit Product</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">ecommerce</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit
                                                Product</li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li><a href="{{ route('product.index') }}" class="btn btn-primary btn-md d-md-none"><em
                                                class="icon ni ni-eye"></em><span>View</span></a></li>
                                    <li><a href="{{ route('product.index') }}"
                                            class="btn btn-primary d-none d-md-inline-flex"><em
                                                class="icon ni ni-eye"></em><span>View Products</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <form method="POST" action="{{ route('post.update', ['id' => $post->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-xxl-9">
                                    <div class="gap gy-4">
                                        <div class="gap-col">
                                            <div class="card card-gutter-md">
                                                <div class="card-body">
                                                    <div class="row g-gs">
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">Title</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="productname" placeholder="Title"
                                                                        value="{{ $post->title }}" name="title">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="baseprice"
                                                                    class="form-label">Price</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="baseprice" placeholder="Content"
                                                                        value="{{ $post->content }}" name="content">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gap-col">
                                            <ul class="d-flex align-items-center gap g-3">
                                                <li><button type="submit" class="btn btn-primary">Save
                                                        Changes</button></li>
                                                <li><a href="{{ route('product.index') }}" class="btn border-0">Cancel</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3">
                                    <div class="card card-gutter-md">
                                        <div class="card-body">
                                            <div class="row g-gs">
                                                <div class="col-12">
                                                    <div class="form-group"><label class="form-label">Thumbnail</label>
                                                        <div class="form-control-wrap">
                                                            <div
                                                                class="image-upload-wrap d-flex flex-column align-items-center">
                                                                <img id="image-result" class="w-100 h-100"
                                                                    src="{{ asset($post->thumbnail) }}" alt="avatar">
                                                                <div class="pt-3">
                                                                    <input class="upload-image" name="thumbnail"
                                                                        data-target="image-result" id="change-avatar"
                                                                        type="file" max="1" hidden><label
                                                                        for="change-avatar"
                                                                        class="btn btn-md btn-primary">Change</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('thumbnail')
                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                        <div class="form-note mt-3">Set the product
                                                            thumbnail image. Only *.png, *.jpg and *.jpeg
                                                            image files are accepted.</div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group"><label class="form-label">Tags</label>
                                                        <div class="form-control-wrap"><input class="js-tags" value=""
                                                                type="text" placeholder="Add tags to a product"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group"><label class="form-label">Status</label>
                                                        <div class="form-control-wrap"><select class="js-select"
                                                                data-search="true" data-sort="false">
                                                                <option value="">Select an option</option>
                                                                <option value="1">Published</option>
                                                                <option value="2">Draft</option>
                                                                <option value="3">Scheduled</option>
                                                                <option value="4">Inactive</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
