<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::latest()
            // ->when($request->keyword, function($query) use($request){
            //     $query->where('name', 'LIKE', '%' . $request->keyword . '%');
            // })
            ->searchByKeyword($request->keyword)
            ->paginate($request->limit);
        return view('product.index', [
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


        $nameImage = time() . '.' . $request->file('thumbnail')->extension();
        $path = $request->file('thumbnail')->move(public_path('thumbnails'), $nameImage);
        $photo = new Photo();
        $photo->name = $nameImage;
        $photo->path = 'thumbnails/' . $nameImage;
        $photo->save();

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'sku' => $request->sku,
            'quantity' => $request->quantity,
            'nameImage' => $photo->path,
        ]);

        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', [
            'product' => $product
        ]);
    }

    public function update($id, StoreProductRequest $request)
    {
        $product = Product::findOrFail($id);
        if ($product->nameImage) {
            File::delete(public_path($product->nameImage));
        }
        $nameImage = time() . '.' . $request->file('thumbnail')->extension();
        $path = $request->file('thumbnail')->move(public_path('thumbnails'), $nameImage);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'sku' => $request->sku,
            'quantity' => $request->quantity,
            'nameImage' => 'thumbnails/' . $nameImage,
        ]);
        return redirect()->route('product.index');
    }

    public function trash($id)
    {
        $product = Product::findOrFail($id);
        if ($product->nameImage) {
            File::delete(public_path($product->nameImage));
        }
        $product->delete();
        return back();
    }
}
