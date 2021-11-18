@extends('layouts.app')

@section('content')
<div class="card container mt-5 p-0">
  <div class="card-header">Add new Post</div>
  <form action="{{route('admin.posts.store')}}" method="post" class="card-body">
    @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Add title..." value="{{ old('title') }}">
    </div>
    @error('title')
      <div class="alert alert-danger">{{ $message  }}</div>
    @enderror

    <div class="form-group">
      <label for="exampleInputEmail1">Content</label>
      <textarea type="text" class="form-control @error('title') is-invalid @enderror" id="content" name="content" cols="20" rows="10" placeholder="Add content...">{{ old('content') }}</textarea>
    </div>
    @error('content')
      <div class="alert alert-danger">{{ $message  }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Create</button>

  </form>
</div>
@endsection