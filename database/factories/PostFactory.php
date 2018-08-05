<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'description' => $faker->realText(random_int(10,200)),
        'body' => $faker->realText(random_int(300,2000)),
        'user_id' => $faker->numberBetween($min = 1, $max = 20)
    ];
});
