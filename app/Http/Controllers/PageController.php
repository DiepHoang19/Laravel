<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Comment;
use App\Models\Posts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $blogs = Posts::all();
        return view('client.pages.blog', [
            'blogs' => $blogs
        ]);
    }


    public function blogDetail($id)
    {
        $post = Posts::findOrFail($id);
        return view('client.pages.blog-detail', [
            'post' => $post,
        ]);
    }



    public function about()
    {
        return view('client.pages.about');
    }

    public function contact()
    {
        return view('client.pages.contact-us');
    }

    public function pageSuccess()
    {
        return view('client.pages.page-success');
    }
}
