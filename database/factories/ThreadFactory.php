<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thread;
use Faker\Generator as Faker;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'title' => $faker->word(5),
        'description' => $faker->text(250),
        'user_id' => 1
    ];
});
