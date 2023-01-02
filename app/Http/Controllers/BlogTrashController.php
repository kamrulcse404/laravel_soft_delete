<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogTrashController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'blogs' => Blog::all()
        ]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Blog::create($formData);

        return redirect()->route('blogs.index');
    }

    public function edit($id)
    {
        return view('blog.edit', [
            'blog' => Blog::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $formData = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Blog::where('id', $id)->update($formData);

        return redirect()->route('blogs.index');
    }

    public function destroy($id)
    {
        Blog::where('id', $id)->delete();

        return redirect()->back();
    }

    public function trashData()
    {
        return view('blog.trashData', [
            'trashBlogs' => Blog::onlyTrashed()->get()
        ]);
    }

    public function restore($id)
    {
        Blog::withTrashed()->findOrFail($id)->restore();

        return redirect()->back();
    }

    public function permanentDelete($id)
    {
        Blog::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->back();
    }
}
