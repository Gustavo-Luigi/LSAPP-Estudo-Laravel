@extends('layouts.app')
    
@section('content')
    <h1>Create post</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class=="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
            <label for="body">Message</label>
            <textarea name="body" cols="30" rows="10" class="form-control" placeholder="Your message"></textarea>

            <input type="submit" value="Submit" class="btn-primary mt-3">
        </div>
    </form>
@endsection