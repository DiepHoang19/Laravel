<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function index()
    {
        $imageList = Photo::latest()->get();
        return view('product.index', [
            'products' => $imageList
        ]);
        return view('Upload.index');
    }
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/thumbnail');
        $save = new Photo();
        $save->name = $name;
        $save->path = $path;
        $save->save();
        return redirect('/upload')->with('status', 'Image Has been uploaded');
    }
}
