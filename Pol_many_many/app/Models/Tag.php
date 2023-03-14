<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;
use App\Models\Video;


class Tag extends Model
{
    use HasFactory;

    public function phosts(){
        return $this->morphToMany(Post::class,'taggable');
    }


    public function videos(){
        return $this->morphToMany(Video::class,'taggable');
    }
}
