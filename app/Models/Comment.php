<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['author','blog_id', 'comment'];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}