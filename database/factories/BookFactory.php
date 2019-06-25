<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Book;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    $taal = ['nl', 'du', 'en', 'fr'];
    $genre = ['roman', 'science fiction', 'thriller', 'humor', 'fantasy', 'biografie'];
    $titel = $faker->sentence($nbWords = 4, $variableNbWords = true);
    return [
        'titel' => substr($titel, 0, strlen($titel) - 1),
        'auteur' => $faker->name,
        'taal' => $taal[rand(0,3)],
        'genre' => $genre[rand(0,5)],
        'aantal_paginas' => rand(100,600),
        'isbn' => rand(1000000000000,9999999999999),
        'aantal_aanwezig' => rand(0,10)
    ];
});
