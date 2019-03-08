<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;
use Validator;

class BlogController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title'=>'required',
            'description'=>'required|max:1000',
        ]);
        $blog=new Blog();
        $blog->title=request('title');
        $blog->description=request('description');
        $blog->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $blogs=Blog::orderBy('id', 'DESC')->paginate(5);
        return view('welcome',compact('blogs'));
    }

     /**
     * Display the specified resource and store data in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function blogsDetails($id)
    {
        $blogs=Blog::find($id);
        $comments = Comment::select('email','name','comment')->where('blog_id', $id)->orderBy('id','desc')->get()->toArray();
        return view('blogs.show',compact('blogs','comments'));
    }
}
