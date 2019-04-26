<?php

use Faker\Generator as Faker;

$factory->define(skulyv\ClassName::class, function (Faker $faker) {
    return [
//        'id' => rand(1,3),
        'name' => $faker->firstName,
        'staff_id' => rand(1,3)
    ];
});
