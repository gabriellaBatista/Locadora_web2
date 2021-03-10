protected $model = User::class;

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
namespace Database\Factories;

 use App\Models\User;
 use Illuminate\Database\Eloquent\Factories\Factory;
 use Faker\Generator as Faker;
 use Illuminate\Support\Str;

 class UserFactory extends Factory
 {

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/@return array
public function definition()
{

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $this-> $faker->name,
        'email' => $this->$faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'cep'=> $this->faker->nemerify('#####-###'),
        'numero'=> $this->faker->randomNumber(3, false),
        //'cpf'=> $this->faker->unique()->numerify('###.###.###-##'),
        'cpf'=> $this->faker->unique()->cpf(),

    ];
});
 }
   }