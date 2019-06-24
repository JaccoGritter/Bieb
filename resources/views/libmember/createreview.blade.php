@extends('layouts\libmemberLayout')

@section('content')


    <!-- Review toevoegen formulier -->
    <form method="POST" action="/reviews">
        <!-- {{ CSRF_field() }} -->
        @csrf

        <h2>Review</h2>
        <h6>Vertel ons wat je van het boek vond!</h6>
        <br>
        <h5>{{$book->titel}} van {{$book->auteur}}</h5>
        <br>
        <input type="hidden" id="bookId" name="book_id" value="{{$book->id}}">
        <div class="form-group">
            <label for="screen_name">Naam die bij de review getoond wordt:</label>
            <input type="text" class="form-control" name="screen_name" value="{{old('screen_name')}}" required>
        </div>

        <div class="form-group">
            <label for="stars">Aantal sterren (0-5):</label>
            <input type="number" class="form-control" name="stars" min="0" max="5" value="{{old('stars')}}" required >
        </div>

        <div class="form-group">
            <label for="comments">Review:</label>
            <textarea class="form-control" name="comments" rows="5" id="comments" value="{{old('comments')}}"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-1">Voeg toe</button>

    </form> 

@endsection