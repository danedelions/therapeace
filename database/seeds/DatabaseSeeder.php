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
            'email' => 'therapeace@gmail.com',
            'password' =>bcrypt('12345'),
            'user_type' => 'admin'
        ]);



        // factory(App\User::class,0)->create();
        // factory(App\Client::class,5)->create();
        //factory(App\Therapist::class,5)->create();
        

         factory(App\User::class,0)->create();
        //  factory(App\Client::class,5)->create();

        factory(App\User::class,0)->create();
        //factory(App\Client::class,5)->create();

        // factory(App\User::class,0)->create();
        // factory(App\Client::class,5)->create();
        factory(App\Therapist::class,5)->create();

        factory(App\User::class,0)->create();
        factory(App\Client::class,5)->create();
        // factory(App\Therapist::class,5)->create();

        // // factory(App\User::class,0)->create();
        // factory(App\Client::class,5)->create();

        // // factory(App\User::class,0)->create();
        // //factory(App\Client::class,5)->create();

        // // factory(App\User::class,0)->create();
        // // factory(App\Client::class,5)->create();
        // factory(App\Therapist::class,5)->create();
        // factory(App\User::class,5)->create();
        // // factory(App\Client::class,5)->create();


        factory(App\Therapist::class,5)->create();



    }
}
