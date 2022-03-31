<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //    $this->call(MovieSeeders::class);
        $this->call(GenereSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(UserSeeder::class);
    }
}
