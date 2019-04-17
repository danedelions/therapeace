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
            $table->string('city');
            $table->string('province');
            $table->string('res_detail')->nullable();
            $table->string('street');
            $table->string('brgy')->nullable();
            $table->string('building')->nullable();
            $table->string('landmark')->nullable();
            $table->string('address_remarks')->nullable();
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