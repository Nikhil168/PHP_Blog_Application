<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Blog;

class Comment extends Model
{
    protected $fillable=[
        'blog_id',
        'name',
        'email',
        'comment',
    ];
    public function blog()
    {
       return $this->belongsTo(Blog::class);
    }
}
