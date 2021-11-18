@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>{{$post['title']}}</h1>
                    <h3>{{$post['slug']}}</h3>
                    <p>{{$post['content']}}</p>

                    <div class="d-flex">               
                        <a href="{{route('admin.posts.index')}}">
                            <button type="button" class="btn btn-primary">Back</button>
                        </a>
                        <a href="{{route('admin.posts.edit', $post['id'] )}}" class="ml-3">
                            <button type="button" class="btn btn-secondary">Edit</button>
                        </a>
                        <form action="{{route('admin.posts.destroy', $post['id'])}}" method="post" class="ml-3">
                            @csrf
                            @method('DELETE') 
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
