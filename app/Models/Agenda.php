<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    public function anotacaos(){
        return $this->belongsTo(Anotacao::class);
    }
}
