@extends('layout')
@section('header')
<header class="header">
        <div class="header-text">
          <h1>ConnectIt.Blogs</h1>
        </div>
        <div class="overlay"></div>
      </header>
@endsection

@section('main')
<header class="header">
     <main class="container">
        <h2 class="header-title">Latest Posts</h2>
        <section class="cards-blog latest-blog">
          @foreach ($post as $post)
  <div class="card-blog-content">
          <img src="{{asset($post->imagepath)}}" alt="" />
          <p>
          
            <span>Published By{{$post->user->name}}</span>
          </p>
          <h4>
            <a href="{{route('blog.show',$post)}}">{{$post->title}}</a>
          </h4>
        </div>
         
     @endforeach
        </section>
      </main>  
@endsection