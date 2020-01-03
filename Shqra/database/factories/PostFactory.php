<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'Title' => $faker->name,
        'description' => $faker->paragraph,
        'image'=>$faker->imageUrl($width = 640, $height = 480 , 'cats', true, 'Faker'),
        'price'=>$faker->randomDigit
    ];
});
