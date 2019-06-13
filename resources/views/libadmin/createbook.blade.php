@extends('layouts\libadminLayout')

@section('content')

   
        <!-- Boek toevoegen formulier -->
        <form method="POST" action="/books">
        <!-- {{ CSRF_field() }} -->
        @csrf

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
            <select class="form-control" id="taal" name="taal" {{old('taal')}}>
                <option value="nl">Nederlands</option>
                <option value="en">Engels</option>
                <option value="fr">Frans</option>
                <option value="du">Duits</option>
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
            <label for="uitgeleend_aan">Uitgeleend aan</label>
            <input type="text" class="form-control" name="uitgeleend_aan" value="{{old('uitgeleend_aan')}}" placeholder = "optioneel" >
        </div>

        <button type="submit" class="btn btn-primary mb-1">Voeg toe</button>

        <div class="bg-danger text-light">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>

        </form>
  
@endsection