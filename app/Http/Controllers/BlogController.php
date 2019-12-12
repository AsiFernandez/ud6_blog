<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;


use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post=Post::all();
        return view('posts.index')->with('posts', $post);

    }
}
