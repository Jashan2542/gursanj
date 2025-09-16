<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'subject' => 'required',
        'description' => 'required',
        'published_at' => 'nullable',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:200',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('blogs', 'public');
    }

    Blog::create($data);

    return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully');
}

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
{
    $request->validate([
        'title' => 'required',
        'subject' => 'required',
        'description' => 'required',
        'published_at' => 'nullable|date',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:200',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        // delete old image if exists
        if ($blog->image && \Storage::disk('public')->exists($blog->image)) {
            \Storage::disk('public')->delete($blog->image);
        }
        $data['image'] = $request->file('image')->store('blogs', 'public');
    }

    $blog->update($data);

    return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully');
}

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully');
    }
}