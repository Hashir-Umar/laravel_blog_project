@extends('layouts.master')

@section('title')
    Admin Panel
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href=" {{ URL::to('src/css/admin_style.css') }} " />
@endsection

@section('header')
    @include('includes.admin_nav')
    @include('includes.error')
@endsection


@section('info-header')  
    
    <?php $flag = 1 ?>
    <?php Session::has('success') ? $msg = Session::get('success') : $msg = '' ;  ?>
    @include('includes.info_box')

@endsection

@section('content')

    <div class="col-md-12 col-lg-12 mx-auto">
        <div class="post-card">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('postEditor')}} " class="btn btn-sm btn-outline-info">New Post</a>
                </div>
                <div class="card-body">
                    @foreach($posts as $post)
                        <div class="post-container">
                            <div class="title"> {{$post->title}} </div>
                            <div class="content"> {{ $post->author . ' | ' . $post->created_at}} </div>
                            <div class="footer">
                                <a href="#">View</a> |
                                <a href="#">Edit</a> |
                                <a href=" {{route('delete', ['post_id' => $post->isd])}} ">Delete</a> 
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script>
        document.querySelectorAll('.nav-link')[0].classList.add("active");
    </script>
@endsection