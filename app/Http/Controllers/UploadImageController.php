<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function index()
    {
        $photos = Photo::latest()->get();
        return view('Upload.index', [
            'photos' => $photos
        ]);

        // return view('Upload.index');
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        $name = time() . '.' . $request->file('image')->extension();
        $path = $request->file('image')->move(public_path('thumbnails'), $name);
        $photo = new Photo();
        $photo->name = $name;
        $photo->path = 'thumbnails/' . $name;
        $photo->save();
        return redirect('/upload')->with('status', 'Upload success!');
    }
}
