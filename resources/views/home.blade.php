@extends('layouts.main')
@section('content')
<main style="margin-top:100px">
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

                    {{ __('You are logged in !') }} {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="containerr">
    <div class="colr">
  
    </div>
    <div class="colrt">
        <h1>Blog Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
        @foreach($posts as $post)
            <div>
                    @if($post->image)
                    <div>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="max-width:100px;">
                    </div>
                @endif
                <h2>{{ $post->title }}</h2>
                @php
                $excerptLength = 500; // Number of characters to display initially
                $body = $post->body;
                $isLongContent = strlen($body) > $excerptLength;
                $excerpt = $isLongContent ? substr($body, 0, $excerptLength) : $body;
            @endphp
                <p class="pst">{{ $excerpt }}@if($isLongContent)...@endif</p>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Read More</a>
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-success">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" class="inline">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
    <div class="colr">
        
    </div>
</div>
</main>
@endsection

