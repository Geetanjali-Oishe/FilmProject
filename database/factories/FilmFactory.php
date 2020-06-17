<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Film::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        'description' => $faker->text,
        'release' => $faker->date(),
        'rating' => $faker->numberBetween(1,5),
        'ticket' => $faker->numberBetween(1,100),
        'country' => $faker->country,
        'photo' => 'uploads/test.jpeg',
        'genre' => $faker->name,
        'user_id' => $faker->numberBetween(1,2)
    ];
});
