<?php

use Illuminate\Database\Seeder;
// use Illuminate\Database\CategorieSeed;
// use Illuminate\Database\ProductSeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(CategorieSeed::class);
        // $this->call(ProductSeed::class);
        $this->call(articlesSeed::class);
        // $this->call(categoriesSeed::class);
    }
}
