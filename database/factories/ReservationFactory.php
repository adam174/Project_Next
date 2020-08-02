<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reservation;
use App\Models\Room;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'room_id' => Room::all()->random()->id,
        'num_of_guests' => 2,
        'arrival' => $faker->dateTimeBetween($startDate = '-3 months', $endDate = '-2 months'),
        'departure' => $faker->dateTimeBetween($startDate = '-1 months', $endDate = 'now'),
        'price' => $faker->randomNumber(3),
        'payment_type' => $faker->creditCardType,
        'is_paid' => 'succeeded'
    ];
});
