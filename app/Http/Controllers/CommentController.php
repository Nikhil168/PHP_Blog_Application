<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Blog $blog,Request $request)
    {
        request()->validate([
            'name'=>'required',
            'email'=>'required',
            'comment'=>'required'
         ]);
        $blog->addComments(
            request('name'),
            request('email'),
            request('comment')
        );
        return back();
    }

}
