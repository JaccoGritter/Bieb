@extends('layouts\libmemberLayout')

@section('content')
 


<h3>Boeken die je momenteel geleend hebt:</h3>

@foreach($lentBooks as $lentBook)

    <p>{{ $lentBook->titel }} van {{ $lentBook->auteur }}</p>
 
@endforeach


<div style="margin: 19px;">
    <a href="{{ route('members.show', session('loggedinUser') ) }}" class="btn btn-primary">Home</a>
</div>

@endsection