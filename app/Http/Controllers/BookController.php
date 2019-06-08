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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //dd("ik ben er");

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
        $book->uitgeleend_aan = $request->uitgeleend_aan;

        $book->save();

        return redirect('/');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
