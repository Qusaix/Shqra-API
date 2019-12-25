<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subcategores;
use Faker\Generator as Faker;

$factory->define(Subcategores::class, function (Faker $faker) {
    return [
        'Title' => $faker->name,
        'description' => $faker->name,
    
    ];
});
