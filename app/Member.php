<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'voornaam',
        'achternaam',
        'woonplaats',
        'abo_geldig_tot'       
    ];
}
