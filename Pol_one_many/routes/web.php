<?php

use Illuminate\Support\Facades\Route;
use App\Models\Comment;
use App\Models\Photo;
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

   $photo = Photo::find(1);

   $comment = new Comment();
   $comment->body ="mk ph";

   $photo->comments()->save($comment);

   $video = Video::find(2);

   $comment = new Comment();
   $comment->body ="mk vo";

   $video->comments()->save($comment);


});
