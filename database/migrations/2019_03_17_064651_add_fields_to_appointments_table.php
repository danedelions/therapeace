<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->text('other_services')->nullable()->after('end_date');
            $table->decimal('other_services_fee', 13 ,2)->nullable()->after('other_services');
            $table->decimal('num_hours_per_day', 13 ,2)->nullable()->after('other_services_fee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn(['other_services', 'other_services_fee', 'num_hours_per_day']);
        });
    }
}
