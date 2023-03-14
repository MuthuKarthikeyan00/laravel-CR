<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Tag;

class Post extends Model
{
    use HasFactory;

    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
