<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,thin" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bieb.css') }}">

    <title>Bibliotheek</title>
    <!-- CSS And JavaScript -->
    

</head>

<body>
    <nav class="container fixed-top">

        <div class="mynavbar">
            <ul>
                <li><h5><i class="fas fa-book-reader fa-2x"></i>&nbsp;Bibliotheek Coevorden</h5></li>
                <li><a href="{{ route('users.show', auth()->user() ) }}">Home</a></li>
                <li><a href="{{ route ('users.lentbooks') }}">Geleende boeken</a></li>
                <li><a href="{{ route('logout') }}">Loguit</a></li>
            </ul>
        </div>
  
        
        
    </nav>

    <div class="space-between"></div>

    <div class="container login-info"><p><em>{{Auth::user()->first_name}}&nbsp;{{ Auth::user()->last_name }} is ingelogd&nbsp;&nbsp;</em></p></div>

    <div class="container">
        
        @yield('content')

    </div>
</body>

</html>