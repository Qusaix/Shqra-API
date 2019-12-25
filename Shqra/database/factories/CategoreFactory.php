<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categores;
use Faker\Generator as Faker;

$factory->define(Categores::class, function (Faker $faker) {
    return [
        'Title' => $faker->name,
        'description' => $faker->name,
    ];
});
