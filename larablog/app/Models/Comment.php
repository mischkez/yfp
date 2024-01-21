<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $with = ['author']; // eager load author, meaning that when we fetch a comment, we also fetch the author

    public function author()
    {
        return $this->belongsTo(\App\Models\User::class, 'author_id');
    }

    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class);
    }
}

