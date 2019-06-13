@extends('layouts\libadminLayout')

@section('content')


        <!-- Boek wijzigen formulier -->
        <form method="POST" action="{{ route('books.update', $book->id) }}">

        <!-- {{ CSRF_field() }} -->
        @method('PATCH')
        @csrf

        <h2>Mijn Boekenkast</h2>
        <h6>Wijzig boekgegevens</h6>

        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" class="form-control" name="titel" value="{{ $book->titel }}" required>
        </div>

        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text" class="form-control" name="auteur" value="{{ $book->auteur }}"" required >
        </div>

        <div class="form-group">
        <label for="taal">Taal</label>
            <select class="form-control" id="taal" name="taal" value="{{ $book->taal }}"">
                <option value="nl">Nederlands</option>
                <option value="en">Engels</option>
                <option value="fr">Frans</option>
                <option value="du">Duits</option>
            </select>
        </div>

        <div class="form-group">
            <label for="aantal_paginas">Aantal paginas</label>
            <input type="number" class="form-control" name="aantal_paginas" value="{{ $book->aantal_paginas }}" required>
        </div>

        <div class="form-group">
            <label for="isbn">ISBN nummer</label>
            <input type="text" class="form-control" name="isbn" value="{{ $book->isbn }}" required disabled >
        </div>

        <div class="form-group">
            <label for="uitgeleend_aan">Uitgeleend aan</label>
            <input type="text" class="form-control" name="uitgeleend_aan" placeholder = "optioneel" value="{{ $book->uitgeleend_aan }}" >
        </div>

        <button type="submit" class="btn btn-primary mb-1">Wijzig</button><br>

        </form>
        
        <form action="{{ route('books.destroy', $book->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Verwijder</button>
        </form>
  
@endsection