<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function index()
  {
    $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(20);
    return view('posts.index', compact('posts'));
  }


  public function create()
  {
    return view('posts.create', compact('posts'));
  }


  public function store(StorePostRequest $request)
  {
    auth()->user()->posts()->create($request->validated());
    return redirect()->route('posts.index')->with(['type' => 'success', 'message' => 'Post Created Succsfully']);
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
