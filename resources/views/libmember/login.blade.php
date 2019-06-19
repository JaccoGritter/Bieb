@extends('layouts\libmemberLayout')

@section('content')

<h4>Welkom</h4>

<p>Log in:</p>

<table class="table">
    <tablehead>
        <tr>
            <th>lidnr</th>
            <th>Naam</th>
            <th>Lid tot</th>
        </tr>
    </tablehead>
    <tablebody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td><a href="{{ route ('users.show', $user->id) }}"> {{ $user->first_name ." " . $user->last_name }} </a></td>
            <td>{{ $user->subscription_valid_until }}</td>
        </tr>
    @endforeach
    </tablebody>
</table>

@endsection