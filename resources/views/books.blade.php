
@extends('layouts\layout')

@section('content')

<h2>Welkom in de boekenkast</h2>

<ul>
@foreach ($books as $book)

    <li>{{ $book->titel }}</li>

@endforeach
</ul>

<a href="/books/create">Voeg boek toe</a>

@endsection('content')