<?php

namespace Database\Seeders;

use App\Models\Filme;
use App\models\User;
use Illuminate\Database\Seeder;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::all();
        foreach ($users as $user) {
        	Filme::factory(6)->create([
        		'user_id' => $user->id
        	]);

        }
    }
}
