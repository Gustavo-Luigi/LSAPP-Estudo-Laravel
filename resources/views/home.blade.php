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
                    </section>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection
