<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Publication;
use Faker\Generator as Faker;

$factory->define(Publication::class, function (Faker $faker) {
    $category_id = App\Category::pluck('id')->toArray();
    $locate_id = App\Location::pluck('id')->toArray();
    $user_id = App\User::pluck('id')->toArray();

    return [
        'description' => $faker->sentence($nbWords = 30, $variableNbWords = true),
        'price' => $faker->randomFloat($nbMaxDecimals = 0, $min = 0, $max = NULL),
        'stock' => $faker->numberBetween($min = 0, $max = 20),
        'category_id' => $faker->randomElement($category_id),
        'locate_id' => $faker->randomElement($locate_id),
        'user_id' => $faker->randomElement($user_id),
        'active' => 'true',
    ];
});
