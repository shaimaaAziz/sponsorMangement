<?php

use App\PersonalSponsor;
use Illuminate\Database\Seeder;

class PersonelSponsorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $personel =  PersonalSponsor::create([
          'password'=>bcrypt('123'),
          'type'=>'شخصي',
          'firstName' => 'شيماء',
          'secondName' => 'عبد العزيز',
          'thirdName' => 'محمد',
          'fourthName' => 'أبو حرب',
          'governorate' =>'غزة',
          'city' =>'غزة',
          'neighborhood' =>'النصر',
          'addressDetails' =>'غزة النصر عمارة الملش',
          'telephoneNumber' =>'2865581',
          'telephoneNumber2' =>'2835581',
          'ContactPerson' =>'احمد',
          'mobileNumber' =>'059987515',
          'email' =>'sh@gmail.com',
          'nationality' =>'فلسطينية',
          'CountryOfResidence' =>'فلسطين',
          'identificationNumber' =>'35486634',
          'definitionType' =>'هوية',

    ]); $personel1 =  PersonalSponsor::create([
          'password'=>bcrypt('123'),
          'type'=>'شخصي',
          'firstName' => ' افنان ',
          'secondName' => 'عبد العزيز',
          'thirdName' => 'محمد',
          'fourthName' => 'أبو حرب',
          'governorate' =>'غزة',
          'city' =>'غزة',
          'neighborhood' =>'النصر',
          'addressDetails' =>'غزة النصر عمارة الملش',
          'telephoneNumber' =>'286115581',
          'telephoneNumber2' =>'21835581',
          'ContactPerson' =>'احمد',
          'mobileNumber' =>'0599871515',
          'email' =>'sh11@gmail.com',
          'nationality' =>'فلسطينية',
          'CountryOfResidence' =>'فلسطين',
          'identificationNumber' =>'354866134',
          'definitionType' =>'هوية',

    ]);$personel1 =  PersonalSponsor::create([
          'password'=>bcrypt('123'),
          'type'=>'شخصي',
          'firstName' => 'اعتماد',
          'secondName' => 'عبد العزيز',
          'thirdName' => 'محمد',
          'fourthName' => 'أبو حرب',
          'governorate' =>'غزة',
          'city' =>'غزة',
          'neighborhood' =>'النصر',
          'addressDetails' =>'غزة النصر عمارة الملش',
          'telephoneNumber' =>'28615581',
          'telephoneNumber2' =>'28135581',
          'ContactPerson' =>'احمد',
          'mobileNumber' =>'0599871515',
          'email' =>'sh1@gmail.com',
          'nationality' =>'فلسطينية',
          'CountryOfResidence' =>'فلسطين',
          'identificationNumber' =>'354866341',
          'definitionType' =>'هوية',

    ]);
    }
}
