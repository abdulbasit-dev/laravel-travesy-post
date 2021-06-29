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
    return view('pages.create');
    //
  }


  public function store(Request $request)
  {
    //
  }


  public function show(Post $post)
  {
    //
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
