<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function getPost($post_id = null) {
        $posts = Post::all();
        return view('blog.index', ['posts' => $posts]);
    }

    public function create(Request $request) {
        
    }
}
