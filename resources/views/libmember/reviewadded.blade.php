@extends('layouts\libmemberlayout')

@section('content')

<h3>Review toegevoegd</h3>

<p> Jouw review voor {{ $book->titel }} van {{ $book->auteur }} is opgeslagen. </p>
<p> Bedankt! </p>


<div style="margin: 19px;">
    <a href="{{ route('users.show', auth()->user() ) }}" class="btn btn-primary">Home</a>
</div>

@endsection