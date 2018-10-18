@extends('layouts.master')

@section('title')
    Create Post
@endsection

@include('error')

@section('content')
    <div class="col-12 text-center">
        <h1>Create Post</h1>
    </div>
    <div class="col-md-8 mx-auto">
        <form class="form" action="{{route('create')}}" method="post">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title">
            <label for="authors">Author:</label>            
            <input type="text" class="form-control" name="author">
            <label for="bofy">Post:</label>                        
            <textarea name="body" class="form-control" cols="30" rows="20"></textarea>
            <button class="btn btn-outline-info">Save</button>
            <a href="{{ route('admin') }}" class="btn btn-outline-info" >Cancel</a>
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
    </div>
@endsection

   
