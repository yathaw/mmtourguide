<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('tokenno');
            $table->date('bookingdate');
            $table->date('confirmdate');
            $table->date('finishdate');
            $table->text('invoicepdf');
            $table->string('total');
            $table->string('totalguide');
            $table->string('status');

            //tourist
            $table->unsignedBigInteger('tourist_id');

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
        Schema::dropIfExists('bookings');
    }
}
