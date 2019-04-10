<?php

use Faker\Generator as Faker;

$factory->define(App\Assignment::class, function (Faker $faker) {
    return [
        'file_path' => $faker->fileExtension,
        'class_name_id' => rand(1,2)
    ];
});
