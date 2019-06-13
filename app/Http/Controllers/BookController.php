<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('libadmin.books', compact('books'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libadmin.createbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'titel'=>'required',
            'auteur'=>'required',
            'taal'=>'required',
            'aantal_paginas'=>['required', 'numeric', 'max:32000'],
            'isbn'=>['required', 'numeric', 'digits:5', 'unique:books,isbn']
        ]);
            // In real life isbn has 13 digits but this is not practical for this project
        
        $book = new Book;

        $book->titel = $request->titel;
        $book->auteur = $request->auteur;
        $book->taal = $request->taal;
        $book->aantal_paginas = $request->aantal_paginas;
        $book->isbn = $request->isbn;
        $book->uitgeleend_aan = $request->uitgeleend_aan;
        if ($book->uitgeleend_aan == NULL) $book->uitgeleend_aan = " ";

        $book->save();

        return redirect('\books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function show($id)
    // {
    //     $book = Book::findOrFail($id);
    //     return view('show', compact('book'));
    // }

    public function show(Book $book)
    {
        return view('libadmin.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('libadmin.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titel'=>'required',
            'auteur'=>'required',
            'taal'=>'required',
            'aantal_paginas'=>['required', 'numeric', 'max:32000']
        ]);

        $book = Book::findOrFail($id);
        $book->titel =  $request->get('titel');
        $book->auteur = $request->get('auteur');
        $book->taal = $request->get('taal');
        $book->aantal_paginas = $request->get('aantal_paginas');
        //$book->isbn = $request->get('isbn');
        $book->uitgeleend_aan = $request->get('uitgeleend_aan');
        if ($book->uitgeleend_aan == NULL) $book->uitgeleend_aan = " ";

        $book->save();

        return redirect('/books')->with('success', 'Boek aangepast!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books')->with('success', 'Boek verwijderd!');
    }
}
