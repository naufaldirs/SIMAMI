@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-my-8">
            <a href="/dashboard/posts" class="btn btn-success">Back to My Post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('are you sure')">Delete</button>
                </form>
            <h1 class="mb-3">{{ $post->title }}</h1>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            <article  class="my-3 fs-5">
            {!! $post->body  !!}
         </article>
        </div>
    </div>
</div>
 
@endsection