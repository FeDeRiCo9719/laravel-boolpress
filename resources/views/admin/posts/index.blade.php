@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    @if ($message = Session::get('info'))
                    <div class="alert alert-info alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $posts as $post)
                            <tr>
                                <td>{{$post['id']}}</td>
                                <td>{{$post['title']}}</td>
                                <td>{{$post['slug']}}</td>
                                <!-- <td>{{$post['']}}</td> -->
                                <td>
                                    <a href="{{route('admin.posts.show', $post['id'])}}">
                                        <button type="button" class="btn btn-primary">More</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                               
                </div>

            </div>
        </div>
    </div>
</div>
@endsection