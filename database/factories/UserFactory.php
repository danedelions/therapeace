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

$factory->define(App\User::class, function (Faker $faker) {
    return [
    	'username' => $faker->name,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'email' => $faker->unique()->safeEmail,
        'user_type' => 'therapist',
        'status' => '0',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Client::class, function (Faker $faker) use ($factory) {
    return [
    	'user_id' => $factory->create(App\User::class)->id,
    	'fname' => $faker->firstName,
	    'lname' => $faker->lastName,
    	'contact' => $faker->phoneNumber,
        'barangay' => $faker->city,
        'province' => $faker->city,
        'town' => $faker->city,
        'city' => $faker->city,
        'remember_token' => str_random(10),
    ];
});

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

// $factory->define(App\Therapist::class, function (Faker $faker) use ($factory) {
//     return [
//         'user_id' => $factory->create(App\User::class)->id,
//         'image' => $faker->imageUrl($width = 200, $height = 200),
//         'fname' => $faker->firstName,
//         'lname' => $faker->lastName,
//         'contact' => $faker->phoneNumber,

>>>>>>> 943f2b65f9607852f57b67584d5fab59505e372d

// $factory->define(App\Therapist::class, function (Faker $faker) use ($factory) {
//     return [
//     	'user_id' => $factory->create(App\User::class)->id,
//     	'image' => $faker->imageUrl($width = 200, $height = 200),
//     	'fname' => $faker->firstName,
// 	    'lname' => $faker->lastName,
//     	'contact' => $faker->phoneNumber,
//         'barangay' => $faker->city,
//         'province' => $faker->city,
//         'town' => $faker->city,
//         'city' => $faker->city,
//         'therapist' => $faker->randomElement($array = array('occupational', 'physical')),
//         'license_number' => $faker->randomDigit,
//         'expiry_date' => $faker->dateTime,
//         'license_image' => $faker->imageUrl($width = 200, $height = 200),
//         'nbi_image' => $faker->imageUrl($width = 200, $height = 200),
//         'bp_image' => $faker->imageUrl($width = 200, $height = 200),
//         'remember_token' => str_random(10),
//     ];
<<<<<<< HEAD
// });
=======
// });

>>>>>>> 2e864664b810f8e79491662596e77eb1bedc9705
$factory->define(App\Therapist::class, function (Faker $faker) use ($factory) {
    return [
    	'user_id' => $factory->create(App\User::class)->id,
    	'image' => $faker->imageUrl($width = 200, $height = 200),
    	'fname' => $faker->firstName,
	    'lname' => $faker->lastName,
    	'contact' => $faker->phoneNumber,
<<<<<<< HEAD
     'barangay' => $faker->city,
     'province' => $faker->city,
     'town' => $faker->city,
     'city' => $faker->city,
     'therapist' => $faker->randomElement($array = array('occupational', 'physical')),
     'license_number' => $faker->randomDigit,
     'expiry_date' => $faker->dateTime,
     'license_image' => $faker->imageUrl($width = 200, $height = 200),
     'nbi_image' => $faker->imageUrl($width = 200, $height = 200),
     'bp_image' => $faker->imageUrl($width = 200, $height = 200),
     'remember_token' => str_random(10),
    ];
});


=======
        'barangay' => $faker->city,
        'province' => $faker->city,
        'town' => $faker->city,
        'city' => $faker->city,
        'therapist' => $faker->randomElement($array = array('occupational', 'physical')),
        'license_number' => $faker->randomDigit,
        'expiry_date' => $faker->dateTime,
        'license_image' => $faker->imageUrl($width = 200, $height = 200),
        'nbi_image' => $faker->imageUrl($width = 200, $height = 200),
        'bp_image' => $faker->imageUrl($width = 200, $height = 200),
        'remember_token' => str_random(10),
    ];

});

>>>>>>> 943f2b65f9607852f57b67584d5fab59505e372d
>>>>>>> 2e864664b810f8e79491662596e77eb1bedc9705
