<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locacao extends Model
{
   use HasFactory;
   public function locacaos(){
   	return $this->belongsToMany(Locacao::class)
   }
}
