<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Item;
use App\Models\Type;

class Category extends Model
{
    use HasFactory;

    public function items(){
        return $this->hasManyThrough(Item::class, Type::class);
    }
}
