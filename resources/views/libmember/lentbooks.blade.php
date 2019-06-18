@extends('layouts\libmemberLayout')

@section('content')
 


<h3>Boeken die je momenteel geleend hebt:</h3>

@php
$booksLent = false
@endphp

@foreach($lentBooks as $lentBook)

@if ($lentBook->id == session('loggedinUser'))
    <p>{{ $lentBook->titel }} van {{ $lentBook->auteur }} sinds {{ $lentBook->lentFrom }}</p>
    @php
    $booksLent = true
    @endphp
@endif

@endforeach

@if ($booksLent == false)
    <h3>Niets geleend</h3>
@endif

<div style="margin: 19px;">
    <a href="{{ route('members.show', session('loggedinUser') ) }}" class="btn btn-primary">Home</a>
</div>

@endsection