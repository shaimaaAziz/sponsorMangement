<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovernoratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('governorates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');

//            $table->BigInteger('governorate_id')->unsigned();
//            $table->foreign('governorate_id')->references('id')->on
//            ('countries')->onDelete('cascade');

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
        Schema::dropIfExists('governorates');
    }
}
