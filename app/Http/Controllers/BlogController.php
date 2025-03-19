<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view("blogs.index", compact("blogs"));
    }
   
    public function show(Blog $blog) {
        return view("blogs.show", compact("blog"));
    }

    public function create() {
    return view("blogs.create");
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:1000"],
        ]);
        Blog::create([
            "content" => $request->content,
        ]);
        return redirect("/blogs");
        }

    public function edit(Blog $blog) {
        return view("blogs.edit", compact("blog"));
    }

    public function update(Request $request, Blog $blog) {
        $validated = $request->validate([
            "content" => ["required", "max:1000"],
        ]);
        $blog->content = $validated["content"];
        $blog->save();
        return view("blogs.show", compact("blog"));
    }
    public function destroy(Blog $blog) {
        $blog->delete();
        return redirect("/blogs");
    }
}