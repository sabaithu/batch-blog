@extends('layouts.master')

 @section('content')

<h1> Blog Edit</h1>

@include('partials.errors')

@if(Session::has('success_blog_update'))
     <div class="alert alert-success">
     	{{ Session::get('success_blog_update')}}
     </div>
@endif
 <form action="{{ route('blog.update', ['id' => $blog->id] )}}"  method="post">
 	<input type="hidden" name="_method" value="PUT">
 	{{ csrf_field() }}
 	<div class="form-group">
 		<lavel for="title" class="control-label">Title</lavel>
 		<input type="text" name="title" class="form-control" value="{{ $blog->title }}">
 	</div>
 	<div class="form-group">
 		<lavel for="description" class="control-label">Descriptioon</lavel>
 		<textarea type="text" name="description" class="form-control" value ="{{ $blog->description}}">{{ $blog->description }}</textarea>

 	</div>
 	<button type="submit" class="btn btn-primary">Update Blog Post</button>
 </form>
 <hr>
 @stop
