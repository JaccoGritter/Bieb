@extends('layouts\libmemberLayout')

@section('content')

<h4>Welkom</h4>

<p>Log in:</p>

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
            <td><a href="{{ route ('members.show', $member->id) }}"> {{ $member->voornaam ." " . $member->achternaam }} </a></td>
            <td>{{ $member->woonplaats }}</td>
            <td>{{ $member->abo_geldig_tot }}</td>
        </tr>
    @endforeach
    </tablebody>
</table>

@endsection