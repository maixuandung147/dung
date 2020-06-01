<?php

use Illuminate\Database\Seeder;
// use factory;

class CategorieSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(\App\Categorie::class,20)->create();
    }
}
