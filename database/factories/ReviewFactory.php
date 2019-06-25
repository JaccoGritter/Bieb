<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Review;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'book_id' => rand(1,1000),
        'user_id' => rand(1,1000),
        'screen_name' => $faker->firstName,
        'stars' => rand(0,5),
        'comments' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
