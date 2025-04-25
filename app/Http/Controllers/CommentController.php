<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $data = Post::all();
        return view('posts.index', ['data' => $data]);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        Post::create([
            'title' => $request["title"],
            'content' => $request["content"],
        ]);

        return redirect('/index');
        // return "idk man";
    }
}
