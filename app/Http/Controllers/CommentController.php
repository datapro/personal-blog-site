<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request, $postId)
{
    $request->validate([
        // 'g-recaptcha-response' => 'required|captcha',
        'author_name' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    // Find the post
    $post = Post::findOrFail($postId);

    // Create the comment
    $post->comments()->create([
        'author_name' => $request->author_name,
        'content' => $request->content,
    ]);

    return redirect()->back()->with('success', 'Comment added successfully!');
}

}
