@extends('layouts.app')

@section('content') 
<div class="container mt-4">
  <h1>Posts</h1>
  <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
  <table class="table-mt4 table-bordered w-100 mt-4 text-center">
    <thead >
      <tr>
        <th>No</th>
        <th>Title</th>
        <th>Content</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @php
        $no=1;
      @endphp
      @foreach ($posts as $post)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{  $post->title }}</td>
          <td>{{  $post->content }}</td>
          <td>
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Detail</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{  route('posts.destroy',$post->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection