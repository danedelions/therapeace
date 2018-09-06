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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	'username' => 'peaceadmin',
            'email' => 'therapeace@gmail.com',
            'password' =>bcrypt('12345'),
            'user_type' => 'admin'
        ]);

<<<<<<< HEAD
        // factory(App\User::class,0)->create();
        // factory(App\Client::class,5)->create();
        //factory(App\Therapist::class,5)->create();
        
=======
<<<<<<< HEAD
         factory(App\User::class,0)->create();
        //  factory(App\Client::class,5)->create();
=======
<<<<<<< HEAD
        factory(App\User::class,0)->create();
        //factory(App\Client::class,5)->create();
=======
        // factory(App\User::class,0)->create();
        // factory(App\Client::class,5)->create();
        factory(App\Therapist::class,5)->create();
        factory(App\User::class,0)->create();
        // factory(App\Client::class,5)->create();
>>>>>>> 48a5267d6f470fae5bb6ec48de42f65e6c09dc06
>>>>>>> bc922da31aadf84e8fbbbf7ce6669f0bf0ca9200
        factory(App\Therapist::class,5)->create();
>>>>>>> a607b44df1c3af803b9145785983dbef799c1931

    }
}
