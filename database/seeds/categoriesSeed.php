<?php

use Illuminate\Database\Seeder;

class categoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\categories::class,30)->create();
    }
}
