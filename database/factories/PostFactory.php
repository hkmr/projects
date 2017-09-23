<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' 		=> $faker->numberBetween($min = 1, $max = 10),
       	'views'	  		=> $faker->numberBetween($min = 1000, $max = 9000),
       	'category_id'	=> $faker->numberBetween($min = 1, $max = 10),
       	'title'			=> $faker->sentence($nbWords = 8, $variableNbWords = true),
       	'featured_image'	=> $faker->imageUrl($width=1200, $height=1200, 'cats', true, 'Faker'),
       	'image'			=> $faker->imageUrl($width=500, $height=500, 'cats', true, 'Faker'),
       	'body'			=> $faker->text($maxNbChars = 4000),  
       	'slug'			=> $faker->unique()->slug,
    ];
});
