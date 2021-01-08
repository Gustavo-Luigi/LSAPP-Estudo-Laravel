@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="mt-4">
                        <a href="/posts/create" class="btn btn-primary">Create post</a>
                    </div>

                    <section class="mt-4">
                        <h1>Your posts</h1>

                        @if(count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a></td>
                                        <td>        
                                            <form action="/posts/{{$post->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form></td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                    </section>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection
