<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index() {
    	$posts = Post::paginate(5);
        return view('blog.blog', compact('posts'));
    }
/*
    public function post(Post $post) {
        return view('index.post', compact('post'));
    }
*/
    public function show($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('blog.show', compact('post'));
    }

}
