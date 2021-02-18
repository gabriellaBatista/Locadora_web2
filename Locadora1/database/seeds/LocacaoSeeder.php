<?php

namespace Database\Seeders;

use App\Model\User;
use App\Model\Locacao;
use Illuminate\Database\Seeder;

class LocacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       foreach (User::all() as $user) { 
       	  Locacao::factory(2)->create([
               'user_id'=>$user->id
       	  ]);
       }
    }
}
