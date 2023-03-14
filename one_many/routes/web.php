<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;
use App\Models\Comment;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// one to many

// Route::get('/', function () {

//     $Post = Post::with('comments')->whereId(1)->first();
//     return  response()->json($Post);

// });


// one to many Inverse

// Route::get('/', function () {

//     $comment = Comment::with('post')->whereId(2)->first();
//     return  response()->json($comment);

// });


// save sub table

// Route::get('/', function () {

//     $post = Post::find(1);
//     $comment = new Comment();
//     $comment->name = "raja";

//     $post->comments()->save($comment);


// });


// update forien key

Route::get('/', function () {

    // $post = Post::find(1);
    // $comment = new Comment();
    // $comment->name = "raja";

    // $post->comments()->save($comment);

    $comment = Comment::find(1);
    $post    = Post::find(1);

    $comment->post()->associate($post)->save();




});

