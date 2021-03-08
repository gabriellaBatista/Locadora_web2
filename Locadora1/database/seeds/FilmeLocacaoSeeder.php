<?php

namespace Database\Seeders;

use App\Models\Filme;
use App\Models\Locacao;
use App\Models\FilmeLocacao;
use Illuminate\Database\Seeder;

class FilmeLocacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Locacao::all() as $locacao) {
            $filmes = Filme::all()->where('user_id', $locacao->user_Id)->randon(3);
            foreach($filmes as $filme) {
           	FilmeLocacao::factory(1)->create([
          	    'filme_id' => $filme->id,
          	    'locacao_id' => $locacao->id

          	])

          }
       }
    }
}
