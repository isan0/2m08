<?php

namespace Database\Seeders;

use App\Models\Genere;
use Illuminate\Database\Seeder;

class GenereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genere::factory(10)->create();
    }
}
