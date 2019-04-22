<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('booking_id');
            $table->unsignedInteger('therapist_id');
            $table->unsignedInteger('client_id');
            $table->string('chief_complaint');
            $table->enum('vital_sign',['a','p']);
            $table->string('bp');
            $table->string('pr');
            $table->string('rr');
            $table->string('assessment');
            $table->enum('area_ue', ['ue',null])->nullable();
            $table->enum('area_le', ['le',null])->nullable();
            $table->enum('arom', ['arom',null])->nullable();
            $table->enum('prom',['prom',null])->nullable();
            $table->string('massage_area')->nullable();
            $table->string('massage_min')->nullable();
            $table->string('stretching_hold')->nullable();
            $table->string('stretching_sets')->nullable();
            $table->string('estens_area')->nullable();
            $table->string('estens_min')->nullable();
            $table->string('resistance_weight')->nullable();
            $table->string('resistance_motion')->nullable();
            $table->string('resistance_reps')->nullable();
            $table->string('resistance_sets')->nullable();
            $table->string('other_text')->nullable();
            $table->timestamps();
        });

        Schema::table('checklists', function (Blueprint $table){
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
        Schema::dropIfExists('checklists');
    }
}
