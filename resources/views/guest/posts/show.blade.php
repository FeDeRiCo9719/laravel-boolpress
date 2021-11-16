@extends('layouts.guest')

@section('title', 'Blog')

@section('content')

<div class="container pt-3" style="height: 780px;">

    <div class="mt-5 mb-5 pt-5">
        <h2 class="text-center" style="font-size: 2 rem">Our Posts</h2>
        <hr class="mb-5">
        <div class="w-50 container text-rigth">
            <h2>{{$post['title']}}</h2>
            <p class="my-5">{{$post['content']}}</p>
        
            <a href="{{route('blog.index')}}">
                <button type="button" class="btn btn-primary">Back</button>
            </a>
        </div>  
    </div>
    <hr>

</div>
@endsection