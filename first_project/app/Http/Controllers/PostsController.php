<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
// use GuzzleHttp\Promise\Create;

class PostsController extends Controller
{
  public function index() {
    return view('posts.index');
   }


  public function show() {
    return view('posts.show');
   }

  public function store() {
    // dd(request()->all());
    $post = new Post;
    Post::create([
        'title' =>request('title'),
        'body'=>request('body')
    ]);
    // $post->post_title = request('post_title');
    // $post->post_body = request('post_body');
    // $post->save();

    return redirect('/');
   }
}
