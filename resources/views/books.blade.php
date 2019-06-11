
@extends('layouts\layout')

@section('content')

<h2>Welkom in de boekenkast</h2>

<table class="table">

    <tablehead>
        <tr>
            <th>Auteur</th>
            <th>Titel</th>
            <th>Taal</th>
            <th>Pagina's</th>
            <th></th><th></th>
        </tr>
    </tablehead>

    <tablebody>

    @foreach ($books as $book)
        <tr>
            <td>{{ $book->auteur }}</td>
            <td>{{ $book->titel }}</td>
            <td>{{ $book->taal }}</td>
            <td>{{ $book->aantal_paginas }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('books.destroy', $book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Wis</button>
                </form>
            </td>
        </tr>
    @endforeach

    </tablebody>
</table>

<a href="/books/create">Voeg boek toe</a>

@endsection('content')