@extends('layouts.libmemberlayout')

@section('content')

<h4>Boek gereserveerd</h4>

<p>Het boek {{ $book->titel }} van {{ $book->auteur }} is gereserveerd.</p>
<p>We houden het 48 uur voor u vast.</p>

<div style="margin: 19px;">
    <a href="{{ route('users.show', auth()->user() ) }}" class="btn btn-primary">Home</a>
</div>

@endsection