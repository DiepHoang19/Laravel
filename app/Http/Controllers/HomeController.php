<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(StoreProductRequest $request)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'price' => 'required|numeric|gt:0'
        // ], [
        //     'name.required' => 'Bắt buộc nhập tên',
        //     'price.required' => 'Bắt buộc nhập giá',
        //     'price.numeric' => 'Price phải là số',
        //     'price.gt' => 'Price phải là số dương',
        // ]);
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', [
            'product' => $product
        ]);
    }

    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'price' => $request->price
        ]);
        return redirect()->route('home');
    }

    public function trash($id)
    {
        Product::findOrFail($id)->delete();
        return back();
    }
}
