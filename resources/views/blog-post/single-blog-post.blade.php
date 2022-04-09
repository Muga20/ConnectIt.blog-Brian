@extends('layout')
@section('main')
<!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>{{$post->title}}</h1>

        <p class="time-and-author">
        
          <span>By{{$post}}</span>
        </p>

        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{asset($post->imagepath)}}" alt="" />
        </div>

        <div class="about-text">
          <p>
            {{$post->body}}
          </p>
        </div>
      </section>
     
          
        

        </div>
      </section>
    </main>
@endsection