<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class Therapist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapists', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('image')->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->string('contact');
            $table->string('gender');
            $table->string('streetaddress');
            $table->string('city');
            $table->string('province');
            $table->string('barangay');
            $table->string('postal_code');
            $table->decimal('longitude', 18, 10);
            $table->decimal('latitude', 18, 10);
            $table->string('therapist');
            $table->string('license_number');
            $table->string('expiry_date');
            $table->string('licenseimage_front');
            $table->string('licenseimage_back');
            $table->string('nbi_image');
            $table->string('bc_image');
            $table->text('user_bio')->nullable();
            $table->decimal('personal_rate',5,2)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
          Schema::table('therapists', function (Blueprint $table) {
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
        Schema::dropIfExists('therapists');
    }
}