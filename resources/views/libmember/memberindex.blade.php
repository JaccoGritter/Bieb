@extends('layouts\libmemberLayout')

@section('content')

<p>{{ $member->voornaam}}&nbsp;{{ $member->achternaam }} is ingelogd</p>
<a href="{{ route ('members.memberLogin') }}">Log uit</a>

<h1>Welkom {{ $member->voornaam }}</h1>

<br>
<p>Zoek op:</p>

<form action="{{ route ('books.findBooks') }}" method="get">
    <div class="form-group">
        <label for="auteur">Auteur</label>
        <input type="text" class="form-control" name="auteur" value="" >
    </div>
    <div class="form-group">
        <label for="titel">Titel</label>
        <input type="text" class="form-control" name="titel" value="">
    </div>
    <div class="form-group">
    <label for="genre">Genre</label>
        <select class="form-control" id="genre" name="genre">
            <option value="">Alle</option>
            <option value="Roman">Roman</option>
            <option value="Science Fiction">Science Fiction</option>
            <option value="Thriller">Thriller</option>
            <option value="Humor">Humor</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Biografie">Biografie</option>
        </select>
    </div>

<button type="submit" class="btn btn-primary">zoek</button>
</form>
<br>

<a href="{{ route ('members.lentbooks') }}">Bekijk boeken in mijn bezit</a>
@endsection