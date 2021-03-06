@extends('layouts.libmemberlayout')

@section('content')

<h1>{{ $book->titel }}</h1>
<h2>{{ $book->auteur}}</h2>
<br>
<table class="table">
    <tr><td>Taal: </td><td>{{ $book->taal}} </td></tr>
    <tr><td>Genre: </td><td>{{ $book->genre}} </td></tr>
    <tr><td>Aantal pagina's: </td><td>{{ $book->aantal_paginas}} </td></tr>
    <tr><td>ISBN nummer: </td><td>{{ $book->isbn}} </td></tr>
    <tr><td>Aantal exemplaren aanwezig: </td><td>{{ $book->aantal_aanwezig }} </td></tr>
</table>

<div style="margin: 19px;">
    <a href="{{ route('users.show', auth()->user() ) }}" class="btn">Home</a>
    <a href="{{ route('books.lend', $book->id) }}" class="btn">Leen boek</a>
</div>

@if (count($book->reviews) > 0)
<br>
<h5>Wat anderen er van vonden:</h5>

@foreach ($book->reviews->reverse() as $review)
<p><b>{{ $review->screen_name }}</b> gaf het boek 
    <?php 
        for($i=0; $i<$review->stars; $i++) {
        echo('<i class="fas fa-star"></i>');
        }
        for($i=$review->stars; $i<5; $i++) {
        echo('<i class="far fa-star"></i>');
        }
    ?>
</p>
<p>{{ $review->comments}}</p>
<p>----------------------------</p>
@endforeach

@else
<p><em>Er zijn nog geen reviews voor dit boek</em></p>

@endif

@endsection('content')