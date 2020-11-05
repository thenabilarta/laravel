<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $post = Post::all();
        return view('posts.index', [
            'post' => $post
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'tweet' => 'required'
        ]);
        
        auth()->user()->posts()->create($data);

        return redirect('/');
    }
}