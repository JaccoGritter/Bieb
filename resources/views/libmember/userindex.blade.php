@extends('layouts.libmemberlayout')

@section('content')

<div class="row">

    <div class="col-md-8">
        <h1>Welkom {{ $user->first_name }}</h1>

        <br>
        <p>Zoek op:</p>

        <form action="{{ route ('books.findbooks') }}" method="get">
            <div class="form-group">
                <label for="auteur">Auteur</label>
                <input type="text" class="form-control" name="auteur" value="">
            </div>
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" class="form-control" name="titel" value="">
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select class="form-control" id="genre" name="genre">
                    <option value="">Alle</option>
                    <option value="roman">Roman</option>
                    <option value="science fiction">Science Fiction</option>
                    <option value="thriller">Thriller</option>
                    <option value="humor">Humor</option>
                    <option value="fantasy">Fantasy</option>
                    <option value="biografie">Biografie</option>
                </select>
            </div>

            <button type="submit" class="btn">zoek</button>
        </form>
        <br>
    </div>

    <div class="col-md-4 my-auto">

        <div class="pt-5">
            <img src="{{ asset('pictures/book.jpg') }}" width="100%">
        </div>

    </div>

</div>

@endsection