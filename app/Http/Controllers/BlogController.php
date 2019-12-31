<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;


use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('published_at', 'desc')->get();
        var_dump($posts);
        return view('welcome')->with(['posts' => $posts]);
    }

}
?>