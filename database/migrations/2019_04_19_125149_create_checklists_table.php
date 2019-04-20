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
            $table->integer('therapist_id');
            $table->integer('client_id');
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
            $table->enum('massage', ['massage',null])->nullable();
            $table->string('massage_area')->nullable();
            $table->string('massage_min')->nullable();
            $table->enum('stretching',['stretching',null])->nullable();
            $table->string('stretching_hold')->nullable();
            $table->string('stretching_sets')->nullable();
            $table->enum('es_tens',['es_tens',null])->nullable();
            $table->string('estens_area')->nullable();
            $table->string('estens_min')->nullable();
            $table->string('resistance_weight')->nullable();
            $table->string('resistance_motion')->nullable();
            $table->string('resistance_reps')->nullable();
            $table->string('resistance_sets')->nullable();
            $table->enum('other',['other',null])->nullable();
            $table->string('other_text')->nullable();
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
        Schema::dropIfExists('checklists');
    }
}
