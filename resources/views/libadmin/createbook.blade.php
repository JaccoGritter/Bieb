@extends('layouts.libadminlayout')

@section('content')

   
        <!-- Boek toevoegen formulier -->
        <form method="POST" action="/books">
        <!-- {{ CSRF_field() }} -->
        @csrf

        <div class="bg-danger text-light">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>

        <h2>Bibliotheek</h2>
        <h6>Voeg een boek toe</h6>

        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" class="form-control" name="titel" value="{{old('titel')}}" required>
        </div>

        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text" class="form-control" name="auteur" value="{{old('auteur')}}" required >
        </div>

        <div class="form-group">
        <label for="taal">Taal</label>
            <select class="form-control" id="taal" name="taal" value = "{{old('taal')}}">
                <option value="nl">Nederlands</option>
                <option value="en">Engels</option>
                <option value="fr">Frans</option>
                <option value="du">Duits</option>
            </select>
        </div>

        <div class="form-group">
        <label for="taal">Genre</label>
            <select class="form-control" id="genre" name="genre" value = "{{old('Genre')}}">
                <option value="roman">Roman</option>
                <option value="science fiction">Science Fiction</option>
                <option value="thriller">Thriller</option>
                <option value="humor">Humor</option>
                <option value="fantasy">Fantasy</option>
                <option value="biografie">Biografie</option>
            </select>
        </div>

        <div class="form-group">
            <label for="aantal_paginas">Aantal paginas</label>
            <input type="number" class="form-control" name="aantal_paginas" value="{{old('aantal_paginas')}}" required>
        </div>

        <div class="form-group">
            <label for="isbn">ISBN nummer</label>
            <input type="number" class="form-control" name="isbn" value="{{old('isbn')}}" required >
        </div>

        <div class="form-group">
            <label for="aantal_aanwezig">Aantal aanwezig</label>
            <input type="text" class="form-control" name="aantal_aanwezig" value="{{old('aantal_aanwezig')}}" required >
        </div>

        <button type="submit" class="btn btn-primary mb-1">Voeg toe</button>


        </form>
  
@endsection