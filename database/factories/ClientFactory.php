<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(App\User::class {
//     return [
//     'username' => 'hanaxxi',
//     'email' => 'hanaxxi.jpg@gmail.com',
//     'password' =>bcrypt('123'),
//     'user_type' => 'client',
//     'status' => '0',
// 	'remember_token' => str_random(10),
//     ];
// });

// $factory->define(App\Client::class {
//     return [
// 	    'user_id' => create(App\User::class)->id,
// 	    'fname' => 'Hannah',
// 	    'lname' => 'Alag',
// 	    'contact' => '09089174215',
// 	    'gender' => 'Female',
// 	    'city' => 'Mandaue',
// 	    'province' => 'Cebu',
// 	    'brgy' => '',
// 	    'res_detail' => '',
// 	    'building' => '',
// 	    'landmark' => '',
// 	    'address_remarks' => '',
// 	    'remember_token' => str_random(10),
//     ];
// });

// DB::table('users')->insert([
//     'username' => 'hanaxxi',
//     'email' => 'hanaxxi.jpg@gmail.com',
//     'password' =>bcrypt('123'),
//     'user_type' => 'client',
//     'status' => '0',

// ]);

// DB:table('clients')->insert([
//     'user_id' => create(App\User::class)->id,
//     'fname' => 'Hannah',
//     'lname' => 'Alag',
//     'contact' => '09089174215',
//     'gender' => 'Female',
//     'city' => 'Mandaue',
//     'province' => 'Cebu',
//     'brgy' => '',
//     'res_detail' => '',
//     'building' => '',
//     'landmark' => '',
//     'address_remarks' => '',
//     'remember_token' => '',
// ]);