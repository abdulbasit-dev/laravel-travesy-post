<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{

  function __construct()
  {
    $this->middleware('auth')->except('index', 'show');
  }

  public function index()
  {
    $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(10);
    return view('posts.index', compact('posts'));
  }


  public function create()
  {
    return view('posts.create');
  }


  public function store(StorePostRequest $request)
  {

    $file_name = '';
    if ($request->hasFile('cover')) {
      $getFileNameWithExt = $request->file('cover')->getClientOriginalName();
      $fileName = pathinfo($getFileNameWithExt, PATHINFO_FILENAME);
      $file_name = $fileName . '_' . time() . '.' . $request->cover->extension();
      $request->cover->move(public_path('uploads/post_cover'), $file_name);
    } else {
      $file_name = 'no_image.jpg';
    }

    auth()->user()->posts()->create([
      'title' => $request->title,
      'body' => $request->body,
      'cover' => $file_name,
    ]);
    return redirect()->route('posts.index')->with(['type' => 'success', 'message' => 'Post Created Succsfully']);
  }


  public function show(Post $post)
  {
    return view('posts.show', compact('post'));
  }


  public function edit(Post $post)
  {
    return view('posts.edit', compact('post'));
  }

  public function update(Request $request, Post $post)
  {
    $file_name = '';
    if ($request->hasFile('cover')) {
      $getFileNameWithExt = $request->file('cover')->getClientOriginalName();
      $fileName = pathinfo($getFileNameWithExt, PATHINFO_FILENAME);
      $file_name = $fileName . '_' . time() . '.' . $request->cover->extension();
      $request->cover->move(public_path('uploads/post_cover'), $file_name);
    }

    auth()->user()->posts()->update([
      'title' => $request->title,
      'body' => $request->body,
      'cover' => $request->hasFile('cover') ? $file_name : 'no_image.jpg',
    ]);
    return redirect()->route('posts.index')->with(['type' => 'success', 'message' => 'Post Updated Succsfully']);
  }

  public function destroy(Post $post)
  {
    $post->delete();
    $destinationPath = 'uploads/post_cover';
    File::delete($destinationPath . "/$post->cover");
    return redirect()->route('posts.index')->with(['type' => 'success', 'message' => 'Post Deleted Succsfully']);
  }
}
