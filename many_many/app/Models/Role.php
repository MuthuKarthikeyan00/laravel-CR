<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ledger;
use App\Models\UserRole;

class Role extends Model
{
    use HasFactory;

    public function ledger(){

        return $this->belongsToMany(Ledger::class,UserRole::class);

    }

}
