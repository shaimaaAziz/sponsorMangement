<?php

use App\institutionSponsor;
use Illuminate\Database\Seeder;

class InstitutionSponsorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $personel =  institutionSponsor::create([
            'password'=>bcrypt('123'),
            'firstName' => 'تالا',
            'secondName' => 'عبد العزيز',
            'thirdName' => 'محمد',
            'fourthName' => 'أبو حرب',
            'address' =>'غزة النصر عمارة الملش',
            'ContactPerson' =>'أحمد',
            'telephoneNumber1' =>'25262651',
            'telephoneNumber2' =>'63685626',
            'email' =>'sh@gmail.com',
            'Country' =>'فلسطين'

        ]);

    }
}
