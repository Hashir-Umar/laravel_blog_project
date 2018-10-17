<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function getPost($post_id = null) {
        
        $posts = Post::all();

        if($post_id) {
            $posts = Post::where('id', $post_id)->first();
            return view('blog.single', ['posts' => $posts]);
        }

        foreach ($posts as $post) {
            $post->body = $this->textShort($post->body, 25);
        }

        return view('blog.index', ['posts' => $posts]);
    }

    public function editPost() {
        return view('admin.postEditor');
    }

    public function createPost(Request $request) {

        //validation
        $this->validate($request, [
            'title' => 'required|max:40|unique:posts', 
            'author' => 'required|max:40|alpha',
            'body' => 'required|max:2000'
        ]);

        $post = new Post();
        $post->title = $request['title'];
        $post->author = $request['author'];
        $post->body = $request['body'];

        $post->save();

        return redirect()->route('admin')->with([
            'success' => 'Post Saved'
        ]);
    }

    public function deletePost($post_id) {

        return $post_id;
        $post = Post::where('id', $post_id)->first();

        $post->delete();

        return redirect()->route('admin')->with([
            'success' => 'Post Dseleted'
        ]);
    }

    public function textShort($text, $count) {
        
        if(str_word_count($text, 0) > $count) {
            //array of positions and string
            $words = str_word_count($text, 2); 
            $positions = array_keys($words);
            $text = substr($text, 0, $positions[$count]);
        }

        return $text;
    }

}
