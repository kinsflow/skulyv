<?php

use Faker\Generator as Faker;

$factory->define(App\Payment::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,4),
        'amount_paid' => 50,
    ];
});
