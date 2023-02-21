<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('category.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $categories = Category::where('parent_id', 0)->get();
        return view('category.create', [
            'categories' => $categories
        ]);
    }

    public function store(StoreCategoryRequest $request)
    {
        $categories = Category::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id ?? 0,
        ]);
        return redirect()->route('category.index');
    }
}
