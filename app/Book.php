<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'titel',
        'auteur',
        'taal',
        'genre',
        'aantal_paginas',
        'isbn',
        'aantal_aanwezig'       
    ];
}

