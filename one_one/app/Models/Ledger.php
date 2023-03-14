<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Phone;

class Ledger extends Model
{
    use HasFactory;

    public function phone(){
        return $this->hasOne(Phone::class);
    }

}
