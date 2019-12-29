<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'Product_Name' => $faker->name,
        'User_Name' => $faker->name,
        'Categorey_Name' => $faker->name,

    ];
});
