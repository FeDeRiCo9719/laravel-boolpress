@extends('layouts.guest')

@section('title', 'Blog')

@section('content')

<div class="jumbotron  bg-dark  text-white"> 
    <div class="container mt-5 mb-5">
        <h1 class="display-4">Welcome to our Blog!</h1>
        <hr class="mb-3 mt-3 bg-secondary">
        <div class="w-50 mt-4 text-white-50">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit ad nemo dicta hic architecto totam at, dolor sit amet consectetur adipisicing elit ad nemo dicta hic architecto totam at, provident asperiores provident asperiores harum, adipisci esse quae.</p>
        </div>
    </div>
</div>

<div class="container pt-3 ">

    <div class="mt-5 mb-5 text-center">
        <h2 style="font-size: 2 rem">Our Posts</h2>
        <div class="w-50 container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit ad nemo dicta hic architecto totam at, provident asperiores harum, adipisci esse quae.</p>
        </div>
        <hr class="my-5">    
    </div>


    <div class="row">

        @foreach ($posts as $post)
        <div class="col-md-3 mt-5 mb-5 px-3">
            <h4>{{$post['title']}}</h4>
            <p class="text-secondary">{{$post['content']}}</p>
            <a class="btn btn-primary" href="{{route('blog.show', $post['slug']) }}" role="button">More »</a>
            
        </div>
        @endforeach 

    </div>

    <hr>

</div>
@endsection