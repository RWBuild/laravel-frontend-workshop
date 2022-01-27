<?php

namespace Database\Seeders;

use App\Models\Badge;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Badge::factory(20)->create();

        \App\Models\Person::factory(20)->hasFavorites(2)->create();
    }
}
