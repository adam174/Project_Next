<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'country' => $faker->randomElement([225, 226, 80, 73, 199]),
        'mobile' => $faker->e164PhoneNumber,
        'password' => '$2y$12$FZm8yhV61cSMN8IXSfs9eOrZ/xDKsASahgdLve5108vZp8PS2g4oy', // password
        'remember_token' => Str::random(10),
    ];
});
