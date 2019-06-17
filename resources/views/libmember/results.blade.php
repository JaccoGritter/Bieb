@extends('layouts\libmemberLayout')

@section('content')

<table class="table table-hover">

    <tablehead>
        <tr>
            <th>Auteur</th>
            <th>Titel</th>
            <th>Taal</th>
            <th>Genre</th>
            <th>Pagina's</th>
            <th>ISBN</th>
        </tr>
    </tablehead>

    <tablebody>

    @foreach ($books as $book)
    <tr>
        <td>{{ $book->auteur }}</td>
        <td><a href ="{{route('books.membershow', $book->id) }}">{{ $book->titel }}</a></td>
        <td>{{ $book->taal }}</td>
        <td>{{ $book->genre }}</td>
        <td>{{ $book->aantal_paginas }}</td>
        <td>{{ $book->isbn }}</td>
    </tr>
    @endforeach

    </tablebody>
</table>

@endsection