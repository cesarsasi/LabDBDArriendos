<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assessment;
use Faker\Generator as Faker;

$factory->define(Assessment::class, function (Faker $faker) {
    $publication_id = App\Publication::pluck('id')->toArray();
    $purchase_id = App\Purchase::pluck('id')->toArray();

    return [
        'score' => $faker->numberBetween($min = 1, $max = 5),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'comment' => $faker->text($maxNbChars = 500),
        'publication_id' => $faker->randomElement($publication_id),
        'purchase_id' => $faker->randomElement($purchase_id),
    ];
});
