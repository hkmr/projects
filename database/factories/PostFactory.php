<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'views' => $faker->numberBetween($min = 100, $max = 9000),
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'featured_image' =>$faker->imageUrl($width = 640, $height = 480),
        'body' => $faker->paragraphs($nb = 6, true),
        'category_id' =>  $faker->numberBetween($min = 1, $max = 10), 
    ];
});
