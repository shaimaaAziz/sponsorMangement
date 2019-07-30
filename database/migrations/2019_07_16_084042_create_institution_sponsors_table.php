<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution_sponsors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('password');
            $table->string('firstName');
            $table->string('secondName');
            $table->string('thirdName');
            $table->string('fourthName');
            $table->string('address');
            $table->string('ContactPerson');
            $table->integer('telephoneNumber1');
            $table->integer('telephoneNumber2');
            $table->string('email')->unique();
            $table->string('Country');

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
        Schema::dropIfExists('institution_sponsors');
    }
}
