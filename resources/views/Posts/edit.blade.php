@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h1 class="text-center">Edit Post</h1>
  <form action="{{  route('posts.update' ,$post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
    </div>
    <div class="form-group mb-3">
      <label for="content">Content</label>
      <textarea name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
  </div>
  <button type="submit" class="btn btn-success w-100">Update</button>
  </form>
  <a href="{{  url('/posts') }}" class="btn btn-primary w-100 mt-3">Back To home</a>
</div>
@endsection