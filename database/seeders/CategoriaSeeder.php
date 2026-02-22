<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(['nome' => 'Técnico']);
        Categoria::create(['nome' => 'Criativo']);
        Categoria::create(['nome' => 'Desenvolvimento Pessoal']);
        Categoria::create(['nome' => 'Finanças']);
        Categoria::create(['nome' => 'Oratória']);
        Categoria::create(['nome' => 'Acadêmico']);
        Categoria::create(['nome' => 'Saúde']);
    }
}
