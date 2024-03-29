@extends('client.layout.public')
@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> <a href="#">Recipes</a>
                    <span></span> {{ $post->title }}
                </div>
            </div>
        </div>
        <div class="page-content mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-11 col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="single-page pt-50 pr-30">
                                    <div class="single-header style-2">
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-12 m-auto">
                                                <h6 class="mb-10"><a href="#">Recipes</a></h6>
                                                <h2 class="mb-10">{{ $post->title }}
                                                </h2>
                                                <div class="single-header-meta">
                                                    <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                                        <a class="author-avatar" href="#">
                                                            <img class="img-circle"
                                                                src="{{ asset('client/assets/imgs/blog/author-1.png') }}"
                                                                alt="">
                                                        </a>
                                                        <span class="post-by">By <a href="#">Sugar Rosie</a></span>
                                                        <span class="post-on has-dot">2 hours ago</span>
                                                        <span class="time-reading has-dot">8 mins read</span>
                                                    </div>
                                                    <div class="social-icons single-share">
                                                        <ul class="text-grey-5 d-inline-block">
                                                            <li class="mr-5"><a href="#"><img
                                                                        src="{{ asset('client/assets/imgs/theme/icons/icon-bookma.svgrk') }}"
                                                                        alt=""></a></li>
                                                            <li><a href="#"><img
                                                                        src="{{ asset('client/assets/imgs/theme/icons/icon-heart-2.svg') }}"
                                                                        alt=""></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <figure class="single-thumbnail">
                                        <img src="{{ asset($post->thumbnail) }}" alt="">
                                    </figure>
                                    <div class="single-content">
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-12 m-auto">
                                                <p class="single-excerpt">{{ $post->content }}</p>
                                                <p>We've reviewed and ranked all of the best smartwatches on the market
                                                    right now, and we've made a definitive list of the top 10 devices you
                                                    can buy today. One of the 10 picks below may just be your perfect next
                                                    smartwatch.</p>
                                                <p>Those top-end wearables span from the Apple Watch to Fitbits, Garmin
                                                    watches to Tizen-sporting Samsung watches. There's also Wear OS which is
                                                    Google's own wearable operating system in the vein of Apple's watchOS -
                                                    you’ll see it show up in a lot of these devices.</p>
                                                <h5 class="mt-50">Lorem ipsum dolor sit amet cons</h5>
                                                <p>Throughout our review process, we look at the design, features, battery
                                                    life, spec, price and more for each smartwatch, rank it against the
                                                    competition and enter it into the list you'll find below.</p>
                                                <img class="mb-30" src="{{ asset('client/assets/imgs/blog/blog-21.png') }}"
                                                    alt="">
                                                <p>Tortor, lobortis semper viverra ac, molestie tortor laoreet amet euismod
                                                    et diam quis aliquam consequat porttitor integer a nisl, in faucibus
                                                    nunc et aenean turpis dui dignissim nec scelerisque ullamcorper eu
                                                    neque, augue quam quis lacus pretium eros est amet turpis nunc in turpis
                                                    massa et eget facilisis ante molestie penatibus dolor volutpat, porta
                                                    pellentesque scelerisque at ornare dui tincidunt cras feugiat tempor
                                                    lectus</p>
                                                <blockquote>
                                                    <p>Integer eu faucibus <a href="#">dolor</a><sup><a
                                                                href="#">[5]</a></sup>. Ut venenatis tincidunt diam
                                                        elementum imperdiet. Etiam accumsan semper nisl eu congue. Sed
                                                        aliquam magna erat, ac eleifend lacus rhoncus in.</p>
                                                </blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet id enim,
                                                    libero sit. Est donec lobortis cursus amet, cras elementum libero
                                                    convallis feugiat. Nulla faucibus facilisi tincidunt a arcu, sem donec
                                                    sed sed. Tincidunt morbi scelerisque lectus non. At leo mauris, vel
                                                    augue. Facilisi diam consequat amet, commodo lorem nisl, odio malesuada
                                                    cras. Tempus lectus sed libero viverra ut. Facilisi rhoncus elit sit
                                                    sit.</p>
                                                <!--Entry bottom-->
                                                <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                                                    <div class="tags w-50 w-sm-100">
                                                        <a href="blog-category-big.html" rel="tag"
                                                            class="hover-up btn btn-sm btn-rounded mr-10">deer</a>
                                                        <a href="blog-category-big.html" rel="tag"
                                                            class="hover-up btn btn-sm btn-rounded mr-10">nature</a>
                                                        <a href="blog-category-big.html" rel="tag"
                                                            class="hover-up btn btn-sm btn-rounded mr-10">conserve</a>
                                                    </div>
                                                    <div class="social-icons single-share">
                                                        <ul class="text-grey-5 d-inline-block">
                                                            <li><strong class="mr-10">Share this:</strong></li>
                                                            <li class="social-facebook"><a href="#"><img
                                                                        src="{{ asset('client/assets/imgs/theme/icons/icon-facebo.svgok') }}"
                                                                        alt=""></a></li>
                                                            <li class="social-twitter"> <a href="#"><img
                                                                        src="{{ asset('client/assets/imgs/theme/icons/icon-twitt.svger') }}"
                                                                        alt=""></a></li>
                                                            <li class="social-instagram"><a href="#"><img
                                                                        src="{{ asset('client/assets/imgs/theme/icons/icon-instagr.svgam') }}"
                                                                        alt=""></a></li>
                                                            <li class="social-linkedin"><a href="#"><img
                                                                        src="{{ asset('client/assets/imgs/theme/icons/icon-pintere.svgst') }}"
                                                                        alt=""></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="comment-form">
                                                    <h3 class="mb-15">Leave a Comment</h3>
                                                    <div class="product-rate d-inline-block mb-30">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-9 col-md-12">
                                                            <form class="form-contact comment_form mb-50"
                                                                action="{{ route('comment.postComment') }}" method="POST"
                                                                id="commentForm">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input name="post_id" type="hidden"
                                                                                value="{{ $post->id }}" />
                                                                            <textarea class="form-control w-100" name="body" id="comment" cols="30" rows="9"
                                                                                placeholder="Write Comment"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="name"
                                                                                id="name" type="text"
                                                                                placeholder="Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="email"
                                                                                id="email" type="email"
                                                                                placeholder="Email">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit"
                                                                        class="button button-contactForm">Post
                                                                        Comment</button>
                                                                </div>
                                                            </form>
                                                            <div class="comments-area">
                                                                <h3 class="mb-30">Comments</h3>
                                                                <div class="comment-list">
                                                                    @foreach ($post->comments()->get() as $comment)
                                                                        <div
                                                                            class="single-comment justify-content-between d-flex mb-30">
                                                                            <div
                                                                                class="user justify-content-between d-flex">
                                                                                <div class="thumb text-center">
                                                                                    <img src="assets/imgs/blog/author-2.png"
                                                                                        alt="">
                                                                                    <a href="#"
                                                                                        class="font-heading text-brand">Sienna</a>
                                                                                </div>
                                                                                <div class="desc">
                                                                                    <div
                                                                                        class="d-flex justify-content-between mb-10">
                                                                                        <div
                                                                                            class="d-flex align-items-center">
                                                                                            <span
                                                                                                class="font-xs text-muted">December
                                                                                                4, 2021 at 3:12 pm </span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="product-rate d-inline-block">
                                                                                            <div class="product-rating"
                                                                                                style="width:80%">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="mb-10">
                                                                                        {{ $comment->body }}
                                                                                        <a href="#"
                                                                                            class="reply">Reply</a>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 primary-sidebar sticky-sidebar pt-50">
                                <div class="widget-area">
                                    <div class="sidebar-widget-2 widget_search mb-50">
                                        <div class="search-form">
                                            <form action="#">
                                                <input type="text" placeholder="Search…">
                                                <button type="submit"> <i class="fi-rs-search"></i> </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="sidebar-widget widget-category-2 mb-50">
                                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                                        <ul>
                                            <li><a href="shop-grid-right.html"> <img
                                                        src="{{ asset('client/assets/imgs/theme/icons/category.svg-1') }}"
                                                        alt="">Milks
                                                    & Dairies</a><span class="count">30</span></li>
                                            <li><a href="shop-grid-right.html"> <img
                                                        src="{{ asset('client/assets/imgs/theme/icons/category.svg-2') }}"
                                                        alt="">Clothing</a><span class="count">35</span></li>
                                            <li><a href="shop-grid-right.html"> <img
                                                        src="{{ asset('client/assets/imgs/theme/icons/category.svg-3') }}"
                                                        alt="">Pet
                                                    Foods </a><span class="count">42</span></li>
                                            <li><a href="shop-grid-right.html"> <img
                                                        src="{{ asset('client/assets/imgs/theme/icons/category.svg-4') }}"
                                                        alt="">Baking
                                                    material</a><span class="count">68</span></li>
                                            <li><a href="shop-grid-right.html"> <img
                                                        src="{{ asset('client/assets/imgs/theme/icons/category.svg-5') }}"
                                                        alt="">Fresh
                                                    Fruit</a><span class="count">87</span></li>
                                        </ul>
                                    </div>
                                    <!-- Product sidebar Widget -->
                                    <div class="sidebar-widget product-sidebar  mb-50 p-30 bg-grey border-radius-10">
                                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Trending Now</h5>
                                        <div class="single-post clearfix">
                                            <div class="image">
                                                <img src="{{ asset('client/assets/imgs/shop/thumbnail-3.jpg') }}"
                                                    alt="#">
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
                                                <img src="{{ asset('client/assets/imgs/shop/thumbnail-4.jpg') }}"
                                                    alt="#">
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
                                                <img src="{{ asset('client/assets/imgs/shop/thumbnail-5.jpg') }}"
                                                    alt="#">
                                            </div>
                                            <div class="content pt-10">
                                                <h6><a href="shop-product-detail.html">Colorful Jacket</a></h6>
                                                <p class="price mb-0 mt-5">$25</p>
                                                <div class="product-rate">
                                                    <div class="product-rating" style="width:60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post clearfix">
                                            <div class="image">
                                                <img src="{{ asset('client/assets/imgs/shop/thumbnail-6.jpg') }}"
                                                    alt="#">
                                            </div>
                                            <div class="content pt-10">
                                                <h6><a href="shop-product-detail.html">Lorem, ipsum</a></h6>
                                                <p class="price mb-0 mt-5">$25</p>
                                                <div class="product-rate">
                                                    <div class="product-rating" style="width:60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-widget widget_instagram wow fadeInUp animated mb-50">
                                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Gallery</h5>
                                        <div class="instagram-gellay">
                                            <ul class="insta-feed">
                                                <li>
                                                    <a href="#"><img class="border-radius-5"
                                                            src="{{ asset('client/assets/imgs/shop/thumbnail-1.jpg') }}"
                                                            alt=""></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img class="border-radius-5"
                                                            src="{{ asset('client/assets/imgs/shop/thumbnail-2.jpg') }}"
                                                            alt=""></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img class="border-radius-5"
                                                            src="{{ asset('client/assets/imgs/shop/thumbnail-3.jpg') }}"
                                                            alt=""></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img class="border-radius-5"
                                                            src="{{ asset('client/assets/imgs/shop/thumbnail-4.jpg') }}"
                                                            alt=""></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img class="border-radius-5"
                                                            src="{{ asset('client/assets/imgs/shop/thumbnail-5.jpg') }}"
                                                            alt=""></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img class="border-radius-5"
                                                            src="{{ asset('client/assets/imgs/shop/thumbnail-6.jpg') }}"
                                                            alt=""></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Tags-->
                                    <div class="sidebar-widget widget-tags mb-50 pb-10">
                                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Popular Tags</h5>
                                        <ul class="tags-list">
                                            <li class="hover-up"><a href="blog-category-grid.html"><i
                                                        class="fi-rs-cross mr-10"></i>Cabbage</a></li>
                                            <li class="hover-up"><a href="blog-category-grid.html"><i
                                                        class="fi-rs-cross mr-10"></i>Broccoli</a></li>
                                            <li class="hover-up"><a href="blog-category-grid.html"><i
                                                        class="fi-rs-cross mr-10"></i>Smoothie</a></li>
                                            <li class="hover-up"><a href="blog-category-grid.html"><i
                                                        class="fi-rs-cross mr-10"></i>Fruit</a></li>
                                            <li class="hover-up mr-0"><a href="blog-category-grid.html"><i
                                                        class="fi-rs-cross mr-10"></i>Salad</a></li>
                                            <li class="hover-up mr-0"><a href="blog-category-grid.html"><i
                                                        class="fi-rs-cross mr-10"></i>Appetizer</a></li>
                                        </ul>
                                    </div>
                                    <div class="banner-img wow fadeIn mb-50 animated d-lg-block d-none">
                                        <img src="{{ asset('client/assets/imgs/banner/banner-11.png') }}" alt="">
                                        <div class="banner-text">
                                            <span>Oganic</span>
                                            <h4>Save 17% <br> on <span class="text-brand">Oganic</span><br> Juice</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
