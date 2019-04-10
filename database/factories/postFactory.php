<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,3),
        'title' => $faker->title,
        'body' => $faker->text,
        'photo_id'  => rand(1,6)
    ];
});
