@extends('layout')
@section('content')
<div class="mx-auto" style="width: 300px;">
<h2>Show Page</h2>
</div>
Title: {{$blogs->title}} <br/>
Description: {{$blogs->description}}
<form method="post" action="/blogs/{{$blogs->id}}/comments">
   <div class="box border border-primary">
      {{csrf_field()}}
      <div class="form-group">
         <label for="name">Name</label>
         <input type="text" class="form-control" id="name " name="name" 
         aria-describedby="Help" placeholder="Enter name">
      </div>
      <div class="form-group">
         <label for="email">Email</label>
         <input type="email" class="form-control" id="email" name="email"
          placeholder="Enter email">
      </div>
      <div class="mb-3">
         <label for="textarea">Comments</label>
         <textarea class="form-control" id="textarea" name='comment' 
            placeholder="Enter Comments"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">SubmitComment</button>
   </div>
</form>
@if($errors->any())
<div class="notification is-danger">
   <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
   </ul>
</div>
@endif
<div class="d-flex justify-content-center">
<h2>Comments</h2>
</div>
<div class="d-flex justify-content-center">
<div class="box">
   @foreach($comments as $comment)
   <ul>
      <li>{{$comment['name']}}</li>
      <li>{{$comment['email']}}</li>
      <li>{{$comment['comment']}}</li>
   </ul>
   @endforeach
</div>
</div>
@endsection