<?php

use Faker\Generator as Faker;

$factory->define(skulyv\Profile::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,4),
        'D_O_B' => $faker->time(now()),
        'department' => $faker->lastName,
        'faculty' => $faker->firstName,
        'current_level' => $faker->numberBetween(100,200,300),
        'phone_number' => '08169988',
        'photo_id' => rand(1,4),
        'degree' => $faker->firstName,
        'class_id' => rand(1,4),
        'status' => $faker->firstName,

    ];
});
