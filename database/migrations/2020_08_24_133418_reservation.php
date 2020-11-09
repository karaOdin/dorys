<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('reservations', function (Blueprint $table) {
        $table->increments('id');
         $table->unsignedBigInteger('event_id');
         $table->date('date_congre');


     $table->foreign('Event_id')->references('id')->on('events');



    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');    }
}
