<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function index()
  {
    $posts = Post::with('user')->paginate(20);
    return view('posts.index', compact('posts'));
  }


  public function create()
  {
    $posts = Post::with('user')->paginate(20);
    return view('posts.create', compact('posts'));
  }


  public function store(Request $request)
  {
    //
  }


  public function show(Post $post)
  {
    return view('posts.show', compact('post'));
  }


  public function edit(Post $post)
  {
    //
  }

  public function update(Request $request, Post $post)
  {
    //
  }


  public function destroy(Post $post)
  {
    //
  }
}
