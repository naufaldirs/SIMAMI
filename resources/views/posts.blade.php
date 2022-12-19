@extends('layouts.main')

   @section('container')
   <h1 class="mb-3 text-center">{{ $title }}</h1>

  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}"> 
        @endif  
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}"> 
        @endif  
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari..."  name="search" value="{{ request('search') }}">
          <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
        </div>        
      </form>
    </div>
  </div>


   @if ($posts -> count())
   <div class="card mb-3">
    @if ($posts[0]->image)
            <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
    <div class="card-body text-center">
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
      <h3 class="card-title">{{ $posts[0]->title }}</h3>
    </a>
      <small class="text-muted">
      <p>By. <a href="//posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0] -> category -> name }}</a></p>
    </small>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
      <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
    </div>
  </div>

  
  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
          @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
            @else
            <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <small class="text-muted">
            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p>
            {{ $posts[0]->created_at->diffForHumans() }}</small>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
   </div>

    @else   
    <p class="text-center fs-4">No Post Found.</p>
   @endif
   <div class="d-flex justify-content-end">
    {{ $posts->links() }}
   </div>
   @endsection
   

