<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Topic;
use Faker\Generator as Faker;

$factory->define(Topic::class, function (Faker $faker) {
    return [
        'title' => $faker->word(5),
        'body' => $faker->paragraph(20),
        'thread_id' => rand(1,20),
        'user_id' => rand(1,5)
    ];
});
