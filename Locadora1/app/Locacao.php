<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacao extends Model
{
   use HasFactory;
   
   public function locacaos(){
   	return $this->belongsToMany(Filme::class,'filme_locacaos')->withPivot('quantidade');
   }
}
