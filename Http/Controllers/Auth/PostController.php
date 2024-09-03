<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            // Store the image and get the path
            $imagePath = $request->file('image')->store('images', 'public');
        }
    
        $post = new Post();
        $post->title = $validated['title'];
        $post->body = $validated['body'];
        $post->image = $imagePath; // Correctly assigning the image property
        $post->user_id = auth()->id(); // Assigning user ID before saving
        $post->save();
    
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
    

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image
        ]);
    
        // Store the current image path
        $imagePath = $post->image;
    
        // Check if a new image has been uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
    
            // Store the new image and update the image path
            $imagePath = $request->file('image')->store('images', 'public');
        }
    
        // Update other fields
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->image = $imagePath; // Ensure the image path is updated correctly
        
    
        // Save the updated post
        $post->save();
    
        return redirect()->route('posts.show', $post->id)->with('success', 'Post updated successfully!');
    }
    


    public function destroy(Post $post)
    {
         // Check if the post has an image
    if ($post->image) {
        // Delete the image file from storage
        Storage::disk('public')->delete($post->image);
    }
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }

    public function about(){
        return view('pages.about');
    }
    public function service(){
        return view('pages.service');
    }
    public function project(){
        return view('pages.project');
    }
    public function contact(){
        return view('pages.contact');
    }
}
