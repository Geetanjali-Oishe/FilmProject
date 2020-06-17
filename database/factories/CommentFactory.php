<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->text,
        'user_id' => $faker->numberBetween(1,2),
        'film_id' => $faker->numberBetween(1,6),
    ];
});
