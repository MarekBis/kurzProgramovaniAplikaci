<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail kotatka</title>
</head>
<body>
    <h1>Jmeno kotatka: {{$kote->jmeno}}</h1>

    <p>Pohlavi: {{$kote->pohlavi}}</p>
    <p>Vek: {{$kote->vek}}</p>
    <p>Barva: {{$kote->barva}}</p>
    <p>K adopci:
        @if($kote->k_adopci == 1)
            Ano
        @else
            Ne
        @endif
    </p>

</body>
</html>