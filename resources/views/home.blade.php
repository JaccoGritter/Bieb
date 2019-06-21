@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Welkom op de website van de bibliotheek</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Je bent ingelogd!

                    <a href= "{{route ('users.show', auth()->user() )}}">Ga verder</a>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
