@extends('layouts.master')

 @section('content')
@if(Session::has('blog_deleted'))
    <div class="alert alert-success">
    	{{ Session::get('blog_deleted')}}
    </div>
@endif
@if(Session::has('success_blog_update'))
     <div class="alert alert-success">
     	{{ Session::get('success_blog_update')}}
     </div>
@endif
 <h1>Blog List - <a href="/blog/create">Create Blog</a></h1>
 @foreach($blogs as $blog)
    <a href="/blog/{{ $blog->id }}">
    	<h1>{{ $blog->title }}</h1>
    </a>
    <p>{{ str_limit($blog->description, 20 ) }}</p>
    <p>
    	<a href="/blog/{{ $blog->id }}/edit">Edit</a>
    	<form action="{{ route('blog.destroy', ['id' => $blog->id]) }}" method="post">
    		{{ csrf_field() }}
    		<input type="hidden" name="_method" value="Delete">
    		<button type="submit">Delete this post.</button>
    	</form>
    </p>
 @endforeach

 <hr>
 @stop
