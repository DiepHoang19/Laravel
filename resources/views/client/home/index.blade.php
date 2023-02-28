@extends('client.layout.public')
@section('content')
    <main class="main">
        <div class="container mb-30">
            <div class="row flex-row-reverse">
                <div class="col-lg-4-5">
                    <section class="home-slider position-relative mb-30">
                        <div class="home-slide-cover mt-30">
                            <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                                <div class="single-hero-slider single-animation-wrap"
                                    style="background-image: url({{ asset('client/assets/imgs/slider/slider-1.png') }});">
                                    <div class="slider-content">
                                        <h1 class="display-2 mb-40">Don’t miss amazing<br> grocery deals</h1>
                                        <p class="mb-65">Sign up for the daily newsletter</p>
                                        <form class="form-subcriber d-flex">
                                            <input type="email" placeholder="Your emaill address">
                                            <button class="btn" type="submit">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="single-hero-slider single-animation-wrap"
                                    style="background-image: url({{ asset('client/assets/imgs/slider/slider-2.png') }});">
                                    <div class="slider-content">
                                        <h1 class="display-2 mb-40">Fresh Vegetables<br> Big discount</h1>
                                        <p class="mb-65">Save up to 50% off on your first order</p>
                                        <form class="form-subcriber d-flex">
                                            <input type="email" placeholder="Your emaill address">
                                            <button class="btn" type="submit">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-arrow hero-slider-1-arrow"></div>
                        </div>
                    </section>
                    <!--End hero-->
                    <section class="product-tabs section-padding position-relative wow fadeIn animated">
                        <div class="section-title style-2">
                            <h3>Popular Products</h3>
                            <ul class="nav nav-tabs links" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab"
                                        data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one"
                                        aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two"
                                        type="button" role="tab" aria-controls="tab-two" aria-selected="false">Milks &
                                        Dairies</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab"
                                        data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three"
                                        aria-selected="false">Coffes & Teas</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab"
                                        data-bs-target="#tab-four" type="button" role="tab" aria-controls="tab-four"
                                        aria-selected="false">Pet Foods</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-five" data-bs-toggle="tab"
                                        data-bs-target="#tab-five" type="button" role="tab" aria-controls="tab-five"
                                        aria-selected="false">Meats</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-six" data-bs-toggle="tab" data-bs-target="#tab-six"
                                        type="button" role="tab" aria-controls="tab-six"
                                        aria-selected="false">Vegetables</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-seven" data-bs-toggle="tab"
                                        data-bs-target="#tab-seven" type="button" role="tab"
                                        aria-controls="tab-seven" aria-selected="false">Fruits</button>
                                </li>
                            </ul>
                        </div>
                        <!--End nav-tabs-->
                        <div class="tab-content wow fadeIn animated" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab-one" role="tabpanel"
                                aria-labelledby="tab-one">
                                <div class="row product-grid-4">
                                    @foreach ($products as $product)
                                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap mb-30" style="height: 90%">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ route('store.detail') }}">
                                                            <img class="default-img"
                                                                src="{{ asset($product->nameImage) }}" alt=""
                                                                height="180px">
                                                            <img class="hover-img" src="{{ asset($product->nameImage) }}"
                                                                height="180px" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Add To Wishlist" class="action-btn"
                                                            href="{{ route('store.wishlist') }}"><i
                                                                class="fi-rs-heart"></i></a>
                                                        {{-- <a aria-label="Compare" class="action-btn"
                                                            href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> --}}
                                                        <a aria-label="Quick view" class="action-btn"
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                                class="fi-rs-eye"></i></a>
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    {{-- <div class="product-category">
                                                        <a href="shop-grid-right.html">Snack</a>
                                                    </div> --}}
                                                    <h2>
                                                        <a href="{{ route('store.detail') }}">
                                                            {{ $product->name }}
                                                        </a>
                                                    </h2>
                                                    <div class="product-rate-cover">
                                                        <div class="product-rate d-inline-block">
                                                            <div class="product-rating" style="width:90%">
                                                            </div>
                                                        </div>
                                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                    </div>
                                                    {{-- <div>
                                                        <span class="font-small text-muted">500g</span>
                                                    </div> --}}
                                                    <div class="product-card-bottom">
                                                        <div class="product-price">
                                                            <span>{{ $product->price }}</span>
                                                            {{-- <span class="old-price">$32.8</span> --}}
                                                        </div>
                                                        <div class="add-cart">
                                                            <a class="add" href="{{ route('store.shoppingCart') }}"><i
                                                                    class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab one-->
                            <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Seeds of Change Organic Quinoa,
                                                        Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-12-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-12-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">All Natural Italian-Style
                                                        Chicken
                                                        Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:80%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">60g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-13-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-13-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Angie’s Boomchickapop Sweet &
                                                        Salty
                                                        Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:85%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">70g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-14-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-14-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Foster Farms Takeout Crispy
                                                        Classic
                                                        Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-15-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-15-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Blue Diamond Almonds Lightly
                                                        Salted
                                                        Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-16-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-16-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Chobani Complete Vanilla Greek
                                                        Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Canada Dry Ginger Ale – 2 L
                                                        Bottle -
                                                        200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Encore Seafoods Stuffed Alaskan
                                                        Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Gorton’s Beer Battered Fish
                                                        Fillets
                                                        with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">400g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Haagen-Dazs Caramel Cone Ice
                                                        Cream
                                                        Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:50%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">100g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab two-->
                            <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('cient/assets/imgs/shop/product-9-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('cient/assets/imgs/shop/product-9-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Seeds of Change Organic
                                                        Quinoa,
                                                        Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">All Natural Italian-Style
                                                        Chicken
                                                        Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:80%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">60g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Angie’s Boomchickapop Sweet &
                                                        Salty
                                                        Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:85%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">70g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-6-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-6-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Foster Farms Takeout Crispy
                                                        Classic
                                                        Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-5-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-5-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Blue Diamond Almonds Lightly
                                                        Salted
                                                        Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-4-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-4-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Chobani Complete Vanilla
                                                        Greek
                                                        Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-3-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-3-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Canada Dry Ginger Ale – 2 L
                                                        Bottle -
                                                        200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-2-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-2-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Encore Seafoods Stuffed
                                                        Alaskan
                                                        Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Gorton’s Beer Battered Fish
                                                        Fillets
                                                        with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">400g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-1-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-1-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Haagen-Dazs Caramel Cone Ice
                                                        Cream
                                                        Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:50%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">100g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab three-->
                            <div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-6-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-6-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Seeds of Change Organic
                                                        Quinoa,
                                                        Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">All Natural Italian-Style
                                                        Chicken
                                                        Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:80%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">60g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Angie’s Boomchickapop Sweet &
                                                        Salty
                                                        Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:85%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">70g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Foster Farms Takeout Crispy
                                                        Classic
                                                        Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-4-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-4-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Blue Diamond Almonds Lightly
                                                        Salted
                                                        Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-3-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-3-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Chobani Complete Vanilla
                                                        Greek
                                                        Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-2-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-2-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Canada Dry Ginger Ale – 2 L
                                                        Bottle -
                                                        200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-1-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-1-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Encore Seafoods Stuffed
                                                        Alaskan
                                                        Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-11-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-11-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Gorton’s Beer Battered Fish
                                                        Fillets
                                                        with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">400g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-12-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-12-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Haagen-Dazs Caramel Cone Ice
                                                        Cream
                                                        Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:50%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">100g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab four-->
                            <div class="tab-pane fade" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-12-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-12-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Seeds of Change Organic
                                                        Quinoa,
                                                        Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-13-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-13-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">All Natural Italian-Style
                                                        Chicken
                                                        Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:80%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">60g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-14-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-14-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Angie’s Boomchickapop Sweet &
                                                        Salty
                                                        Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:85%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">70g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-15-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-15-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Foster Farms Takeout Crispy
                                                        Classic
                                                        Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-16-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-16-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Blue Diamond Almonds Lightly
                                                        Salted
                                                        Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-5-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-5-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Chobani Complete Vanilla
                                                        Greek
                                                        Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Canada Dry Ginger Ale – 2 L
                                                        Bottle -
                                                        200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Encore Seafoods Stuffed
                                                        Alaskan
                                                        Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Gorton’s Beer Battered Fish
                                                        Fillets
                                                        with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">400g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Haagen-Dazs Caramel Cone Ice
                                                        Cream
                                                        Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:50%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">100g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab five-->
                            <div class="tab-pane fade" id="tab-six" role="tabpanel" aria-labelledby="tab-six">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-4-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-4-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Seeds of Change Organic
                                                        Quinoa,
                                                        Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-6-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-6-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">All Natural Italian-Style
                                                        Chicken
                                                        Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:80%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">60g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Angie’s Boomchickapop Sweet &
                                                        Salty
                                                        Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:85%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">70g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Foster Farms Takeout Crispy
                                                        Classic
                                                        Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-5-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-5-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Blue Diamond Almonds Lightly
                                                        Salted
                                                        Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-6-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-6-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Chobani Complete Vanilla
                                                        Greek
                                                        Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Canada Dry Ginger Ale – 2 L
                                                        Bottle -
                                                        200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Encore Seafoods Stuffed
                                                        Alaskan
                                                        Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Gorton’s Beer Battered Fish
                                                        Fillets
                                                        with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">400g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Haagen-Dazs Caramel Cone Ice
                                                        Cream
                                                        Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:50%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">100g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab six-->
                            <div class="tab-pane fade" id="tab-seven" role="tabpanel" aria-labelledby="tab-seven">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-5-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-5-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Seeds of Change Organic
                                                        Quinoa,
                                                        Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-3-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-3-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">All Natural Italian-Style
                                                        Chicken
                                                        Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:80%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">60g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Angie’s Boomchickapop Sweet &
                                                        Salty
                                                        Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:85%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">70g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Foster Farms Takeout Crispy
                                                        Classic
                                                        Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Blue Diamond Almonds Lightly
                                                        Salted
                                                        Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-16-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-16-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Chobani Complete Vanilla
                                                        Greek
                                                        Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-7-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Canada Dry Ginger Ale – 2 L
                                                        Bottle -
                                                        200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-8-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Encore Seafoods Stuffed
                                                        Alaskan
                                                        Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">500g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-9-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Gorton’s Beer Battered Fish
                                                        Fillets
                                                        with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">400g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('store.detail') }}">
                                                        <img class="default-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-1.jpg') }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('client/assets/imgs/shop/product-10-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="{{ route('store.detail') }}">Haagen-Dazs Caramel Cone Ice
                                                        Cream
                                                        Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:50%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">100g</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i
                                                                class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab seven-->
                        </div>
                        <!--End tab-content-->
                    </section>
                    <!--Products Tabs-->
                    <section class="section-padding pb-5">
                        <div class="section-title">
                            <h3 class="">Deals Of The Day</h3>
                            <a class="show-all" href="shop-grid-right.html">
                                All Deals
                                <i class="fi-rs-angle-right"></i>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="{{ route('store.detail') }}">
                                                <img src="{{ asset('client/assets/imgs/banner/banner-5.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="{{ route('store.detail') }}">Seeds of Change Organic Quinoa,
                                                    Brown</a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">500g</span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$32.85</span>
                                                    <span class="old-price">$33.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i
                                                            class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="{{ route('store.detail') }}">
                                                <img src="{{ asset('client/assets/imgs/banner/banner-6.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2026/04/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="{{ route('store.detail') }}">Perdue Simply Smart Organics
                                                    Gluten</a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">400g</span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$24.85</span>
                                                    <span class="old-price">$26.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i
                                                            class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 d-none d-lg-block">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="{{ route('store.detail') }}">
                                                <img src="{{ asset('client/assets/imgs/banner/banner-7.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2027/03/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="{{ route('store.detail') }}">Signature Wood-Fired Mushroom</a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:80%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (3.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">600g</span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$12.85</span>
                                                    <span class="old-price">$13.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i
                                                            class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 d-none d-xl-block">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="{{ route('store.detail') }}">
                                                <img src="{{ asset('client/assets/imgs/banner/banner-8.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="{{ route('store.detail') }}">Simply Lemonade with Raspberry
                                                    Juice</a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:80%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (3.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">800g</span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$15.85</span>
                                                    <span class="old-price">$16.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i
                                                            class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End Deals-->
                    <section class="banners">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="banner-img wow fadeIn animated">
                                    <img src="{{ asset('client/assets/imgs/banner/banner-1.png') }}" alt="">
                                    <div class="banner-text">
                                        <h4>Everyday Fresh & <br>Clean with Our<br> Products</h4>
                                        <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i
                                                class="fi-rs-arrow-small-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="banner-img wow fadeIn animated">
                                    <img src="{{ asset('client/assets/imgs/banner/banner-2.png') }}" alt="">
                                    <div class="banner-text">
                                        <h4>Make your Breakfast<br> Healthy and Easy</h4>
                                        <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i
                                                class="fi-rs-arrow-small-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-md-none d-lg-flex">
                                <div class="banner-img wow fadeIn animated  mb-sm-0">
                                    <img src="{{ asset('client/assets/imgs/banner/banner-3.png') }}" alt="">
                                    <div class="banner-text">
                                        <h4>The best Organic <br>Products Online</h4>
                                        <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i
                                                class="fi-rs-arrow-small-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End banners-->
                </div>
                <div class="col-lg-1-5 primary-sidebar sticky-sidebar pt-30">
                    <div class="sidebar-widget widget-category-2 mb-30">
                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                        <ul>
                            <li><a href="shop-grid-right.html"> <img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-1.svg') }}"
                                        alt="">Milks &
                                    Dairies</a><span class="count">30</span></li>
                            <li><a href="shop-grid-right.html"> <img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-2.svg') }}"
                                        alt="">Clothing</a><span class="count">35</span></li>
                            <li><a href="shop-grid-right.html"> <img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-3.svg') }}"
                                        alt="">Pet
                                    Foods </a><span class="count">42</span></li>
                            <li><a href="shop-grid-right.html"> <img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-4.svg') }}"
                                        alt="">Baking
                                    material</a><span class="count">68</span></li>
                            <li><a href="shop-grid-right.html"> <img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-5.svg') }}"
                                        alt="">Fresh
                                    Fruit</a><span class="count">87</span></li>
                        </ul>
                    </div>
                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30">
                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Fill by price</h5>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <span>Range:</span><input type="text" id="amount" name="price"
                                            placeholder="Add Your Price" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item mb-10 mt-10">
                                <label class="fw-900">Color</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox1" value="">
                                    <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox2" value="">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>Green
                                            (78)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox3" value="">
                                    <label class="form-check-label" for="exampleCheckbox3"><span>Blue
                                            (54)</span></label>
                                </div>
                                <label class="fw-900 mt-15">Item Condition</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox11" value="">
                                    <label class="form-check-label" for="exampleCheckbox11"><span>New
                                            (1506)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox21" value="">
                                    <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished
                                            (27)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox31" value="">
                                    <label class="form-check-label" for="exampleCheckbox31"><span>Used
                                            (45)</span></label>
                                </div>
                            </div>
                        </div>
                        <a href="shop-grid-right.html" class="btn btn-sm btn-default"><i
                                class="fi-rs-filter mr-5"></i> Fillter</a>
                    </div>
                    <!-- Product sidebar Widget -->
                    <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">New products</h5>
                        <div class="single-post clearfix">
                            <div class="image">
                                <img src="{{ asset('client/assets/imgs/shop/thumbnail-3.jpg') }}" alt="#">
                            </div>
                            <div class="content pt-10">
                                <h5><a href="shop-product-detail.html">Chen Cardigan</a></h5>
                                <p class="price mb-0 mt-5">$99.50</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width:90%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post clearfix">
                            <div class="image">
                                <img src="{{ asset('client/assets/imgs/shop/thumbnail-4.jpg') }}" alt="#">
                            </div>
                            <div class="content pt-10">
                                <h6><a href="shop-product-detail.html">Chen Sweater</a></h6>
                                <p class="price mb-0 mt-5">$89.50</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width:80%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post clearfix">
                            <div class="image">
                                <img src="{{ asset('client/assets/imgs/shop/thumbnail-5.jpg') }}" alt="#">
                            </div>
                            <div class="content pt-10">
                                <h6><a href="shop-product-detail.html">Colorful Jacket</a></h6>
                                <p class="price mb-0 mt-5">$25</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width:60%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                        <img src="{{ asset('client/assets/imgs/banner/banner-11.png') }}" alt="">
                        <div class="banner-text">
                            <span>Oganic</span>
                            <h4>Save 17% <br> on <span class="text-brand">Oganic</span><br> Juice</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <section class="popular-categories section-padding">
            <div class="container wow fadeIn animated">
                <div class="section-title">
                    <div class="title">
                        <h3>Shop by Categories </h3>
                        <a class="show-all" href="shop-grid-right.html">
                            All Categories
                            <i class="fi-rs-angle-right"></i>
                        </a>
                    </div>
                    <div class="slider-arrow slider-arrow-2 flex-right carausel-8-columns-arrow"
                        id="carausel-8-columns-arrows"></div>
                </div>
                <div class="carausel-8-columns-cover position-relative">
                    <div class="carausel-8-columns" id="carausel-8-columns">
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-1') }}.svg"
                                        alt=""></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Milks and <br>Dairies</a></h6>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-2') }}.svg"
                                        alt=""></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Wines & <br> Alcohol</a></h6>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-3') }}.svg"
                                        alt=""></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Clothing & <br>Beauty</a></h6>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-4') }}.svg"
                                        alt=""></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Pet Foods <br>& Toy</a></h6>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-5') }}.svg"
                                        alt=""></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Packaged <br>fast food</a></h6>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-6') }}.svg"
                                        alt=""></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Baking <br>material</a></h6>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-7') }}.svg"
                                        alt=""></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Vegetables <br>& tubers</a></h6>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-8') }}.svg"
                                        alt=""></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Fresh <br>Seafood</a></h6>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-9') }}.svg"
                                        alt=""></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Noodles <br>Rice</a></h6>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-10') }}.svg"
                                        alt=""></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Fastfood</a></h6>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('client/assets/imgs/theme/icons/category-11') }}.svg"
                                        alt=""></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Ice cream</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End category slider-->
        <section class="section-padding mb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated animated animated">Top Selling</h4>
                        <div class="product-list-small wow fadeIn animated animated animated">
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-1.jpg') }}"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">Nestle Original Coffee-Mate Coffee
                                            Creamer</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-2.jpg') }}"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">Nestle Original Coffee-Mate Coffee
                                            Creamer</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-3.jpg') }}"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">Nestle Original Coffee-Mate Coffee
                                            Creamer</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated animated animated">Trending Products
                        </h4>
                        <div class="product-list-small wow fadeIn animated animated animated">
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-4.jpg') }}"
                                            alt="">
                                    </a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">Organic Cage-Free Grade A Large Brown
                                            Eggs</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-5.jpg') }}"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">Seeds of Change Organic Quinoa, Brown, &
                                            Red
                                            Rice</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-6.jpg') }}"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">Naturally Flavored Cinnamon Vanilla Light
                                            Roast
                                            Coffee</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated animated animated">Recently added</h4>
                        <div class="product-list-small wow fadeIn animated animated animated">
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-7.jpg') }}"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">Pepperidge Farm Farmhouse Hearty White
                                            Bread</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-8.jpg') }}"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">Organic Frozen Triple Berry Blend</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-9.jpg') }}"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">Oroweat Country Buttermilk Bread</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated animated animated">Top Rated</h4>
                        <div class="product-list-small wow fadeIn animated animated animated">
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-10.jpg') }}"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">Foster Farms Takeout Crispy Classic
                                            Buffalo
                                            Wings</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-11.jpg') }}"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">Angie’s Boomchickapop Sweet & Salty
                                            Kettle
                                            Corn</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ route('store.detail') }}"><img
                                            src="{{ asset('client/assets/imgs/shop/thumbnail-12.jpg') }}"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ route('store.detail') }}">All Natural Italian-Style Chicken
                                            Meatballs</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End 4 columns-->
    </main>
@endsection
