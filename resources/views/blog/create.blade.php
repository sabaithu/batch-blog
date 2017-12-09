@extends('layouts.master')

 @section('content')

<h1>Create Blog Create</h1>

 @include('partials.errors')

@if(Session::has('success_blog'))
     <div class="alert alert-success">
     	{{ Session::get('success_blog')}}
     </div>
@endif
 <form action="{{ route('blog.store')}}"  method="post">
 	{{ csrf_field() }}
 	<div class="form-group">
 		<lavel for="title" class="control-label">Title</lavel>
 		<input type="text" name="title" class="form-control">
 	</div>
 	<div class="form-group">
 		<lavel for="description" class="control-label">Descriptioon</lavel>
 		<textarea type="text" name="description" class="form-control"></textarea>

 	</div>
 	<button type="submit" class="btn btn-primary">Create New Blog</button>
 </form>
 <hr>
 @stop
