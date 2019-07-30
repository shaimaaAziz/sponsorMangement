<?php

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
        $this->call(InstitutionSponsorTableSeeder::class);
        $this->call(PersonelSponsorTableSeeder::class);
        $this->call(countriesTableSeeder::class);
        $this->call(governoratesTableSeeder::class);
        $this->call(citiesTableSeeder::class);
        $this->call(nationalitiesTableSeeder::class);
        $this->call(neighborhoodsTableSeeder::class);
    }
}
