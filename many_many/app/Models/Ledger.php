<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserRole;

class Ledger extends Model
{
    use HasFactory;

    public function roles(){
        return $this->belongsToMany(Role::class,UserRole::class);
    }

}
