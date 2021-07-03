<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $posts = auth()->user()->posts;
    return view('dashboard', compact('posts'));
  }
}
