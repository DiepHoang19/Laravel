<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.category.index', [
            'categories' => $categories
        ]);
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

    public function create()
    {
        $categories = Category::with(['children'])
            ->where('parent_id', 0)
            ->get()
            ->toArray();
        $options = $this->renderCategoryOption($categories);
        return view('admin.category.create', [
            'categories' => $options
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

    public function update($id, UpdateCategoriesRequest $request)
    {
        $categories = Category::findOrFail($id);
        $categories->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);
        return redirect()->route('category.index');
    }


    public function trash($id)
    {
        $categories = Category::findOrFail($id);
        $categories->children()->update([
            'parent_id' => 0
        ]);
        $categories->delete();
        return back()->with('status', 'Delete success!');
    }


    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('admin.category.edit', [
            'categories' => $categories,
        ]);
    }
}
