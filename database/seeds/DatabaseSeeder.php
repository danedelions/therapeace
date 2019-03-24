<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
        	'username' => 'peaceadmin',
            'email' => 'therapeacemaker@gmail.com',
            'password' =>bcrypt('peacemaker'),
            'user_type' => 'admin',
            'status' => '0',

        ]);

        //factory(App\User::class,0)->create();
       
        //factory(App\Therapist::class,5)->create();

        // factory(App\Client::class,5)->create();

    }
}

// php artisan db:seed