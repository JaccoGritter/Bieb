@extends('layouts\libmemberLayout')

@section('content')
 

@if ($lentBooks->count())

    <h3>Boeken die je momenteel geleend hebt:</h3>

    @foreach($lentBooks as $lentBook)

        <p>{{ $lentBook->titel }} van {{ $lentBook->auteur }} geleend sinds {{ $lentBook->pivot->lent_from }} </p>
    
    @endforeach

@else

    <h3>Je hebt geen boeken geleend</h3>    

@endif


<div style="margin: 19px;">
    <a href="{{ route('users.show', session('loggedinUser') ) }}" class="btn btn-primary">Home</a>
</div>

@endsection