@extends('layouts\libadminLayout')

@section('content')

<a href="{{ route('books.viewallbooks') }}">Naar alle boeken</a><br>
<a href="{{ route('users.index') }}">Naar alle leden</a>

@endsection('content')