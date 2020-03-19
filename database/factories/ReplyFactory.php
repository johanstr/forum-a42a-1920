<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph(20),
        'topic_id' => rand(1,50),
        'user_id' => rand(1,5)
    ];
});
