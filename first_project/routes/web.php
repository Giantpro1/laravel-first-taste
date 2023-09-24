<?php
namespace App\Http\Controllers;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'PostsController@index');
// Route::get('/', 'PostsController@index');



Route::get('/', function () {
    return view('posts.index');
});

Route::get('/posts/{post}', function () {
    return view('posts.show');
});

// Route::get('/blog', function () {
//     return view('blog.index');
// });

Route::get('/create', function () {
    return view('posts.create');
});

Route::post('/posts', function () {

    $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
    ]);
    // dd(request(['post_body', 'post_title']));
    // $post = new Post;
    Post::create(request(['title', 'body']));
    // $post->title = request('title');
    // $post->body = request('body');
    // $post->save();

    return redirect('/');

});
// Route::post('/posts', 'PostsController@store');
