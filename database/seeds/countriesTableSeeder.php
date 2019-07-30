<?php

use Illuminate\Database\Seeder;

class countriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('countries')->insert([
            [ 'name' => 'فلسطين'],
            [ 'name' => 'سوريا'],
            [ 'name' => 'لبنان'],
            [ 'name' => 'الاردن'],
            [ 'name' => 'السعودية'],
            [ 'name' => 'امريكا'],
            [ 'name' => 'تركيا']
        ]);
    }
}
