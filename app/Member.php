<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;


class Member extends Model
{

    public function books()
    {
        return $this->belongsToMany('App\Book', 'books_members');
    }




    protected $fillable = [
        'voornaam',
        'achternaam',
        'woonplaats',
        'abo_geldig_tot'       
    ];
}
