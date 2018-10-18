@extends('layouts.master')

@section('title')
    Blog
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href=" {{ URL::to('src/css/blog_style.css') }} ">
@endsection

@section('header')
    @include('includes.blog_nav')
@endsection

@section('content')
    @if ($posts)
        @foreach($posts as $post)

            <div class="row m-0 mb-2">
                <div class="col-md-6 mx-auto">
                    <div class="box">
                        <div class="title"> {{ ucfirst($post->title) }} </div>
                        <div class="body"> {{$post->body}} 
                            <a href=" {{url('blog') . '/' . $post->id }} ">Read More.... </a>
                        </div>
                        <span class="author"> {{$post->author. ' | ' .$post->created_at}} </span> 
                    </div>
                </div>
            </div>

        @endforeach
    @endif
    
@endsection

@section('javascript')
    <script>
        document.querySelectorAll('.nav-link')[0].classList.add("active");
    </script>
@endsection
