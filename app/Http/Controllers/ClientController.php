<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.home.index',);
    }

    public function shoppingcard()
    {
        return view('client.pages.card');
    }

    public function blog()
    {
        return view('client.pages.blog');
    }

    public function about()
    {
        return view('client.pages.about');
    }

    public function contact()
    {
        return view('client.pages.contact-us');
    }

    public function checkout()
    {
        return view('client.pages.checkout');
    }
    public function login()
    {
        return view('client.auth.login');
    }
    public function register()
    {
        return view('client.auth.register');
    }
    public function account()
    {
        return view('client.auth.account');
    }
    public function cart()
    {
        return view('client.pages.shop-cart');
    }
    public function wishlist()
    {
        return view('client.pages.shop-wishlist');
    }
    public function detail()
    {
        return view('client.pages.product-detail');
    }
}
