<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view("blogs.index", compact("blogs"));
    }
   
    public function show(Blog $blog) {
        $categories = Category::all();
        return view("blogs.show", compact("blog", "categories"));
    }

    public function create() {
        $categories = Category::all();  // Iegūst visas kategorijas
        return view("blogs.create", compact("categories"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:1000"]
        ]);

        Blog::create([
            "content" => $request->content,
            "category_id" => $request->category_id,
        ]);
        return redirect("/blogs");
    }

    public function edit(Blog $blog) {
        $categories = Category::all();  // Iegūst kategorijas, lai varētu rediģēt blogu ar kategoriju
        return view("blogs.edit", compact("blog", "categories"));
    }

    public function update(Request $request, Blog $blog) {
        $validated = $request->validate([
            "content" => ["required", "max:1000"],
            "category_id" => ["nullable"]  // Atļauj tukšu kategoriju
        ]);
    
        // Ja kategorija nav izvēlēta, piešķir "Nav kategorijas" kategoriju
        $category_id = $validated['category_id'] ?? Category::where('category_name', 'Nav kategorijas')->first()->id;
    
        // Atjauno bloga ierakstu ar jauno kategoriju
        $blog->content = $validated["content"];
        $blog->category_id = $category_id;  // Pievieno pareizo kategorijas ID
        $blog->save();
        return view("blogs.show", compact("blog"));
    }
    public function destroy(Blog $blog) {
        $blog->delete();
        return redirect("/blogs");
    }
}