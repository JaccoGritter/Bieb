@extends('layouts\libmemberLayout')

@section('content')
 

@if ($lentBooks->count())

    <h3>Boeken die je momenteel geleend hebt:</h3>

    <table class="table">

    <tablehead>
        <tr>
            <th>Auteur</th>
            <th>Titel</th>
            <th>Geleend sinds</th>
        </tr>
    </tablehead>

    <tablebody>
    @foreach($lentBooks as $book)
        
        <tr>
            <td>{{ $book->auteur }}</td>
            <td>{{ $book->titel }}</td>
            <td>{{ $book->pivot->lent_from }}</td>
            <td><a href="{{route('books.return', $book->id) }}">inleveren</a></td>
            <td><a href="{{route('books.createreview', $book->id) }}">review schrijven</a></td>
        </tr>
    </tablebody>

    @endforeach
    </table>

@else

    <h3>Je hebt geen boeken geleend</h3>    

@endif


<div style="margin: 19px;">
    <a href="{{ route('users.show', auth()->user() ) }}" class="btn btn-primary">Home</a>
</div>

@endsection