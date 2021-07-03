@extends('layouts.app')

@section('content')
<div class="container mt-5">
  @if (count($posts))
  <h1>You have <span class="text-primary">{{ count($posts) }}</span> Total Post</h1>
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

  @else
  <div class="card my-5">
    <div class="card-body text-center">
      <h2>You don't have any post</h2>
      <a href="{{ route('posts.create') }}"><button class="btn btn-success mt-2">Create
          Post</button></a>
    </div>
  </div>
  @endif

</div>
@endsection