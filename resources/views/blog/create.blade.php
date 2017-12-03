@extends('layouts.master')

 @section('content')

 <h1>Create</h1>
 <p class="lead">Lorem ispum dolor sit amet,consectuer adipisiciong elit.Mariores, posssiums, ullam? Deleniti dicta eaque facere, facilis in inventore mollitaia officiis prrro tatam volupataibus! Adipisci autem cumque ejnim explicabo, isut swqui</p>
 <hr>
 <a href="{{ route(blog.index)}}" class="btn btn-info">Blogs</a>
 <a href="{{ route(blog.create)}}" class="btn btn-info">Add New Blog</a>
 @stop
