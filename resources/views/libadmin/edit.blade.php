@extends('layouts\libadminLayout')

@section('content')


        <!-- Boek wijzigen formulier -->
        <form method="POST" action="{{ route('books.update', $book->id) }}">

        <!-- {{ CSRF_field() }} -->
        @method('PATCH')
        @csrf

        <div class="bg-danger text-light">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>

        <h2>Mijn Boekenkast</h2>
        <h6>Wijzig boekgegevens</h6>

        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" class="form-control" name="titel" value="{{ $book->titel }}" required>
        </div>

        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text" class="form-control" name="auteur" value="{{ $book->auteur }}" required >
        </div>

        <div class="form-group">
        <label for="taal">Taal</label>
            <select class="form-control" id="taal" name="taal">
                <option value="nl" <?php if ($book->taal == "nl") echo 'selected'?> >Nederlands</option>
                <option value="en" <?php if ($book->taal == "en") echo 'selected'?> >Engels</option>
                <option value="fr" <?php if ($book->taal == "fr") echo 'selected'?> >Frans</option>
                <option value="du" <?php if ($book->taal == "du") echo 'selected'?> >Duits</option>
            </select>
        </div>

        <div class="form-group">
        <label for="genre">Genre</label>
            <select class="form-control" id="genre" name="genre">
                <option value="Roman" <?php if ($book->genre == "Roman") echo 'selected'?> >Roman</option>
                <option value="Science Fiction" <?php if ($book->genre == "Science Fiction") echo 'selected'?> >Science Fiction</option>
                <option value="Thriller" <?php if ($book->genre == "Thriller") echo 'selected'?> >Thriller</option>
                <option value="Humor" <?php if ($book->genre == "Humor") echo 'selected'?>>Humor</option>
                <option value="Fantasy" <?php if ($book->genre == "Fantasy") echo 'selected'?>>Fantasy</option>
                <option value="Biografie" <?php if ($book->genre == "Biografie") echo 'selected'?>>Biografie</option>
            </select>
        </div>

        <div class="form-group">
            <label for="aantal_paginas">Aantal paginas</label>
            <input type="number" class="form-control" name="aantal_paginas" value="{{ $book->aantal_paginas }}" required>
        </div>

        <div class="form-group">
            <label for="isbn">ISBN nummer</label>
            <input type="number" class="form-control" name="isbn" value="{{ $book->isbn }}" required disabled >
        </div>

        <div class="form-group">
            <label for="aantal_aanwezig">Aantal aanwezig</label>
            <input type="text" class="form-control" name="aantal_aanwezig" placeholder = "optioneel" value="{{ $book->aantal_aanwezig }}" >
        </div>

        <button type="submit" class="btn btn-primary mb-1">Wijzig</button><br>


        </form>
        
        <form action="{{ route('books.destroy', $book->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Verwijder</button>
        </form>
  
@endsection