<?php

use Illuminate\Database\Seeder;
use app\Models\Produto;
use Illuminate\Support\Facades\DB;


class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Produto::class,50)->create();
    }
}
