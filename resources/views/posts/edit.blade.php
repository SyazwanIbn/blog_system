@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Edit Post</h1>

        {{-- Form to edit post --}}
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>Title</label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Content</label>
                <textarea name="content" class="form-control" rows="5">{{ $post->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
