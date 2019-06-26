@extends('layouts\libmemberlayout')

@section('content')

@if ($books->isEmpty())

    <h2>Er zijn geen boeken gevonden met deze zoekcriteria</h2>

@else

    <table class="table table-hover table-info">

        <tablehead>
            <tr>
                <th><a href="{{ route('books.findbooks', ['criterium' => 'auteur', 'auteur' => $auteur, 'titel' => $titel, 'genre' => $genre ]) }}">Auteur</a></th>
                <th><a href="{{ route('books.findbooks', ['criterium' => 'titel', 'auteur' => $auteur, 'titel' => $titel, 'genre' => $genre ]) }}">Titel</a></th>
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
            <td><a href ="{{route('books.showbooktomember', $book->id) }}">{{ $book->titel }}</a></td>
            <td>{{ $book->taal }}</td>
            <td>{{ $book->genre }}</td>
            <td>{{ $book->aantal_paginas }}</td>
            <td>{{ $book->isbn }}</td>
        </tr>
        @endforeach

        </tablebody>
    </table>

@endif

<div style="margin: 19px;">
    <a href="{{ route('users.show', auth()->user() ) }}" class="btn btn-primary">Home</a>
</div>

@endsection