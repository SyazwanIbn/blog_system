@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Senarai Posts</h1>

        {{-- // Button to create a new post --}}
        <a href="/posts/create" class="btn btn-primary"> + Add new post</a>
        {{-- table untuk papar senarai post --}}
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td class="d-flex gap-2">
                            {{-- button to edit post --}}
                            <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            {{-- button to delete post --}}
                            <form action="/posts/{{ $post->id }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
