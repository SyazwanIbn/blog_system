<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // papar semua post
    public function index()
    {

        $posts = Post::all(); // Ambil SEMUA posts
        return view('posts.index', ['posts' => $posts]);

    }

    // tunjuk form untuk create post
    public function create()
    {
        return view('posts.create'); // Return the view for creating a new post
    }

    // simpan post baru
    public function store(Request $request)
    {
        //1)validate,2)store,3)redirect
        // validate the request data
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        //simpan ke database
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        // redirect to the index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post')); // Return the view for editing the post
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //1)validate,2)update,3)redirect
        // validate the request data
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        //update post
        $post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        //redirect to the index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.'); // Redirect to the index page with a success message
    }

    // Delete post
    public function destroy($id)
    {
        Post::find($id)->delete(); // Find the post by ID and delete it
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.'); // Redirect to the index page with a success message
    }
}
