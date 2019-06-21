@extends('layouts\libmemberLayout')

@section('content')

<h4>Boek ingeleverd</h4>

<p>Het boek {{ $book->titel }} van {{ $book->auteur }} is ingeleverd.</p>

<div style="margin: 19px;">
    <a href="{{ route('users.show', auth()->user() ) }}" class="btn btn-primary">Home</a>
</div>

@endsection