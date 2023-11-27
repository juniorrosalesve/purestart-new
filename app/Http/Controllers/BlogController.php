<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts  =   Post::limit(8)->get();
        return view('blog', [
            'posts' => $posts
        ]);
    }

    public function post($nombre, $id) {
        $post   =   Post::find($id);
        if(empty($post))
            return redirect()->route('blog');
        return view('post', [
            'post' => $post
        ]);
    }
}