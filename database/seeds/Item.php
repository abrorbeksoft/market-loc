<?php

use Illuminate\Database\Seeder;

class Item extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Kitob::class,50)->create();
    }
}
