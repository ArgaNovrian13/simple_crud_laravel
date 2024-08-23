@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h1>Detail Post</h1>
  <div class="card">
    <div class="card-header">
      <h4>{{ $post->title }}</h4>
    </div>
    <div class="card-body">
      <p>{{ $post->content }}</p>
      <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Back to Posts</a>
    </div>
  </div>
</div>
@endsection