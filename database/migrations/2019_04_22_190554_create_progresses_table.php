<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('booking_id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('therapist_id');
            $table->date('session_date');
            $table->text('progress');
            $table->timestamps();
        });

        Schema::table('progresses', function (Blueprint $table){
            $table->foreign('therapist_id')->references('user_id')->on('therapists')->onDelete('cascade');
            $table->foreign('client_id')->references('user_id')->on('clients')->onDelete('cascade');
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
        Schema::dropIfExists('progresses');
    }
}
