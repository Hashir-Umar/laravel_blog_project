<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
{
    public function getIndex() {

        $posts = Post::all();
        return view('admin.index', ['posts' => $posts]);
    }
}
