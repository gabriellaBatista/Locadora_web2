<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(Filme::class,'filme_locacaos')->withPivot('quantidade');
    }
}
