<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique;
            $table->timestamps();
        });

        Schema::create('t_specialties', function (Blueprint $table) {
            
            $table->unsignedInteger('therapist_id');
            $table->unsignedInteger('spec_id')->nullable();
            $table->timestamps();
        });

        Schema::table('t_specialties', function(Blueprint $table){
            $table->foreign('therapist_id')->references('id')->on('therapists')->onDelete('cascade');
            $table->foreign('spec_id')->references('id')->on('specialties')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialties');
        Schema::dropIfExists('t_specialties');
    }
}
