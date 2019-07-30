<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_sponsors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('password');
            $table->string('type');
            $table->string('firstName');
            $table->string('secondName');
            $table->string('thirdName');
            $table->string('fourthName');
            $table->string('governorate')->nullable();
            $table->string('city')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('addressDetails');
            $table->integer('telephoneNumber')->unique();
            $table->integer('telephoneNumber2')->unique()->nullable();
            $table->string('ContactPerson')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->string('email')->unique();
            $table->string('nationality')->nullable();
            $table->string('CountryOfResidence');
            $table->integer('identificationNumber')->nullable();
            $table->string('definitionType')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_sponsors');
    }
}
