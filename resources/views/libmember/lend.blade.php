@extends('layouts\libmemberLayout')

@section('content')

<h4>Boek geleend</h4>

<p>Het boek {{ $book->titel }} van {{ $book->auteur }} is geleend.</p>

<div style="margin: 19px;">
    <a href="{{ route('users.show', session('loggedinUser') ) }}" class="btn btn-primary">Home</a>
</div>

@endsection