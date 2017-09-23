<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name'	=> $faker->unique()->word,
        'total_posts' => $faker->numberBetween($min = 100, $max = 9000),
    ];
});
