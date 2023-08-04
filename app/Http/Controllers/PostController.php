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
    // $post = Post::find(1);
    // $post = new Post(); //Create object Post
    // dd($post);
    // dd($post->title); //return atribute title for Post model
    $post = Post::where('is_published', 1)->first();
    dump($post);
    dd('end');
  }

  public function create()
  {
    $postsArr = [
      [
        'title' => 'Title of post from astrnvim',
        'content' => 'some interesting content',
        'image' => 'imageblalba.jpg',
        'likes' => 20,
        'is_published' => 1,
      ],
      [
        'title' => 'Another Title of post from astronvim',
        'content' => 'Another interesting content',
        'image' => 'imageblalba_123.jpg',
        'likes' => 80,
        'is_published' => 1,
      ],
    ];
    //Add row to database
    // Post::create([
    //   'title' => 'Title of post from astrnvim',
    //   'content' => 'some interesting content',
    //   'image' => 'imageblalba.jpg',
    //   'likes' => 20,
    //   'is_published' => 1,
    // ]);
    //
    // dd('CREATED!!!');

    // dd($postsArr);
    //
    //Add array to database
    foreach ($postsArr as $item) {
      // dd($item);
      // Post::cteate([
      //   'title' => $item['title'],
      //   'content' => $item['content'],
      //   'image' => $item['image'],
      //   'likes' => $item['likes'],
      //   'is_published' => $item['is_published'],
      // ]);

      Post::create($item);
    }
    dd('Array CREATED!!!');
  }
}
