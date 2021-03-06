<?php

use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => str_slug($faker->sentence),
        'content' => $faker->paragraph,
        'featured' => $faker->imageUrl,
        'category_id' => rand(1,10),
        'user_id' => 1
    ];
});
