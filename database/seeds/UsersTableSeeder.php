<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'username' => 'peaceadmin',
            'email' => 'therapeace@gmail.com',
            'password' =>bcrypt('12345'),
            'user_type' => 'admin'
        ]);
    }
}
