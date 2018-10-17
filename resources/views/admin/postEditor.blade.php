@extends('layouts.master')

@section('title')
    Create Post
@endsection

@section('header')
    @include('includes.admin_nav')
    @include('includes.error')
@endsection

@section('content')
    <div class="col-md-8 mx-auto mt-4">
        <form class="form" action="{{route('create')}}" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control form-control-sm" name="title" value="">
            </div>
            <div class="form-group">
                <label for="authors">Author:</label>            
                <input type="text" class="form-control form-control-sm" name="author">
            </div>
            <div class="form-group">
                <label for="bofy">Post:</label>                        
                <textarea name="body" class="form-control form-control-sm" cols="30" rows="15"></textarea>
            </div>
            <button class="btn btn-outline-info">Save</button>
            <a href="{{ route('admin') }}" class="btn btn-outline-info" >Cancel</a>
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
    </div>
@endsection

   
