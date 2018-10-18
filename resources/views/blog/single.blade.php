@extends('layouts.master')

@section('title')
    Blog
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href=" {{ URL::to('src/css/blog_style.css') }} ">
    <style>
        .author { color: #888; }
        .body { text-indent: 60px; text-align: justify; }
    </style>
@endsection

@section('header')
    @include('includes.blog_nav')
@endsection

@section('content')
    
    <div class="col-md-8 mx-auto">
       
        <h1> {{ ucfirst($posts->title)}} </h1>
        <h5 class="author"> Author: {{$posts->author}} </h5> 
        <p class="body"> {{$posts->body}} </p> 
       
        <a href="{{route('index')}}" class="mt-4 btn btn-sm btn-outline-warning">Back</a>
    </div>

@endsection

@section('javascript')
    <script>
        document.querySelectorAll('.nav-link')[0].classList.add("active");
    </script>
@endsection
