@extends('layouts\libadminLayout')

@section('content')

   
        <!-- Lid toevoegen formulier -->
        <form method="POST" action="/members">
        <!-- {{ CSRF_field() }} -->
        @csrf

        <h2>Leden</h2>
        <h6>Voeg een lid toe</h6>

        <div class="form-group">
            <label for="voornaam">Voornaam</label>
            <input type="text" class="form-control" name="voornaam" value="{{old('voornaam')}}" required>
        </div>

        <div class="form-group">
            <label for="achternaam">Achternaam</label>
            <input type="text" class="form-control" name="achternaam" value="{{old('achternaam')}}" required >
        </div>

        <div class="form-group">
            <label for="woonplaats">Woonplaats</label>
            <input type="text" class="form-control" name="woonplaats" value="{{old('woonplaats')}}" required>
        </div>

        <div class="form-group">
            <label for="abo_geldig_tot">Abonnement geldig tot</label>
            <input type="date" class="form-control" name="abo_geldig_tot" value="{{old('abo_geldig_tot')}}" required >
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