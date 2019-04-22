<?php

use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // #1
	    DB::table('booking_requests')->insert([
	        'id' => '1',
	        'therapist_id' => '3',
	        'client_id' => '2',
	        'name' => 'Hannah Alag',
	        'status' => '0',

	    ]);

	    DB::table('booking_details')->insert([
	        'id' => '1',
	        'booking_id' => '1',
	        'diagnosis' => 'Spine',
	        'image' => '',
	        'notes' => 'need theraphy',
	        'user_address' => '',
	        'email' => '',
	        'contact' => '',
	    ]);
    }
}
