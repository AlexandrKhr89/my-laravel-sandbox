<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
  public function index()
  {
    // $str = 'some string';
    // dd($str); //Stop after this line
    // dump($str); //run after this line
    // var_dump($str); //PHP function like dd()
    // return 'this is my PostController';
    $post = Post::find(1);
    // $post = new Post(); //Create object Post
    // dd($post);
    dd($post->title); //return atribute title for Post model
  }
}
