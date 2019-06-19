<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Books_member;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminindex()
    {
        
        // $criterium = "auteur";
        // $books = DB::table('books')->orderBy($criterium, 'asc')->get();

        // return view('libadmin.adminindex', compact('books'));
    }


    public function viewAllBooks()
    {

        // $books = Book::all();
        $criterium = "auteur";
        $books = DB::table('books')->orderBy($criterium, 'asc')->get();

        return view('libadmin.viewallbooks', compact('books'));
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
            'genre'=>'required',
            'aantal_paginas'=>['required', 'numeric', 'max:32000'],
            'isbn'=>['required', 'digits:13', 'unique:books,isbn']
        ]);
            
        
        $book = new Book;

        $book->titel = $request->titel;
        $book->auteur = $request->auteur;
        $book->taal = $request->taal;
        $book->genre = $request->genre;
        $book->aantal_paginas = $request->aantal_paginas;
        $book->isbn = $request->isbn;
        $book->aantal_aanwezig = $request->aantal_aanwezig;

        $book->save();

        return redirect('/books/viewallbooks')->with('success', 'Boek aangemaakt!');
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

    public function showBookToMember(Book $book)
    {
        return view('libmember.showbooktomember', compact('book'));
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
            'genre'=>'required', 
            'aantal_paginas'=>['required', 'numeric', 'max:32000']
        ]);

        $book = Book::findOrFail($id);
        $book->titel =  $request->get('titel');
        $book->auteur = $request->get('auteur');
        $book->taal = $request->get('taal');
        $book->genre = $request->get('genre');
        $book->aantal_paginas = $request->get('aantal_paginas');
        //$book->isbn = $request->get('isbn');
        $book->aantal_aanwezig = $request->get('aantal_aanwezig');

        $book->save();

        return redirect('/books/viewallbooks')->with('success', 'Boek aangepast!');
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

    public function findBooks(Request $request)
    {
        $auteur = $request->input('auteur');
        $titel = $request->input('titel');
        $genre = $request->input('genre');

        $books = DB::table('books')
            ->where('auteur', 'like', "%".$auteur."%")
            ->where('titel', 'like', "%".$titel."%")
            ->where('genre', 'like', "%".$genre."%")
            ->get();

        return view('libmember/searchresults', compact('books'));
    }

    public function lendBook($id)
    {
        $book = Book::findOrFail($id);

        if ($book->aantal_aanwezig <= 0) return view ('libmember/nostock', compact('book')); 

        $book->aantal_aanwezig -= 1;
        $book->save();

        $lentbook = new Books_member;
        $lentbook->book_id = $book->id;
        $lentbook->member_id = session("loggedinUser");
        $lentbook->lentfrom = now();
        $lentbook->save();

        return view('libmember/lend', compact('book'));
    }

}
