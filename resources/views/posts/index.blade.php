@extends('layouts.app')
@section('title','Posts')
@section('content')
<div class="container mt-5">
  @if (count($posts))
  <h1>Total Post {{ count(\App\Post::all()) }}</h1>
  @foreach ($posts as $post)
  <div class="row mt-4">
    <div class="col-md-10 col-lg-8">
      <div class="post-preview ">
        <a href="{{ route('posts.show',$post) }}" style="text-decoration: none">
          <h2 class="post-title text-primary">{{ $post->title }}</h2>
          <h4 class="post-subtitle text-dark">Problems look mighty small from 150 miles up</h4>
        </a>
        <p class="post-meta">Posted by <a href="#">{{ $post->user->name }} on September 24,
            2018</a></p>
      </div>
      <hr />
    </div>

  </div>
  @endforeach
  {{ $posts->links() }}
  @else
  <h1>No Post Found</h1>
  @endif

</div>


@endsection