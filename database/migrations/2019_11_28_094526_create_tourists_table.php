<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender');
            $table->string('phone');
            $table->text('address');
            $table->string('image');
            $table->string('cardtype');

            $table->text('passport');
            $table->text('passportcard');
            $table->string('nationality');
            $table->date('dob');
            $table->date('doi');
            $table->date('doe');
            $table->boolean('status')->default(false);
            

            //country
            $table->unsignedBigInteger('country_id');

            //user
            $table->unsignedBigInteger('user_id');

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
        Schema::dropIfExists('tourists');
    }
}
