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
            $table->foreign('user_id')->references('id')->on('users');

            //division
            $table->unsignedBigInteger('division_id');
            $table->foreign('division_id')->references('id')->on('divisions');

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
    }
}
