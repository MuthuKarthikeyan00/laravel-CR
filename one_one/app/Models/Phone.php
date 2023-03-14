<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ledger;

class Phone extends Model
{
    use HasFactory;

    public function Ledger(){

        return $this->belongsTo(Ledger::class);

    }
}
