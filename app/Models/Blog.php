<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ["content", "category_id"];
    
    public function category()
    {
        return $this->belongsTo(Category::class); // Saista ar Category modeli, izmantojot category_id
    }

    public function comments()
{
    return $this->hasMany(Comment::class);
}
}
