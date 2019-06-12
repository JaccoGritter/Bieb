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

        return view('books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        // $attributes = request()->validate([
        //     'titel' => ['required', 'min:3'],
        //     'auteur' => ['required', 'min:3'],
        //     'taal' => ['required', 'min:2'],
        //     'aantal_paginas' => 'required'
        //     ]);

        // $attributes = request();

        // Book::create($attributes);

        $book = new Book;

        $book->titel = $request->titel;
        $book->auteur = $request->auteur;
        $book->taal = $request->taal;
        $book->aantal_paginas = $request->aantal_paginas;
        $book->opmerkingen = $request->opmerkingen;
        if ($book->opmerkingen == NULL) $book->opmerkingen = " ";
        $book->uitgeleend_aan = $request->uitgeleend_aan;
        if ($book->uitgeleend_aan == NULL) $book->uitgeleend_aan = " ";

        // if ($request->opmerkingen != NULL) {
        //     $book->opmerkingen = $request->opmerkingen;
        // } else $book->opmerkingen = ' ';

        // if ($request->uitgeleend_aan != NULL) {
        //     $book->uitgeleend_aan = $request->uitgeleend_aan;
        // } else $book->uitgeleend_aan = ' ';
        
        $book->save();

        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('edit', compact('book'));
        //return view('/edit', ['books'=>$book]);
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
            'aantal_paginas'=>'required'
        ]);

        $book = Book::find($id);
        $book->titel =  $request->get('titel');
        $book->auteur = $request->get('auteur');
        $book->taal = $request->get('taal');
        $book->aantal_paginas = $request->get('aantal_paginas');
        $book->opmerkingen = $request->get('opmerkingen');
        if ($book->opmerkingen == NULL) $book->opmerkingen = " ";
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
        $book = Book::find($id);
        $book->delete();

        return redirect('/books')->with('success', 'Boek verwijderd!');
    }
}
