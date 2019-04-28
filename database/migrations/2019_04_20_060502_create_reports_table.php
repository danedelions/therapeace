<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('booking_id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('therapist_id');
            $table->enum('rating', ['1','2','3','4','5'])->nullable();
            $table->text('reports')->nullable();
            $table->timestamps();
        }); 

        
        Schema::table('reports', function (Blueprint $table){
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
        Schema::dropIfExists('reports');
    }
}
