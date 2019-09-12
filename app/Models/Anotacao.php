<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anotacao extends Model
{
    public function agenda(){
        return $this->belongsTo(Agenda::class);
    }
}
