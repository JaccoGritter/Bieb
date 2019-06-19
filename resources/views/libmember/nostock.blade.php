@extends('layouts\libmemberLayout')

@section('content')

<h3>Niet op voorraad</h3>

<p> Helaas is {{ $book->titel }} van {{ $book->auteur }} momenteel niet aanwezig in de bibliotheek. </p>


<div style="margin: 19px;">
    <a href="{{ route('users.show', session('loggedinUser') ) }}" class="btn btn-primary">Home</a>
</div>

@endsection