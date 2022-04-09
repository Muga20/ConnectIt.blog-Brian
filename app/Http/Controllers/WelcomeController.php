<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class WelcomeController extends Controller
{
    //
    public function index(){
        $post=post::latest()->take(4)->get();
        return view('welcome',compact('post'));
    }
}
