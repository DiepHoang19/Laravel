<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
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
            ->with(['category'])
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


    private function renderCategoryOption($categories, $formatted = '-------')
    {
        $options = [];
        foreach ($categories as $cate) {
            $option = (object)[
                'id' => $cate['id'],
                'name' => $cate['name']
            ];
            if ($cate['parent_id'] != 0) {
                $option->name = $formatted . $cate['name'];
            }
            $options[] = $option;
            $options = array_merge($options, $this->renderCategoryOption($cate['children'], $formatted . '---------'));
        }
        return $options;
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::with(['children'])
            ->where('parent_id', 0)
            ->get()
            ->toArray();
        $options = $this->renderCategoryOption($categories);
        return view('product.edit', [
            'product' => $product,
            'categories' => $options,
        ]);
    }

    public function update($id, UpdateProductRequest $request)
    {
        $product = Product::findOrFail($id);
        if ($request->file('thumbnail')) {
            if ($product->nameImage) {
                File::delete(public_path($product->nameImage));
            }
            $nameImage = time() . '.' . $request->file('thumbnail')->extension();
            $path = $request->file('thumbnail')->move(public_path('thumbnails'), $nameImage);
            $product->update([
                'nameImage' => 'thumbnails/' . $nameImage,
            ]);
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'sku' => $request->sku,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('product.index')->with([
            'message' => 'Update successfully !'
        ]);
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
