@extends('layouts\libadminayout')

@section('content')
<br>
<h4>Maak een keuze:</h4>
<br>
<h5><a href="{{ route('books.viewallbooks') }}">Naar alle boeken</a></h5>

<h5><a href="{{ route('users.index') }}">Naar alle leden</a></h5>

@endsection('content')