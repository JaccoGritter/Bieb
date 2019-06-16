<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Member;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'voornaam' => $faker->firstName,
        'achternaam' => $faker->lastName,
        'woonplaats' => $faker->city,
        'abo_geldig_tot' => $faker->dateTimeBetween($startDate = 'now', $endDate = '2022-12-31', $timezone = null)
    ];
});
