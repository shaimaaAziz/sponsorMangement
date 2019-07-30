<?php

use Illuminate\Database\Seeder;

class nationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->insert([
            [ 'name' => 'الفلسطينية'],
            [ 'name' => 'الاردنية'],
            [ 'name' => 'اللبنانية'],
            [ 'name' => 'السورية'],
            [ 'name' => 'التركية'],
            [ 'name' => 'الامريكية'],
            [ 'name' => 'السعودية']
        ]);
    }
}
