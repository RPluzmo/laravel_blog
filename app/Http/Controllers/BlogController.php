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
        $categories = Category::all(); 
        return view("blogs.create", compact("categories"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "max:50"],
            "content" => ["required", "max:500"],
            "category_id" => ["nullable", "exists:categories,id"] // Pārliecinās, ka kategorija eksistē
        ]);

        $category_id = $request->category_id ?? Category::where('category_name', 'Nav kategorijas')->value('id');
        
        Blog::create([
            "title" => $request->title,
            "content" => $request->content,
            "category_id" => $category_id
        ]);
        
        return redirect("/blogs");
    }

    public function edit(Blog $blog) {
        $categories = Category::all();  // Iegūst kategorijas, lai varētu rediģēt blogu ar kategoriju
        return view("blogs.edit", compact("blog", "categories"));
    }

    public function update(Request $request, Blog $blog) {
        $validated = $request->validate([
            "title" => ["required", "max:50"],
            "content" => ["required", "max:500"],
            "category_id" => ["nullable", "exists:categories,id"],
            "author" => ["required", "max:50"],  // Atļauj tukšu vai esošu kategoriju
        ]);
    
        // Ja kategorija nav izvēlēta, piešķir "Nav kategorijas" ID vai null, ja nav atrodams
        $category_id = $validated['category_id'] ?? Category::where('category_name', 'Nav kategorijas')->value('id');
    
        $blog->update([
            "title" => $validated["title"],
            "content" => $validated["content"],
            "category_id" => $category_id,
            "author" => $validated["content"],
        ]);
    
        return redirect("/blogs/{$blog->id}");
    }

    public function destroy(Blog $blog) {
        $blog->delete();
        return redirect("/blogs");
    }

    public function storeComment(Request $request, Blog $blog){
        $validated = $request->validate([
            'comment' => 'required|max:500',
            'author' => 'required|max:50'
        ]);

        $blog->comments()->create([
            'comment' => $validated['comment'],
            'author' => $validated['author']
        ]);

        return redirect()->back();
    }
}
