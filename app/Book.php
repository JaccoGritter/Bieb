<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{

    public function users()
    {
        return $this->belongsToMany(User::class, 'books_users')
        ->withPivot('lent_from');
        
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


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

