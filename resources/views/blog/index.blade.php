@extends('layouts.master')

@section('title')
    Blog
@endsection

@section('header')
    @include('includes.blog_nav')
@endsection

@section('info-header')  
    <?php $flag = 1 ?>
    <?php $msg = '' ?>
    @include('includes.info_box')
@endsection

@section('content')
    @if ($posts)
        @foreach($posts as $post)
            {{$post}}
        @endforeach
    @endif
@endsection