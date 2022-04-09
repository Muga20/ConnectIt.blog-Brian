@extends('layout')
@section('main')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <div class="dashboard">
                    
                     <main class="container" style="background-color: #fff;">
           <section id="contact-us">
             <h1 style="padding-top: 50px;">Create New Post!</h1>
              @include('includes.message')
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <!-- Title -->
                    <label for="title"><span>Title</span></label>
                    <input type="text" id="title" name="title" value="{{old('title')}}" />
                      @error('title')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: tomatto; margin-bottom:20px;">{{ $message }}</p>
                      @enderror
                    <!-- Image -->
                    <label for="image"><span>Image</span></label>
                    <input type="file" id="image" name="image" />
                       @error('image')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: tomatto; margin-bottom:20px;">{{ $message }}</p>
                      @enderror
                   
                    <!-- Body-->
                    <label for="body"><span>Body</span></label>
                    <textarea id="body" name="body">{{old('body')}}</textarea>
                       @error('body')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: tomatto; margin-bottom:20px;">{{ $message }}</p>
                        @enderror
                    <!-- Button -->
                    <input type="submit" value="Submit" />
                </form>
            </div>

        </section>
    </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@endsection
