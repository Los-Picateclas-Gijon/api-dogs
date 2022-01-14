<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Dog::factory(10)->create();
    }
}
