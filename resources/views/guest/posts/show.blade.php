@extends('layouts.guest')

@section('title', 'Blog')

@section('content')

<div class="jumbotron  bg-dark  text-white"> 
    <div class="container mt-5 mb-5">
        <h1 class="display-5">Our Posts</h1>
        <hr class="mb-3 mt-3 bg-secondary">
        <div class="w-50 mt-4 text-white-50">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit ad nemo dicta hic architecto totam at, dolor sit amet consectetur adipisicing elit ad nemo dicta hic architecto totam at, provident asperiores provident asperiores harum, adipisci esse quae.</p>
        </div>
    </div>
</div>

<div class="container pt-3">

    <div class="mt-5 mb-5 pt-5">
        <div class="w-50 container text-rigth">
            <h2>{{$post['title']}}</h2>
            <p class="my-4">{{$post['content']}}</p>
        
            <a href="{{route('blog.index')}}">
                <button type="button" class="btn btn-primary">Back</button>
            </a>
        </div>  
    </div>
    <hr class="mb-5 mt-5 bg-light">

</div>
@endsection