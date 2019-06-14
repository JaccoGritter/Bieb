@extends('layouts\libmemberLayout')

@section('content')

<p>{{ $member->voornaam}}&nbsp;{{ $member->achternaam }} is ingelogd</p>

<h1>Welkom {{ $member->voornaam }}</h1>

<br>
<p>Zoek op:</p>

<form action="{{ route ('books.findBooks') }}" method="get">
Auteur&nbsp<input type="text" name="auteur">&nbsp<button type="submit" class="btn btn-primary">zoek</button>
</form>
@endsection