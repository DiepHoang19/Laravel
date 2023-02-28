<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shoppingCart()
    {
        return view('client.pages.card');
    }

    public function checkout()
    {
        return view('client.pages.checkout');
    }

    public function detail()
    {
        return view('client.pages.product-detail');
    }

    public function wishlist()
    {
        return view('client.pages.shop-wishlist');
    }
}
