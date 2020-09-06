<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Transaction;

$factory->define(Transaction::class, function (Faker $faker) {
    $user_id = App\User::pluck('id')->toArray();
    return [
        'paymentMethod' => $faker->numberBetween($min=1, $max=4),
        'card' => $faker->creditCardNumber,
        'user_id' => $faker->randomElement($user_id),
        'active' => 'true',
    ];
});
