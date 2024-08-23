@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h1 class="text-center">Create Post</h1>
  <form action="{{  route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="form-group mb-3">
      <label for="content">Content</label>
      <textarea name="content" class="form-control" rows="5" required></textarea>
  </div>
  <button type="submit" class="btn btn-success w-100">Create</button>
  </form>
  <a href="{{ url('/posts') }}" class="btn btn-primary w-100 mt-3">Back To Home</a>
</div>
@endsection