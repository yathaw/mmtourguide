<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;


class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('license');
            $table->text('licensecertificate');
            $table->string('phone');
            $table->string('address');
            $table->string('gender');
            $table->string('profile');
            $table->text('cv');
            $table->date('approveddate')->default(Carbon::now());
            $table->text('bio');
            $table->string('hourrate');
            $table->string('dailyrate');
            $table->string('guidenumber');

            $table->boolean('status')->default(false);

            //user
            $table->unsignedBigInteger('user_id');

            //division
            $table->unsignedBigInteger('division_id');

            $table->timestamps();
        });

        Schema::create('guide_place', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('guide_id');
            $table->unsignedBigInteger('place_id');
            $table->timestamps();
        });

        Schema::create('guide_language', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('guide_id');
            $table->unsignedBigInteger('language_id');
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
        Schema::dropIfExists('guides');
        Schema::dropIfExists('guide_place');
        Schema::dropIfExists('guide_language');
    }
}
