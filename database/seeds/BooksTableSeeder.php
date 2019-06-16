<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
            'titel' => 'De Aanslag',
            'auteur' => 'Harry Mulisch',
            'taal' => 'nl',
            'genre' => 'roman',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'uitgeleend_aan' => NULL
            ],
            [
            'titel' => 'The Hobbit',
            'auteur' => 'Tolkien',
            'taal' => 'en',
            'genre' => 'fantasy',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'uitgeleend_aan' => NULL
            ],
            [
            'titel' => 'De Avonden',
            'auteur' => 'Gerard Reve',
            'taal' => 'nl',
            'genre' => 'roman',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'uitgeleend_aan' => NULL
            ],
            [
            'titel' => 'Das Grosse Haus',
            'auteur' => 'Herbert Meyer',
            'taal' => 'du',
            'genre' => 'humor',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'uitgeleend_aan' => NULL
            ],
            [
            'titel' => 'La Parisienne',
            'auteur' => 'Esther la Femme',
            'taal' => 'fr',
            'genre' => 'thriller',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'uitgeleend_aan' => NULL
            ],
            [
            'titel' => 'Dik Trom',
            'auteur' => 'Piet Toeter',
            'taal' => 'nl',
            'genre' => 'humor',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'uitgeleend_aan' => NULL
            ],
            [
            'titel' => 'Laravel for dummies',
            'auteur' => 'Larry Lavarel',
            'taal' => 'en',
            'genre' => 'roman',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'uitgeleend_aan' => NULL
            ],
            [
            'titel' => 'De klokkenluider van de Notre Dame',
            'auteur' => 'Victor Hugo',
            'taal' => 'nl',
            'genre' => 'roman',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'uitgeleend_aan' => NULL
            ],
            [
            'titel' => 'Christine',
            'auteur' => 'Stephen King',
            'taal' => 'en',
            'genre' => 'horror',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'uitgeleend_aan' => NULL
            ]
        ]);
    }
}