<?php

use Illuminate\Support\Facades\Route;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Video;

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



Route::get('/', function () {

    $post = Post::find(1);
    $tag = new Tag();
    $tag->name ='photo';
    $tag->save();
    $post->tags()->save($tag);

});
