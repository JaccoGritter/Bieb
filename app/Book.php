<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;

class Book extends Model
{

    public function members()
    {
        return $this->belongsToMany('App\Member', 'books_members');
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

