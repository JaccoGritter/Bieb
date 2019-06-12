@extends('layouts\layout')

@section('content')


@if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
    </div>
@endif


<h2>Welkom in de boekenkast</h2>

<div style="margin: 19px;">
    <a href="{{ route('books.create')}}" class="btn btn-primary">Nieuw boek</a>
</div>

<table class="table">

    <tablehead>
        <tr>
            <th>Auteur</th>
            <th>Titel</th>
            <th>Taal</th>
            <th>Pagina's</th>
            <th></th>
            <th></th>
        </tr>
    </tablehead>

    <tablebody>

        @foreach ($books as $book)
        <tr>
            <td>{{ $book->auteur }}</td>
            <td><a href =" {{route('books.show', $book->id) }}">{{ $book->titel }}</a></td>
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

@endsection('content')