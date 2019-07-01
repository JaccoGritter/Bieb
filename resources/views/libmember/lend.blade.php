@extends('layouts.libmemberlayout')

@section('content')

<h4>Boek gereserveerd</h4>
<br>
<p><b>Het boek {{ $book->titel }} van {{ $book->auteur }} is gereserveerd.</b></p>
<p><b>We houden het 48 uur voor u vast.</b></p>

<div style="margin: 19px;">
    <a href="{{ route('users.show', auth()->user() ) }}" class="btn">Home</a>
</div>

@endsection