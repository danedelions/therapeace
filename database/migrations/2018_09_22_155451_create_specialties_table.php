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
            
            $table->integer('therapist_id')->references('id')->on('therapists')->onDelete('cascade');
            $table->integer('spec_id')->references('id')->on('specialties')->onDelete('cascade');
            $table->primary(['therapist_id','spec_id']);
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
        Schema::dropIfExists('specialties');
        Schema::dropIfExists('t_specialties');
    }
}
