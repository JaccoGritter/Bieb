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
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'The Hobbit',
            'auteur' => 'J.R.R. Tolkien',
            'taal' => 'en',
            'genre' => 'fantasy',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'De Avonden',
            'auteur' => 'Gerard Reve',
            'taal' => 'nl',
            'genre' => 'roman',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Das Grosse Haus',
            'auteur' => 'Herbert Meyer',
            'taal' => 'du',
            'genre' => 'humor',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'La Parisienne',
            'auteur' => 'Esther la Femme',
            'taal' => 'fr',
            'genre' => 'thriller',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Dik Trom',
            'auteur' => 'Piet Toeter',
            'taal' => 'nl',
            'genre' => 'humor',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Laravel for dummies',
            'auteur' => 'Larry Lavarel',
            'taal' => 'en',
            'genre' => 'roman',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'De klokkenluider van de Notre Dame',
            'auteur' => 'Victor Hugo',
            'taal' => 'nl',
            'genre' => 'roman',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Christine',
            'auteur' => 'Stephen King',
            'taal' => 'en',
            'genre' => 'horror',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Bartje',
            'auteur' => 'Pietje',
            'taal' => 'nl',
            'genre' => 'roman',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'De Glazen Muur',
            'auteur' => 'Berend Botje',
            'taal' => 'nl',
            'genre' => 'thriller',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Brief aan de Buurnman',
            'auteur' => 'Ellen de Jong',
            'taal' => 'nl',
            'genre' => 'thriller',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'The Lord of the Rings',
            'auteur' => 'J.R.R. Tolkien',
            'taal' => 'en',
            'genre' => 'fantasy',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Rinkeldekink',
            'auteur' => 'Martine Bijl',
            'taal' => 'nl',
            'genre' => 'biografie',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Summerproof met Sonja',
            'auteur' => 'Sonja Bakker',
            'taal' => 'nl',
            'genre' => 'roman',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Lekker Fred',
            'auteur' => 'Freddy Tratlehner',
            'taal' => 'nl',
            'genre' => 'biografie',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Laatste Weduwe',
            'auteur' => 'Karen Slaughter',
            'taal' => 'en',
            'genre' => 'thriller',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Het Strandhuis',
            'auteur' => 'Suzanne Vermeer',
            'taal' => 'nl',
            'genre' => 'thriller',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Huis vol Leugens',
            'auteur' => 'Nicci French',
            'taal' => 'nl',
            'genre' => 'thriller',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'House of Lies',
            'auteur' => 'Nicci French',
            'taal' => 'en',
            'genre' => 'thriller',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Die Kinder der Rothschildallee',
            'auteur' => 'Stefanie Zweig',
            'taal' => 'du',
            'genre' => 'roman',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Halbschatten',
            'auteur' => 'Uwe Timm',
            'taal' => 'du',
            'genre' => 'roman',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ],
            [
            'titel' => 'Het Italiaanse Meisje',
            'auteur' => 'Lucinda Riley',
            'taal' => 'nl',
            'genre' => 'thriller',
            'aantal_paginas' => rand(100,600),
            'isbn' => rand(1000000000000,9999999999999),
            'aantal_aanwezig' => rand(0,5)
            ]
        ]);
        factory(App\Book::class, 1000)->create();
    }
}
