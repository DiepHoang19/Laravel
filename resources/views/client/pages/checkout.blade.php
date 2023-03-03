@extends('client.layout.public')
@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('page.index') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h1 class="heading-2 mb-10">Checkout</h1>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body">There are
                            <span class="text-brand">
                                {{ ShoppingCart::getTotalProduct() }}
                            </span>
                            products in your cart
                        </h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="row mb-50">
                        <div class="col-lg-6 mb-sm-15 mb-lg-0 mb-md-3">
                            <div class="toggle_info">
                                <span><i class="fi-rs-user mr-10"></i><span class="text-muted font-lg">Already have an
                                        account?</span> <a href="#loginform" data-bs-toggle="collapse"
                                        class="collapsed font-lg" aria-expanded="false">Click here to login</a></span>
                            </div>
                            <div class="panel-collapse collapse login_form" id="loginform">
                                <div class="panel-body">
                                    <p class="mb-30 font-sm">If you have shopped with us before, please enter your details
                                        below. If you are a new customer, please proceed to the Billing &amp; Shipping
                                        section.</p>
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="text" name="email" placeholder="Username Or Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="login_footer form-group">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="remember" value="">
                                                    <label class="form-check-label" for="remember"><span>Remember
                                                            me</span></label>
                                                </div>
                                            </div>
                                            <a href="#">Forgot password?</a>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-md" name="login">Log in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form class="apply-coupon">
                                <input type="text" placeholder="Enter Coupon Code...">
                                <button class="btn  btn-md" name="login">Apply Coupon</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="mb-30">Billing Details</h4>
                        <form method="POST" action="{{ route('store.postCheckout') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="customer" placeholder="Name *">
                                    @error('customer')
                                        <div class="alert alert-danger mt-1 mb-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" name="email" placeholder="Email Address *">
                                    @error('email')
                                        <div class="alert alert-danger mt-1 mb-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="address" placeholder="Address *">
                                    @error('address')
                                        <div class="alert alert-danger mt-1 mb-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" name="phone_number" placeholder="Phone *">
                                    @error('phone_number')
                                        <div class="alert alert-danger mt-1 mb-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <textarea rows="5" placeholder="Additional information" name="note"></textarea>
                            </div>
                            <div class="payment ml-30">
                                <h4 class="mb-30">Payment</h4>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input type="hidden" name="payment_method" />
                                        <input class="form-check-input payment-method-input" type="radio"
                                            id="exampleRadios3" data-payment_method="Bank Transfer"
                                            name="payment-method-input">

                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse"
                                            data-target="#bankTranfer" aria-controls="bankTranfer">Direct Bank
                                            Transfer</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input payment-method-input" type="radio"
                                            id="exampleRadios4" data-payment_method="Cash on delivery"
                                            name="payment-method-input">
                                        <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse"
                                            data-target="#checkPayment" aria-controls="checkPayment">Cash on
                                            delivery</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input payment-method-input" type="radio"
                                            id="exampleRadios5" data-payment_method="Online Gateway"
                                            name="payment-method-input">
                                        <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse"
                                            data-target="#paypal" aria-controls="paypal">Online Gateway</label>
                                    </div>
                                    @error('payment_method')
                                        <div class="alert alert-danger mt-1 mb-1">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                                <div class="payment-logo d-flex">
                                    <img class="mr-15"
                                        src="{{ asset('client/assets/imgs/theme/icons/payment-paypal.svg') }}"
                                        alt="">
                                    <img class="mr-15"
                                        src="{{ asset('client/assets/imgs/theme/icons/payment-visa.svg') }}"
                                        alt="">
                                    <img class="mr-15"
                                        src="{{ asset('client/assets/imgs/theme/icons/payment-master.svg') }}"
                                        alt="">
                                    <img src="{{ asset('client/assets/imgs/theme/icons/payment-zapper.svg') }}"
                                        alt="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-fill-out btn-block mt-30">Place an Order<i
                                    class="fi-rs-sign-out ml-15"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="border p-40 cart-totals ml-30 mb-50">
                        <div class="d-flex align-items-end justify-content-between mb-30">
                            <h4>Your Order</h4>
                            <h6 class="text-muted">Subtotal</h6>
                        </div>
                        <div class="divider-2 mb-30"></div>
                        <div class="table-responsive order_table checkout">
                            @php
                                $products = ShoppingCart::getAll();
                            @endphp
                            <table class="table no-border">
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="image product-thumbnail"><img
                                                    src="{{ asset($product->thumbnail) }}" alt="#"></td>
                                            <td>
                                                <h6 class="w-160 mb-5">
                                                    <a href="{{ route('store.detail', ['id' => $product->id]) }}"
                                                        class="text-heading">
                                                        {{ $product->name }}
                                                    </a>
                                                </h6>
                                                </span>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="text-muted pl-20 pr-20">x {{ $product->quantity }}</h6>
                                            </td>
                                            <td>
                                                <h4 class="text-brand">${{ $product->price }}</h4>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.payment-method-input').change(function() {
                if ($(this).is(':checked')) {
                    const paymentMethod = $(this).data('payment_method');
                    $('input[name=payment_method]').val(paymentMethod);
                }
            })
        })
    </script>
@endpush
