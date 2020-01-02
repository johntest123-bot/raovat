<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Comment;

class Service extends Model
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    protected $fillable = [
        'id', 'title', 'content', 'slug', 'thumbnail', 'meta_title', 'meta_keywords', 'meta_description'
    ];
}