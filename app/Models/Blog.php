<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ["title","content", "category_id"];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
{
    return $this->hasMany(Comment::class);
}
}
