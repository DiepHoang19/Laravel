@extends('layout.master')
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
                        <form method="POST" action="{{ route('product.update', ['id' => $product->id]) }}">
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
                                                                    class="form-label">Product Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="productname" placeholder="Product Name"
                                                                        value="{{ $product->name }}" name="name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="baseprice"
                                                                    class="form-label">Price</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="baseprice" placeholder="Product price"
                                                                        value="{{ $product->price }}" name="price">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="sku"
                                                                    class="form-label">SKU</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $product->sku }}" name="sku"
                                                                        id="sku" placeholder="SKU number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="barcode"
                                                                    class="form-label">Barcode</label>
                                                                <div class="form-control-wrap"><input type="text"
                                                                        class="form-control" id="barcode"
                                                                        placeholder="Barcode number"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label
                                                                    class="form-label">Quantity</label>
                                                                <div class="row g-gs">
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" class="form-control"
                                                                            value="{{ $product->quantity }} name="quantity"
                                                                            placeholder="On shelf">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gap-col">
                                            <div class="card card-gutter-md">
                                                <div class="card-body">
                                                    <div class="form-group"><label class="form-label">Upload
                                                            Media</label>
                                                        <div class="form-control-wrap">
                                                            <div class="js-upload" id="dropzoneFile1"
                                                                data-message-icon="img">
                                                                <div class="dz-message" data-dz-message>
                                                                    <div class="dz-message-icon"></div><span
                                                                        class="dz-message-text">Drop files
                                                                        here or click to upload.</span>
                                                                    <div class="dz-message-btn mt-2"><button
                                                                            class="btn btn-md btn-primary">Upload</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-note mt-3">Set the product media
                                                            gallery.</div>
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
                                                                <div class="media media-huge border"><img
                                                                        id="image-result" class="w-100 h-100"
                                                                        src="../images/avatar/avatar-placeholder.jpg"
                                                                        alt="avatar"></div>
                                                                <div class="pt-3"><input class="upload-image"
                                                                        data-target="image-result" id="change-avatar"
                                                                        type="file" max="1" hidden><label
                                                                        for="change-avatar"
                                                                        class="btn btn-md btn-primary">Change</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-note mt-3">Set the product
                                                            thumbnail image. Only *.png, *.jpg and *.jpeg
                                                            image files are accepted.</div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group"><label class="form-label">Categories</label>
                                                        <div class="form-control-wrap"><select class="js-select" multiple
                                                                data-search="true" data-sort="false">
                                                                <option value="">Select an option</option>
                                                                <option value="1">Computers</option>
                                                                <option value="2">Watches</option>
                                                                <option value="3">Headphones</option>
                                                                <option value="4">Footwear</option>
                                                                <option value="5">Cameras</option>
                                                                <option value="6">Shirts</option>
                                                                <option value="7">Household</option>
                                                                <option value="8">Handbags</option>
                                                                <option value="9">Wines</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group"><label class="form-label">Tags</label>
                                                        <div class="form-control-wrap"><input class="js-tags"
                                                                value="" type="text"
                                                                placeholder="Add tags to a product"></div>
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
