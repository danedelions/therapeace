<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);

		// Administrators
	    DB::table('users')->insert([
	    	'username' => 'PeaceAdmin',
	        'email' => 'therapeacemaker@gmail.com',
	        'password' =>bcrypt('peacemaker'),
	        'user_type' => 'admin',
	        'status' => '0',

	    ]);

	    DB::table('users')->insert([
	    	'username' => 'PeaceAdminDaniela',
	        'email' => 'therapeacemaker_daniela@gmail.com',
	        'password' =>bcrypt('peacemakerdaniela'),
	        'user_type' => 'admin',
	        'status' => '0',

	    ]);

	    DB::table('users')->insert([
	    	'username' => 'PeaceAdminJude',
	        'email' => 'therapeacemaker_jude@gmail.com',
	        'password' =>bcrypt('peacemakerjude'),
	        'user_type' => 'admin',
	        'status' => '0',

	    ]);

	    DB::table('users')->insert([
	    	'username' => 'PeaceAdminTiffany',
	        'email' => 'therapeacemaker_tiffany@gmail.com',
	        'password' =>bcrypt('peacemakertiffany'),
	        'user_type' => 'admin',
	        'status' => '0',

	    ]);

	    DB::table('users')->insert([
	    	'username' => 'PeaceAdminChino',
	        'email' => 'therapeacemaker_chino@gmail.com',
	        'password' =>bcrypt('peacemakerchino'),
	        'user_type' => 'admin',
	        'status' => '0',

	    ]);

	    // CLIENT'S SECTION
	    // #1
	    DB::table('users')->insert([
	        'username' => 'hannah123',
	        'email' => 'hanaxxi.jpg@gmail.com',
	        'password' =>bcrypt('123'),
	        'user_type' => 'client',
	        'status' => '0',

	    ]);

	    DB::table('clients')->insert([
	        'user_id' => '6',
	        'fname' => 'Hannah',
	        'lname' => 'Alag',
	        'contact' => '09089174215',
	        'gender' => 'Female',
	        'city' => 'Mandaue City',
	        'province' => 'Cebu',
	        'street' => 'Gov. M. Cuenco Ave',
	        'brgy' => '',
	        'res_detail' => '',
	        'building' => '',
	        'landmark' => '',
	        'address_remarks' => '',
	        'remember_token' => '',
	    ]);

	    // #2
	    DB::table('users')->insert([
	        'username' => 'gilbert123',
	        'email' => 'gilbert123@gmail.com',
	        'password' =>bcrypt('123'),
	        'user_type' => 'client',
	        'status' => '0',

	    ]);

	    DB::table('clients')->insert([
	        'user_id' => '7',
	        'fname' => 'Gilbert',
	        'lname' => 'Apura',
	        'contact' => '09089174215',
	        'gender' => 'Male',
	        'city' => 'Cebu City',
	        'province' => 'Cebu',
	        'street' => 'F. Cabahug',
	        'brgy' => '',
	        'res_detail' => '',
	        'building' => '',
	        'landmark' => '',
	        'address_remarks' => '',
	        'remember_token' => '',
	    ]);

	    // #3
	    DB::table('users')->insert([
	        'username' => 'uleah123',
	        'email' => 'uleah123@gmail.com',
	        'password' =>bcrypt('123'),
	        'user_type' => 'client',
	        'status' => '0',

	    ]);

	    DB::table('clients')->insert([
	        'user_id' => '8',
	        'fname' => 'Uleah',
	        'lname' => 'Avila',
	        'contact' => '09089174215',
	        'gender' => 'Female',
	        'city' => 'Mandaue City',
	        'province' => 'Cebu',
	        'street' => 'AC Cortes',
	        'brgy' => '',
	        'res_detail' => '',
	        'building' => '',
	        'landmark' => '',
	        'address_remarks' => '',
	        'remember_token' => '',
	    ]);

	    // #4
	    DB::table('users')->insert([
	        'username' => 'hezron123',
	        'email' => 'hezron123@gmail.com',
	        'password' =>bcrypt('123'),
	        'user_type' => 'client',
	        'status' => '0',

	    ]);

	    DB::table('clients')->insert([
	        'user_id' => '9',
	        'fname' => 'Hezron Donald',
	        'lname' => 'Bensig',
	        'contact' => '09089174215',
	        'gender' => 'Male',
	        'city' => 'Cebu City',
	        'province' => 'Cebu',
	        'street' => 'Salinas Dr.',
	        'brgy' => '',
	        'res_detail' => '',
	        'building' => '',
	        'landmark' => '',
	        'address_remarks' => '',
	        'remember_token' => '',
	    ]);

	    // #5
	    DB::table('users')->insert([
	        'username' => 'patrick123',
	        'email' => 'patrick123@gmail.com',
	        'password' =>bcrypt('123'),
	        'user_type' => 'client',
	        'status' => '0',

	    ]);

	    DB::table('clients')->insert([
	        'user_id' => '10',
	        'fname' => 'Patrick James',
	        'lname' => 'Camarista',
	        'contact' => '09089174215',
	        'gender' => 'Male',
	        'city' => 'Lapu-Lapu City',
	        'province' => 'Cebu',
	        'street' => 'S. Osmena St',
	        'brgy' => '',
	        'res_detail' => '',
	        'building' => '',
	        'landmark' => '',
	        'address_remarks' => '',
	        'remember_token' => '',
	    ]);

	    // #6
	    DB::table('users')->insert([
	        'username' => 'josh123',
	        'email' => 'josh123@gmail.com',
	        'password' =>bcrypt('123'),
	        'user_type' => 'client',
	        'status' => '0',

	    ]);

	    DB::table('clients')->insert([
	        'user_id' => '11',
	        'fname' => 'Josh Mari',
	        'lname' => 'Etis',
	        'contact' => '09089174215',
	        'gender' => 'Male',
	        'city' => 'Consolacion',
	        'province' => 'Cebu',
	        'street' => 'Laray Rd',
	        'brgy' => '',
	        'res_detail' => '',
	        'building' => '',
	        'landmark' => '',
	        'address_remarks' => '',
	        'remember_token' => '',
	    ]);

	    // #7
	    DB::table('users')->insert([
	        'username' => 'dale123',
	        'email' => 'dale123@gmail.com',
	        'password' =>bcrypt('123'),
	        'user_type' => 'client',
	        'status' => '0',

	    ]);

	    DB::table('clients')->insert([
	        'user_id' => '12',
	        'fname' => 'Francis Dale',
	        'lname' => 'Francisco',
	        'contact' => '09089174215',
	        'gender' => 'Male',
	        'city' => 'Mandaue City',
	        'province' => 'Cebu',
	        'street' => 'Hernan Cortes',
	        'brgy' => '',
	        'res_detail' => '',
	        'building' => '',
	        'landmark' => '',
	        'address_remarks' => '',
	        'remember_token' => '',
	    ]);

	    // #8
	    DB::table('users')->insert([
	        'username' => 'zsanne123',
	        'email' => 'zsanne123@gmail.com',
	        'password' =>bcrypt('123'),
	        'user_type' => 'client',
	        'status' => '0',

	    ]);

	    DB::table('clients')->insert([
	        'user_id' => '13',
	        'fname' => 'Zsanne',
	        'lname' => 'Galos',
	        'contact' => '09089174215',
	        'gender' => 'Female',
	        'city' => 'Cebu City',
	        'province' => 'Cebu',
	        'street' => 'Lopez Jaena St',
	        'brgy' => '',
	        'res_detail' => '',
	        'building' => '',
	        'landmark' => '',
	        'address_remarks' => '',
	        'remember_token' => '',
	    ]);

	    // #9
	    DB::table('users')->insert([
	        'username' => 'jhin123',
	        'email' => 'jhin123@gmail.com',
	        'password' =>bcrypt('123'),
	        'user_type' => 'client',
	        'status' => '0',

	    ]);

	    DB::table('clients')->insert([
	        'user_id' => '14',
	        'fname' => 'Jhin',
	        'lname' => 'Generans',
	        'contact' => '09089174215',
	        'gender' => 'Female',
	        'city' => 'Lapu-Lapu City',
	        'province' => 'Cebu',
	        'street' => 'S. Osmena St',
	        'brgy' => '',
	        'res_detail' => '',
	        'building' => '',
	        'landmark' => '',
	        'address_remarks' => '',
	        'remember_token' => '',
	    ]);

	    // #10
	    DB::table('users')->insert([
	        'username' => 'louie123',
	        'email' => 'louie123@gmail.com',
	        'password' =>bcrypt('123'),
	        'user_type' => 'client',
	        'status' => '0',

	    ]);

	    DB::table('clients')->insert([
	        'user_id' => '15',
	        'fname' => 'Louie James',
	        'lname' => 'Jaminal',
	        'contact' => '09089174215',
	        'gender' => 'Male',
	        'city' => 'Mandaue City',
	        'province' => 'Cebu',
	        'street' => 'A.S Fortuna',
	        'brgy' => '',
	        'res_detail' => '',
	        'building' => '',
	        'landmark' => '',
	        'address_remarks' => '',
	        'remember_token' => '',
	    ]);

	    // #11
	    DB::table('users')->insert([
	        'username' => 'kit123',
	        'email' => 'kit123@gmail.com',
	        'password' =>bcrypt('123'),
	        'user_type' => 'client',
	        'status' => '0',

	    ]);

	    DB::table('clients')->insert([
	        'user_id' => '16',
	        'fname' => 'Kit Daniel',
	        'lname' => 'Lim',
	        'contact' => '09089174215',
	        'gender' => 'Male',
	        'city' => 'Lapu-Lapu City',
	        'province' => 'Cebu',
	        'street' => 'S. Osmena St',
	        'brgy' => '',
	        'res_detail' => '',
	        'building' => '',
	        'landmark' => '',
	        'address_remarks' => '',
	        'remember_token' => '',
	    ]);
            
    }
}
