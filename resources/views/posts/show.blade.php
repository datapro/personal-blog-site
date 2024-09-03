@extends('layouts.main')

@section('title', $post->title)

@section('content')
<main style="margin-top:100px">

<div class="containerr">
    <div class="colr">
  
    </div>
    <div class="colrt">
    @php
        $excerptLength = 500; // Number of characters to display initially
        $body = $post->body;
        $isLongContent = strlen($body) > $excerptLength;
        $excerpt = $isLongContent ? substr($body, 0, $excerptLength) : $body;
    @endphp
    @if($post->image)
    <div>
        <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image" style="max-width: 100px;">
    </div>
    @endif
        <h1>{{ $post->title }}</h1>
        <div id="post-content">
            <p class="pst">{{ $excerpt }}@if($isLongContent)...@endif</p>
        
            @if($isLongContent)
                <button id="show-more" class="btn btn-default pst">Read More</button>
                <p id="full-content" style="display:none;" class="pst">{{ $body }}</p>
            @endif
        </div>
        @auth
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endauth
    
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
        <h3>Comments:</h3>
        @foreach($post->comments as $comment)
            <div>
                <strong class="pst">{{ $comment->author_name }}</strong> says:
                <p class="pst">{{ $comment->content }}</p>
                <small class="pst">{{ $comment->created_at->diffForHumans() }}</small>
            </div>
        @endforeach
        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="form-group">
            @csrf
            {{-- {!! NoCaptcha::display() !!}
            <!-- Other form fields --> --}}
            <div>
                <label for="author_name" class="form-label pst">Name:</label>
                <input type="text" name="author_name" required class="form-control"> 
            </div>
            <div>
                <label for="content" class="form-label pst">Comment:</label>
                <textarea name="content" class="form-control" required></textarea>
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
<div class="colr">
   
</div>
</div>
<script>
    document.getElementById('show-more').addEventListener('click', function() {
        var fullContent = document.getElementById('full-content');
        var showMoreButton = document.getElementById('show-more');
    
        if (fullContent.style.display === 'none') {
            fullContent.style.display = 'block';
            showMoreButton.textContent = 'Show Less';
        } else {
            fullContent.style.display = 'none';
            showMoreButton.textContent = 'Show More';
        }
    });
    </script>
    
@endsection



