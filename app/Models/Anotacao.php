<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anotacao extends Model
{
    public function agendas(){
        return $this->hasOne(Agenda::class);
    }
}
