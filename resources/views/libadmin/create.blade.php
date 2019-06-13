@extends('layouts\libadminLayout')

@section('content')

   
        <!-- Boek toevoegen formulier -->
        <form method="POST" action="/books">
        <!-- {{ CSRF_field() }} -->
        @csrf

        <h2>Mijn Boekenkast</h2>
        <h6>Voeg een boek toe</h6>

        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" class="form-control" name="titel" value="" required>
        </div>

        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text" class="form-control" name="auteur" value="" required >
        </div>

        <div class="form-group">
        <label for="taal">Taal</label>
            <select class="form-control" id="taal" name="taal">
                <option value="nl">Nederlands</option>
                <option value="en">Engels</option>
                <option value="fr">Frans</option>
                <option value="du">Duits</option>
            </select>
        </div>

        <div class="form-group">
            <label for="aantal_paginas">Aantal paginas</label>
            <input type="number" class="form-control" name="aantal_paginas" value="" required>
        </div>

        <div class="form-group">
            <label for="opmerkingen">Opmerkingen</label>
            <input type="text" class="form-control" name="opmerkingen" value="" placeholder = "optioneel" >
        </div>

        <div class="form-group">
            <label for="uitgeleend_aan">Uitgeleend aan</label>
            <input type="text" class="form-control" name="uitgeleend_aan" value="" placeholder = "optioneel" >
        </div>

        <button type="submit" class="btn btn-primary mb-1">Voeg toe</button>

        </form>
  

    <!-- TODO: Current Tasks -->
@endsection