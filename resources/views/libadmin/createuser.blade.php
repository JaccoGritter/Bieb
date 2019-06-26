@extends('layouts\libadminlayout')

@section('content')

   
        <!-- Lid toevoegen formulier -->
        <form method="POST" action="/users">
        <!-- {{ CSRF_field() }} -->
        @csrf

        <h2>Leden</h2>
        <h6>Voeg een lid toe</h6>

        <div class="form-group">
            <label for="first_name">Voornaam</label>
            <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}" required>
        </div>

        <div class="form-group">
            <label for="last_name">Achternaam</label>
            <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}" required >
        </div>

        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" name="email" value="{{old('email')}}" required>
        </div>

        <div class="form-group">
            <label for="password">password</label>
            <input type="text" class="form-control" name="password" value="{{old('password')}}" required>
        </div>

        <div class="form-group">
            <label for="subscription_valid_until">Abonnement geldig tot</label>
            <input type="date" class="form-control" name="subscription_valid_until" value="{{old('subscription_valid_until')}}" required >
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