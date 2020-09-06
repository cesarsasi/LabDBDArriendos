<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $publication_id = App\Publication::pluck('id')->toArray();
    return [
        'name' => $faker->word,
        'availability' => $faker->numberBetween($min = 0, $max = 1),
        'publication_id' => $faker->randomElement($publication_id),
        'active' => 'true',
    ];
});
