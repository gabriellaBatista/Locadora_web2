<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Filme;
use Faker\Generator as Faker;

class FilmeFactory extends Factory
{
	
$factory->define(Filme::class, function (Faker $faker) {
    return [
        //
        'nome_da_midia'=>$this->faker->word,
        'gênero'=>$this->faker->word,
        'duração'=>$this->faker->randomDigit,
    ];
});

}