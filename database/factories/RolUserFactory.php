<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\RolUser;

$factory->define(RolUser::class, function (Faker $faker) {
    $rol_id = App\Rol::pluck('id')->toArray();
    $user_id = App\User::pluck('id')->toArray();
    return [
        'rol_id' => $faker->randomElement($rol_id),
        'user_id' => $faker->randomElement($user_id),
        'active' => 'true',
    ];
});
