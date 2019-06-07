
@extends('layouts\layout')

@section('content')

   
        <!-- Boek toevoegen formulier -->
        <form method="POST" action="/">
        <!-- {{ method_field('PATCH')}} -->
        <!-- {{ CSRF_field() }} -->
        @method('PATCH')
        @csrf

        <h2>Mijn Boekenkast</h2>

        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" class="form-control" name="title" value="" required>
        </div>

        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text" class="form-control" name="auteur" value="" required >
        </div>

        <div class="form-group">
            <label for="taal">Taal</label>
            <input type="text" class="form-control" name="taal" value="" required >
        </div>

        <div class="form-group">
            <label for="aantal_paginas">Aantal paginas</label>
            <input type="text" class="form-control" name="aantal_paginas" value="" >
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