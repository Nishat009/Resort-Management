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
            $table->integer('room_id');
            $table->integer('service_id')->nullable();
            $table->integer('user_id');
            $table->string('checkIn_date');
            $table->string('checkOut_date');
            $table->string('adult');
            $table->string('children');
            $table->string('t_id');
            $table->string('t_phone');
            $table->string('payment_method');
            $table->string('message');
            $table->string('price');
            $table->string('status')->default('pending');
            $table->string('paid_status')->default('unpaid');
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
