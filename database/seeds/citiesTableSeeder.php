<?php

use Illuminate\Database\Seeder;

class citiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('cities')->insert([
           [ 'name' => 'غزة'],
           [ 'name' => 'رفح'],
           [ 'name' => 'خانيونس'],
           [ 'name' => 'أريحا'],
           [ 'name' => 'القدس'],
           [ 'name' => 'بيت لحم'],
           [ 'name' => 'الخليل'],
           [ 'name' => 'عسقلان']
    ]);
    }
}
