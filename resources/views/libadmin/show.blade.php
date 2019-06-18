@extends('layouts\libadminLayout')

@section('content')

<h1>{{ $book->titel }}</h1>
<h2>{{ $book->auteur}}</h2>
<br>
<table class="table table-bordered">
    <tr><td>Taal: </td><td>{{ $book->taal}} </td></tr>
    <tr><td>Genre: </td><td>{{ $book->genre}} </td></tr>
    <tr><td>Aantal pagina's: </td><td>{{ $book->aantal_paginas}} </td></tr>
    <tr><td>ISBN nummer: </td><td>{{ $book->isbn}} </td></tr>
    <tr><td>Exemplaren aanwezig: </td><td>{{ $book->aantal_aanwezig}} </td></tr>
</table>

<div style="margin: 19px;">
    <a href="/books/viewallbooks" class="btn btn-primary">Terug</a>
    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-secondary">Wijzig</a>
</div>

@endsection('content')