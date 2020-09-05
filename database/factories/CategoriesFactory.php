<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array('Inmobiliaria', 'Muebles', 'Artículos', 'Herramientas', 'Espacios', 'Vehículos', 'Eventos')),
        'type' => $faker->word,
        'active' => 'true',
    ];
});
