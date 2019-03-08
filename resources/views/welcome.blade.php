@extends('layout')
@section('content')
<div class="mx-auto" style="width: 300px;">
   <h2> Blog Application </h2>
</div>
<form method="POST" action="/blogs/create">
   {{csrf_field()}}
   <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-primary">New Form</button>
   </div>
</form>
<div class="d-flex justify-content-center">
<form method="POST" action="/">
<div class="box">
   @foreach($blogs as $blog)
   <ul>
      <a href="/blogs/{{$blog->id}}">
         <li>{{$blog->title}}</li>
      </a>
      <li>{{(substr($blog->description,0,2))}}</li>
   </ul>
   @endforeach
</div>
<form>
</div>
{{$blogs->links()}}
@endsection