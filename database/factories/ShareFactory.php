<?php

use Faker\Generator as Faker;

$factory->define(App\Share::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 2, $max = 21),
        'post_id' => $faker->numberBetween($min = 1, $max = 50)
    ];
});
