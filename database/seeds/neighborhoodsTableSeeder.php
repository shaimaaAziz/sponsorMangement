<?php

use Illuminate\Database\Seeder;

class neighborhoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('neighborhoods')->insert([
            [ 'name' => 'حي النصر'],
            [ 'name' => 'حي المغاربة'],
            [ 'name' => 'حي الشيخ رضوان']
        ]);
    }
}
