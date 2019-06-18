@extends('layouts\libadminLayout')

@section('content')

@if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
    </div>
@endif

<h5><a href="{{ route('members.index')}}">naar leden</a></h5>
<h2>Overzicht boeken</h2> 


<div style="margin: 19px;">
    <a href="{{ route('books.create')}}" class="btn btn-primary">Nieuw boek</a>
</div>

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
            <td><a href ="{{route('books.show', $book->id) }}">{{ $book->titel }}</a></td>
            <td>{{ $book->taal }}</td>
            <td>{{ $book->genre }}</td>
            <td>{{ $book->aantal_paginas }}</td>
            <td>{{ $book->isbn }}</td>
        </tr>
        @endforeach

    </tablebody>
</table>

@endsection('content')