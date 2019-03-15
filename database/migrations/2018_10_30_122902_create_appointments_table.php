<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('therapist_id');
            $table->unsignedInteger('booking_id');
            $table->string('name');
            $table->string('address');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });

        Schema::table('appointments', function (Blueprint $table) {
            $table->foreign('client_id')->references('user_id')->on('clients')->onDelete('cascade');
            $table->foreign('therapist_id')->references('user_id')->on('therapists')->onDelete('cascade');
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
        Schema::dropIfExists('appointments');
    }
}
