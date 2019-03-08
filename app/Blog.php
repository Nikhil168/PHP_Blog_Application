<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=[
        'title',
        'description',
    ];
    
    public function comments()
    {
        return $this->hasmany(Comment::class);
    }
    public function addComments($name,$email,$comment)
    {
         Comment::create([
            'blog_id'=>$this->id,
            'name'=>$name,
            'email'=>$email,
            'comment'=>$comment
       ]);
        
    }
}
