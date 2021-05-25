<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_details', function (Blueprint $table) {
            $table->id();
            $table->text('file')->nullable();
            $table->string('room_type');
            $table->string('room_detail');
            $table->date('checkIn_date')->default('2020-01-01');
            $table->date('checkOut_date')->default('2020-01-01');
            $table->string('price');
            $table->string('adult');
            $table->string('children');
            $table->string('status')->default('available');
            $table->string('publishedStatus')->default('Published');
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
        Schema::dropIfExists('room_details');
    }
}
