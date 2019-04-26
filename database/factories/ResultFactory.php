<?php

use skulyv\Result;
use Faker\Generator as Faker;

$factory->define(Result::class, function (Faker $faker) {
    return [
        'user_id'=> rand(1,10),
        'course_code' => $faker->title . $faker->numberBetween(101,110),
        'course_title' => $faker->name,
        'year' => rand(2015,2018),
        'ca1'=> $faker->numberBetween(3,30),
        'ca2' => $faker->numberBetween(3,30),
        'exam' => $faker-> numberBetween(40,70),

    ];
});
