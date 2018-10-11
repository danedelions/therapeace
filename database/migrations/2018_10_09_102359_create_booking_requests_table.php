<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('therapist_id');
            $table->unsignedInteger('client_id');
            $table->string('name');
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('booking_requests', function (Blueprint $table){
            $table->foreign('therapist_id')->references('user_id')->on('therapists')->onDelete('cascade');
            $table->foreign('client_id')->references('user_id')->on('clients')->onDelete('cascade');
        });

        // booking details

        Schema::create('booking_details', function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('booking_id');
            $table->string('diagnosis');
            $table->text('notes');
            $table->text('user_address');
            $table->string('email');
            $table->string('contact');
            $table->timestamps();
        });

        Schema::table('booking_details', function(Blueprint $table){
            $table->foreign('booking_id')->references('id')->on('booking_requests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_requests');
        Schema::dropIfExists('booking_details');
    }
}
