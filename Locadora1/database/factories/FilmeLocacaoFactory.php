<?php

namespace Database\Factories;

use App\Models\FilmeLocacao;
use illuminate\Database\Eloquent\Factories\Factory;

class FilmeLocacaoFactory extends Factory
{
    /**
     *The name of the factory's corresponding model.
     *
     *@var string 
     */
    protected $modal = FilmeLocacao::class;

     /**
      *Define the modal's defalt state.
      *
      *@return array
      */
    public function definition()
    {
use App\FilmeLocacao;
use Faker\Generator as Faker;

$factory->define(FilmeLocacao::class, function (Faker $faker) {
    return [
        'quantidade' => $this->faker->randomDigit
     ];
   }
 });
}