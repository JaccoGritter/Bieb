<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;

class Book extends Model
{

    public function users()
    {
        return $this->belongsToMany('App\User', 'books_users')
        ->withPivot('lent_from');
        
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

