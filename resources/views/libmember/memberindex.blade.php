@extends('layouts\libmemberLayout')

@section('content')

<p>{{ $member->voornaam}}&nbsp;{{ $member->achternaam }} is ingelogd</p>

<h1>Welkom {{ $member->voornaam }}</h1>

@endsection