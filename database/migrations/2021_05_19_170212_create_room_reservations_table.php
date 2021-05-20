<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_reservations', function (Blueprint $table) {
            $table->id();
           
            $table->string('room_id');
            $table->string('service_id');
            $table->string('user_id');
            $table->string('checkIn_date');
            $table->string('checkOut_date');
            $table->string('adult');
            $table->string('children');
            $table->string('room');
            $table->string('message');
            $table->string('price');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('room_reservations');
    }
}
