@extends('layouts.app')
@section('title','Posts')
@section('content')
<div class="my-5 container">
  <form action='{{ route('posts.store') }}' method="POST" class="bg-white p-5 rounded-lg shadow-sm"
    enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"
        placeholder="Enter post title">
    </div>
    <div class="form-group">
      <label for="article-ckeditor'">Body</label>
      <textarea class="form-control" id="article-ckeditor" name="body"
        placeholder="Enter post body">{{   old('body')}}</textarea>
    </div>
    <div class="form-group">
      <input type="file" name="cover" class="form-control" id="">
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>




@endsection