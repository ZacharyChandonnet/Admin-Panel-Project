<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        \App\Models\Secteur::factory(5)->has(\App\Models\Entreprise::factory(10))->create();
        \App\Models\Region::factory(5)->has(\App\Models\Activite::factory(10))->create();
    }
}
