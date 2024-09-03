@extends('layouts.main')
{{-- @section('content') --}}
@section('title', 'Edit Post')

@section('content')
<main style="margin-top:100px">
<div class="containerr">
    <div class="colr">
  
    </div>
    <div class="colr">
  
    </div>
    <div class="colrt">
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <!-- Other form fields for title, content, etc. -->
          @if($post->image)
          <div>
              <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image" style="max-width: 100px;">
          </div>
          @endif
        <div class="form-group">
            <label for="image" class="pst">Post Image:</label>
            <input type="file" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="title" class="form-label pst">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title) }}">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="body" class="form-label pst">Body</label>
            <textarea id="body" name="body"  cols="50", rows="10" class="form-control">{{ old('body', $post->body) }} </textarea>
            @error('body')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
    </div>
    <div class="colr">
  
    </div>

</div>
</main>
@endsection
