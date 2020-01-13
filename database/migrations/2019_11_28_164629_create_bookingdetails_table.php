<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('hour_startdate');
            $table->string('numberofhours');

            $table->date('daily_startdate');
            $table->date('daily_enddate');
            $table->integer('tour_day');

            $table->string('arrival_time');
            $table->string('departure_time');

            $table->string('numberofadult');
            $table->string('numberofchild');

            $table->text('requirement');
            $table->text('cost');
            $table->string('status');

            $table->date('confirmdate');
            $table->date('finishdate');


            //guide
            $table->unsignedBigInteger('guide_id');

            //place
            $table->unsignedBigInteger('place_id');

            //booking
            $table->unsignedBigInteger('booking_id');
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
        Schema::dropIfExists('bookingdetails');
    }
}
