<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function deletePost(Post $post) {
        // Check if the authenticated user is the owner of the post
        if (auth()->user()->id === $post->user_id) {
            // Delete the post if the user is the owner
            $post->delete();
        }
    
        // Redirect to the homepage or another page after deletion
        return redirect('/');
    }
    

    public function actuallyUpdatePost(Post $post, Request $request) {
        // Check if the authenticated user is the owner
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $post->update($incomingFields);
        return redirect('/');
    }

    public function showEditScreen(Post $post) {
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/');
        }

        return view('edit', ['post' => $post]);
    }

    public function createPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => ['required', 'min:3', 'max:100'],
            'body' => ['required']
        ]);
        $incomingFields["title"] = strip_tags($incomingFields['title']);
        $incomingFields["body"] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        Post::create($incomingFields);

        return redirect("/");
    }
}
