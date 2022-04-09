<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;




class BlogController extends Controller
{

    public function index(){
        $post= post::latest();
        return view('blog-post.blog',compact('post'));
    }

    public function create(){
        return view('blog-post.create-blog');
    }

    public function store(Request $request){
      $request->validate([
          'title' => 'required',
          'image' => 'required | image',
          'body' => 'required'

        ]);
           $title = $request->input('title');
           $slug=Str::slug($title, '-');
           $user_id = Auth::user()->id;
           $body = $request->input('body');

         $imagepath='storage/'.$request->file('image')->store('postimages','public');  

         $post =new Post();
         $post->title=$title;
         $post->slug=$slug;
         $post->user_id=$user_id;
         $post->body = $body;
         $post->imagepath=$imagepath;

         $post->save();
         return redirect()->back()->with('status','Succesful');
    }

         public function show(post $post){
           return view('blog-post.single-blog-post',compact('post'));
       }
}

