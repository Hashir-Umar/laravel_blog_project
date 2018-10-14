@extends('layouts.master')

@section('title')
    Admin Panel
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href=" {{ URL::to('src/css/admin_style.css') }} " />
@endsection

@section('header')

    @include('includes.admin_nav')

@endsection

@section('content')

    <div class="col-md-6">
        <div class="post-card">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-sm btn-outline-info">New Post</button>
                    <button class="btn btn-sm btn-outline-info">Show all Posts</button>
                </div>
                <div class="card-body">
                    <div class="post-container">
                        <div class="title"></div>
                        <div class="content">This post is made up of an meaning </div>
                        <div class="footer">
                            <a href="">View</a> |
                            <a href="">Edit</a> |
                            <a href="">Delete</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection