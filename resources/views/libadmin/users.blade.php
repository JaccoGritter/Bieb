@extends('layouts.libadminlayout')

@section('content')

<h5><a href="{{ route('books.viewallbooks')}}">naar boeken</a></h5>
<h2>Overzicht leden</h2>
<div style="margin: 19px;">
    <a href="{{ route('users.create')}}" class="btn btn-primary">Nieuw lid</a>
</div>

<table class="table">
    <tablehead>
        <tr>
            <th>lidnr</th>
            <th>Naam</th>
            <th>Woonplaats</th>
            <th>Lid tot</th>
        </tr>
    </tablehead>
    <tablebody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->first_name ." " . $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->subscription_valid_until }}</td>
        </tr>
    @endforeach
    </tablebody>
</table>

@endsection('content')