@extends('layouts\libmemberLayout')

@section('content')

<h1>{{ $book->titel }}</h1>
<h2>{{ $book->auteur}}</h2>
<br>
<table class="table table-bordered">
    <tr><td>Taal: </td><td>{{ $book->taal}} </td></tr>
    <tr><td>Genre: </td><td>{{ $book->genre}} </td></tr>
    <tr><td>Aantal pagina's: </td><td>{{ $book->aantal_paginas}} </td></tr>
    <tr><td>ISBN nummer: </td><td>{{ $book->isbn}} </td></tr>
    <tr><td>Aantal exemplaren aanwezig: </td><td>{{ $book->aantal_aanwezig }} </td></tr>
</table>

<div style="margin: 19px;">
    <a href="{{ route('users.show', session('loggedinUser') ) }}" class="btn btn-primary">Home</a>
    <a href="{{ route('books.lend', $book->id) }}" class="btn btn-secondary">Leen boek</a>
</div>

@endsection('content')