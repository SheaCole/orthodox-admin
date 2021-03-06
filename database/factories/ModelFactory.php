<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\People::class, function (Faker\Generator $faker) {
    $newPerson = [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'age'=> rand(1, 100),
    ];

    $newPerson['slug'] = str_slug("{$newPerson['first_name']} {$newPerson['last_name']}", "-");

    return $newPerson;
});
