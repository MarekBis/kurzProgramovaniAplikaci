<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
</head>
<body>
    <h1>Kontakt</h1>

    <ul>
        <li>Email: {{$email}}</li>
        <li>Adress: {{$adresa}}</li>
        <li>Telephone {{$tel}}</li>
    </ul>
    <a href="{{route('homepageRoute')}}">Zpet na homepage</a>
    
</body>
</html>