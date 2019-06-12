@extends('layouts\layout')

@section('content')

<h1>{{ $book->titel }}</h1>
<h2>{{ $book->auteur}}</h2>
<br>
<table class="table table-bordered">
    <tr><td>Taal: </td><td>{{ $book->taal}} </td></tr>
    <tr><td>Aantal pagina's: </td><td>{{ $book->aantal_paginas}} </td></tr>
    <tr><td>Opmerkingen: </td><td>{{ $book->opmerkingen}} </td></tr>
    <tr><td>Uitgeleend aan: </td><td>{{ $book->uitgeleend_aan}} </td></tr>
</table>

<div style="margin: 19px;">
    <a href="/" class="btn btn-primary">Home</a>
</div>

@endsection('content')