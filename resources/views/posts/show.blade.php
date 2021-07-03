@extends('layouts.app')

@section('title','Post')
@section('content')
<div class="container my-3">
  <div>
    <a href="{{ route('pos') }}"></a>
  </div>
  <h1>{{ $post->title }}</h1>
  <div>
    <img src="https://source.unsplash.com/random/700x400" class="image-fluid rounded" alt="">
    <div class="d-flex justify-content-between">
      <p>Created By <span class="text-primary"> {{ $post->user->name }}</span></p>
      <p>Create At <span class="text-primary">{{ $post->created_at }}</span></p>
    </div>
  </div>
  <p>{!! $post->body !!}</p>
</div>
@endsection