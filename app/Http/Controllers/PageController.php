<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('client.home.index', [
            'products' => $products
        ]);
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
}
