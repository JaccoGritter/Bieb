@extends('layouts\libadminLayout')

@section('content')

<h5><a href="{{ route('books.viewallbooks')}}">naar boeken</a></h5>
<h2>Overzicht leden</h2>
<div style="margin: 19px;">
    <a href="{{ route('members.create')}}" class="btn btn-primary">Nieuw lid</a>
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
    @foreach ($members as $member)
        <tr>
            <td>{{ $member->id}}</td>
            <td>{{ $member->voornaam ." " . $member->achternaam }}</td>
            <td>{{ $member->woonplaats }}</td>
            <td>{{ $member->abo_geldig_tot }}</td>
        </tr>
    @endforeach
    </tablebody>
</table>

@endsection('content')