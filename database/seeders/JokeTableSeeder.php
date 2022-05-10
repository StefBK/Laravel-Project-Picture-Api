<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JokeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Joke::factory(10)->create();
    }
}
