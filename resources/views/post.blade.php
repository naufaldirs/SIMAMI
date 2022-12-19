@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By. <a href="/post?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post -> category -> name }}</a></p>
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
                <a href="" class="btn btn-success"><span data-feather="arrow-left"></span>Back to Post All My Post</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Delete</a>

            </div>
        </div>
    </div>
   

   




@endsection





