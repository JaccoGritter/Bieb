<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Bibliotheek</title>
    <!-- CSS And JavaScript -->
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Navbar Contents -->
        </nav>
    <div class="container">
        <h2>Welkom bij de bibliotheek</h1>
        <br>
        <p>Ga verder als:</p><br>
        <p><a href="{{ route('books.index')}}">Bibliotheekmedewerker</a></p>
        <p>Abonnementshouder</p>
    </div>

</body>

</html>