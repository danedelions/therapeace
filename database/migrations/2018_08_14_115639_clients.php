<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('contact');
            $table->string('gender');
            $table->string('barangay');
            $table->string('street');
            $table->string('province');
            $table->integer('postal_code');
            $table->string('town');
            $table->string('city');
            $table->rememberToken();
            $table->timestamps();

           
           
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
