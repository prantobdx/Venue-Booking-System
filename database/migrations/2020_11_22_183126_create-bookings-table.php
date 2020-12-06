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
        {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('booked_by_name');
            $table->string('booked_by_email')->nullable();
            $table->string('date');
            $table->string('time-from');
            $table->string('time-to');
            $table->string('mini-guest');
            $table->string('max-guest');
            $table->string('description')->nullable();

            $table->unsignedBigInteger('venue_id');

            $table->foreign('venue_id')->references('id')->on('venues');
            

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });   
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
}
