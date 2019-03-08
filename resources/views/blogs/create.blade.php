@extends('layout')
@section('content')
<div class="mx-auto" style="width: 300px;">
<h2>Create Blog Page</h2>
</div>
<div class="box border border-primary">
<form method="post" action="/">
   {{csrf_field()}}
   <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" aria-describedby="Help" placeholder="Enter title">
   </div>
   <div class="mb-3">
         <label for="description">Description</label>
         <textarea class="form-control" id="description" name='description' 
            placeholder="Enter description"></textarea>
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
   @if($errors->any())
   <div class="notification is-danger">
      <ul>
         @foreach($errors->all() as $error)
         <li>{{$error}}</li>
         @endforeach
      </ul>
   </div>
</form>
</div>
@endif
@endsection