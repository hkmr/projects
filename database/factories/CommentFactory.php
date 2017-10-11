<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' =>$faker->numberBetween($min = 1, $max = 10),
        'name' => $faker->name($gender = null|'male'|'female'),
        'email' => $faker->unique()->safeEmail,
        'comment' => $faker->sentence($nbWords = 6, true),
        'approved' => 1,
        'post_id' => $faker->numberBetween($min = 1, $max = 100),
    ];
});
